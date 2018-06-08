<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
			<!-- Content -->
			<div id="content">
				
				<!-- contentHeader -->
				<div class="contentHeader setupHeader lineBottom">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[5]['dispTextyleToolConfigInfo'] ?></h3>
				</div>
				<!-- /contentHeader -->
				
				<div class="setUp">
					<form action="<?php echo Context::getRequestUri() ?>" target="form_iframe" method="post" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
						<input type="hidden" name="act" value="procTextyleInfoUpdate" />
						<input type="hidden" name="module" value="textyle" />
						<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
						<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
						<input type="hidden" name="delete_icon" value="" />
						<fieldset>
							<h4 class="h4"><?php echo $__Context->lang->default_config ?></h4>
							<table border="1" cellspacing="0" class="setupData">
								<tr>
									<th scope="row"><label for="blogTitle"><?php echo $__Context->lang->blog_title ?></label></th>
									<td>
										<input name="textyle_title" type="text" class="iText" style="width:300px" id="blogTitle" value="<?php echo htmlspecialchars($__Context->textyle->getTextyleTitle()) ?>" />
										<p><?php echo $__Context->lang->about_blog_title ?></p>
									</td>
								</tr>
								<tr>
									<th scope="row"><label for="summary"><?php echo $__Context->lang->blog_description ?></label></th>
									<td>
										<input name="textyle_content" type="text" class="iText" style="width:300px" id="summary" value="<?php echo htmlspecialchars($__Context->textyle->getTextyleContent()) ?>" />
                                        <p><?php echo $__Context->lang->about_blog_description ?></p>
									</td>
								</tr>
							</table>
						</fieldset>
						
						<fieldset>
							<h4 class="h4"><?php echo $__Context->lang->favicon ?></h4>
							<div class="favicon">
								<img src="<?php echo $__Context->textyle->getFaviconSrc() ?>" width="16" height="16" alt="<?php echo $__Context->lang->registed_favicon ?>" class="iconFavicon url" />
								<img src="<?php echo $__Context->textyle->getFaviconSrc() ?>" width="16" height="16" alt="<?php echo $__Context->lang->registed_favicon ?>" class="iconFavicon tab" />
								<button type="button" class="deleteFavicon" onclick="jQuery('input[name=delete_icon]').val('Y');jQuery('img.iconFavicon').attr('src','<?php echo $__Context->textyle->getDefaultFaviconSrc() ?>');"><span><?php echo $__Context->lang->cmd_delete_favicon ?></span></button>
							</div>
							<div class="upload">
								<input name="favicon" type="file" value="" />
								<p><?php echo $__Context->lang->about_favicon ?></p>
							</div>
						</fieldset>
						
						<fieldset>
							<h4 class="h4"><?php echo $__Context->lang->lang_time_zone ?></h4>
							<table border="1" cellspacing="0" class="setupData">
								<tr>
									<th scope="row"><label for="language"><?php echo $__Context->lang->language ?></label></th>
									<td>
										<select id="language" name="language">
                                            <?php if($__Context->langs&&count($__Context->langs))foreach($__Context->langs as $__Context->key => $__Context->val){ ?>
											<option value="<?php echo $__Context->key ?>" <?php if($__Context->key == $__Context->textyle->default_language){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
                                            <?php } ?>
										</select>
									</td>
								</tr>
								<tr>
									<th scope="row"><label for="time"><?php echo $__Context->lang->timezone ?></label></th>
									<td>
										<select id="time" name="timezone">
                                            <?php if($__Context->time_zone_list&&count($__Context->time_zone_list))foreach($__Context->time_zone_list as $__Context->key => $__Context->val){ ?>
                                            <option value="<?php echo $__Context->key ?>" <?php if($__Context->textyle->timezone==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
                                            <?php } ?>
										</select>
									</td>
								</tr>
							</table>
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
