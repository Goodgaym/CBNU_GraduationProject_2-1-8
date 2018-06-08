<?php if(!defined("__XE__"))exit;?>	<!-- Layer Container -->
	<div id="feedbackSetup" class="layerContainer layerCommunicationConfig">
		<div class="darkNight"></div>
		<!-- Layer -->
		<div class="layer">
			<h4 class="h4"><img src="/modules/textyle/tpl/img/iconCheck.gif" width="26" height="20" alt="" class="icon" /><?php echo $__Context->lang->comm_management ?></h4>
			<form action="" method="post" onsubmit="return procFilter(this, update_allow)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
				<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
				<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
				<input type="hidden" name="document_srl" value="" />
				<fieldset>
					<ul>
						<li><input name="allow_comment" type="checkbox" value="Y" class="inputCheck" id="replyOn" /> <label for="replyOn"><?php echo $__Context->lang->allow_comment ?></label></li>
						<li><input name="allow_trackback" type="checkbox" value="Y" class="inputCheck" id="trackbackOn" /> <label for="trackbackOn"><?php echo $__Context->lang->allow_trackback ?></label></li>
					</ul>
					<div class="btnArea">
						<span class="btnGray large strong"><input name="" type="submit" value="<?php echo $__Context->lang->cmd_confirm ?>" /></span>
					</div>
				</fieldset>
			</form>
			<button type="button" class="btnCloseLayer" onclick="hideLayerCommuicationConfig()"><span><?php echo $__Context->lang->cmd_close ?></span></button>
		</div> 
		<!-- /Layer -->
	</div>
	<!-- /Layer Container -->
<script>
if(jQuery.browser.msie && jQuery.browser.version<7){
	jQuery(function(){
		jQuery('.layerCommunicationConfig').css('position','absolute');
		jQuery(window).scroll(function(e){ jQuery('.layerCommunicationConfig').css('top',document.documentElement.scrollTop); });
	});
}
</script>
