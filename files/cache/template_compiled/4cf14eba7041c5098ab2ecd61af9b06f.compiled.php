<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/textyle/tpl/filter','insert_profile.xml');$__xmlFilter->compile(); ?>
		<!-- Content -->
			<div id="content">
				
				<!-- contentHeader -->
				<div class="contentHeader profileHeader lineBottom">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[5]['dispTextyleToolConfigProfile'] ?></h3>
				</div>
				<!-- /contentHeader -->
				
				<div class="setUp">
					<form action="<?php echo Context::getRequestUri() ?>" target="form_iframe" method="post" enctype="multipart/form-data" onsubmit="return procFilter(this,insert_profile)" id="foProfile"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
						<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
						<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
						<input type="hidden" name="module_srl" value="<?php echo $__Context->module_srl ?>" />
						<input type="hidden" name="delete_photo" value="N" />
						<fieldset>
							<h4 class="h4"><?php echo $__Context->lang->nick_name ?></h4>
							<table border="1" cellspacing="0" class="setupData">
								<tr>
									<th scope="row"><?php echo $__Context->lang->user_id ?></th>
									<td><strong><?php echo $__Context->textyle->getUserID() ?></strong></td>
								</tr>
								<tr>
									<th scope="row"><label for="pName"><?php echo $__Context->lang->display_name ?></label></th>
								<td>
								<input name="nick_name" type="text" value="<?php echo $__Context->textyle->getNickName() ?>" class="iText" style="width:300px" id="pName" />
										<p><?php echo $__Context->lang->about_display_name ?></p>
									</td>
								</tr>
							</table>
						</fieldset>
						
						<fieldset>
							<h4 class="h4"><label for="eMail"><?php echo $__Context->lang->email_address ?></label></h4>
							<div style="padding-left:170px">
								<input name="email_address" value="<?php echo $__Context->textyle->getEmail() ?>" type="text" class="iText" style="width:300px" id="eMail" />
								<p><?php echo $__Context->lang->about_email ?></p>
							</div>
						</fieldset>
						
						<fieldset>
							<h4 class="h4"><?php echo $__Context->lang->profile_image ?></h4>
							<div class="thumb">
								<img src="<?php echo $__Context->textyle->getProfilePhotoSrc() ?>" alt="<?php echo $__Context->lang->no_profile_image ?>" width="<?php echo $__Context->profile_image_width ?>" height="<?php echo $__Context->profile_image_height ?>" class="profilePhoto" />
								<button type="button" class="deletePhoto" onclick="jQuery('input[name=delete_photo]').val('Y');jQuery('img.profilePhoto').attr('src','<?php echo $__Context->textyle->getProFileDefaultPhotoSrc() ?>');"><span><?php echo $__Context->lang->cmd_delete ?></span></button>
							</div>
							<div class="upload">
								<input name="photo" type="file" id="photo" value="" />
                                <p><?php echo $__Context->lang->allow_profile_image_type ?></p>
								<p><?php echo sprintf($__Context->lang->allow_profile_image_size, $__Context->profile_image_width, $__Context->profile_image_height) ?></p>
							</div>
						</fieldset>
						
						<fieldset>
							<h4 class="h4"><?php echo $__Context->lang->signature ?></h4>
							<input type="hidden" name="profile_content" value="<?php echo htmlspecialchars($__Context->textyle->getProfileContent()) ?>" />
							<?php echo $__Context->profile_content_editor ?>
						</fieldset>
						
						<div class="btnArea">
							<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_apply ?>" /></span>
						</div>
					</form>
				</div>
			</div>
			<hr />
			<!-- /Content -->
			
	
			<!-- Extension -->
				<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_menu.html') ?>
			<!-- Extension -->
			<iframe name="form_iframe" style="visibility:hidden;width:0px;height:0px;"></iframe>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_footer.html') ?>
