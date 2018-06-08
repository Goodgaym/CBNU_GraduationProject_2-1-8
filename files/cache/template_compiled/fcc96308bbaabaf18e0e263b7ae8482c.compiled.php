<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
			<!-- Content -->
			<div id="content">
				
				<!-- contentHeader -->
				<div class="contentHeader writingSetupHeader lineBottom">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[5]['dispTextyleToolConfigPostwrite'] ?></h3>
				</div>
				<!-- /contentHeader -->
				
				<div class="setUp">
					<form id="aa" method="post" onsubmit="return procFilter(this,insert_config_postwrite)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
					
						<fieldset>
							<h4 class="h4"><?php echo $__Context->lang->edit_style ?></h4>
							<table border="1" cellspacing="0" class="setupData">
								<tr>
									<th scope="row"><input name="post_editor_skin" type="radio" value="xpresseditor" id="textyleEditor" class="inputRadio" <?php if($__Context->textyle->getPostEditorSkin()==''){ ?>checked="checked"<?php } ?>/> <label for="textyleEditor"><?php echo $__Context->lang->textyle_editor ?></label></th>
									<td><?php echo $__Context->lang->about_textyle_editor ?></td>
								</tr>
								<tr>
									<th scope="row"><input name="post_editor_skin" type="radio" value="" id="etcEditor" class="inputRadio" <?php if($__Context->textyle->getPostEditorSkin()!='xpresseditor'){ ?>checked="checked"<?php } ?> /> <label for="etcEditor"><?php echo $__Context->lang->etc_editor ?></label></th>
									<td>
										
										<select name="etc_post_editor_skin">
											<?php if($__Context->editor_skin_list&&count($__Context->editor_skin_list))foreach($__Context->editor_skin_list as $__Context->k => $__Context->v){ ?>
											<?php if($__Context->v!='xpresseditor'){ ?>
											<option value="<?php echo $__Context->v ?>" <?php if($__Context->textyle->getPostEditorSkin()==$__Context->v){ ?>selected<?php } ?> ><?php echo $__Context->v ?></option>
											<?php } ?>
											<?php } ?>
										</select>
                                        <?php echo $__Context->lang->about_etc_editor ?> <a href="<?php echo getUrl('','mid',$__Context->mid,'act','dispTextyleToolConfigEditorComponents') ?>">[<?php echo $__Context->lang->config_edit_components ?>]</a>
									</td>
								</tr>
							</table>
						</fieldset>
					
						<fieldset>
							<h4 class="h4"><?php echo $__Context->lang->font_style ?></h4>
							<table border="1" cellspacing="0" class="setupData">
								<tr>
									<th scope="row" rowspan="2"><label for="fontFamily"><?php echo $__Context->lang->font_family ?></label></th>
									<td><input name="font_family" type="text" class="iText" id="fontFamily" value="<?php echo $__Context->textyle->getFontFamily() ?>" style="width:200px" /></td>
								</tr>
								<tr>
									<?php $__Context->_font_family=array(); ?>
									<?php if($__Context->lang->font_family_list&&count($__Context->lang->font_family_list))foreach($__Context->lang->font_family_list as $__Context->k => $__Context->v){ ?>
										<?php $__Context->_font_family[]='<button type="button" class="fontFamily" onclick="jQuery(\'#fontFamily\').val(\''.$__Context->k.'\')">'.$__Context->v.'</button>'; ?>
									<?php } ?>
									<td><?php echo sprintf($__Context->lang->about_font_family,join(', ',$__Context->_font_family)) ?></td>
								</tr>
								<tr>
									<th scope="row" rowspan="2"><label for="fontSize"><?php echo $__Context->lang->font_size ?></label></th>
									<td><input name="font_size" type="text" class="iText" id="fontSize" value="<?php echo $__Context->textyle->getFontSize() ?>" style="width:200px" /></td>
								</tr>
								<tr>
									<td><?php echo $__Context->lang->about_font_size ?></td>
								</tr>
							</table>
						</fieldset>
						<fieldset>
							<h4 class="h4"><?php echo $__Context->lang->set_prefix ?></h4>
							<p><input name="post_use_prefix" type="checkbox" value="Y" class="inputCheck" id="post_use_prefix"<?php if($__Context->textyle->getPostUsePrefix()=='Y'){ ?> checked="checked"<?php } ?> /><label for="post_use_prefix"><?php echo $__Context->lang->about_prefix ?></label></p>
							<textarea name="post_prefix" class="iTextArea" rows="8" cols="42"><?php echo htmlspecialchars($__Context->textyle->getPostPrefix(true)) ?></textarea>
						</fieldset>
						
						<fieldset>
							<h4 class="h4"><?php echo $__Context->lang->set_suffix ?></h4>
							<p><input name="post_use_suffix" type="checkbox" value="Y" class="inputCheck" id="post_use_suffix"<?php if($__Context->textyle->getPostUseSuffix()=='Y'){ ?> checked="checked"<?php } ?> /><label for="post_use_suffix"><?php echo $__Context->lang->about_suffix ?></label></p>
							<textarea name="post_suffix" class="iTextArea" rows="8" cols="42"><?php echo htmlspecialchars($__Context->textyle->getPostSuffix(true)) ?></textarea>
						</fieldset>
						
						<fieldset>
							<h4 class="h4"><?php echo $__Context->lang->blogapi ?></h4>
							<p><?php echo $__Context->lang->blogapi_support ?></p>
							<p class="example"><?php echo $__Context->lang->blogapi_example ?></p>
                            <p class="uriExample"><?php echo $__Context->lang->blogapi_url ?> <strong><?php echo getFullSiteUrl($__Context->textyle->get('domain'), '', 'mid', $__Context->textyle->get('mid'), 'act','api') ?></strong></p>
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
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_footer.html') ?>
