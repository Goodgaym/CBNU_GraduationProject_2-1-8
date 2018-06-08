<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1>
		<?php echo $__Context->lang->overpol ?> <?php echo $__Context->lang->overpol_management ?>
	</h1>
</div>
<p class="x_alert x_alert-info" id="aboutModule" hidden><?php echo nl2br($__Context->lang->about_overpol) ?></p>
<?php if($__Context->module_info){ ?><ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispOverpolAdminList'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispOverpolAdminList') ?>"><?php echo $__Context->lang->cmd_overpol_list ?></a></li>
	<li<?php if($__Context->act=='dispOverpolAdminGrantInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispOverpolAdminGrantInfo') ?>"><?php echo $__Context->lang->cmd_manage_grant ?></a></li>
	<li<?php if($__Context->act=='dispOverpolAdminSkinInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispOverpolAdminSkinInfo') ?>"><?php echo $__Context->lang->cmd_manage_skin ?></a></li>
	<li><a href="<?php echo getUrl('','mid',$__Context->module_info->mid) ?>"><?php echo $__Context->lang->cmd_move ?></a></li>
</ul><?php } ?>