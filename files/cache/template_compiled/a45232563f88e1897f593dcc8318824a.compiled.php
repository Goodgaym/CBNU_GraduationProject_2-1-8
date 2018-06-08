<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/textyle/tpl/filter','insert_extra_menu_config.xml');$__xmlFilter->compile(); ?>
<form action="./" method="post" onsubmit="return procFilter(this, insert_extra_menu_config)" class="section"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_srl ?>" />
	<h1><?php echo $__Context->lang->cmd_setup ?></h1>
	<table class="x_table x_table-striped x_table-hover">
		<thead>
			<tr>
				<th scope="col"><?php echo $__Context->lang->module ?> </th>
				<th scope="col"><?php echo $__Context->lang->textyle_extra_menu_limit_count ?></th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->service_modules&&count($__Context->service_modules))foreach($__Context->service_modules as $__Context->k=>$__Context->v){;
if($__Context->v->category == 'service' && $__Context->v->default_index_act){ ?><tr>
				<th scope="row">
					<?php echo $__Context->v->title ?>
				</td>
				<td>
					<input type="number" style="width:50px" min="0" name="allow_service_<?php echo $__Context->v->module ?>" value="<?php echo $__Context->config->allow_service[$__Context->v->module] ?>" />
				</td>
			</tr><?php }} ?>
		</tbody>
	</table>
	<div class="x_clearfix">
		<input type="submit" class="x_btn x_btn-primary x_pull-right" value="<?php echo $__Context->lang->save ?>">
	</div>
</form>