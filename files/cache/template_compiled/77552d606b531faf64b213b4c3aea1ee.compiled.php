<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
<!--#Meta:modules/addon/tpl/js/addon.js--><?php $__tmp=array('modules/addon/tpl/js/addon.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/addon/tpl/filter','toggle_activate_addon.xml');$__xmlFilter->compile(); ?>
<form id="fo_addon" action="./" method="get"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="addon" value="" />
    <input type="hidden" name="type" value="" />
</form>
			<!-- Content -->
			<div id="content">
				<!-- contentHeader -->
				<div class="contentHeader addonHeader">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[5]['dispTextyleToolConfigAddon'] ?></h3>
				</div>
				<!-- /contentHeader -->
				<div class="setUp">
					<p style="margin:0 0 1em 0"><?php echo $__Context->lang->about_addon ?></p>
					<table class="tableData" cellspacing="0" border="1" summary="Addon List">
						<thead>
							<tr>
								<th scope="col"><?php echo $__Context->lang->addon_name ?></th>
								<th scope="col"><?php echo $__Context->lang->author ?></th>
								<th scope="col" class="title"><?php echo $__Context->lang->description ?></th>
								<th scope="col"><?php echo $__Context->lang->cmd_setup ?></th>
								<th scope="col">PC</th>
                                <th scope="col">Mobile</th>
							</tr>
						</thead>
						<tbody>
                            <?php if($__Context->addon_list&&count($__Context->addon_list))foreach($__Context->addon_list as $__Context->key => $__Context->val){ ?>
							<tr>
								<th scope="row"><span title="<?php echo $__Context->val->addon ?>"><?php echo $__Context->val->title ?> <em>ver.<?php echo $__Context->val->version ?></em></span>
                                </th>
								<td scope="row">
                                    <?php if($__Context->val->author&&count($__Context->val->author))foreach($__Context->val->author as $__Context->author){ ?>
                                    <a href="<?php echo $__Context->author->homepage ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->author->name ?></a>
                                    <?php } ?>
                                </td>
								<td class="title"><?php echo nl2br($__Context->val->description) ?>&nbsp;</td>
								<td>
									<span class="btnGray small"><a href="<?php echo getUrl('','module','addon','act','dispAddonAdminSetup','selected_addon',$__Context->val->addon) ?>" onclick="popopen(this.href,'addon_info');return false" title="<?php echo htmlspecialchars($__Context->lang->cmd_setup) ?>"><?php echo $__Context->lang->cmd_setup ?></a></span>
								</td>
								<td>
                                    <?php if($__Context->val->activated){ ?>
									<span class="activeState turnOn"><button type="button" onclick="doToggleAddon('<?php echo $__Context->val->addon ?>');return false;" title="<?php echo htmlspecialchars($__Context->lang->use) ?>"><?php echo $__Context->lang->addon_using ?></button></span>
                                    <?php }else{ ?>
									<span class="activeState turnOff"><button type="button" onclick="doToggleAddon('<?php echo $__Context->val->addon ?>');return false;" title="<?php echo htmlspecialchars($__Context->lang->notuse) ?>"><?php echo $__Context->lang->notuse ?></button></span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if($__Context->val->mactivated){ ?>
                                    <span class="activeState turnOn"><button type="button" onclick="doToggleAddon('<?php echo $__Context->val->addon ?>','mobile');return false;" title="<?php echo htmlspecialchars($__Context->lang->use) ?>"><?php echo $__Context->lang->addon_using ?></button></span>
                                    <?php }else{ ?>
                                    <span class="activeState turnOff"><button type="button" onclick="doToggleAddon('<?php echo $__Context->val->addon ?>','mobile');return false;" title="<?php echo htmlspecialchars($__Context->lang->notuse) ?>"><?php echo $__Context->lang->notuse ?></button></span>
                                    <?php } ?>
                                </td>
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
