<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
<!--#Meta:modules/textyle/tpl/css/pagination.css--><?php $__tmp=array('modules/textyle/tpl/css/pagination.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
			<!-- Content -->
			<div id="content">
				<!-- contentHeader -->
				<div class="contentHeader postListHeader">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[1]['dispTextyleToolPostManageList'] ?></h3>
				</div>
				<!-- /contentHeader -->
				
				<!-- contentNavigation -->
				<div class="contentNavigation">
					<ul class="sortDefault">
						<li<?php if(!$__Context->published){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('', 'mid', $__Context->mid, 'vid', $__Context->vid, 'act', $__Context->act, 'sort_index','','published','') ?>"><?php echo $__Context->lang->document_all ?></a></li>
						<li<?php if($__Context->published==1){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('', 'mid', $__Context->mid, 'vid', $__Context->vid, 'act', $__Context->act, 'sort_index','','published','1') ?>"><?php echo $__Context->lang->document_published ?></a></li>
						<li<?php if($__Context->published==-1){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('', 'mid', $__Context->mid, 'vid', $__Context->vid, 'act', $__Context->act, 'sort_index','','published','-1') ?>"><?php echo $__Context->lang->document_reserved ?></a></li>
					</ul>
				</div>
				<!-- /contentNavigation -->
				
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
							<input type="hidden" name="published" value="<?php echo $__Context->published ?>" />
							<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
							<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
							<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
							<select name="search_category_srl">
								<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->key => $__Context->val){ ?>
								<option value="<?php echo $__Context->val->category_srl ?>" <?php if($__Context->search_category_srl==$__Context->val->category_srl){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
								<?php } ?>
							</select>
							<select name="search_target">
								<?php if($__Context->search_option&&count($__Context->search_option))foreach($__Context->search_option as $__Context->key => $__Context->val){ ?>
								<option value="<?php echo $__Context->key ?>" <?php if($__Context->search_target==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
								<?php } ?>
							</select>
							<input name="search_keyword" type="text" title="<?php echo $__Context->lang->cmd_search ?>" class="iText" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>"/>
							<span class="btnGray medium"><input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" /></span>
						</form>
					</fieldset>
				</div>
				<!-- /listHeader -->
				
				<!-- Table Data -->
				<fieldset>
					<legend><?php echo $__Context->lang->my_document_management ?></legend>
					<form action="" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
						<table border="1" cellspacing="0" summary="<?php echo $__Context->lang->content_list ?>" class="tableData">
							<thead>
								<tr>
									<th scope="col">
										<input type="checkbox" class="inputCheck" onclick="jQuery('input.boxlist').click()" />
									</th>
									<th scope="col"><?php echo $__Context->lang->status ?></th>
									<th scope="col" class="title"><?php echo $__Context->lang->title ?></th>
									<th scope="col"><?php echo $__Context->lang->comment ?></th>
									<th scope="col"><?php echo $__Context->lang->trackback ?></th>
									<th scope="col"><?php echo $__Context->lang->category ?></th>
									<th scope="col"><?php echo $__Context->lang->last_update ?></th>
									<th scope="col">&nbsp;</th>
									<th scope="col">&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								<?php if(count($__Context->post_list)==0){ ?>								
								<tr>
									<td class="noData" colspan="9"><p><?php echo sprintf($__Context->lang->no_post,getUrl('','act','dispTextyleToolPostManageWrite')) ?></p></td>
								</tr>
								<?php }else{ ?>
									<?php if($__Context->post_list&&count($__Context->post_list))foreach($__Context->post_list as $__Context->no => $__Context->post){ ?>
										<tr>
											<td>
											<input type="checkbox" name="document_srl" value="<?php echo $__Context->post->document_srl ?>" class="inputCheck boxlist" />
										</td>
										<td>
											<?php $__Context->_url='#' ?>
											<?php $__Context->_target='' ?>
											<?php if($__Context->post->get('module_srl') == $__Context->logged_info->member_srl){ ?>
											<?php $__Context->_url=getUrl('act','dispTextyleToolPostManageWrite','document_srl',$__Context->post->document_srl,'page',$__Context->page) ?>
												<strong class="publishState draft"><span><?php echo $__Context->lang->saved ?></span></strong>
											<?php }else if($__Context->post->get('module_srl')<=0){ ?>
											<?php $__Context->_url=getUrl('act','dispTextyleToolPostManageWrite','document_srl',$__Context->post->document_srl,'page',$__Context->page) ?>
												<strong class="publishState draft"><span><?php echo $__Context->lang->reserve ?></span></strong>
											<?php }else{ ?>
											<?php $__Context->_url=getUrl('','document_srl',$__Context->post->document_srl) ?>
											<?php $__Context->_target=" target=\"_blank\""; ?>
												<strong class="publishState out"><span><?php echo $__Context->lang->publish ?></span></strong>
											<?php } ?>
										</td>
										<td class="title"><a href="<?php echo $__Context->_url ?>" class="postTitle" title="Tag : <?php echo $__Context->post->get('tags') ?>"><?php echo $__Context->post->getTitle() ?></a>
										<?php echo $__Context->post->printExtraImages() ?>
										</td>
										<td class="small"><?php echo $__Context->post->getCommentCount() ?></td>
										<td class="small"><?php echo $__Context->post->getTrackbackCount() ?></td>
										<td><?php echo $__Context->category_list[$__Context->post->get('category_srl')]->title ?>&nbsp;</td>
										<td class="small"><?php echo zdate($__Context->post->get('last_update'),'Y.m.d') ?></td>
										<td>
											<span class="btnGray small"><a href="<?php echo getUrl('act','dispTextyleToolPostManageWrite','document_srl',$__Context->post->document_srl,'page',$__Context->page) ?>"><?php echo $__Context->lang->cmd_edit ?></a></span>
                                            <?php if($__Context->post->get('module_srl')==$__Context->logged_info->member_srl){ ?>
											<span class="btnGray small"><a href="<?php echo getUrl('act','dispTextyleToolPostManagePublish','document_srl',$__Context->post->document_srl,'page',$__Context->page) ?>"><?php echo $__Context->lang->publish_go ?></a></span>
                                            <?php }else{ ?>
											<span class="btnGray small"><a href="<?php echo getUrl('act','dispTextyleToolPostManagePublish','document_srl',$__Context->post->document_srl,'page',$__Context->page) ?>"><?php echo $__Context->lang->publish_update_go ?></a></span>
                                            <?php } ?>
										</td>
										<td>
											<?php if($__Context->post->get('module_srl') == $__Context->logged_info->member_srl){ ?>
											<button type="button" class="btnTableData" onclick="confirmDeletePostItem(<?php echo $__Context->post->document_srl ?>,<?php echo $__Context->page ?>,'<?php echo $__Context->lang->msg_confirm_delete_post ?>')"><span><?php echo $__Context->lang->cmd_delete ?></span></button>
											<?php }else{ ?>
											<button type="button" class="btnTableData" onclick="trashPostItem(<?php echo $__Context->post->document_srl ?>,<?php echo $__Context->page ?>)"><span><?php echo $__Context->lang->cmd_delete ?></span></button>
											<?php } ?>
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
								
								<!-- Category -->
								<div class="select">
									<span class="btnSelect"><button type="button" onclick="jQuery('ul.category_list').toggleClass('open')"><?php echo $__Context->lang->cmd_change_category ?></button></span>
									
									<ul class="category_list">
									<!-- ul class="" | ul class="open" -->
										<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->key => $__Context->val){ ?>
											<?php if($__Context->val->text){ ?>
												<?php if($__Context->_pDepth > $__Context->val->depth){ ?>
													<?php for($__Context->i=$__Context->val->depth; $__Context->i<$__Context->_pDepth; $__Context->i++){ ?>
												</ul>
													<?php } ?>
													<?php  $__Context->_pDepth = $__Context->val->depth ?>
												<?php } ?>
												<li><button type="button" onclick="updatePostItemsCategory('<?php echo $__Context->mid ?>',<?php echo $__Context->val->category_srl ?>,<?php echo $__Context->page ?>)"><?php echo $__Context->val->text ?></button> 
													<?php if($__Context->val->child_count){ ?>
														<?php $__Context->_pDepth++ ?>
														<ul>
													<?php }else{ ?>
													</li>
													<?php } ?>
											<?php } ?>
										<?php } ?>
									</ul>
								</div>
								<!-- /Category -->
								
								<!-- opening -->
								<div class="select">
									<span class="btnSelect"><button type="button" onclick="jQuery('ul.secret_list').toggleClass('open')"><?php echo $__Context->lang->set_publish ?></button></span>
									<ul class="secret_list"> <!-- ul class="" | ul class="open" -->
										<li><button type="button" onclick="updatePostItemsSecret('N',<?php echo $__Context->page ?>)"><?php echo $__Context->lang->document_open ?></button></li>
										<li><button type="button" onclick="updatePostItemsSecret('Y',<?php echo $__Context->page ?>)"><?php echo $__Context->lang->document_close ?></button></li>
									</ul>
								</div>
								<!-- /opening -->
								
								<span class="btnGray large"><button type="button" onclick="openLayerCommuicationConfig()"><?php echo $__Context->lang->comm_management ?></button></span>
								<span class="btnGray large"><button type="button" onclick="trashPostItems(<?php echo $__Context->page ?>)"><img src="/modules/textyle/tpl/img/buttonTableDataX.gif" width="7" height="7" alt="" class="icon" /><?php echo $__Context->lang->cmd_delete ?></button></span>
								
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
				<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_layerPostManageList.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_footer.html') ?>
<script>
if(!xe.lang) xe.lang = {};
xe.lang.msg_confirm_delete_post = '<?php echo $__Context->lang->msg_confirm_delete_post ?>';
</script>
