<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1>
		<?php echo $__Context->lang->textylehub ?> <?php echo $__Context->lang->cmd_management ?>
		<a href="#aboutModule" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
	</h1>
</div>
<p class="x_alert x_alert-info" id="aboutModule" hidden><?php echo nl2br($__Context->lang->about_textylehub) ?></p>
<?php if($__Context->module_info){ ?><ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispTextylehubAdminConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispTextylehubAdminConfig') ?>"><?php echo $__Context->lang->textylehub_config ?></a></li>
	<li<?php if($__Context->act=='dispTextylehubAdminGrantInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispTextylehubAdminGrantInfo') ?>"><?php echo $__Context->lang->cmd_manage_grant ?></a></li>
	<li<?php if($__Context->act=='dispTextylehubAdminSkinInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispTextylehubAdminSkinInfo') ?>"><?php echo $__Context->lang->cmd_manage_skin ?></a></li>
	<li><a href="<?php echo getUrl('','mid',$__Context->module_info->mid) ?>"><?php echo $__Context->lang->cmd_move ?></a></li>
</ul><?php } ?>
