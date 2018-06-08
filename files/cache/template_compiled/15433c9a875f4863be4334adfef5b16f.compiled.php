<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/overpol/tpl','header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/overpol/tpl/filter','admin_insert.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/overpol/tpl/js/overpol_admin.js--><?php $__tmp=array('modules/overpol/tpl/js/overpol_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<form action="./" method="post" onsubmit="return procFilter(this, update_textylehub)" enctype="multipart/form-data" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<!-- 모듈 이름 -->
	<div class="x_control-group">
		<label for="textylehub_id" class="x_control-label"><?php echo $__Context->lang->mid ?></label>
		<div class="x_controls">
			<input type="text" name="textylehub_id" id="textylehub_id" value="<?php echo $__Context->module_info->mid ?>" />
			<a href="#about_mid" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
			<p class="x_help-block" id="about_mid" hidden><?php echo $__Context->lang->about_mid ?></p>
		</div>
	</div>
	<!-- 브라우저 제목-->
	<div class="x_control-group">
		<label for="lang_browser_title" class="x_control-label"><?php echo $__Context->lang->browser_title ?></label>
		<div class="x_controls">
            <input type="text" name="browser_title" value="<?php echo htmlspecialchars($__Context->module_info->browser_title) ?>" id="browser_title" class="lang_code" />
			<a href="#about_browser_title" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
            <p class="x_help-block" id="about_browser_title" hidden><?php echo $__Context->lang->about_browser_title ?></p>
		</div>
	</div>
	<!-- 레이아웃 옵션-->
	<div class="x_control-group">
		<label for="layout_srl" class="x_control-label"><?php echo $__Context->lang->layout ?></label>
		<div class="x_controls">
            <select name="layout_srl" id="layout_srl">
				<option value="0"><?php echo $__Context->lang->notuse ?></option>
				<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->layout_srl==$__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?>(<?php echo $__Context->val->layout ?>)</option><?php } ?>
            </select>
			<a href="#about_layout" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
            <p class="x_help-block" id="about_layout" hidden><?php echo $__Context->lang->about_layout ?></p>
		</div>
	</div>
	<!-- 스킨 옵션 -->
	<div class="x_control-group">
		<label for="skin" class="x_control-label"><?php echo $__Context->lang->skin ?></label>
		<div class="x_controls">
            <select name="skin" id="skin">
                <?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->skin==$__Context->key ||(!$__Context->module_info->skin && $__Context->key=='default')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
            </select>
			<a href="#about_skin" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
            <p class="x_help-block" id="about_skin" hidden><?php echo $__Context->lang->about_skin ?></p>
		</div>
	</div>
	<!-- 보여주는 게시글 수 -->
	<div class="x_control-group">
		<label for="newest_documents_count" class="x_control-label"><?php echo $__Context->lang->showing_documents_count ?></label>
		<div class="x_controls">
            <input type="number" name="newest_documents_count" id="newest_documents_count" value="<?php echo $__Context->module_info->newest_documents_count ?>" />
			<a href="#about_showing_documents_count" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
            <p class="x_help-block" id="about_showing_documents_count" hidden><?php echo $__Context->lang->about_showing_documents_count ?></p>
		</div>
	</div>
	<!-- 설명 -->
	<div class="x_control-group">
		<label for="description" class="x_control-label"><?php echo $__Context->lang->description ?></label>
		<div class="x_controls">
            <textarea name="description" id="description" style="vertical-align:top"><?php echo htmlspecialchars($__Context->module_info->description) ?></textarea>
			<a href="#about_description" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
            <p class="x_help-block" id="about_description" hidden><?php echo $__Context->lang->about_description ?></p>
		</div>
	</div>
	<!-- 상단 내용 -->
	<div class="x_control-group">
		<label for="lang_header_text" class="x_control-label"><?php echo $__Context->lang->header_text ?></label>
		<div class="x_controls">
			<textarea name="header_text" id="header_text" class="lang_code"><?php echo htmlspecialchars($__Context->module_info->header_text) ?></textarea>
			<a href="#about_header_text" data-toggle class="x_icon-question-sign" style="vertical-align:top;margin-top:5px"><?php echo $__Context->lang->help ?></a>
			<p class="x_help-block" id="about_header_text" hidden><?php echo $__Context->lang->about_header_text ?></p>
		</div>
	</div>
	<!-- 하단 내용 -->
	<div class="x_control-group">
		<label for="lang_footer_text" class="x_control-label"><?php echo $__Context->lang->footer_text ?></label>
		<div class="x_controls">
			<textarea name="footer_text" id="footer_text" class="lang_code"><?php echo htmlspecialchars($__Context->module_info->footer_text) ?></textarea>
			<a href="#about_footer_text" data-toggle class="x_icon-question-sign" style="vertical-align:top;margin-top:5px"><?php echo $__Context->lang->help ?></a>
			<p class="x_help-block" id="about_footer_text" hidden><?php echo $__Context->lang->about_footer_text ?></p>
		</div>
	</div>
	<div class="btnArea">
		<input type="button" value="<?php echo $__Context->lang->cmd_back ?>" onclick="history.back()" class="x_btn x_pull-left" />
		<span class="x_pull-right"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" class="x_btn x_btn-primary" /></span>
	</div>
</form>
