<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/textyle/tpl/js/editor_admin.js--><?php $__tmp=array('modules/textyle/tpl/js/editor_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
			<!-- Content -->
			<div id="content">
				
				<!-- contentHeader -->
				<div class="contentHeader addonHeader">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[5]['dispTextyleToolConfigEditorComponents'] ?></h3>
				</div>
				<!-- /contentHeader -->
				
				<div class="setUp">
                    <table cellspacing="0" border="1" class="tableData" summary="Editor Components List">
                    <thead>
                        <tr>
                            <th scope="col"><?php echo $__Context->lang->description ?></th>
                            <th scope="col"><?php echo $__Context->lang->component_version ?></th>
                            <th scope="col"><?php echo $__Context->lang->component_author ?></th>
                            <th scope="col"><?php echo $__Context->lang->component_date ?></th>
                            <th scope="col"><?php echo $__Context->lang->cmd_setup ?></th>
                            <th scope="col"><?php echo $__Context->lang->status ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($__Context->component_list&&count($__Context->component_list))foreach($__Context->component_list as $__Context->component_name => $__Context->xml_info){ ?>
                        <tr>
                            <th rowspan="2" scope="row"><a href="<?php echo getUrl('module','editor','act','dispEditorComponentInfo','component_name',$__Context->component_name) ?>" onclick="popopen(this.href);return false;"><strong><?php echo $__Context->xml_info->title ?></strong></a> (<?php echo $__Context->component_name ?>)</th>
                            
                            <td><?php echo $__Context->xml_info->version ?></td>
                            <td>
                                <?php if($__Context->xml_info->author&&count($__Context->xml_info->author))foreach($__Context->xml_info->author as $__Context->author){ ?>
                                <a href="<?php echo $__Context->author->homepage ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->author->name ?></a>
                                <?php } ?>
                            </td>
                            <td><?php echo zdate($__Context->xml_info->date, 'Y-m-d') ?></td>
         
                            <th><button type="button" onclick="doSetupComponent('<?php echo $__Context->component_name ?>'); return false;" title="<?php echo htmlspecialchars($__Context->lang->cmd_setup) ?>" class="text"><?php echo $__Context->lang->cmd_setup ?></button></th>
                            <th>
                                <?php if($__Context->xml_info->enabled=='Y'){ ?>
                                    <button type="button" onclick="doDisableComponent('<?php echo $__Context->component_name ?>');return false;" title="<?php echo htmlspecialchars($__Context->lang->cmd_enable) ?>" class="text"><?php echo $__Context->lang->cmd_enable ?></button>
                                <?php }else{ ?>
                                    <button type="button" onclick="doEnableComponent('<?php echo $__Context->component_name ?>');return false;" title="<?php echo htmlspecialchars($__Context->lang->cmd_disable) ?>" class="text"><?php echo $__Context->lang->cmd_disable ?></button>
                                <?php } ?>
                            </th>
                            <th>
								<button type="button" onclick="doMoveListOrder('<?php echo $__Context->component_name ?>','up');return false;" title="<?php echo htmlspecialchars($__Context->lang->cmd_move_up) ?>" class="text"><?php echo $__Context->lang->cmd_move_up ?></button>
								<button type="button" onclick="doMoveListOrder('<?php echo $__Context->component_name ?>','down');return false;" title="<?php echo htmlspecialchars($__Context->lang->cmd_move_down) ?>" class="text"><?php echo $__Context->lang->cmd_move_down ?></button>
							</th>
                        </tr>
                        <tr>
                            <td colspan="6" class="wrap"><?php echo nl2br($__Context->xml_info->description) ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    </table>
				</div>
			</div>
			<hr />
			<!-- /Content -->
	
			<!-- Extension -->
				<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_menu.html') ?>
			<!-- Extension -->
			<iframe name="form_iframe" style="visibility:hidden;width:0px;height:0px;"></iframe>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_footer.html') ?>
