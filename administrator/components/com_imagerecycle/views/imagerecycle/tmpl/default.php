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

// No direct access.
defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.framework');
JHtml::_('behavior.colorpicker');
JHtml::_('formbehavior.chosen','.chzn-select');

jimport('joomla.html.html.bootstrap');
jimport('joomla.application.component.helper');

$app       = JFactory::getApplication();
$user      = JFactory::getUser();
$userId    = $user->get('id');
$listOrder = $this->escape($this->state->get('list.ordering'));
$listDirn  = $this->escape($this->state->get('list.direction'));

$sortFields = array(
			'a.filename' => JText::_('COM_IMAGERECYCLE_VIEW_IMAGERECYCLE_FILENAME'),
			'a.filesize' => JText::_('COM_IMAGERECYCLE_VIEW_IMAGERECYCLE_SORTBY_SIZE'),
			'a.status' => JText::_('JSTATUS')			
		);

$baseUrl = str_replace('administrator', '', JUri::root()) ;
?>

<script type="text/javascript">
	Joomla.orderTable = function()
	{
		table = document.getElementById("sortTable");
		direction = document.getElementById("directionTable");
		order = table.options[table.selectedIndex].value;
		if (order != '<?php echo $listOrder; ?>')
		{
			dirn = 'asc';
		}
		else
		{
			dirn = direction.options[direction.selectedIndex].value;
		}
		Joomla.tableOrdering(order, dirn, '');
	}
</script>
<?php if($this->params->get('api_key')=="" || $this->params->get('api_secret')==""  ) {
    echo $this->loadTemplate('intro');  
}
?>
<form action="<?php echo JRoute::_('index.php?option=com_imagerecycle'); ?>" method="post" name="adminForm" id="adminForm">
<?php if (!empty( $this->sidebar)) : ?>
	<div id="j-sidebar-container" class="span2">
		<?php echo $this->sidebar; ?>
	</div>
	<div id="j-main-container" class="span10">
<?php else : ?>
	<div id="j-main-container">
<?php endif;?>
		<div id="filter-bar" class="btn-toolbar">
			<div class="filter-search btn-group pull-left">
				<label for="filter_search" class="element-invisible"><?php echo JText::_('COM_IMAGERECYCLE_FILTER_SEARCH_DESC');?></label>
				<input type="text" name="filter_search" id="filter_search" placeholder="<?php echo JText::_('JSEARCH_FILTER'); ?>" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" class="hasTooltip" title="<?php echo JHtml::tooltipText('COM_IMAGERECYCLE_SEARCH_IN_NAME'); ?>" />
			</div>
			<div class="btn-group pull-left">
				<button type="submit" class="btn hasTooltip" title="<?php echo JHtml::tooltipText('JSEARCH_FILTER_SUBMIT'); ?>"><i class="icon-search"></i></button>
				<button type="button" class="btn hasTooltip" title="<?php echo JHtml::tooltipText('JSEARCH_FILTER_CLEAR'); ?>" onclick="document.id('filter_search').value='';this.form.submit();"><i class="icon-remove"></i></button>
			</div>
			
                        <div class="btn-group pull-right hidden-phone">
				<label for="limit" class="element-invisible"><?php echo JText::_('JFIELD_PLG_SEARCH_SEARCHLIMIT_DESC');?></label>
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
			<div class="btn-group pull-right hidden-phone">
				<label for="directionTable" class="element-invisible"><?php echo JText::_('JFIELD_ORDERING_DESC');?></label>
				<select name="directionTable" id="directionTable" class="input-medium" onchange="Joomla.orderTable()">
					<option value=""><?php echo JText::_('JFIELD_ORDERING_DESC');?></option>
					<option value="asc" <?php if ($listDirn == 'asc') echo 'selected="selected"'; ?>><?php echo JText::_('JGLOBAL_ORDER_ASCENDING');?></option>
					<option value="desc" <?php if ($listDirn == 'desc') echo 'selected="selected"'; ?>><?php echo JText::_('JGLOBAL_ORDER_DESCENDING');?></option>
				</select>
			</div>
			<div class="btn-group pull-right">
				<label for="sortTable" class="element-invisible"><?php echo JText::_('JGLOBAL_SORT_BY');?></label>
				<select name="sortTable" id="sortTable" class="input-medium" onchange="Joomla.orderTable()">
					<option value=""><?php echo JText::_('JGLOBAL_SORT_BY');?></option>
					<?php echo JHtml::_('select.options', $sortFields, 'value', 'text', $listOrder);?>
				</select>
			</div>
                       
		</div>
		<div class="clearfix"> </div>
<div id="ir-loader">
       <img class="ir-loader"  src="<?php echo JUri::root();?>/components/com_imagerecycle/assets/images/ajax-loader-blue.gif" />
</div>       
                
<div id="action-bar" class="">
	<div class="pull-left">      
            
            <select class="ir-bulk-action" name="bulk_action">
		<option value="-1"><?php echo JText::_('COM_IMAGERECYCLE_VIEW_IMAGERECYCLE_BULK_ACTION'); ?></option>
		<option value="optimize_selected"><?php echo JText::_('COM_IMAGERECYCLE_CTR_IMAGE_OPTIMIZE_SELETED'); ?></option>
		<option value="optimize_all"><?php echo JText::_('COM_IMAGERECYCLE_CTR_IMAGE_OPTIMIZE_ALL'); ?></option>
            </select>
            <button class="do-bulk-action btn flat-button" style="margin-bottom: 9px;"><?php echo JText::_('COM_IMAGERECYCLE_VIEW_IMAGERECYCLE_APPLY'); ?></button>
		
        </div>
    
       <div class="pull-right">             
             <?php //echo $this->pagination->getListFooter(); ?>			
       </div>      
</div>      
		<table class="table table-striped image-recycle" id="imagerecycleList" >
			<thead>
				<tr>					
					<th width="1%" class="hidden-phone">
						<?php echo JHtml::_('grid.checkall'); ?>
					</th>
					<th>
						<?php echo JText::_('COM_IMAGERECYCLE_VIEW_IMAGERECYCLE_IMAGE'); ?>
					</th>
					<th width="30%">
						<?php echo JHtml::_('grid.sort', 'COM_IMAGERECYCLE_VIEW_IMAGERECYCLE_FILENAME', 'a.filename', $listDirn, $listOrder); ?>
					</th>
                                      
					<th width="10%" style="min-width:55px" class="nowrap center">
						<?php echo JHtml::_('grid.sort', 'COM_IMAGERECYCLE_VIEW_IMAGERECYCLE_SIZE', 'a.filesize', $listDirn, $listOrder); ?>
					</th>
                                        
                                        <th width="20%" style="min-width:55px" class="nowrap center">
						<?php echo JHtml::_('grid.sort', 'JSTATUS', 'a.status', $listDirn, $listOrder); ?>
					</th>
					
					<th width="12%" class="nowrap center hidden-phone">
						<?php echo JText::_('COM_IMAGERECYCLE_VIEW_IMAGERECYCLE_ACTION'); ?>
					</th>
				</tr>
			</thead>
			<tbody>
<?php
			$n = count($this->items);
			foreach ($this->items as $i => $item) : $alternate = ($i%2==0) ? 'even' : ''; ?>                       
                        <tr class="<?php echo $alternate ?>">
                            <td class="check-column">                                  
				<input id="cb<?php echo $i;?>" class="ir-checkbox" name="cid[]" value="<?php echo $item['filename'] ?>" onclick="Joomla.isChecked(this.checked);" type="checkbox">				
                            </td>
                            <td  class="item-image">
                                    <?php if($item['filetype']=='pdf') { ?>
                                        <img class="image-small" src="<?php echo $baseUrl;?>/components/com_imagerecycle/assets/images/pdf.png" />
                                    <?php }else { ?>
					<img class="image-small" src="<?php echo $baseUrl.$item['filename'] ?>" />
					<img class="image-origin" src="<?php echo $baseUrl.$item['filename'] ?>" /> 
                                    <?php } ?>
                            </td>
                            <td ><?php echo $item['filename'] ?></td>
                            <td ><span class="filesize"><?php echo number_format($item['size']/1000, 2, '.', ''); ?></span></td>
                            
                            <td  class="ir-status">
                                    <?php if($item['optimized']) {
                                        $sizeBefore = $item['optimized_datas']['size_before'] ; 
                                        echo '<span class="optimizationStatus">'.sprintf(Jtext::_('COM_IMAGERECYCLE_CTR_IMAGE_OPTIMIZED_PERCENT'), round(($sizeBefore-$item['size'])/$sizeBefore*100,2)).'</span>';                                        
                                    } elseif($item['optimized_datas']['status']=="R") { ?>
                                        <span class="optimizationStatus"><?php echo JText::_('COM_IMAGERECYCLE_CTR_IMAGE_REVERTED');?> <span>
                                    <?php } ?>
      		    
                            </td>
			
                            <td >
                                    <?php if($item['optimized']) {                                 
                                        if(isset($item['optimized_datas']['expired']) && $item['optimized_datas']['expired'] ) {
                                            //nothing
                                        }else {
                                            echo '<a class="revert ir-action btn flat-button" href="#" data-image-realpath="'. $item['filename'] .'">'. JText::_('COM_IMAGERECYCLE_VIEW_IMAGERECYCLE_ACTION_REVERT').'</a>';
                                        }
                                    
                                    } else { ?>
                                <a class="optimize ir-action btn flat-button" href="#" data-image-realpath="<?php echo $item['filename'] ?>"><?php echo JText::_('COM_IMAGERECYCLE_VIEW_IMAGERECYCLE_ACTION_OPTIMZE'); ?></a>
                                    <?php } ?>
                             </td>
                        </tr>    
                        <?php endforeach; ?>
			</tbody>
			
                        <tfoot>
				<tr>
					<td colspan="6" style="text-align: center;padding-top:20px;">
						<?php echo $this->pagination->getListFooter(); ?>
					</td>
				</tr>
			</tfoot>
		</table>				

		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>" />
		<input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>
<?php
    $progressVal = floor($this->totalOptimizedImages*100 / $this->totalImages);
    if($progressVal>100) $progressVal =100;
    $pressMsg = sprintf(Jtext::_('COM_IMAGERECYCLE_CTR_IMAGE_PROCESSING_MSG'), $this->totalOptimizedImages, $this->totalImages);
?>
<div id="progress_init" style="display: none">
    <progress value="<?php echo $progressVal;?>" max="100"></progress><span><?php echo $pressMsg;?></span>
    <p class="timeRemain"></p>
</div>
<script>
    var optimize_url = 'index.php?option=com_imagerecycle&task=image.optimize';
    var optimizeall_url = 'index.php?option=com_imagerecycle&task=image.optimizeAll&mode=manual';
    var revert_url = 'index.php?option=com_imagerecycle&task=image.revert';
    
</script>    