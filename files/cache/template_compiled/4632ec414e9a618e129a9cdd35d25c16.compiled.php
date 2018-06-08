<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/textyle/tpl/filter','insert_layout_edit.xml');$__xmlFilter->compile(); ?>
			<!-- Content -->
			<div id="content">
				
				<!-- contentHeader -->
				<div class="contentHeader editHeader">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[4]['dispTextyleToolLayoutConfigEdit'] ?></h3>
				</div>
				<!-- /contentHeader -->
				<script>
				function tab(i){
					var tab = i.parentNode.className;
					document.getElementById('codeEdit').className='codeEdit'+' '+tab;
				} 
				</script>
				
				<form action="./" method="post" id="codeEdit" class="codeEdit" onsubmit="return procFilter(this,insert_layout_edit);"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
					<span class="btnGray medium widgetCreator"><a href="<?php echo getUrl('','module','widget','act','dispWidgetGenerateCode') ?>" onclick="popopen(this.href); return false"><?php echo $__Context->lang->cmd_generate_widget_code ?></a></span>
					<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
					<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					
					<ul>
						<?php $__Context->i=0; ?>
						<?php if($__Context->skin_file_content&&count($__Context->skin_file_content))foreach($__Context->skin_file_content as $__Context->file => $__Context->content){ ?>
						<li class="s<?php echo $__Context->i ?>">
							<a href="#" onclick="tab(this)"><?php echo $__Context->file ?></a>
							<textarea name="<?php echo $__Context->file ?>" rows="8" cols="42"><?php echo htmlspecialchars($__Context->content) ?></textarea>
						</li>
						<?php $__Context->i++; ?>						
						<?php } ?>
					</ul>
	
					<!-- Button Area -->
					<div class="btnArea">
						<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
					</div>
					<!-- /Button Area -->
				</form>
<form action="<?php echo Context::getRequestUri() ?>" class="userImage" target="hidden_iframe" method="post" onsubmit="return checkUserImage(this,'<?php echo $__Context->lang->msg_check_userimage ?>')" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
	<h4><?php echo $__Context->lang->textyle_skin_userimage ?></h4>
    <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
    <input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="act" value="procTextyleToolUserImageUpload" />
	<p class="upload"><input name="user_image" type="file" /> <em><?php echo $__Context->lang->msg_check_userimage ?></em> <span class="btnGray medium"><button type="submit"><?php echo $__Context->lang->cmd_save ?></button></span></p>
	<?php if($__Context->user_image_list){ ?>
	<ul>
		<?php if($__Context->user_image_list&&count($__Context->user_image_list))foreach($__Context->user_image_list as $__Context->no => $__Context->file){ ?>
		<li>
			<?php $__Context->ext=substr(strrchr($__Context->file,'.'),1) ?>
			<div class="thumb">
				<?php if($__Context->ext=='swf'||$__Context->ext=='flv'){ ?>
				<script>//<![CDATA[
				displayMultimedia('<?php echo getUrl('');
echo $__Context->user_image_path;
echo $__Context->file ?>', '100%', '100%');
				//]]></script>
				<?php }elseif(in_array($__Context->ext,array('gif','png','jpg','jpeg'))){ ?>
					<img src="<?php echo getUrl('');
echo $__Context->user_image_path;
echo $__Context->file ?>" alt="User Upload Image" />
				<?php } ?>
			</div>
			<p class="path"><?php echo $__Context->user_image_path;
echo $__Context->file ?></p>
			<button type="button" onclick="deleteUserImage('<?php echo $__Context->file ?>')" class="delete"><span><?php echo $__Context->lang->cmd_delete ?></span></button>
		</li>
		<?php } ?>
	</ul>
	<?php } ?>
</form>
<div class="userDefineSkin">
	<div class="btnArea">
		<span class="btn"><a href="<?php echo getUrl('','act','procTextyleToolUserSkinExport','mid',$__Context->mid,'vid',$__Context->vid) ?>"><?php echo $__Context->lang->cmd_textyle_skin_export ?></a></span>
		<span class="btn"><button type="button" onclick="jQuery('#rediscover').toggleClass('open')"><?php echo $__Context->lang->textyle_skin_import ?></button></span>
		<span class="btn"><input type="button" value="<?php echo $__Context->lang->cmd_reset ?>" onclick="if(confirm('<?php echo $__Context->lang->alert_reset_skin ?>')) doResetLayoutConfig(); return false;"/></span>
	</div>
	<div id="rediscover" class="">
		<h4><?php echo $__Context->lang->textyle_skin_import ?></h4>
		<form action="<?php echo getUrl('') ?>" method="post" enctype="multipart/form-data" target="hidden_iframe" class="upload"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
			<input type="hidden" name="module" value="layout" />
			<input type="hidden" name="act" value="procTextyleToolUserSkinImport" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="file" name="file" /> <em><?php echo $__Context->lang->about_textyle_skin_import ?></em>
			<span class="btnGray medium"><button type="submit"><?php echo $__Context->lang->cmd_submit ?></button></span>
		</form>	
	</div>
</div>
			</div>
			<hr />
			<!-- /Content -->
			<!-- Extension -->
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_menu.html') ?>
			<!-- Extension -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_footer.html') ?>
<iframe name="hidden_iframe" style="width:0;height:0;border:0" ></iframe>
