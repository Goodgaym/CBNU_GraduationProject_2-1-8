<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
			<!-- Content -->
			<div id="content">
				
				<!-- contentHeader -->
				<div class="contentHeader spamHeader">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[2]['dispTextyleToolCommunicationSpam'] ?></h3>
				</div>
				<!-- /contentHeader -->
				<div class="partitionContainer spam">
					<fieldset class="quarter partitionLeft">
						<legend><?php echo $__Context->lang->name_nick ?></legend>
						<form action="<?php echo Context::getRequestUri() ?>" method="post" onsubmit="return insertDeny(this, insert_deny)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
							<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
							<input type="hidden" name="deny_type" value="N" />
							<div class="header">
								<input type="text" class="iText" placeholder="<?php echo $__Context->lang->name_nick ?>" name="deny_content" title="<?php echo $__Context->lang->name_nick ?>" />
                                <span class="btnGray medium strong"><button type="submit"><?php echo $__Context->lang->cmd_insert ?></button></span>
							</div>
							<?php if($__Context->deny_list['N'] && count($__Context->deny_list['N'])>0){ ?>
							<ul>
								<?php if($__Context->deny_list['N']&&count($__Context->deny_list['N']))foreach($__Context->deny_list['N'] as $__Context->srl => $__Context->content){ ?>
								<li><?php echo $__Context->content ?><button type="button" onclick="deleteDenyItem('<?php echo $__Context->mid ?>',<?php echo $__Context->srl ?>)"><span><?php echo $__Context->lang->cmd_delete ?></span></button></li>
								<?php } ?>
							</ul>
							<?php } ?>
						</form>
					</fieldset>
					<fieldset class="quarter partitionLeft">
						<legend><?php echo $__Context->lang->email_address ?></legend>
						<form action="<?php echo Context::getRequestUri() ?>" method="post" onsubmit="return insertDeny(this, insert_deny)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
							<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
							<input type="hidden" name="deny_type" value="M" />
							<div class="header">
								<input type="text" class="iText" placeholder="xxx@xxx.xxx" name="deny_content" title="xxx@xxx.xxx" />
                                <span class="btnGray medium strong"><button type="submit"><?php echo $__Context->lang->cmd_insert ?></button></span>
							</div>
							<?php if($__Context->deny_list['M'] && count($__Context->deny_list['M'])>0){ ?>
							<ul>
								<?php if($__Context->deny_list['M']&&count($__Context->deny_list['M']))foreach($__Context->deny_list['M'] as $__Context->srl => $__Context->content){ ?>
									<li><?php echo $__Context->content ?><button type="button" onclick="deleteDenyItem('<?php echo $__Context->mid ?>',<?php echo $__Context->srl ?>)"><span><?php echo $__Context->lang->cmd_delete ?></span></button></li>
								<?php } ?>
							</ul>
							<?php } ?>		
						</form>
					</fieldset>
					<fieldset class="quarter partitionLeft">
						<legend>URL</legend>
						<form action="<?php echo Context::getRequestUri() ?>" method="post" onsubmit="return insertDeny(this, insert_deny)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
							<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
							<input type="hidden" name="deny_type" value="S" />
							<div class="header">
								<input type="text" class="iText" placeholder="http://xxx.xxx" name="deny_content" title="http://xxx.xxx" />
                                <span class="btnGray medium strong"><button type="submit"><?php echo $__Context->lang->cmd_insert ?></button></span>
							</div>
							<?php if($__Context->deny_list['S'] && count($__Context->deny_list['S'])>0){ ?>
							<ul>
								<?php if($__Context->deny_list['S']&&count($__Context->deny_list['S']))foreach($__Context->deny_list['S'] as $__Context->srl => $__Context->content){ ?>
									<li><?php echo $__Context->content ?><button type="button" onclick="deleteDenyItem('<?php echo $__Context->mid ?>',<?php echo $__Context->srl ?>)"><span><?php echo $__Context->lang->cmd_delete ?></span></button></li>
								<?php } ?>
							</ul>
							<?php } ?>		
						</form>
					</fieldset>
					<fieldset class="quarter partitionRight">
						<legend>IP</legend>
						<form action="<?php echo Context::getRequestUri() ?>" method="post" onsubmit="return insertDeny(this, insert_deny)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
							<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
							<input type="hidden" name="deny_type" value="I" />
							<div class="header">
								<input type="text" class="iText" placeholder="xxx.xxx.xxx.xxx" name="deny_content" title="xxx.xxx.xxx.xxx" />
                                <span class="btnGray medium strong"><button type="submit"><?php echo $__Context->lang->cmd_insert ?></button></span>
							</div>
							<?php if($__Context->deny_list['I'] && count($__Context->deny_list['I'])>0){ ?>
							<ul>
								<?php if($__Context->deny_list['I']&&count($__Context->deny_list['I']))foreach($__Context->deny_list['I'] as $__Context->srl => $__Context->content){ ?>
									<li><?php echo $__Context->content ?><button type="button" onclick="deleteDenyItem('<?php echo $__Context->mid ?>',<?php echo $__Context->srl ?>)"><span><?php echo $__Context->lang->cmd_delete ?></span></button></li>
								<?php } ?>
							</ul>
							<?php } ?>								</form>
					</fieldset>
				</div>
				
			</div>
			<hr />
			<!-- /Content -->
			<!-- Extension -->
				<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_menu.html') ?>
			<!-- Extension -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_footer.html') ?>
