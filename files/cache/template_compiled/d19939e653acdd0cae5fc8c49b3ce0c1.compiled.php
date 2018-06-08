<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
			<!-- Content -->
			<div id="content">
				
				<!-- contentHeader -->
				<div class="contentHeader tagHeader">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[1]['dispTextyleToolPostManageTag'] ?></h3>
				</div>
				<!-- /contentHeader -->
				
				<?php if($__Context->tag_recent_list){ ?>							
				<div class="lastTag">
					<dl>
						<dt><?php echo $__Context->lang->recent_tags ?> :</dt>
						<dd>
								<?php if($__Context->tag_recent_list&&count($__Context->tag_recent_list))foreach($__Context->tag_recent_list as $__Context->k => $__Context->tag){ ?>
									<a href="<?php echo getUrl('selected_tag',$__Context->tag->tag) ?>"><?php echo $__Context->tag->tag ?></a>
								<?php } ?>
						</dd>
					</dl>
					<span class="cap capTL"></span>
					<span class="cap capTR"></span>
					<span class="cap capBL"></span>
					<span class="cap capBR"></span>
				</div>
				<?php } ?>
				<form method="post" class="tagList" onsubmit="return false"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<p class="summary"><?php echo sprintf($__Context->lang->total_tag_result, $__Context->tag_list_count) ?></p>
				
					<!-- Tag Sum -->
					<fieldset class="tSum">
						<div class="tHeader">
							<span class="aLeft"> <button type="button" class="tagSort" onclick="document.location.href='<?php echo getUrl("sort_index","tag") ?>'"><?php echo $__Context->lang->tag ?> <img src="/modules/textyle/tpl/img/buttonTableDataSort.gif" width="8" height="5" alt="<?php echo $__Context->lang->align_by_char ?>" /></button></span>
							<span class="aRight"><button type="button" onclick="document.location.href='<?php echo getUrl("sort_index","count") ?>'"><?php echo $__Context->lang->used_documents ?> <img src="/modules/textyle/tpl/img/buttonTableDataSort.gif" width="8" height="5" alt="<?php echo $__Context->lang->order_desc ?>" /></button></span>
						</div>
						
						<?php if(!$__Context->tag_list){ ?>
						<ul id="tag_list">
							<li class="noTag"><span><?php echo $__Context->lang->none_tags ?></span></li>
						</ul>
						<?php }else{ ?>
						<ul id="tag_list">
								<?php if($__Context->tag_list&&count($__Context->tag_list))foreach($__Context->tag_list as $__Context->k => $__Context->tag){ ?>
								<li<?php if($__Context->tag->tag==$__Context->selected_tag){ ?> class="hover"<?php } ?>><a href="<?php echo getUrl('selected_tag',$__Context->tag->tag) ?>" class="tWord"><?php echo $__Context->tag->tag ?></a> <span class="sum"><?php echo $__Context->tag->count ?></span></li>
								<?php } ?>
						</ul>
						<?php } ?>
						
					</fieldset>
					<!-- /Tag Sum -->
					
					<!-- Tag Modify -->
					<fieldset class="tModify">
						<legend><?php echo $__Context->lang->update_tag ?></legend>
						<dl class="tagName">
							<dt><?php echo $__Context->lang->tag_name ?> :</dt>
							<dd>
							<input name="tag" type="text" class="iText" value="<?php echo $__Context->selected_tag ?>" /> 
							<input name="selected_tag" type="hidden" value="<?php echo $__Context->selected_tag ?>" /> 
								<span class="btnGray medium"><button type="button" onclick="updateTag(this)"><?php echo $__Context->lang->cmd_modify ?>...</button></span>
								<span class="btnGray medium"><button type="button" onclick="deleteTag(this)"><?php echo $__Context->lang->cmd_delete ?></button></span>
							</dd>
						</dl>
						<?php if($__Context->with_used_tag_list){ ?>
						<dl class="tagFamily">
							<dt><?php echo $__Context->lang->tag_with_tags ?></dt>
							<?php if($__Context->with_used_tag_list&&count($__Context->with_used_tag_list))foreach($__Context->with_used_tag_list as $__Context->k => $__Context->v){ ?>
								<?php if($__Context->v->tag != $__Context->selected_tag){ ?>
									<dd><a href="<?php echo getUrl('selected_tag', $__Context->v->tag) ?>"><?php echo $__Context->v->tag ?></a> (<?php echo $__Context->v->count ?>)</dd>
								<?php } ?>
							<?php } ?>
						</dl>
						<?php } ?>
					</fieldset>
					<!-- /Tag Modify -->
					
				</form>
				
			</div>
			<hr />
			<!-- /Content -->
			
			<!-- Extension -->
				<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_menu.html') ?>
			<!-- Extension -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_footer.html') ?>
