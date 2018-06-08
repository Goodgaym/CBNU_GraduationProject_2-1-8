<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/textyle/tpl/js/textyle.js--><?php $__tmp=array('modules/textyle/tpl/js/textyle.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1>
		<?php echo $__Context->lang->textyle ?> <?php echo $__Context->lang->cmd_management ?>
		<a href="#abuotTextyle" data-toggle class="x_icon-question-sign">도움말</a>
		<?php if($__Context->act!='dispTextyleAdminList'){ ?><a href="<?php echo getUrl('act','dispTextyleAdminList','module_srl') ?>" class="x_btn" style="position:absolute;right:0;bottom:4px"><i class="x_icon-arrow-left"><?php echo $__Context->lang->cmd_back ?></i></a><?php } ?>
	</h1>
</div>
<p class="x_alert x_alert-info" id="abuotTextyle" hidden><?php echo nl2br($__Context->lang->about_textyle) ?></p>
