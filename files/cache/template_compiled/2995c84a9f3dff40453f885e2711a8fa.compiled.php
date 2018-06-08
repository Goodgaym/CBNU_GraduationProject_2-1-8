<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
<!--#Meta:modules/textyle/tpl/css/pagination.css--><?php $__tmp=array('modules/textyle/tpl/css/pagination.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
		<!-- Content -->
			<div id="content">
				
				<!-- contentHeader -->
				<div class="contentHeader wasteHeader">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[1]['dispTextyleToolPostManageBasket'] ?></h3>
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
							<input type="hidden" name="published" value="<?php echo $__Context->published ?>" />
							<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
							<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
							<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
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
					<legend><?php echo $__Context->lang->basket_management ?></legend>
					<form action="" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
						<table border="1" cellspacing="0" summary="<?php echo $__Context->lang->basket_list ?>" class="tableData">
							<thead>
								<tr>
									<th scope="col">
										<input type="checkbox" class="inputCheck" onclick="jQuery('input.boxlist').click()" />
									</th>
									<th scope="col" class="title"><?php echo $__Context->lang->title ?></th>
									<th scope="col"><?php echo $__Context->lang->category ?></th>
									<th scope="col"><?php echo $__Context->lang->comment ?></th>
									<th scope="col"><?php echo $__Context->lang->trackback ?></th>
									<th scope="col"><?php echo $__Context->lang->last_updated ?></th>
									<th scope="col">&nbsp;</th>
									<th scope="col">&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								<?php if(count($__Context->trash_list)==0){ ?>								
								<tr>
									<td class="noData" colspan="8"><p><?php echo $__Context->lang->no_trash ?></p></td>
								</tr>
								<?php }else{ ?>
									<?php if($__Context->trash_list&&count($__Context->trash_list))foreach($__Context->trash_list as $__Context->no => $__Context->post){ ?>
								<tr>
									<td>
										<input type="checkbox" name="document_srl" value="<?php echo $__Context->post->document_srl ?>" class="inputCheck boxlist" />
									</td>
									<td class="title"><a href="#" class="postTitle"><?php echo $__Context->post->getTitle() ?></a></td>
									<td><?php echo $__Context->category_list[$__Context->post->get('category_srl')]->title ?></td>
									<td class="small"><?php echo $__Context->post->getCommentCount() ?></td>
									<td class="small"><?php echo $__Context->post->getTrackbackCount() ?></td>
									<td class="small"><?php echo zdate($__Context->post->get('last_update'),'Y.m.d') ?></td>
									<td><span class="btnGray small"><button type="button" onclick="restorePostItem(<?php echo $__Context->post->document_srl ?>,<?php echo $__Context->page ?>)"><?php echo $__Context->lang->cmd_restore ?></button></span></td>
									<td><button type="button" class="btnTableData" onclick="deletePostItem(<?php echo $__Context->post->document_srl ?>,<?php echo $__Context->page ?>)"><span><?php echo $__Context->lang->cmd_empty ?></span></button></td>
								</tr>
									<?php } ?>
								<?php } ?>
							</tbody>
						</table>
						
						<div class="listFooter">
							
							<!-- Change-->
							<div class="change">
								<p class="p1"><?php echo $__Context->lang->selected_articles ?></p>
								<span class="btnGray large"><button type="button" onclick="restorePostItems(<?php echo $__Context->page ?>)"><?php echo $__Context->lang->cmd_restore ?></button></span>
								<span class="btnGray large"><button type="button" onclick="deletePostItems(<?php echo $__Context->page ?>)"><img src="/modules/textyle/tpl/img/iconClear.gif" width="8" height="8" alt="" class="icon" /><?php echo $__Context->lang->cmd_empty_basket ?></button></span>
								
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
