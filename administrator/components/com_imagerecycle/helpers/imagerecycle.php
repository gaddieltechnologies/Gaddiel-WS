<?php
/** 
 * Imagerecycle
 * 
 * We developed this code with our hearts and passion.
 * We hope you found it useful, easy to understand and to customize.
 * Otherwise, please feel free to contact us at contact@imagerecycle.com *
 * @package Imagerecycle
 * @copyright Copyright (C) 2014 ImageRecycle (http://www.imagerecycle.com). All rights reserved.
 * @license GNU General Public License version 2 or later; http://www.gnu.org/licenses/gpl-2.0.html
 */


defined('_JEXEC') or die;

/**
 * @package		Joomla.Administrator
 * @subpackage	com_messages
 * @since		1.6
 */
class ImagerecycleHelper
{
    
        /**
	 * @var    JObject  A cache for the available actions.
	 * @since  1.6
	 */
	protected static $actions;
        private $allowed_ext = array('jpg', 'jpeg', 'png', 'gif','pdf');
        public $settings = null;
        
	/**
	 * Configure the Linkbar.
	 *
	 * @param	string	The name of the active view.
	 *
	 * @return	void
	 * @since	1.6
	 */

	public static function addSubmenu($vName)
	{
//		JSubMenuHelper::addEntry(
//			JText::_('COM_MESSAGES_ADD'),
//			'index.php?option=com_messages&view=message&layout=edit',
//			$vName == 'message'
//		);
//
//		JSubMenuHelper::addEntry(
//			JText::_('COM_MESSAGES_READ'),
//			'index.php?option=com_messages',
//			$vName == 'messages'
//		);
	}

        
	/**
	 * Gets a list of the actions that can be performed.
	 *
	 * @return  JObject
	 *
	 * @since   1.6
	 * @todo    Refactor to work with notes
	 */
	public static function getActions()
	{
		if (empty(self::$actions))
		{
			$user = JFactory::getUser();
			self::$actions = new JObject;

			$actions = JAccess::getActions('com_imagerecycle');

			foreach ($actions as $action)
			{
				self::$actions->set($action->name, $user->authorise($action->name, 'com_imagerecycle'));
			}
		}

		return self::$actions;
	}
        
     public function optimize($image,$compressionType) {

        $response = new stdClass();
        $response->status = false;
        $response->errCode = 0;
        $response->msg = Jtext::_('COM_IMAGERECYCLE_CTR_IMAGE_NOT_OPTIMIZED');
        $file = JPATH_SITE.DIRECTORY_SEPARATOR. str_replace('/',DIRECTORY_SEPARATOR, $image) ;    
        if (!file_exists($file)) {
            $response->msg =  Jtext::_('COM_IMAGERECYCLE_CTR_IMAGE_FILE_NOT_FOUND'); 
            return $response;
        }

        $this->settings = JComponentHelper::getParams('com_imagerecycle'); 
        for($i=0;$i<count($this->allowed_ext); $i++) {
            $compression_type = $this->settings->get('compression_type_'.$this->allowed_ext[$i],'');  
            if($compression_type=="none") {
                unset($this->allowed_ext[$i]);
            }
        }
        $this->allowed_ext = array_values($this->allowed_ext);
        if (!in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), $this->allowed_ext )) {
            $response->msg =  Jtext::_('COM_IMAGERECYCLE_CTR_IMAGE_TYPE_NOT_ALLOWED');
            return $response;
        }
        
        $fparams = array("compression_type"=> $compressionType);       
        $resize_image = $this->settings->get('resize_image',0);
        $resize_auto = $this->settings->get('resize_auto',0);
        if($resize_auto && $resize_image) {   //Only apply on new images
            $installed_time = (int)$this->settings->get('installed_time','');           
            if(empty($installed_time)) {
                $compHelper=new imagerecycleComponentHelper();
                $installed_time = time();
                $compHelper->setParams(array('installed_time'=> $installed_time ));                
            }
        
            $size = @getimagesize($file);
            $fileCreated = filectime($file);                        
            if($size && ($size[0]> $resize_image) && ($fileCreated > $installed_time) ) {
                $fparams['resize'] =  array("width"=> $resize_image);
            }
        }
     
        if (!$this->settings->get('api_key') || !$this->settings->get('api_secret')  )
        {
            $response->errCode = 403; //api key is not correct
            $response->msg =  Jtext::_('COM_IMAGERECYCLE_CTR_IMAGE_CONFIG_NOT_SET');
            return $response;
        }
       
        include_once( JPATH_ADMINISTRATOR.'/components/com_imagerecycle/classes/ioa.class.php' );
        $ioa = new ioaphp($this->settings->get('api_key'), $this->settings->get('api_secret'));        
        // var_dump($fparams)   ;
        $return = $ioa->uploadFile($file, $fparams);                
        if ($return === false || $return === null || is_string($return)) {
            $response->msg = $ioa->getLastError();
            $response->errCode = $ioa->getLastErrCode();
            return $response;
        }
        $md5 = md5_file($file);
        clearstatcache();
        $sizebefore = filesize($file);

        $optimizedFileContent = $this->getContent($return->optimized_url);
        if ($optimizedFileContent === false) {
            $response->msg =   Jtext::_('COM_IMAGERECYCLE_CTR_IMAGE_OPTIMIZED_NOT_FOUND');
            return $response;
        }

        if (file_put_contents($file, $optimizedFileContent) === false) {
            $response->msg = Jtext::_('COM_IMAGERECYCLE_CTR_IMAGE_OPTIMIZED_DOWNLOAD_FAIL'); 
            return $response;
        }
        clearstatcache();
        $size_after = filesize($file);
        $image  = str_replace('\\', '/', $image);   
        if(strpos($image, '/')===0) $image = substr($image,1); 
        $db = JFactory::getDbo();
        $db->setQuery("Select id From #__imagerecycle_files WHERE file=".$db->quote($image) );
        $id = $db->loadResult();        
        if (!$id) {
            $db->setQuery("INSERT INTO #__imagerecycle_files (`file`,`md5`,`api_id`,`size_before`, `size_after`,`date`,`expiration_date`) VALUES ("
                    . $db->quote($image) . "," . $db->quote($md5) . "," . $return->id . "," . (int) $sizebefore . "," . (int) $size_after . ", '" . date('Y-m-d H:i:s') . "',".$db->quote($return->expiration_date).")");
        } else {
            $db->setQuery("UPDATE #__imagerecycle_files SET status='O', `size_after` = " . (int) $size_after . ", `expiration_date`=".$db->quote($return->expiration_date)." WHERE `id` = " . $id);
        }
        $db->query();
        
        $response->status = true;
        
        $response->msg = sprintf(Jtext::_('COM_IMAGERECYCLE_CTR_IMAGE_OPTIMIZED_PERCENT'), round(($sizebefore-$size_after)/$sizebefore*100,2));
        $response->newSize =  number_format($size_after/1000, 2, '.', '') ; 
        return $response;
    }

     public function revert($image) {
        
            $response = new stdClass();
            $response->status = false;
            $response->msg = Jtext::_('COM_IMAGERECYCLE_CTR_IMAGE_NOT_REVERTED'); 
            
            $db = JFactory::getDbo();            
            $db->setQuery("SELECT api_id FROM #__imagerecycle_files  WHERE `file` = " . $db->quote($image));
            $api_id = $db->loadResult();
           
            if ($api_id) {
                
                $this->settings = JComponentHelper::getParams('com_imagerecycle');   
                include_once( JPATH_COMPONENT_ADMINISTRATOR.'/classes/ioa.class.php' );  
                $ioa = new ioaphp($this->settings->get('api_key'), $this->settings->get('api_secret'));               
                        
                $return = $ioa->getImage($api_id);
                if (!isset($return->id)) {
                    $response->msg =   Jtext::_('COM_IMAGERECYCLE_CTR_IMAGE_API_ID_NOT_CORRECT'); 
                    return $response;
                }

                $fileContent = file_get_contents($return->origin_url);
                if ($fileContent === false) {
                    $response->msg =  Jtext::_('COM_IMAGERECYCLE_CTR_IMAGE_FILE_NOT_FOUND'); 
                    return $response;
                }

                $file = JPATH_SITE.DIRECTORY_SEPARATOR. str_replace('/',DIRECTORY_SEPARATOR, $image) ;                
                if (file_put_contents($file, $fileContent) === false) {
                    $response->msg = Jtext::_('COM_IMAGERECYCLE_CTR_IMAGE_CANT_WRITE_FILE');
                    return $response;
                }
                clearstatcache();
                $size_after = filesize($file);

                $where = "api_id = " . $api_id;
                $db->setQuery("UPDATE #__imagerecycle_files SET status='R' WHERE ".$where);
                $result = $db->query();                
                if ($result === false) {
                    $response->msg = Jtext::_('COM_IMAGERECYCLE_CTR_IMAGE_CANT_DELETE_RECORD');
                    return $response;
                }

                $response->newSize = number_format($size_after/1000, 2, '.', '') ;//(int) $size_after;
                $response->status = true;
                $response->msg =  Jtext::_('COM_IMAGERECYCLE_CTR_IMAGE_REVERTED');
            }
            return $response;
     }
      /**
     * Get content of specified resource via curl or file_get_content() function
     */
    protected function getContent($url) {
        if ($url == '') {
            return '';
        }

        if (!function_exists('curl_version')) {
            if (!$content = @file_get_contents($url)) {
                return '';
            }
        } else {
            $options = array(
                CURLOPT_RETURNTRANSFER => true, // return content
                CURLOPT_FOLLOWLOCATION => true, // follow redirects
                CURLOPT_AUTOREFERER => true, // set referer on redirect
                CURLOPT_CONNECTTIMEOUT => 60, // timeout on connect
                CURLOPT_SSL_VERIFYPEER => false // Disabled SSL Cert checks
            );

            $ch = curl_init($url);
            curl_setopt_array($ch, $options);
            $content = curl_exec($ch);
            curl_close($ch);
        }

        return $content;
    }

}
