<?php
/*
 * @version 1.0.1
 * @package JotCachePlugins
 * @category Joomla 3.3
 * @copyright (C) 2010-2014 Vladimir Kanich
 * @license GNU General Public License version 2 or later
 */
defined('_JEXEC') or die;
define('DS', DIRECTORY_SEPARATOR);

class plgSystemJoteasycron extends JPlugin {

  function onAfterInitialise() {
    $app = JFactory::getApplication();
    $input = $app->input;
    $xword = $input->getCmd('sw');
    $ref = (int) $input->getInt('ref');
    $track = (int) $input->getInt('track');
    $base = $this->params->get('pwd', '');
    if (($xword === $base) && ($ref === 18467)) {
      switch ($track) {
        case 1:
          if(!$this->params->get('clean', 0)){
            break;
          }
          try {
            $db = JFactory::getDBO();
            if (!is_object($db)) {
              throw new Exception('Database object was not created');
            }
            $root = JPATH_BASE . DS . 'cache' . DS . 'page';
            if (!file_exists($root)) {
              $query = $db->getQuery(true);
              $query->delete($db->quoteName('#__jotcache'));
              $cursor = $db->setQuery($query)->query();
              if ($cursor === false) {
                throw new Exception('delete items on #__jotcache table not successfull');
              } else {
                exit();
              }
            }
            $query = $db->getQuery(true);
            $query->select('fname')->from('#__jotcache');
            $db->setQuery($query);
            $rows = $db->loadObjectList();
            $deleteList = array();
            $cnt = 0;
            foreach ($rows as $row) {
              $deleteList[$row->fname] = $cnt;
              $cnt++;
            }
            $expired = 0;
            if ($handle = opendir($root)) {
              while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != "..") {
                  $ext = strrchr($file, ".");
                  if ($ext == '.php_expire') {
                    $fname = substr($file, 0, -11);
                    $file1 = $root . DS . $fname . '.php_expire';
                    $time = @file_get_contents($file1);
                    if ($time < microtime(true) || !array_key_exists($fname, $deleteList)) {
                      @chmod($file1, 0777);
                      @unlink($file1);
                      $file2 = $root . DS . $fname . '.php';
                      @chmod($file2, 0777);
                      @unlink($file2);
                      $expired++;
                    } else {
                      if (array_key_exists($fname, $deleteList))
                        unset($deleteList[$fname]);
                    }
                  }
                }
              }
              closedir($handle);
            }
            $deleteList = array_flip($deleteList);
            $cnt = count($deleteList);
            if ($cnt > 0) {
              $list = implode("','", $deleteList);
              $query->clear();
              $query->delete($db->quoteName('#__jotcache'))
                      ->where("fname IN ('$list')");
              $cursor = $db->setQuery($query)->query();
              if ($cursor === false) {
                throw new Exception('delete expired items on #__jotcache table not successfull');
              }
            }
            exit("JotCache clean cron job finished. $expired expired items for cache storage deleted.");
          } catch (Exception $e) {
            // An exception has been caught, echo the message.
            exit('[JotCache clean] cron script error : ' . $e->getMessage());
          }
          break;
        case 2:
          if(!$this->params->get('recache1', 0)&&$track==2){
            break;
          }
        case 3:
          if(!$this->params->get('recache2', 0)&&$track==3){
            break;
          }
        case 4:
          if(!$this->params->get('recache3', 0)&&$track==4){
            break;
          }
          require_once JPATH_BASE . '/administrator/components/com_jotcache/helpers/recacherunner.php';
          define('JOTCACHE_PLUGIN_NAME', 'recache');
          define('JOTCACHE_ROOT_URL', JUri::root());
          $JotcachePluginParams = array();
          $JotcachePluginStates = array();
//$JotcacheRecacheWhere = array("view='article'","id=42");
          $filter_def = 'filter' . ($track - 1);
          $filter = $this->params->get($filter_def, '');
//          $JotcacheRecacheWhere = array();
          $JotcacheRecacheWhereGroup = array();
          if (!empty($filter)) {
            $JotcacheRecacheWhereGroup = explode('|', $filter);
          } else {
            $JotcacheRecacheWhereGroup[] = array();
          }
          try {
            $main = new RecacheRunner();
            if (!is_object($main)) {
              throw new Exception('RecacheRunner object was not created');
            }
            $db = $main->getDbo();
            if (!is_object($db)) {
              throw new Exception('database object was not created');
            }
            $query = $db->getQuery(true);
            foreach ($JotcacheRecacheWhereGroup as $item) {
              if (!empty($item)) {
                $JotcacheRecacheWhere = explode(',', $item);
              } else {
                $JotcacheRecacheWhere = array();
              }
              $query->clear();
              $query->update($db->quoteName('#__jotcache'))
                      ->set('recache=1');
              foreach ($JotcacheRecacheWhere as $jcwhere) {
                $query->where($jcwhere);
              }
              $cursor = $db->setQuery($query)->query();
              if ($cursor === false) {
                throw new Exception('database query on #__jotcache table not successfull');
              }
            }
            $cacheDir = JPATH_CACHE . '/page';
            if (!file_exists($cacheDir)) {
              mkdir($cacheDir, '0755');
            }
            $flagPath = $cacheDir . '/jotcache_recache_flag_tmp.php';
            $num_bytes = file_put_contents($flagPath, "defined('_JEXEC') or die;", LOCK_EX);
            if ($num_bytes === false) {
              throw new Exception('cannot write into /cache/page directory');
            }
            $main->doExecute(JOTCACHE_ROOT_URL, JOTCACHE_PLUGIN_NAME, $JotcachePluginParams, $JotcachePluginStates);
            if (file_exists($flagPath)) {
              unlink($flagPath);
            }
            exit("JotCache recache cron job finished successfully.");
          } catch (Exception $e) {
            // An exception has been caught, echo the message.
            exit('[JotCache recache] cron script error : ' . $e->getMessage());
          }
          break;
        default:
          break;
      }
      $app->close();
    }
  }

}

?>