<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
<!--#JSPLUGIN:ui.calendar--><?php Context::loadJavascriptPlugin('ui.calendar'); ?>
<?php if($__Context->preview == Y) { ?>
<script>
window.open('index.php?act=dispTextyle&preview=<?php echo $__Context->preview ?>&document_srl=<?php echo $__Context->oDocument->document_srl ?>&vid=<?php echo $__Context->vid ?>')
</script>
<?php } ?>
<!-- Content -->
<div id="content">
	<!-- writingHeader -->
	<div class="contentHeader writingHeader">
		<h3 class="h3">
			<?php if($__Context->document_srl){ ?>
			<?php echo $__Context->lang->modify_post ?>
			<?php }else{ ?>
			<?php echo $__Context->lang->new_post ?>
			<?php } ?>
		</h3>
	</div>
	<!-- /writingHeader -->
	<form action="./" method="post" class="<?php echo $__Context->editor_skin ?>"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="publish" value="" />
		<input type="hidden" name="preview" value="" />
		<input type="hidden" name="_filter" value="save_post" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<!-- /Textyle Editor -->
				<!-- wOption -->
				<div class="wOption">
						<fieldset>
							<fieldset class="optionTextyle">
								<legend><?php echo $__Context->lang->posting_option ?> - Textyle</legend>
								<table border="1" cellspacing="0" summary="<?php echo $__Context->lang->posting_option ?>" class="tableData">
									<tr class="first">
										<th scope="row">
											<label for="category"><?php echo $__Context->lang->category ?></label>
										</th>
										<td class="title">
											<select name="category_srl" id="category">
												<option value=""><?php echo $__Context->lang->category ?>&nbsp;</option>
			
												<?php $__Context->_i=0 ?>
												<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?>
													<option 
													
		<?php if(!$__Context->val->grant){ ?>disabled="disabled"<?php } ?> value="<?php echo $__Context->val->category_srl ?>" <?php if((!$__Context->oDocument->get('category_srl')&&$__Context->_i==0)||($__Context->val->category_srl == $__Context->oDocument->get('category_srl'))){ ?>selected="selected"<?php } ?>><?php echo str_repeat("&nbsp;&nbsp;",$__Context->val->depth) ?> <?php echo $__Context->val->title ?> (<?php echo $__Context->val->document_count ?>)</option>
		
													<?php $__Context->_i++ ?>
												<?php } ?>
											</select>
											<span class="btnGray medium addCategoryToggle"><button type="button" onclick="jQuery('#add_category').toggleClass('open')"><img src="/modules/textyle/tpl/img/iconAdd.gif" width="8" height="8" alt="<?php echo $__Context->lang->add_category ?>" /></button></span>
											<span id="add_category" class="addCategory">
												<input type="text" name="add_category" class="iText" />
												<span class="btnGray medium"><button type="button" onclick="addCategory()"><?php echo $__Context->lang->cmd_insert ?></button></span>
											</span>
			
										</td>
									</tr>
									<tr>
										<th scope="row">
											<label for="tag"><?php echo $__Context->lang->tag ?></label>
										</th>
										<td class="title">
											<div class="fItem">
												<label class="iLabel" for="tags"><?php echo $__Context->lang->about_tag ?></label>
												<input type="text" id="tags" name="tags" class="iText iText" title="<?php echo $__Context->lang->about_tag ?>" value="<?php if(htmlspecialchars($__Context->oDocument->get('tags'))){;
echo htmlspecialchars($__Context->oDocument->get('tags'));
} ?>" />
											</div>
											<?php if($__Context->tag_list){ ?>
											<?php $__Context->_i=0; ?>
											<div class="usedTag">
												<ul class="usedTagA">
													<?php if($__Context->tag_list&&count($__Context->tag_list))foreach($__Context->tag_list as $__Context->v){ ?>
													<li>
													<button type="button" onclick="appendTag('<?php echo $__Context->v->tag ?>')"><?php echo $__Context->v->tag ?></button>
													</li>
													<?php if($__Context->_i==10){ ?>
												</ul>
												<ul class="usedTagB">
													<?php } ?>
													<?php $__Context->_i++ ?>
													<?php } ?>
												</ul>
												<button type="button" class="more" onclick="jQuery('ul.usedTagB').toggleClass('open')">&raquo; <?php echo $__Context->lang->more ?></button>
											</div>
											<?php } ?>
										</td>
									</tr>
									<tr>
										<th scope="row">
											<label for="postURL"><?php echo $__Context->lang->post_url ?></label>
										</th>
										<td class="title">
										
											<?php if(!$__Context->alias){ ?>
																				<?php echo str_replace('__entry__',"<input name=\"alias\" type=\"text\" class=\"iText\" style=\"width:200px\" id=\"postURL\" value=\"$__Context->alias\" onblur=\"checkAlias(this.value,'$alias')\"/>",getFullUrl('','mid',$__Context->mid,'entry','__entry__')) ?>
																				<?php }else { ?>
																				<?php echo str_replace('__entry__',$__Context->alias,getFullUrl('','mid',$__Context->mid,'entry','__entry__')) ?>
																				<input type="hidden" name="alias" value="<?php echo $__Context->alias ?>"/>
																				<?php } ?>
																				 <input type="hidden" name="use_alias" value="N"/>
											<em class="msg_used_alias" style="display:none"><?php echo $__Context->lang->msg_already_used_url ?></em></td>
									</tr>
									<tr>
										<th scope="row"><?php echo $__Context->lang->comm_management ?></th>
										<td class="title">
											<input name="allow_comment" type="checkbox" value="Y" class="inputCheck" id="checkReply" <?php if($__Context->from_saved || $__Context->oDocument->allowComment()){ ?>checked="checked"<?php } ?> />
											<label for="checkReply"><?php echo $__Context->lang->allow_comment ?> </label>
											<input name="allow_trackback" type="checkbox" value="Y" class="inputCheck" id="checkTrackback" <?php if($__Context->from_saved || $__Context->oDocument->allowTrackback()){ ?>checked="checked"<?php } ?> />
											<label for="checkTrackback"><?php echo $__Context->lang->allow_trackback ?> </label>
										</td>
									</tr>
								</table>
							</fieldset>
							<?php if(isset($__Context->_apis)){ ?>
							<?php if($__Context->_apis&&count($__Context->_apis))foreach($__Context->_apis as $__Context->val){ ?>
							<?php if($__Context->val->enable == 'Y'){ ?>
							<fieldset class="optionAPI">
								<legend>API <?php echo $__Context->lang->posting_option ?></legend>
								<table border="1" cellspacing="0" summary="<?php echo $__Context->lang->posting_option ?>" class="tableData">
									<caption class="check"><?php echo $__Context->val->blogapi_site_title ?> <span class="domain">(<a href="<?php echo $__Context->val->blogapi_site_url ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->val->blogapi_site_url ?></a>)</span> - <?php echo $__Context->lang->publish_option ?></caption>
									<tr class="first">
										<th scope="row"><?php echo $__Context->lang->publish ?></th>
										<td class="title"><input name="blogapi_<?php echo $__Context->val->api_srl ?>" type="checkbox" value="Y" <?php if($__Context->val->log){ ?>checked="checked"<?php } ?> class="inputCheck" id="blog_<?php echo $__Context->val->api_srl ?>" /><label for="blog_<?php echo $__Context->val->api_srl ?>"><?php echo $__Context->lang->publish_this_blog ?></label> <?php echo $__Context->val->log ?></td>
									</tr>
									<tr>
										<th scope="row">
											<label for="category"><?php echo $__Context->lang->category ?></label>
										</th>
										<td class="title">
											<select name="blogapi_category_<?php echo $__Context->val->api_srl ?>" id="api_category">
												<option value=""><?php echo $__Context->lang->category ?></option>
												<?php if($__Context->val->categories&&count($__Context->val->categories))foreach($__Context->val->categories as $__Context->v){ ?>
												<option value="<?php echo $__Context->v ?>" <?php if($__Context->v==$__Context->val->category){ ?>selected="selected"<?php } ?>><?php echo $__Context->v ?></option>
												<?php } ?>
											</select>
										</td>
									</tr>
								</table>
							</fieldset>
							<?php } ?>
							<?php } ?>
							<?php } ?>
							<fieldset class="optionMicroBlog">
		<?php if($__Context->oTextyle->getEnableMe2day()||$__Context->oTextyle->getEnableTwitter()){ ?> 
								<legend><?php echo $__Context->lang->posting_option ?> - Micro Blog</legend>
								<table border="1" cellspacing="0" summary="<?php echo $__Context->lang->posting_option ?>" class="tableData">
									<caption class="check"><?php echo $__Context->lang->ask_micro_publish ?> </caption>
									<tr class="first">
										<th scope="row"><?php echo $__Context->lang->noti_publish ?></th>
										<td class="title">
											<p><input name="send_me2day" type="checkbox" id="noti_me2day" class="inputCheck" value="Y" <?php if(!$__Context->oTextyle->getEnableMe2day()){ ?>disabled="disabled"<?php } ?>/><label for="noti_me2day">me2DAY <?php if($__Context->oPublish->isMe2dayPublished()){ ?>(<?php echo $__Context->lang->published ?>)<?php } ?></label><input name="send_twitter" type="checkbox" id="noti_twitter" class="inputCheck" value="Y" <?php if(!$__Context->oTextyle->getEnableTwitter()){ ?>disabled="disabled"<?php } ?>/><label for="noti_twitter">Twitter <?php if($__Context->oPublish->isTwitterPublished()){ ?>(<?php echo $__Context->lang->published ?>)<?php } ?></label></p>
										</td>
									</tr>
								</table>
							<?php } ?>
							</fieldset>
						</fieldset>
					</div>
					<!-- /wOption -->
			<fieldset>
			<legend>
			<?php if($__Context->document_srl){ ?>
			<?php echo $__Context->lang->modify_post ?>
			<?php }else{ ?>
			<?php echo $__Context->lang->new_post ?>
			<?php } ?>
			</legend>
			<!-- Post Title -->
			<div class="wTitle">
				<fieldset>
					<legend><?php echo $__Context->lang->title ?></legend>
					<div class="title fItem">
						<?php if(!$__Context->oDocument->getTitleText()){ ?><label class="iLabel" for="postTitle"><?php echo $__Context->lang->insert_title ?></label><?php } ?>
						<input name="title" id="postTitle" type="text" class="iText" value="<?php if($__Context->oDocument->getTitleText()){;
echo htmlspecialchars($__Context->oDocument->getTitleText());
} ?>" title="<?php echo $__Context->lang->insert_title ?>"/>
					</div>
					<span class="cap capLeft"></span> <span class="cap capRight"></span>
				</fieldset>
			</div>
			<!-- /Post Title -->
			<!-- Textyle Editor -->
			<input type="hidden" name="msg_close_before_write" value="<?php echo $__Context->lang->msg_close_before_write ?>" />
			<input type="hidden" name="content" value="<?php if($__Context->material_srl && $__Context->material_content){;
echo htmlspecialchars($__Context->material_content);
}else{;
echo $__Context->oDocument->getContentText();
} ?>" />
			<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
			<?php if($__Context->document_srl || $__Context->material_srl){ ?>
			<input type="hidden" name="_disable_autosaved" value="" />
			<?php } ?>
			<?php echo $__Context->editor ?>
									<!-- wPublish -->
									<div class="wPublish" id="wPublishButtonContainer">
											<span class="btnAction actionWhite normal"><button type="submit"><?php echo $__Context->lang->cmd_save ?></button></span>
											<span class="btnAction actionWhite _preview"><button type="submit"><?php echo $__Context->lang->cmd_preview ?></button></span>
											<span class="btnAction actionWhite _publish"><button type="submit"><?php echo $__Context->lang->cmd_save_publish ?></button></span>
										</div>
										<!-- /wPublish -->
		</fieldset>
	</form>
</div>
<hr />
<!-- /Content -->
<!-- Extension -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_menu.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_footer.html') ?>
<script>//<![[CDATA
setInterval('isLive()', 30000);
//]]></script>
<script>
	jQuery(function($){
		<?php  $__Context->_s = array_pop($__Context->lang->unit_week) ?>
		$('#calendar-holder').calendar({
			type : '<?php echo $__Context->type ?>',
			button : '#calendar-holder+button.btnCalendar',
			activeDate : "<?php echo zdate($__Context->selected_date,'Y/m/d') ?>",
			select : function(year, month, date) {
				var str = year+'.'+(month>9?'':'0')+month+'.'+(date>9?'':'0')+date;
				$('#publishDate').val(str);
				$('#publishBooking').get(0).checked = true;
				$('.disabled_subscription_y').each(function(){ this.disabled = true; });
				$('.disabled_subscription_n').each(function(){ this.disabled = false; });
			},
			lang : {
				weekdays : '<?php echo $__Context->_s ?>,<?php echo implode(',',$__Context->lang->unit_week) ?>',
				today : '<?php echo $__Context->lang->today ?>',
				prevmonth : '<?php echo $__Context->lang->before_month ?>',
				nextmonth : '<?php echo $__Context->lang->after_month ?>',
				close : '<?php echo $__Context->lang->cmd_close ?>'
			}
		});
		jQuery('input[name=subscription]').change(function(e) {
			if(jQuery(this).val()=="Y") {
				jQuery('.disabled_subscription_y').each(function(){ this.disabled = true; });
				jQuery('.disabled_subscription_n').each(function(){ this.disabled = false; });
				jQuery('.bookingLayer').addClass('open');
			} else {
				jQuery('.disabled_subscription_y').each(function(){ this.disabled = false; });
				jQuery('.disabled_subscription_n').each(function(){ this.disabled = true; });
				jQuery('.bookingLayer').removeClass('open');
			}
		});
<?php if($__Context->subscription=='Y'){ ?>
	jQuery('input[name=subscription][value=Y]').change();
<?php } ?>
	});
	
</script>
