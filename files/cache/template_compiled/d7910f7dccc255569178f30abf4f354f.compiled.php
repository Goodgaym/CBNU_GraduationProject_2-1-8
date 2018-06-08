<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
<!--#Meta:modules/textyle/tpl/css/pagination.css--><?php $__tmp=array('modules/textyle/tpl/css/pagination.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#JSPLUGIN:ui--><?php Context::loadJavascriptPlugin('ui'); ?>
<!-- Content -->
<div id="content">
	<!-- contentHeader -->
	<div class="contentHeader setupHeader lineBottom">
		<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[5]['dispTextyleToolExtraMenuList'] ?></h3>
	</div>
	<!-- /contentHeader -->
	<div class="listHeader">
		<p class="info"><?php echo $__Context->lang->about_textyle_extra_menu ?></p>
	</div>
	<div class="setUp">
		<table border="1" cellspacing="0" summary="<?php echo $__Context->lang->content_list ?>" class="tableData">
		<thead>
			<tr>
				<th scope="col"><?php echo $__Context->lang->menu_name ?></th> 
				<th scope="col"><?php echo $__Context->lang->module ?></th>
				<th scope="col">-</th>
			</tr>
		</thead>
			
		<?php if($__Context->extra_menu_list){ ?>
		<tbody class="sort">
		<?php if($__Context->extra_menu_list->data&&count($__Context->extra_menu_list->data))foreach($__Context->extra_menu_list->data as $__Context->k => $__Context->menu){ ?>
			<tr style="cursor:n-resize">
				<td><a href="<?php echo getUrl('','mid',$__Context->menu->mid) ?>"><?php echo $__Context->menu->name ?></a></td>
				<td><?php echo $__Context->menu->module ?></td>
				<td><input type="hidden" name="" class="menu_mid" value="<?php echo $__Context->menu->mid ?>" />
				<?php if($__Context->menu->type=='text_page'){ ?>
				<a href="<?php echo getUrl('','act','dispTextyleToolExtraMenuInsert','menu_mid',$__Context->menu->mid) ?>"><?php echo $__Context->lang->cmd_modify ?>...</a>
				<?php }elseif($__Context->menu->type=='module_page'){ ?>
				<a href="<?php echo getUrl('','act','dispTextyleToolExtraMenuModuleInsert','menu_mid',$__Context->menu->mid) ?>"><?php echo $__Context->lang->cmd_modify ?>...</a>
				<?php } ?>
				<button type="button" onclick="deleteExtraMenu('<?php echo $__Context->menu->mid ?>','<?php echo $__Context->lang->confirm_delete ?>')" class="text"><?php echo $__Context->lang->cmd_delete ?></button>
				</td>
			</tr>
		<?php } ?>
		</tbody>
		<?php } ?>
		</table>
		<div class="btnArea">
			<span class="btn"><a href="<?php echo getUrl('','act','dispTextyleToolExtraMenuInsert') ?>"><?php echo $__Context->lang->cmd_insert ?></a></span>
		</div>
	</div>
</div>
<hr />
<!-- /Content -->
<!-- Extension -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_menu.html') ?>
<!-- Extension -->
<script>//<![CDATA[
	jQuery(function() {
		jQuery('tbody.sort').sortable().bind('sortstop',function(e,ui){
			var menu_mids = [];
			jQuery('tbody.sort .menu_mid').each(function(){
				menu_mids.push(jQuery(this).val());	
			});
			sortExtraMenu(menu_mids);
		});
	});
//]]></script>
