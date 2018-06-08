<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
			<!-- Content -->
			<div id="content">
				
				<!-- contentHeader -->
				<div class="contentHeader dataHeader lineBottom">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[5]['dispTextyleToolConfigData'] ?></h3>
				</div>
				<!-- /contentHeader -->
				
				<div class="setUp">
					<form action="./" method="post" onsubmit="return procFilter(this,<?php if($__Context->logged_info->is_admin=='Y'){ ?>export_textyle<?php }else{ ?>request_export_textyle<?php } ?>);"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
					<input type="hidden" name="export_type" value="ttxml" />
					<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
						<fieldset>
							<h4><?php echo $__Context->lang->data_export ?></h4>
							<?php if($__Context->export){ ?>
								<dl>
									<dt style="font-weight:bold"><?php echo $__Context->lang->textyle_export_recode ?></dt>
									<dd style="margin:0">
										<?php if($__Context->export->export_status=='C'){ ?>
											<a href="<?php echo $__Context->export->export_file ?>"><?php echo getUrl();
echo $__Context->export->export_file ?></a>
										<?php }else{ ?>
											<?php echo $__Context->lang->textyle_export_waiting ?>
										<?php } ?>
									</dd>
								</dl>
							<?php } ?>
							<span class="btn"><button type="submit"><?php echo $__Context->lang->textyle_export_request ?></button></span>
							<dl class="progress">
							<!-- class="progress" | class="progress open" -->
								<dt><?php echo $__Context->lang->data_import_progress ?> : </dt>
								<dd><span class="bar"><span class="fill" style="width:0%"></span></span> <em>0%</em></dd>
							</dl>
						</fieldset>
					</form>
					
					<form action="./" method="post" id="fo_process" onsubmit="return doPreProcessing(this)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
                        <input type="hidden" name="target_module" value="<?php echo $__Context->site_module_info->index_module_srl ?>" id="target_module" />
                        <input type="hidden" name="unit_count" value="10" />
                        <input type="hidden" name="user_id" value="<?php echo $__Context->logged_info->user_id ?>" />
                        <input type="hidden" name="total" value="" />
                        <input type="hidden" name="cur" value="" />
                        <input type="hidden" name="key" value="" />
						<fieldset>
							<h4><?php echo $__Context->lang->data_import ?></h4>
							<table class="setupData" cellspacing="0" border="1">
								<tbody>
									<tr>
										<th scope="row"><input name="type" type="radio" value="module" id="xeXml" class="inputRadio" checked="checked"/> <label for="xeXml">XE XML</label></th>
										<td><?php echo $__Context->lang->about_export_xexml ?></td>
									</tr>
									<tr>
										<th scope="row"><input name="type" type="radio" value="ttxml" id="ttXml" class="inputRadio" /> <label for="ttXml">TT XML</label></th>
										<td><?php echo $__Context->lang->about_export_ttxml ?></td>
									</tr>
									<tr>
										<th scope="row"><label for="fileLocation"><?php echo $__Context->lang->migration_file_path ?></label></th>
										<td><input name="xml_file" type="text" class="iText" id="fileLocation" style="width:400px;" value="http://" /> <span class="btnGray medium"><button type="submit"><?php echo $__Context->lang->cmd_import ?></button></span></td>
									</tr>
								</tbody>
							</table>
							<dl class="progress prepare">
							<!-- class="progress" | class="progress open" -->
								<dt><?php echo $__Context->lang->migration_prepare ?> : </dt>
								<dd><span class="bar"><span class="fill preProgress" style="width:0%"></span></span></dd>
							</dl>
							<dl class="progress doing">
							<!-- class="progress" | class="progress open" -->
								<dt><?php echo $__Context->lang->data_export_progress ?> : </dt>
								<dd><span class="bar"><span class="fill" style="width:0%"></span></span> <em>0%</em></dd>
							</dl>
						</fieldset>
					</form>
					<fieldset>
						<h4><?php echo $__Context->lang->textyle_init ?></h4>
						<p><strong><?php echo $__Context->lang->msg_textyle_init_about ?></strong></p>
						<span class="btn"><button type="button" onclick="if(confirm('<?php echo $__Context->lang->msg_confirm_textyle_init ?>')){initTextyle();}"><?php echo $__Context->lang->cmd_textyle_init ?></button></span>
					</fieldset>
				</div>
			</div>
			<hr />
			<!-- /Content -->
	
			<!-- Extension -->
				<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_menu.html') ?>
			<!-- Extension -->
			<iframe name="form_iframe" style="visibility:hidden;width:0px;height:0px;"></iframe>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_footer.html') ?>
