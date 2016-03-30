<?php
/** 
 * Imagerecycle
 * 
 * We developed this code with our hearts and passion.
 * We hope you found it useful, easy to understand and to customize.
 * Otherwise, please feel free to contact us at contact@imagerecycle.com *
 * @package Imagerecycle
 * @copyright Copyright (C) 2014 ImageRecycle (http://www.imagerecycle.com). All rights reserved.
 * @copyright Copyright (C) 2014 Damien Barrère (http://www.crac-design.com). All rights reserved.
 * @license GNU General Public License version 2 or later; http://www.gnu.org/licenses/gpl-2.0.html
 */

// no direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerlegacy');

class imagerecycleControllerImage extends JControllerLegacy
{
    
        public function optimize(){
            $document = JFactory::getDocument();
            $document->setMimeEncoding('application/json');
            $app = JFactory::getApplication();
            $image = $app->input->getString('image','');             
            $helper = new ImagerecycleHelper();  
            $file = JPATH_SITE.DIRECTORY_SEPARATOR. str_replace('/',DIRECTORY_SEPARATOR, $image) ;   
            ob_implicit_flush(true);
            ob_end_flush();
            if (file_exists($file)) {
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                $componentParams=JComponentHelper::getParams('com_imagerecycle');
                $compressionType = $componentParams->get('compression_type_'.$ext,'');
                if(empty($compressionType)) {
                    $compressionType = $componentParams->get('compression_type','lossy');
                }                
                $return = $helper->optimize($image,$compressionType);   
                $this->ajaxReponse($return->status, $return);  
            
             } else {
                 $this->ajaxReponse(false);  
             }                   
        }
        
        public function revert() {

            $document = JFactory::getDocument();
            $document->setMimeEncoding('application/json');
            $app = JFactory::getApplication();
            $image = $app->input->getString('image','');
           
            $helper = new ImagerecycleHelper();
            $return = $helper->revert($image);
            ob_implicit_flush(true);
            ob_end_flush();
            $this->ajaxReponse($return->status, $return);         
            
        }
        
          /**
     * Be careful of this action if site has a very big amount of images
     */
     public function optimizeAll() {
       
        JLoader::register('imagerecycleComponentHelper', JPATH_ADMINISTRATOR.'/components/com_imagerecycle/helpers/component.php');
        $componentHelper= new imagerecycleComponentHelper();
        
        $componentParams=JComponentHelper::getParams('com_imagerecycle');
        $compressionTypeDefault = $componentParams->get('compression_type','lossy');
        $mode = JFactory::getApplication()->input->getString('mode');
        if($mode=='manual') {
            $steps  = 1;    
        }else if($mode=='auto') {            
            if( ini_get('safe_mode') ){  // safe mode is on
                 $steps = 1;
            }else {
                $steps = 10;
            }           
        }else { //cron tab
            ignore_user_abort(true);
            $steps = 10000;
        }
                
        $model = $this->getModel('imagerecycle');            
        $images= $model->_getLocalImages();  
        $helper = new ImagerecycleHelper();      
        
        if(!isset($_SESSION['jir_failFiles']) ) {
            $_SESSION['jir_failFiles']= array();               
        }
        if(!isset($_SESSION['jir_processed']) ) {
            $_SESSION['jir_processed'] = 0;               
        }
        ob_implicit_flush(true);
        ob_end_flush();
        foreach ($images as $image) {               
            if ($image['optimized'] == false && ( $mode!='auto' || $image['optimized_datas']['status'] != 'R') && !in_array($image['filename'], $_SESSION['jir_failFiles']) ) {   
                @set_time_limit(30);
                if ($steps === 0) {
                    $componentHelper->setParams(array('last_run'=>date('Y-m-d H:i:s')));    
                    $this->ajaxReponse(true, array('continue' => true, 'totalImages' => $model->getTotalImages(), 'totalOptimizedImages' => $model->getTotalOptimizedImages(),'processedImages'=>$_SESSION['jir_processed']));
                }
                $file = JPATH_SITE.DIRECTORY_SEPARATOR. str_replace('/',DIRECTORY_SEPARATOR, $image['filename']) ;
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                $compressionType = $componentParams->get('compression_type_'.$ext,'');
                if(empty($compressionType)) {
                    $compressionType = $compressionTypeDefault;
                }
                $returned = $helper->optimize($image['filename'],$compressionType); 
                if ($returned === false || $returned->status === false) {
                    if($returned->errCode=='401' || $returned->errCode=='403') { // Forbidden or Unauthorized
                        $this->ajaxReponse(false, array('continue' => false, 'errMsg' => $returned->msg) );
                    }
                    $failFiles = (array)$_SESSION['jir_failFiles'];
                    $failFiles[] = $image['filename'];
                    $_SESSION['jir_failFiles'] = $failFiles;		                    
                }
                $processed = (int)$_SESSION['jir_processed'];
                $_SESSION['jir_processed'] = $processed+1;
                $steps--;
            }
        }
               
        $this->ajaxReponse(true, array('continue' => false, 'totalImages' => $model->getTotalImages(), 'totalOptimizedImages' => $model->getTotalOptimizedImages()));
        
    } 
    
    public function saveConfig() {
        $app = JFactory::getApplication();
        $config =  array();
        $config['api_key'] = $app->input->getString('api_key','');   
        $config['api_secret']  = $app->input->getString('api_secret',''); 
        
        if(empty($config['api_key'] ) || empty($config['api_secret'] )) {
            $this->ajaxReponse(false);   
            return;
        }
        
        $helper = new imagerecycleComponentHelper();
        $result = $helper->setParams($config);     
        $this->ajaxReponse($result);   
    }
    
    protected function ajaxReponse($status, $datas = null) {
            $response = array('status' => $status, 'datas' => $datas);
            echo json_encode($response);
            die();
        }

}
