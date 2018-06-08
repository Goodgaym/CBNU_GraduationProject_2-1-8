<?php if(!defined("__XE__"))exit;?><div id="feedbackSetup" class="layerContainer layerAddDeny">
	<!-- class="layerContainer" | class="layerContainer open" -->
	<div class="darkNight"></div>
	<!-- Layer -->
	<div class="layer">
		<h4 class="h4"><img src="/modules/textyle/tpl/img/iconCheck.gif" alt="" class="icon" width="26" height="20"><?php echo $__Context->lang->add_denylist ?></h4>
			<form action="" method="post" onsubmit="return procFilter(this, insert_denylist)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
				<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
				<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<fieldset>
				<ul>
					<li><input name="homepage" value="" class="inputCheck" id="url" checked="checked" type="checkbox"> <label for="url"><?php echo $__Context->lang->homepage ?></label></li>
					<li><input name="email_address" value="" class="inputCheck" id="email" checked="checked" type="checkbox"> <label for="email"><?php echo $__Context->lang->email_address ?></label></li>
					<li><input name="ipaddress" value="" class="inputCheck" id="ipAddress" type="checkbox"> <label for="ipAddress"><?php echo $__Context->lang->ipaddress ?></label></li>
					<li><input name="user_name" value="" class="inputCheck" id="name" type="checkbox"> <label for="name"><?php echo $__Context->lang->user_name ?></label></li>
				</ul>
				<div class="btnArea">
					<span class="btnGray large strong"><input type="submit" value="<?php echo $__Context->lang->cmd_insert ?>" /></span>
				</div>
			</fieldset>
		</form>
		<button type="button" class="btnCloseLayer" onclick="hideLayerAddDeny()"><span><?php echo $__Context->lang->cmd_close ?></span></button>
	</div> 
	<!-- /Layer -->
</div>
<script>
if(jQuery.browser.msie && jQuery.browser.version<7){
	jQuery(function(){
		jQuery('.layerAddDeny').css('position','absolute');
		jQuery(window).scroll(function(e){ jQuery('.layerAddDeny').css('top',document.documentElement.scrollTop); });
	});
}
</script>
