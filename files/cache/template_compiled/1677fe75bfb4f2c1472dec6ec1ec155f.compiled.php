<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
<!--#Meta:modules/textyle/tpl/css/pagination.css--><?php $__tmp=array('modules/textyle/tpl/css/pagination.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
			<!-- Content -->
			<div id="content">
				
				<!-- contentHeader -->
				<div class="contentHeader guestbookHeader lineBottom">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[2]['dispTextyleToolCommunicationGuestbook'] ?></h3>
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
							<input name="search_keyword" type="text" value="<?php echo $__Context->search_keyword ?>" title="<?php echo $__Context->lang->cmd_search ?>" class="iText" />
							<span class="btnGray medium"><input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" /></span>
						</form>
					</fieldset>
				</div>
				<!-- /listHeader -->
				
				<!-- Table Data -->
				<fieldset>
					<legend><?php echo $__Context->lang->manage_guestbook ?></legend>
					<form action="" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
						<table border="1" cellspacing="0" summary="<?php echo $__Context->lang->content_list ?>" class="tableData">
							<thead>
								<tr>
									<th scope="col">
										<input type="checkbox" class="inputCheck" onclick="jQuery('input.boxlist').click()"/>
									</th>
									<th scope="col"><?php echo $__Context->lang->avatar ?></th>
									<th scope="col" class="replyArea"><?php echo $__Context->lang->comment ?></th>
									<th scope="col"><?php echo $__Context->lang->email_address ?></th>
									<th scope="col"><?php echo $__Context->lang->ipaddress ?></th>
									<th scope="col"><?php echo $__Context->lang->status ?></th>
								</tr>
							</thead>
							<tbody>
								<?php if(count($__Context->guestbook_list)==0){ ?>
									<tr>
                                        <td class="noData" colspan="6"><p><?php echo $__Context->lang->no_guestbook ?></p></td>
									</tr>
								<?php }else{ ?>
									<?php if($__Context->guestbook_list&&count($__Context->guestbook_list))foreach($__Context->guestbook_list as $__Context->k => $__Context->v){ ?>
									<tr<?php if($__Context->v->parent_srl>0){ ?> class="indent"<?php } ?>>
										<td>
											<input type="checkbox" name="textyle_guestbook_srl" value="<?php echo $__Context->v->textyle_guestbook_srl ?>" class="inputCheck boxlist" />
										</td>
										<td class="thumb">
                                            <?php if($__Context->v->profile_image){ ?>
                                            <img src="<?php echo $__Context->v->profile_image ?>" alt="<?php echo $__Context->v->nick_name ?>" />
                                            <?php }else{ ?>
                                            <img height="39" width="39" alt="" src="/modules/textyle/tpl/img/iconEmoticonDefault.gif" class="author"/>
                                            <?php } ?>
                                        </td>
										<td class="replyArea">
											<dl>
												<dt><span class="member_<?php echo $__Context->v->member_srl ?>"><strong><?php echo $__Context->v->nick_name ?></strong></span> <span class="yymmdd"><?php echo zdate($__Context->v->regdate,"Y.m.d") ?></span> <span class="hhmm"><?php echo zdate($__Context->v->regdate,"H:i") ?></span></dt>
												<dd><?php echo $__Context->v->content ?></dd>
											</dl>
										</td>
										<td class="email"><?php echo $__Context->v->email_address ?>&nbsp;</td>
										<td class="ipAddress"><?php echo $__Context->v->ipaddress ?></td>
										<td class="state"><?php if($__Context->v->is_secret<0){;
echo $__Context->lang->public;
}else{ ?><em><?php echo $__Context->lang->secret ?></em><?php } ?></td>
									</tr>
									<tr class="trBtnArea">
										<td>&nbsp;</td>
										<td>&nbsp;</td>
										<td colspan="4">
											<div class="reAction">
												<?php if($__Context->v->parent_srl==0){ ?>
												<span class="btnGray small"><a href="<?php echo getUrl('','mid',$__Context->mid,'act','dispTextyleToolCommunicationGuestbookReply','textyle_guestbook_srl',$__Context->v->textyle_guestbook_srl) ?>"><?php echo $__Context->lang->cmd_reply_comment ?></a></span>
												<?php } ?>
											</div>
											<div class="control">
												<span class="btnGray small"><button type="button" onclick="updateGuestbookItemChangeSecret(<?php echo $__Context->v->textyle_guestbook_srl ?>,<?php echo $__Context->page ?>)"><?php if($__Context->v->is_secret<0){;
echo $__Context->lang->private;
}else{;
echo $__Context->lang->public;
} ?></button></span> 
												<span class="btnGray small"><button type="button" onclick="openLayerAddDenyItem('<?php echo $__Context->v->textyle_guestbook_srl ?>','_addDenyGuestbookList')"><?php echo $__Context->lang->cmd_deny ?></button></span> 
												<span class="btnGray small"><button type="button" onclick="if(confirm('<?php echo $__Context->lang->confirm_delete ?>')) deleteGuestbookItem(<?php echo $__Context->v->textyle_guestbook_srl ?>,<?php echo $__Context->page ?>);return false;"><?php echo $__Context->lang->cmd_delete ?></button></span>
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
								
								<span class="btnGray large"><button type="button" onclick="openLayerAddDeny('_addDenyGuestbookList')"><?php echo $__Context->lang->cmd_deny ?></button></span>
								<span class="btnGray large"><button type="button" onclick="deleteGuestbookItems(<?php echo $__Context->page ?>)"><img src="/modules/textyle/tpl/img/buttonTableDataX.gif" width="7" height="7" alt="" class="icon" /><?php echo $__Context->lang->cmd_delete ?></button></span>
								
							</div>
							<!-- /Change -->
							
							<?php if($__Context->page_navigation){ ?>
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
							<?php } ?>
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
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_layerAddDeny.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_footer.html') ?>
