<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/overpol/tpl','header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/overpol/tpl/filter','admin_delete.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/overpol/tpl/js/overpol_admin.js--><?php $__tmp=array('modules/overpol/tpl/js/overpol_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<form action="./" method="get" onsubmit="return procFilter(this, admin_delete)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
	<h3 class="xeAdmin"><?php echo $__Context->lang->confirm_delete ?></h3>
	<table cellspacing="0" class="rowTable">
		<tr>
		<th scope="row"><div><?php echo $__Context->lang->module_name ?></div></th>
			<td class="wide"><?php echo $__Context->module_info->mid ?></td>
		</tr>
		<tr>
			<th scope="row"><div><?php echo $__Context->lang->module ?></div></th>
			<td><?php echo $__Context->module_info->module ?></td>
		</tr>
		<tr>
			<th colspan="2" class="button">
				<span class="button black strong"><input type="submit" value="<?php echo $__Context->lang->cmd_delete ?>" /></span>
				<span class="button"><input type="button" value="<?php echo $__Context->lang->cmd_back ?>" onclick="history.back(); return false;" /></span>
			</th>
		</tr>
	</table>
 
</form>