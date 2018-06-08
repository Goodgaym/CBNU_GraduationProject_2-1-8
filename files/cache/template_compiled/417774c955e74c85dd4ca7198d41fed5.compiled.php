<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/editor/skins/dreditor/drcomponents/fold/tpl/fold.js--><?php $__tmp=array('modules/editor/skins/dreditor/drcomponents/fold/tpl/fold.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/skins/dreditor/drcomponents/fold/tpl/fold.css--><?php $__tmp=array('modules/editor/skins/dreditor/drcomponents/fold/tpl/fold.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="wArea fold">
	<fieldset>
		<legend><?php echo $__Context->lang->edit->fold ?></legend>
		<input name="" type="text" class="inputText" value="" title="<?php echo $__Context->lang->edit->fold_default ?>" />
		<div class="buttonArea">
			<span class="buttonGray medium strong"><button type="button"><img src="/modules/editor/skins/dreditor/drcomponents/fold/tpl/iconCheckSmall.gif" width="12" height="8" alt="" class="icon" /><?php echo $__Context->lang->cmd_confirm ?></button></span>
			<span class="buttonGray medium"><button type="button"><img src="/modules/editor/skins/dreditor/drcomponents/fold/tpl/buttonCloseLayerX.gif" width="7" height="7" alt="" class="icon" /><?php echo $__Context->lang->cmd_cancel ?></button></span>
			<p class="info"><?php echo $__Context->lang->edit->fold_description ?></p>
		</div>
		<span class="cap capTL"></span>
		<span class="cap capTR"></span>
		<span class="cap capBL"></span>
		<span class="cap capBR"></span>
	</fieldset>
</div>