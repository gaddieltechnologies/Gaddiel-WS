<?php
/*
 * @version 1.0.1
 * @package JotCache
 * @category Joomla 3.x
 * @copyright (C) 2010-2014 Vladimir Kanich
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */
defined('JPATH_PLATFORM') or die;
include_once JPATH_ADMINISTRATOR . '/components/com_jotcache/helpers/browseragents.php';

/**
 * @package JotCache_plugin
 */
class JFormFieldCronurl extends JFormField {

  protected $type = 'Cronurl';

  public function __construct() {
    parent::__construct();
  }

  /**
   * Function populated JotCache plugin edit form with list of 'Browser Split'
   * @return string HTML multiple select with all browsers as options
   */
  protected function getInput() {
    $set = $this->form->getFieldset();
    $pwd = $set['jform_params_pwd']->value;
    if (!empty($pwd)) {
      $uri = JUri::root();
      preg_match('#jform\[params\]\[url_(.*)\]#', $this->name, $matches);
      $tracks = array('clean' => 1, 'recache1' => 2, 'recache2' => 3, 'recache3' => 4);
      $track = $tracks[$matches[1]];
      $link = '<div class="control-group ">
      <div class="control-label"></div>
	  <div class="alert alert-info">' . $uri . '?ref=18467&sw=' . $pwd . '&track=' . $track . '</div>
	  <div class="controls"></div>
    </div>';
      return $link;
    }
  }

}
