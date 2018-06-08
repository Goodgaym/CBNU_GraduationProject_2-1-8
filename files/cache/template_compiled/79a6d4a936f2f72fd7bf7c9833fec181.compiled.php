<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
    <?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/textyle/tpl/filter','insert_config_communication.xml');$__xmlFilter->compile(); ?>
			<!-- Content -->
			<div id="content">
				
				<!-- contentHeader -->
				<div class="contentHeader publishHeader lineBottom">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[5]['dispTextyleToolConfigCommunication'] ?></h3>
				</div>
				<!-- /contentHeader -->
				
				<div class="setUp">
					<form action="./" method="post" onsubmit="return procFilter(this,insert_config_communication)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
					
						<fieldset>
							<h4 class="h4"><?php echo $__Context->lang->blog_first_page ?></h4>
							<table border="1" cellspacing="0" class="setupData">
								<tr>
									<th scope="row"><?php echo $__Context->lang->blog_display_target ?></th>
									<td>
										<input name="post_style" type="radio" value="content" class="inputRadio" id="lastPost" <?php if($__Context->textyle->getPostStyle()=='content'){ ?> checked="checked"<?php } ?> /> <label for="lastPost"><?php echo $__Context->lang->content_body ?></label>
										<input name="post_style" type="radio" value="summary" class="inputRadio" id="lastSummary" <?php if($__Context->textyle->getPostStyle()=='summary'){ ?> checked="checked"<?php } ?> /> <label for="lastSummary"><?php echo $__Context->lang->content_summary ?></label>
										<input name="post_style" type="radio" value="list" class="inputRadio" id="lastList" <?php if($__Context->textyle->getPostStyle()=='list'){ ?> checked="checked"<?php } ?> /> <label for="lastList"><?php echo $__Context->lang->content_list ?></label>
									</td>
								</tr>
								<tr>
									<th scope="row"><label for="postNum"><?php echo $__Context->lang->blog_display_count ?></label></th>
									<td><input name="post_list_count" type="text" class="iText" id="num" maxlength="2" style="width:40px; text-align:center" value="<?php echo $__Context->textyle->getPostListCount() ?>" /> <?php echo $__Context->lang->item_unit ?></td>
								</tr>
							</table>
						</fieldset>
						<fieldset>
							<h4 class="h4"><?php echo $__Context->lang->send_me2 ?></h4>
							<p><label for="enableMe2day"><?php echo $__Context->lang->about_send_me2 ?></label></p>
							<table border="1" cellspacing="0" class="setupData">
								<tr>
									<th scope="row" rowspan="2"><label for="me2userid"><?php echo $__Context->lang->me2day_userid ?></label></th>
									<td><input name="me2day_userid" type="text" class="iText" id="me2userid" value="<?php echo $__Context->textyle->getMe2dayUserID() ?>" style="width:200px" /></td>
								</tr>
								<tr>
									<td><?php echo $__Context->lang->about_me2day_userid ?></td>
								</tr>
								<tr>
									<th scope="row" rowspan="2"><label for="me2userkey"><?php echo $__Context->lang->me2day_userkey ?></label></th>
									<td><input name="me2day_userkey" type="text" class="iText" id="me2userkey" value="<?php echo $__Context->textyle->getMe2dayUserKey() ?>" style="width:200px" /></td>
								</tr>
								<tr>
									<td><?php echo $__Context->lang->about_me2day_userkey ?></td>
								</tr>
                                <tr>
                                    <td colspan="2">
                                        <span class="btnGray medium"><button type="button" onclick="doCheckMe2day(); return false;"><?php echo $__Context->lang->check_me2day_info ?></button></span>
                                    </td>
                                </tr>
							</table>
						</fieldset>
						
						<fieldset>
							<h4 class="h4"><?php echo $__Context->lang->send_twitter ?></h4>
							<p><label for="enableTwitter"><?php echo $__Context->lang->about_send_twitter ?></label></p>
							<table border="1" cellspacing="0" class="setupData">
								<tr>
									<th scope="row" rowspan="2"><label for="twitterconsumerkey"><?php echo $__Context->lang->twitter_consumer_key ?></label></th>
									<td><input name="twitter_consumer_key" type="text" class="iText" id="twitterconsumerkey" value="<?php echo $__Context->textyle->getTwitterConsumerKey() ?>" style="width:200px" /></td>
								</tr>
								<tr>
									<td><?php echo $__Context->lang->about_twitter_consumer_key ?></td>
								</tr>
								<tr>
									<th scope="row" rowspan="2"><label for="twitterconsumersecret"><?php echo $__Context->lang->twitter_consumer_secret ?></label></th>
									<td><input name="twitter_consumer_secret" type="text" class="iText" id="twitterconsumersecret" value="<?php echo $__Context->textyle->getTwitterConsumerSecret() ?>" style="width:200px" /></td>
								</tr>
								<tr>
									<td><?php echo $__Context->lang->about_twitter_consumer_secret ?></td>
								</tr>
								<tr>
									<th scope="row" rowspan="2"><label for="twitteroauthtoken"><?php echo $__Context->lang->twitter_oauth_token ?></label></th>
									<td><input name="twitter_oauth_token" type="text" class="iText" id="twitteroauthtoken" value="<?php echo $__Context->textyle->getTwitterOauthToken() ?>" style="width:200px" /></td>
								</tr>
								<tr>
									<td><?php echo $__Context->lang->about_twitter_oauth_token ?></td>
								</tr>
								<tr>
									<th scope="row" rowspan="2"><label for="twitteroauthtokensecret"><?php echo $__Context->lang->twitter_oauth_token_secret ?></label></th>
									<td><input name="twitter_oauth_token_secret" type="text" class="iText" id="twitteroauthtokensecret" value="<?php echo $__Context->textyle->getTwitterOauthTokenSecret() ?>" style="width:200px" /></td>
								</tr>
								<tr>
									<td><?php echo $__Context->lang->about_twitter_oauth_token_secret ?></td>
								</tr>
                                <tr>
                                    <td colspan="2">
                                        <span class="btnGray medium"><button type="button" onclick="doCheckTwitter(); return false;"><?php echo $__Context->lang->check_twitter_info ?></button></span>
                                    </td>
                                </tr>
							</table>
						</fieldset>
						
						<fieldset>
							<h4 class="h4">RSS</h4>
							<table border="1" cellspacing="0" class="setupData">
								<tr>
									<th scope="row"><?php echo $__Context->lang->feed_format ?></th>
									<td>
										<input name="rss_type" type="radio" class="inputRadio" value="Y" id="postEntire" <?php if($__Context->rss_config->open_rss=='Y'){ ?>checked="checked"<?php } ?> /> <label for="postEntire"><?php echo $__Context->lang->rss_total ?></label>
										<input name="rss_type" type="radio" class="inputRadio" value="H" id="postSummary" <?php if($__Context->rss_config->open_rss=='H'){ ?>checked="checked"<?php } ?> /> <label for="postSummary"><?php echo $__Context->lang->rss_summary ?></label>
									</td>
								</tr>
							</table>
						</fieldset>
					
						<fieldset>
							<h4 class="h4"><?php echo $__Context->lang->visitor_editor_style ?></h4>
							<table border="1" cellspacing="0" class="setupData">
								<tr>
									<th scope="row"><?php echo $__Context->lang->email_address ?></th>
									<td>
										<input name="input_email" type="radio" value="R" class="inputRadio" id="emailReauired"<?php if($__Context->textyle->getInputEmail()=='R'){ ?> checked="checked"<?php } ?> /> <label for="emailReauired"><?php echo $__Context->lang->required ?></label>
										<input name="input_email" type="radio" value="Y" class="inputRadio" id="emailOptional" <?php if($__Context->textyle->getInputEmail()=='Y'){ ?> checked="checked"<?php } ?> /> <label for="emailOptional"><?php echo $__Context->lang->selected ?></label>
										<input name="input_email" type="radio" value="N" class="inputRadio" id="emailNot" <?php if($__Context->textyle->getInputEmail()=='N'){ ?> checked="checked"<?php } ?> /> <label for="emailNot"><?php echo $__Context->lang->notaccepted ?></label>
									</td>
								</tr>
								<tr>
									<th scope="row"><?php echo $__Context->lang->website_address ?></th>
									<td>
										<input name="input_website" type="radio" value="R" class="inputRadio" id="wwwReauired" <?php if($__Context->textyle->getInputWebsite()=='R'){ ?> checked="checked"<?php } ?> /> <label for="wwwReauired"><?php echo $__Context->lang->required ?></label>
										<input name="input_website" type="radio" value="Y" class="inputRadio" id="wwwOptional"  <?php if($__Context->textyle->getInputWebsite()=='Y'){ ?> checked="checked" <?php } ?>/> <label for="wwwOptional"><?php echo $__Context->lang->selected ?></label>
										<input name="input_website" type="radio" value="N" class="inputRadio" id="wwwNot" <?php if($__Context->textyle->getInputWebsite()=='N'){ ?> checked="checked"<?php } ?>/> <label for="wwwNot"><?php echo $__Context->lang->notaccepted ?></label>
									</td>
								</tr>
								<tr>
									<th scope="row"><?php echo $__Context->lang->comment_editor ?></th>
									<td>
                                        <select name="comment_editor_skin" onchange="getEditorSkinColorList(this.value, null, 'comment')">
                                        <?php if($__Context->editor_skin_list&&count($__Context->editor_skin_list))foreach($__Context->editor_skin_list as $__Context->editor){ ?>
                                        <?php if($__Context->editor!=''){ ?>
                                        <option value="<?php echo $__Context->editor ?>" <?php if($__Context->editor==$__Context->textyle->get('comment_editor_skin')){ ?>selected="selected"<?php } ?>><?php echo $__Context->editor ?></option>
                                        <?php } ?>
                                        <?php } ?>
                                        </select>
                                        <select name="comment_editor_colorset" id="sel_editor_comment_colorset" style="display:none"></select>
									</td>
								</tr>
								<tr>
									<th scope="row"><?php echo $__Context->lang->guestbook_editor ?></th>
									<td>
                                        <select name="guestbook_editor_skin" onchange="getEditorSkinColorList(this.value, null, 'guestbook')">
                                        <?php if($__Context->editor_skin_list&&count($__Context->editor_skin_list))foreach($__Context->editor_skin_list as $__Context->editor){ ?>
                                        <?php if($__Context->editor!=''){ ?>
                                        <option value="<?php echo $__Context->editor ?>" <?php if($__Context->editor==$__Context->textyle->get('guestbook_editor_skin')){ ?>selected="selected"<?php } ?>><?php echo $__Context->editor ?></option>
                                        <?php } ?>
                                        <?php } ?>
                                        </select>
                                        <select name="guestbook_editor_colorset" id="sel_editor_guestbook_colorset" style="display:none"></select>
									</td>
								</tr>
								<tr>
									<th scope="row"><label for="replyNum"><?php echo $__Context->lang->comment_list_count ?></label></th>
									<td><input name="comment_list_count" type="text" class="iText" id="replyNum" maxlength="2" style="width:40px; text-align:center" value="<?php echo $__Context->textyle->getCommentListCount() ?>" /> <?php echo $__Context->lang->item_unit ?></td>
								</tr>
								<tr>
									<th scope="row"><label for="sayHello"><?php echo $__Context->lang->guestbook_list_count ?></label></th>
									<td><input name="guestbook_list_count" type="text" class="iText" id="sayHello" maxlength="2" style="width:40px; text-align:center" value="<?php echo $__Context->textyle->getGuestbookListCount() ?>" /> <?php echo $__Context->lang->item_unit ?></td>
								</tr>
								<tr>
									<th rowspan="2" scope="row"><label for="commentGrant"><?php echo $__Context->lang->comment_grant ?></label></th>
                                    <td>
                                        <select name="comment_grant" id="commentGrant">
                                            <option value=""><?php echo $__Context->lang->grant_to_all ?></option>
                                            <option value="1" <?php if($__Context->textyle->getCommentGrant()==1){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->grant_to_member ?></option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo $__Context->lang->about_comment_grant ?></td>
								</tr>
								<tr>
									<th rowspan="2" scope="row"><label for="guestbookGrant"><?php echo $__Context->lang->guestbook_grant ?></label></th>
                                    <td>
                                        <select name="guestbook_grant" id="guestbookGrant">
                                            <option value=""><?php echo $__Context->lang->grant_to_all ?></option>
                                            <option value="1" <?php if($__Context->textyle->getGuestbookGrant()==1){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->grant_to_member ?></option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo $__Context->lang->about_guestbook_grant ?></td>
								</tr>
							</table>
                            <script>
                                jQuery(window).load(function() { 
                                    getEditorSkinColorList('<?php echo $__Context->textyle->get('comment_editor_skin') ?>','<?php echo $__Context->textyle->get('comment_editor_colorset') ?>','comment'); 
                                    getEditorSkinColorList('<?php echo $__Context->textyle->get('guestbook_editor_skin') ?>','<?php echo $__Context->textyle->get('guestbook_editor_colorset') ?>','guestbook'); 
                                } );
                            </script>
						</fieldset>
						<div class="btnArea">
							<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_apply ?>" /></span>
						</div>
					</form>
				</div>
			</div>
			<hr />
			<!-- /Content -->
				
			<!-- Extension -->
				<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_menu.html') ?>
			<!-- Extension -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_footer.html') ?>
