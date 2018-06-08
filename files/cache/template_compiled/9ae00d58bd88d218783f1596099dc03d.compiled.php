<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
    <?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/textyle/tpl/filter','insert_blogapi.xml');$__xmlFilter->compile(); ?>
			<!-- Content -->
			<div id="content">
				
				<!-- contentHeader -->
				<div class="contentHeader publishHeader lineBottom">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[5]['dispTextyleToolConfigBlogApi'] ?></h3>
				</div>
				<!-- /contentHeader -->
                <div class="listHeader">
                    <p class="info"><?php echo $__Context->lang->about_blog_api ?></p>
                </div>
				<div class="setUp">
                    <?php if($__Context->type == 'registration'){ ?>
					<form action="./" method="post" onsubmit="return procFilter(this,insert_blogapi);" id="foBlogApi"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
					<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
					<input type="hidden" name="api_srl" value="<?php echo $__Context->api_info->api_srl ?>" />
						<fieldset>
							<table border="0" cellspacing="0" class="setupData">
								<tr>
									<th scope="row" rowspan="2"><?php echo $__Context->lang->blogapi_service ?></th>
									<td>
                                        <input type="radio" name="blogapi_service" value="hosted" id="hosted" <?php if($__Context->api_info->blogapi_service!='custom'){ ?>checked="checked"<?php } ?> onclick="jQuery('.hosted').css('display','block');jQuery('.custom').css('display','none');" /> <label for="hosted"><?php echo $__Context->lang->blogapi_hosted ?></label>
                                        <input type="radio" name="blogapi_service" value="custom" id="custom" <?php if($__Context->api_info->blogapi_service=='custom'){ ?>checked="checked"<?php } ?> onclick="jQuery('.hosted').css('display','none');jQuery('.custom').css('display','block');" /> <label for="custom"><?php echo $__Context->lang->blogapi_custom ?></label>
                                    </td>
								</tr>
								<tr>
									<td><?php echo $__Context->lang->about_blogapi_service ?></td>
								</tr>
                            </table>
							<table border="0" cellspacing="0" class="setupData hosted" <?php if($__Context->api_info->blogapi_service=='custom'){ ?>style="display:none;"<?php } ?>>
                                <tr>
                                    <th scope="row" rowspan="2"><?php echo $__Context->lang->blogapi_host_provider ?></th>
                                    <td>
									<input type="hidden" name="blogapi_host_provider_type" />
										<select name="blogapi_host_provider" onchange="getBlogApiServiceInfo(this.value)">
                                            <option value=""><?php echo $__Context->lang->blogapi_host_provider ?></option>
                                            <?php if($__Context->api_services&&count($__Context->api_services))foreach($__Context->api_services as $__Context->key => $__Context->val){ ?>
                                            <option value="<?php echo $__Context->val->textyle_blogapi_services_srl ?>"><?php echo $__Context->val->service_name ?></option>
                                            <?php } ?>
										</select>
                                   </td>
                                </tr>
								<tr>
									<td><?php echo $__Context->lang->about_blogapi_host_provider ?></td>
								</tr>
                            </table>
							<table border="0" cellspacing="0" class="setupData custom" <?php if($__Context->api_info->blogapi_service!='custom'){ ?>style="display:none;"<?php } ?>>
								<tr>
									<th scope="row" rowspan="2"><label for="api_type"><?php echo $__Context->lang->blogapi_type ?></label></th>
									<td>
                                        <select name="blogapi_type">
                                            <option value="metaweblog" <?php if($__Context->api_info->blogapi_type=='metaweblog'){ ?>selected="selected"<?php } ?>>MetaWeblog API</option>
                                        </select>
                                    </td>
								</tr>
								<tr>
									<td><?php echo $__Context->lang->about_blogapi_type ?></td>
								</tr>
                            </table>
							<table border="0" cellspacing="0" class="setupData">
								<tr>
									<th scope="row" rowspan="2"><label for="api_url"><?php echo $__Context->lang->blogapi_url ?></label></th>
									<td>
                                        <input name="blogapi_url" type="text" class="iText" id="api_url" value="<?php echo htmlspecialchars($__Context->api_info->blogapi_url) ?>" style="width:400px" />
                                    </td>
								</tr>
								<tr>
									<td id="api_url_label" class="hosted"></td>
								</tr>
								<tr>
									<th scope="row" rowspan="2"><label for="blogapi_userid"><?php echo $__Context->lang->user_id ?></label></th>
									<td><input name="blogapi_user_id" type="text" class="iText" id="blogapi_userid" value="<?php echo htmlspecialchars($__Context->api_info->blogapi_user_id) ?>" style="width:200px" /></td>
								</tr>
								<tr>
									<td id="blogapi_userid_label" class="hosted"></td>
								</tr>
								<tr>
									<th scope="row" rowspan="2"><label for="blogapi_password"><?php echo $__Context->lang->password ?></label></th>
									<td>
                                        <input name="blogapi_password" type="password" class="iText" id="blogapi_password" value="<?php echo htmlspecialchars($__Context->api_info->blogapi_password) ?>" style="width:200px" />
                                    </td>
								</tr>
								<tr>
									<td id="blogapi_password_label" class="hosted"></td>
								</tr>
								<tr>
									<th scope="row" rowspan="2"><label for="blogapi_blogid"><?php echo $__Context->lang->blogapi_blogid ?></label></th>
									<td>
                                        <input name="blogapi_blogid" type="text" class="iText" id="blogapi_blogid" value="<?php echo htmlspecialchars($__Context->api_info->blogapi_blogid) ?>" style="width:200px" />
                                    </td>
								</tr>
								<tr>
									<td id="blogapi_blogid_label">blog id는 여러개의 Blog를 운영할 경우 선택적으로 입력하는 값입니다.</td>
								</tr>
                            </table>
                            <div class="btnArea">
                                <span class="btn"><button type="button" onclick="doBlogApiTest(); return false;"><?php echo $__Context->lang->cmd_check_api_connect ?></button></span>
                            </div>
							<table border="0" cellspacing="0" class="setupData" <?php if(!$__Context->api_info->api_srl){ ?>style="display:none;"<?php } ?> id="response_info">
								<tr>
									<th scope="row" rowspan="2"><label for="site_title"><?php echo $__Context->lang->blogapi_site_title ?></label></th>
									<td>
                                        <input name="blogapi_site_title" type="text" class="iText" id="site_title" value="<?php echo htmlspecialchars($__Context->api_info->blogapi_site_title) ?>" style="width:400px" />
                                    </td>
								</tr>
								<tr>
									<td><?php echo $__Context->lang->about_blogapi_site_title ?></td>
								</tr>
								<tr>
									<th scope="row" rowspan="2"><label for="site_url"><?php echo $__Context->lang->blogapi_site_url ?></label></th>
									<td>
                                        <input name="blogapi_site_url" type="text" class="iText" id="site_url" value="<?php echo htmlspecialchars($__Context->api_info->blogapi_site_url) ?>" style="width:400px" />
                                    </td>
								</tr>
								<tr>
									<td><?php echo $__Context->lang->about_blogapi_site_url ?></td>
								</tr>
                            </table>
                            <div class="btnArea submitButton" <?php if(!$__Context->api_info->api_srl){ ?>style="display:none;"<?php } ?>>
                                    <?php if($__Context->api_info->api_srl){ ?>
                                    <span class="btn"><button type="submit" ><?php echo $__Context->lang->cmd_modify ?>...</button></span>
                                    <?php }else{ ?>
                                    <span class="btn"><button type="submit" ><?php echo $__Context->lang->cmd_registration ?></button></span>
                                    <?php } ?>
                            </div>
						</fieldset>
					</form>
                    <?php }else{ ?>
					<table class="tableData" cellspacing="0" border="1" summary="Api List">
						<thead>
							<tr>
								<th scope="col"><?php echo $__Context->lang->blogapi_site_url ?></th>
								<th scope="col"><?php echo $__Context->lang->target_site_url ?></th>
								<th scope="col"><?php echo $__Context->lang->blogapi_type ?></th>
								<th scope="col"><?php echo $__Context->lang->regdate ?></th>
								<th scope="col"><?php echo $__Context->lang->cmd_setup ?></th>
							</tr>
						</thead>
						<tbody>
                            <?php if($__Context->textyle->getApis()&&count($__Context->textyle->getApis()))foreach($__Context->textyle->getApis() as $__Context->key => $__Context->val){ ?>
							<tr>
								<th scope="row"><a href="<?php echo $__Context->val->blogapi_site_url ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->val->blogapi_site_title ?></a></th>
								<td><a href="<?php echo $__Context->val->blogapi_site_url ?>"><?php echo $__Context->val->blogapi_site_url ?></a></td>
								<td><?php echo $__Context->val->blogapi_type ?></td>
								<td><?php echo zdate($__Context->val->regdate, 'Y-m-d') ?></td>
								<td>
                                    <?php if($__Context->val->enable == 'Y'){ ?>
                                        <?php $__Context->iconClass = 'buttonActive' ?>
                                    <?php }else{ ?>
                                        <?php $__Context->iconClass = 'buttonDisable' ?>
                                    <?php } ?>
                                    <button type="button" onclick="doToggleAPI(this,'<?php echo $__Context->val->api_srl ?>')" class="btn"><?php echo $__Context->lang->use ?></button>
                                    <a href="<?php echo getUrl('type','registration','api_srl',$__Context->val->api_srl) ?>" class="btn"><?php echo $__Context->lang->cmd_modify ?></a>
                                    <button type="button" onclick="if(confirm('<?php echo $__Context->lang->msg_remove_api ?>')) doRemoveApi(<?php echo $__Context->val->api_srl ?>)" class="btn"><?php echo $__Context->lang->cmd_delete ?></button>
                                </td>
							</tr>
                        <?php } ?>
						</tbody>
					</table>
                    <div class="btnArea">
                        <span class="btn"><input type="button" onclick="location.href=current_url.setQuery('type','registration').setQuery('api_srl','');return false;" value="<?php echo $__Context->lang->cmd_registration ?>" /></span>
                    </div>
                    <?php } ?>
				</div>
			</div>
			<hr />
			<!-- /Content -->
				
			<!-- Extension -->
				<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_menu.html') ?>
			<!-- Extension -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_footer.html') ?>
