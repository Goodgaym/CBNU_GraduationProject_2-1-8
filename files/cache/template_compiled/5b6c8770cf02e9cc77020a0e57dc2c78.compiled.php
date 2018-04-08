<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textylehub/tpl','header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/textylehub/tpl/filter','create.xml');$__xmlFilter->compile(); ?>
<p><?php echo nl2br($__Context->lang->about_create_textylehub) ?></p>
<form action="./" method="post" onsubmit="return procFilter(this, create_textylehub);" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<div class="x_control-group">
		<label for="textylehub_id" class="x_control-label"><?php echo $__Context->lang->mid ?></label>
		<div class="x_controls">
			<span class="x_input-append">
				<input type="text" name="textylehub_id" id="textylehub_id" />
				<input type="submit" value="<?php echo $__Context->lang->cmd_create_textylehub ?>" class="x_btn x_btn-inverse" />
			</span>
		</div>
	</div>
</form>
