<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
<!--#Meta:modules/textyle/tpl/css/pagination.css--><?php $__tmp=array('modules/textyle/tpl/css/pagination.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
			<!-- Content -->
			<div id="content">
				
				<!-- contentHeader -->
				<div class="contentHeader replyHeader lineBottom">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[2]['dispTextyleToolCommunicationComment'] ?></h3>
				</div>
				<!-- /contentHeader -->
				
				<!-- listHeader -->
				<div class="listHeader">
					<p class="info"> <?php if($__Context->search_keyword){;
echo sprintf($__Context->lang->search_result_count,$__Context->page_navigation->total_count);
}else{;
echo sprintf($__Context->lang->total_result_count,$__Context->page_navigation->total_count);
} ?></p>
					<fieldset class="search">
						<legend><?php echo $__Context->lang->cmd_search ?></legend>
						<form action="<?php echo Context::getRequestUri() ?>"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
							<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
							<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
							<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
							<input type="hidden" name="search_target" value="content" />
							<input name="search_keyword" type="text" value="<?php echo $__Context->search_keyword ?>" title="<?php echo $__Context->lang->cmd_search ?>" class="iText" />
							<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" /></span>
						</form>
					</fieldset>
				</div>
				<!-- /listHeader -->
				
				<!-- Table Data -->
				<fieldset>
					<legend><?php echo $__Context->lang->manage_comment ?></legend>
					<form action="" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
						<table border="1" cellspacing="0" summary="<?php echo $__Context->lang->content_list ?>" class="tableData">
							<thead>
								<tr>
									<th scope="col">
										<input type="checkbox" name="" class="inputCheck" onclick="jQuery('input.boxlist').click()" />
									</th>
									<th scope="col"><?php echo $__Context->lang->avatar ?></th>
									<th scope="col" class="replyArea"><?php echo $__Context->lang->comment ?></th>
									<th scope="col"><?php echo $__Context->lang->email_address ?></th>
									<th scope="col"><?php echo $__Context->lang->ipaddress ?></th>
									<th scope="col"><?php echo $__Context->lang->status ?></th>
								</tr>
							</thead>
							<tbody>
								<?php if(count($__Context->comment_list)==0){ ?>
								<tr>
									<td class="noData" colspan="6"><p><?php echo $__Context->lang->no_comment ?></p></td>
								</tr>
								<?php }else{ ?>
									<?php if($__Context->comment_list&&count($__Context->comment_list))foreach($__Context->comment_list as $__Context->no => $__Context->val){ ?>
                                    <?php $__Context->_profile_image = $__Context->val->getProfileImage() ?>
                                <tr>
									<td>
										<input type="checkbox" name="comment_srl" value="<?php echo $__Context->val->comment_srl ?>" class="inputCheck boxlist" />
									</td>
									<td class="thumb">
                                        <?php if($__Context->_profile_image){ ?>
										<img src="<?php echo $__Context->_profile_image ?>" alt="<?php echo htmlspecialchars($__Context->val->getNickName()) ?>" />
                                        <?php }else{ ?>
                                        <img height="39" width="39" alt="" src="/modules/textyle/tpl/img/iconEmoticonDefault.gif" />
                                        <?php } ?>
                                    </td>
									<td class="replyArea">
										<dl>
											<dt>
                                                <span class="member_<?php echo $__Context->val->get('member_srl') ?>"><strong><?php echo $__Context->val->getNickName() ?></strong></span>
                                                <span class="yymmdd"><?php echo $__Context->val->getRegdate("Y.m.d") ?></span> <span class="hhmm"><?php echo $__Context->val->getRegdate("H:i") ?></span>
                                            </dt>
											<dd><?php echo $__Context->val->getContent(false,false) ?></dd>
										</dl>
									</td>
									<td class="email"><?php echo $__Context->val->email_address ?>&nbsp;</td>
									<td class="ipAddress"><?php echo $__Context->val->ipaddress ?></td>
									<td class="state"><?php if($__Context->val->is_secret=='Y'){ ?><em><?php echo $__Context->lang->secret ?></em><?php }else{;
echo $__Context->lang->public;
} ?></td>
								</tr>
								<tr class="trBtnArea">
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td colspan="4">
										<div class="reAction">
											<span class="btnGray small"><a href="<?php echo getUrl('act','dispTextyleToolCommunicationCommentReply','comment_srl',$__Context->val->comment_srl,'document_srl',$__Context->val->document_srl) ?>" ><?php echo $__Context->lang->cmd_reply_comment ?></a></span>
											<span class="btnGray small"><a href="<?php echo $__Context->val->getPermanentUrl() ?>"><?php echo $__Context->lang->cmd_move ?></a></span> 
										</div>
										<div class="control">
											<span class="btnGray small"><button type="button" onclick="updateCommentItemSetSecret(<?php echo $__Context->val->comment_srl ?>,'<?php if($__Context->val->is_secret=='Y'){ ?>N<?php }else{ ?>Y<?php } ?>',<?php echo $__Context->page ?>,<?php echo $__Context->val->module_srl ?>)"><?php if($__Context->val->is_secret=='Y'){;
echo $__Context->lang->public;
}else{;
echo $__Context->lang->private;
} ?></button></span> 
											<span class="btnGray small"><button type="button" onclick="openLayerAddDenyItem('<?php echo $__Context->val->comment_srl ?>','_addDenyCommentList')"><?php echo $__Context->lang->cmd_deny ?></button></span> 
											<span class="btnGray small"><button type="button" onclick="if(confirm('<?php echo $__Context->lang->confirm_delete ?>')) deleteCommentItem(<?php echo $__Context->val->comment_srl ?>,<?php echo $__Context->page ?>); return false;"><?php echo $__Context->lang->cmd_delete ?></button></span>
										</div>
									</td>
								</tr>
                                    <?php } ?>
								<?php } ?>
							</tbody>
						</table>
						
						<div class="listFooter">
							
							<!-- Change-->
							<div class="change">
								<p class="p1"><?php echo $__Context->lang->selected_articles ?></p>
								
								<span class="btnGray large"><button type="button" onclick="openLayerAddDeny('_addDenyCommentList')"><?php echo $__Context->lang->cmd_deny ?></button></span>
								<span class="btnGray large"><button type="button" onclick="deleteCommentItems(<?php echo $__Context->page ?>)"><img src="/modules/textyle/tpl/img/buttonTableDataX.gif" width="7" height="7" alt="" class="icon" /><?php echo $__Context->lang->cmd_delete ?></button></span>
								
							</div>
							<!-- /Change -->
							
							<!-- Pagination -->
							<div class="pagination">
								<a href="<?php echo getUrl('page','','mid',$__Context->mid) ?>" class="prev"><span><?php echo $__Context->lang->first_page ?></span></a>
								<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
									<?php if($__Context->page == $__Context->page_no){ ?>
										<strong><?php echo $__Context->page_no ?></strong> 
									<?php }else{ ?>
										<a href="<?php echo getUrl('page',$__Context->page_no,'mid',$__Context->mid) ?>"><?php echo $__Context->page_no ?></a> 
									<?php } ?>
								<?php } ?>
								<a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'module_srl','') ?>" class="next"><span><?php echo $__Context->lang->last_page ?></span></a>
							</div>
							<!-- /Pagination -->
							
						</div>
						
					</form>
				</fieldset>
				<!-- /Table Data -->
				
			</div>
			<hr />
			<!-- /Content -->
			<!-- Extension -->
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_menu.html') ?>
			<!-- Extension -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_footer.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_layerAddDeny.html') ?>
