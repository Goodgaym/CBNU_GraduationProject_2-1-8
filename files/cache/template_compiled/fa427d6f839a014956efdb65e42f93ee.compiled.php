<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','header.html') ?>
<section class="section">
	<?php if($__Context->textyle){ ?>
	<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/textyle/tpl/filter','update_textyle.xml');$__xmlFilter->compile(); ?>
	<h1><?php echo $__Context->lang->cmd_textyle_modify ?></h1>
	<form action="./" method="post" onsubmit="return procFilter(this, update_textyle)" id="textyleFo" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="site_srl" value="<?php echo $__Context->textyle->site_srl ?>" />
		<input type="hidden" name="module_srl" value="<?php echo $__Context->module_srl ?>" />
	<?php }else{ ?>
	<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/textyle/tpl/filter','insert_textyle.xml');$__xmlFilter->compile(); ?>
	<h1><?php echo $__Context->lang->cmd_textyle_creation ?></h1>
		<form action="./" method="post" onsubmit="return procFilter(this, insert_textyle)" id="textyleFo" class="x_form-horizontal">
	<?php } ?>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->access_type ?></label>
			<div class="x_controls">
				<label for="chkDomain" class="x_inline"><input type="radio" id="chkDomain" name="access_type" value="domain" onclick="toggleAccessType('domain');"<?php if(!isSiteID($__Context->textyle->domain)){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->access_domain ?></label>
				<label for="chkVid" class="x_inline"><input type="radio" id="chkVid" name="access_type" value="vid" onclick="toggleAccessType('vid');"<?php if(isSiteID($__Context->textyle->domain)){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->access_vid ?></label>
				<div id="accessDomain"<?php if(isSiteID($__Context->textyle->domain)){ ?> hidden<?php } ?> style="margin-top:10px;">
					http:// <input type="text" name="domain"<?php if(!isSiteID($__Context->textyle->domain)){ ?> value="<?php echo $__Context->textyle->domain ?>"<?php } ?> title="URL" />
					<p class="x_help-block"><?php echo $__Context->lang->about_domain ?></p>
				</div>
				<div id="accessVid"<?php if(!isSiteID($__Context->textyle->domain)){ ?> hidden<?php } ?> style="margin-top:10px;">
					<input type="text" name="vid"<?php if(isSiteID($__Context->textyle->domain)){ ?> value="<?php echo $__Context->textyle->domain ?>"<?php } ?> title="Site ID" />
					<p class="x_help-block"><?php echo $__Context->lang->about_vid ?></p>
				</div>
			</div>
		</div>
		<div class="x_control-group">
			<?php if($__Context->identifier != 'email_address'){ ?><label for="user_id" class="x_control-label"><?php echo $__Context->lang->textyle_admin ?>(<?php echo $__Context->lang->user_id ?>)</label><?php } ?>
			<?php if($__Context->identifier == 'email_address'){ ?><label for="user_id" class="x_control-label"><?php echo $__Context->lang->textyle_admin ?>(<?php echo $__Context->lang->email_address ?>)</label><?php } ?>
			<div class="x_controls">
				<input type="text" name="user_id" id="user_id" value="<?php echo $__Context->site_admin ?>" />
				<p class="x_help-inline"><?php echo $__Context->lang->about_textyle_admin ?></p>
			</div>
		</div>
		<div class="x_clearfix btnArea">
			<a href="<?php echo getUrl('act','dispTextyleAdminExtraMenu') ?>" class="x_btn x_pull-left"><?php echo $__Context->lang->cmd_textyle_extra_menu_config ?></a>
			<input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" class="x_btn x_btn-primary x_pull-right" />
		</div>
	</form>
</section>