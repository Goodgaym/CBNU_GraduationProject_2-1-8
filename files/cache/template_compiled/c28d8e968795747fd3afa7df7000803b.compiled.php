<?php if(!defined("__XE__"))exit;
Context::unloadFile('modules/textyle/tpl/css/layout@textyleAdmin.css','',''); ?>
<!--#Meta:modules/textyle/tpl/css/layout.css--><?php $__tmp=array('modules/textyle/tpl/css/layout.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/textyle/tpl/css/logon.css--><?php $__tmp=array('modules/textyle/tpl/css/logon.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/textyle/tpl/css/button.css--><?php $__tmp=array('modules/textyle/tpl/css/button.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/textyle/tpl/js/tool_textyle.js--><?php $__tmp=array('modules/textyle/tpl/js/tool_textyle.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/textyle/tpl/filter','textyle_login.xml');$__xmlFilter->compile(); ?>
<?php if($__Context->enable_openid=='Y'){ ?>
    <?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/textyle/tpl/filter','openid_login.xml');$__xmlFilter->compile(); ?>
<?php } ?>
<div id="textyleAdmin" class="textyleAdmin hybrid">
	<div id="container" class="c">
		<!-- Header -->
		<div id="header">
			<h1><img src="/modules/textyle/tpl/img/hTextyle.gif" width="106" height="30" alt="textyle" /></h1>
        </div>
        <hr />
		<!-- /Header -->
		
		<!-- Body -->
		<div id="body">
		
			<!-- Content -->
			<div id="content">
			
				<!-- Log On -->
				<div id="logOnInterface" class="logOnInterface default">
					<h2><img src="/modules/textyle/tpl/img/hTextyleLogOn.gif" width="92" height="28" alt="textyle" /></h2>
                    <form action="./" method="post" onsubmit="return procFilter(this, textyle_login)" id="defaultLogOn"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
						<fieldset>
							<legend><?php echo $__Context->lang->cmd_login ?></legend>
							<dl>
								<dt><label for="uid"><?php echo $__Context->lang->user_id ?></label></dt>
								<dd><input id="uid" name="user_id" type="text" /></dd>
								<dt><label for="upw"><?php echo $__Context->lang->password ?></label></dt>
								<dd><input id="upw" name="password" type="password" /></dd>
							</dl>
							<div class="btnArea">
								<p class="keep"><input type="checkbox" name="keep_signed" class="iCheck" value="Y" id="keepUid" /> <label for="keepUid"><?php echo $__Context->lang->keep_signed ?></label></p> 
								<p class="keepDesc"><?php echo $__Context->lang->about_keep_warning ?></p>
								<span class="btn"><input name="" type="submit" value="<?php echo $__Context->lang->cmd_login ?>" /></span>
								<?php if($__Context->enable_openid=='Y'){ ?><a href="#openidLogOn" class="toggleID" onclick="jQuery('#logOnInterface').attr('class','logOnInterface openid');"><?php echo $__Context->lang->cmd_open_id ?></a><?php } ?>
							</div>
						</fieldset>
					</form>
                    <?php if($__Context->enable_openid=='Y'){ ?><form action="" method="post" onsubmit="return procFilter(this, openid_login)" id="openidLogOn"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
						<fieldset>
							<legend>Open ID <?php echo $__Context->lang->cmd_login ?></legend>
							<dl>
								<dt><label for="oid">Open ID</label></dt>
								<dd><input id="oid" name="openid" type="text" /></dd>
							</dl>
							<p class="btnArea">
								<span class="btn"><input name="" type="submit" value="<?php echo $__Context->lang->cmd_login ?>" /></span>
								<a href="#defaultLogOn" class="toggleID" onclick="jQuery('#logOnInterface').attr('class','logOnInterface default')"><?php echo $__Context->lang->cmd_common_id ?></a>
							</p>
						</fieldset>
					</form><?php } ?>
				</div>
				<!-- /Log On -->
				
			</div>
			<!-- /Content -->
			
		</div>
		<!-- /Body -->
	</div>
</div>
<script>
// <![CDATA[
jQuery(function($){
	$('#uid').focus();
	var keepDesc = $('.keepDesc');
	keepDesc.hide();
	$('.keep').change(function(){
		keepDesc.toggle();
	});
});
// ]]>
</script>
