<?php if(!defined("__XE__"))exit;?><!--#Meta:/bootstrap.min.css--><?php $__tmp=array('/bootstrap.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/overpol/skins/default/css/overpol_skin.css--><?php $__tmp=array('modules/overpol/skins/default/css/overpol_skin.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!-- VISUAL-SUBHEADER -->
<div style="background-color: #E5E5E5;">
	<div class="menubar" align="center">
		<div id="block">
			<div class="menu_btn_1"></div>
			<div class="menu_btn_2"></div>
			<div class="menu_btn_3"></div>
		</div>
		<ul class="nav menu">
			<li class="col-md-3 col-sm-3 col-xs-6" style="height:50px;">
				<a onclick="location.href='<?php echo getUrl('','mid',$__Context->module_info->mid) ?>'; return false;">
					<img src="<?php echo $__Context->layout_info->menu_image_1 ?>" style="margin:5px">전체보기</a>
			</li>
			<li class="col-md-3 col-sm-3 col-xs-6" style="height:50px;">
				<a onclick="location.href='<?php echo getUrl('','act','dispOverpolSearch') ?>'; return false;">
					<img src="<?php echo $__Context->layout_info->menu_image_2 ?>" style="margin:5px">탐색하기</a>
			</li>
			<li class="col-md-3 col-sm-3 col-xs-6" style="height:50px;">
				<a onclick="location.href='<?php echo getUrl('','act','dispOverpolResume') ?>'; return false;">
					<img src="<?php echo $__Context->layout_info->menu_image_3 ?>" style="margin:5px">이력서</a>
			</li>
			<li class="col-md-3 col-sm-3 col-xs-6" style="height:50px;">
				<a onclick="location.href='<?php echo getUrl('','act','dispOverpolPorfolio') ?>'; return false;">
					<img src="<?php echo $__Context->layout_info->menu_image_4 ?>" style="margin:5px">포트폴리오</a>
			</li>
		</ul>
	</div>
</div>
<!-- /VISUAL -->
<?php echo $__Context->module_info->header_text ?> 