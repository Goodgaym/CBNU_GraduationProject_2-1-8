<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
			<!-- Content -->
			<div id="content">
				
				<!-- contentHeader -->
				<div class="contentHeader pwHeader lineBottom">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[5]['dispTextyleToolConfigChangePassword'] ?></h3>
				</div>
				<!-- /contentHeader -->
				
				<div class="setUp">
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
					<?php Context::addJsFile("modules/textyle/ruleset/modifyPassword.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" method="post" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="modifyPassword" />
						<input type="hidden" name="module" value="member">
						<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
						<input type="hidden" name="success_return_url" value="<?php echo getUrl('', 'mid', $__Context->mid, 'act', $__Context->act, 'vid', $__Context->vid) ?>" />
						<input type="hidden" name="act" value="procMemberModifyPassword" />
						<fieldset>
							
							<table border="1" cellspacing="0" class="setupData">
								<tr>
									<th scope="row"><?php echo $__Context->lang->current_password ?></th>
									<td><input name="current_password" type="password" class="iText" style="width:300px" /></td>
								</tr>
									<tr>
									<th scope="row"><?php echo $__Context->lang->textyle_password1 ?></th>
									<td><input name="password1" type="password" class="iText" style="width:300px" /></td>
								</tr>
								<tr>
									<th scope="row"><?php echo $__Context->lang->textyle_password2 ?></th>
									<td>
										<input name="password2" type="password" class="iText" style="width:300px" />
                                        <p><?php echo $__Context->lang->about_change_password ?></p>
									</td>
								</tr>
							</table>
								
						</fieldset>
						<div class="btnArea">
							<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_change_password ?>" /></span>
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
