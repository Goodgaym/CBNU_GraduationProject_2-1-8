<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/textyle/tpl/filter','delete_textyle.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/textyle/tpl/js/textle.js--><?php $__tmp=array('modules/textyle/tpl/js/textle.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','header.html') ?>
<form action="./" method="get" onsubmit="return procFilter(this, delete_textyle)" class="section"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="site_srl" value="<?php echo $__Context->textyle_info->site_srl ?>" />
	<h1><?php echo $__Context->lang->confirm_delete ?></h1>
	<table class="x_table x_table-striped x_table-hover">
		<thead>
			<th scope="col"><?php echo $__Context->lang->module_name ?></th>
			<th scope="col"><?php echo $__Context->lang->textyle_title ?></th>
			<?php if(isSiteId($__Context->textyle_info->domain)){ ?><th scope="col">Site ID</th><?php } ?>
			<?php if(!isSiteId($__Context->textyle_info->domain)){ ?><th scope="col"><?php echo $__Context->lang->domain ?></th><?php } ?>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $__Context->textyle_info->mid ?></td>
				<td><?php echo $__Context->textyle_info->textyle_title ?></td>
				<td><a href="<?php echo getSiteUrl($__Context->textyle_info->domain) ?>"><?php echo $__Context->textyle_info->domain ?></a></td>
			</tr>
		</tbody>
	</table>
	<div class="x_clearfix">
		<input type="submit" value="<?php echo $__Context->lang->cmd_delete ?>" class="x_btn x_btn-danger x_pull-right" />
	</div>
</form>
