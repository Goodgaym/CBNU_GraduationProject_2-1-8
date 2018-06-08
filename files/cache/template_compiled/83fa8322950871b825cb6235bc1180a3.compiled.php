<?php if(!defined("__XE__"))exit;?>                    <?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->document){ ?>
                        <h2 class="postTitle"><a href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'cpage','') ?>"><?php echo $__Context->document->getTitle() ?></a> <span class="category"><?php echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?></span></h2>
                        <p class="postMeta"><span class="yymmdd"><?php echo $__Context->document->getRegdate('Y.m.d') ?></span> <span class="hhmm"><?php echo $__Context->document->getRegdate('H:i') ?></span> <span class="author member_<?php echo $__Context->document->get('member_srl') ?>"><?php echo $__Context->document->getNickName() ?></span> <a href="<?php echo getSiteUrl($__Context->textyle->domain,'document_srl',$__Context->document->document_srl,'act','dispTextyleToolPostManageWrite') ?>" class="editPost">Edit</a></p>
                        <div class="textyleContent xe_content">
                            <?php echo $__Context->post_prefix ?>
                            <?php echo $__Context->document->getContent(false) ?>
                            <?php echo $__Context->post_suffix ?>
                        </div>
                        <?php $__Context->tag_list = $__Context->document->get('tag_list'); ?>
                        <?php if(count($__Context->tag_list)){ ?>
                        <dl class="usedTag">
                            <dt>Tag :</dt>
                            <dd>
                                <?php for($__Context->i=0,$__Context->c=count($__Context->tag_list);$__Context->i<$__Context->c;$__Context->i++){ ?>
                                <a href="<?php echo getUrl('search_target','tag','search_keyword',$__Context->tag_list[$__Context->i],'document_srl','') ?>" rel="tag"><?php echo htmlspecialchars($__Context->tag_list[$__Context->i]) ?></a>
                                <?php if($__Context->i<$__Context->c-1){ ?>
                                ,&nbsp;
                                <?php } ?>
                                <?php } ?>
                            </dd>
                        </dl>
                        <?php } ?>
                        <?php if($__Context->prev_document || $__Context->next_document){ ?>
                        <div class="pagination paginationPost">
                            <?php if($__Context->prev_document){ ?>
                                <a href="<?php echo getUrl('document_srl',$__Context->prev_document->document_srl) ?>" class="prev"><?php echo $__Context->prev_document->getTitle() ?></a>
                            <?php } ?>
                            <?php if($__Context->next_document){ ?>
                                <a href="<?php echo getUrl('document_srl',$__Context->next_document->document_srl) ?>" class="next"><?php echo $__Context->next_document->getTitle() ?></a>
                            <?php } ?>
                        </div>
                        <?php } ?>
                        <?php if($__Context->document->allowTrackback() || $__Context->document->getTrackbackCount()){ ?>
                        <a name="trackback"></a>
                        <div class="feedback trackback">
                            <h3 class="feedbackTitle">Trackbacks <em><?php echo $__Context->document->getTrackbackCount() ?></em></h3>
                            <?php if($__Context->document->allowTrackback()){ ?>
                            <dl class="trackbackURL">
                                <dt><?php echo $__Context->lang->trackback_url ?></dt>
                                <dd><a href="<?php echo textyleModel::getTrackbackUrl($__Context->textyle->domain,$__Context->document->document_srl) ?>" onclick="return false"><?php echo textyleModel::getTrackbackUrl($__Context->textyle->domain,$__Context->document->document_srl) ?></a></dd>
                            </dl>
                            <?php } ?>
                            <?php if($__Context->document->getTrackbackCount()){ ?>
                            <ol class="feedbackOrder">
                                <?php if($__Context->document->getTrackbacks()&&count($__Context->document->getTrackbacks()))foreach($__Context->document->getTrackbacks() as $__Context->key => $__Context->val){ ?>
                                <li class="item">
                                    <a name="trackback_<?php echo $__Context->val->trackback_srl ?>"></a>
                                    <div class="meta">
                                        <h4 class="title"><?php echo htmlspecialchars($__Context->val->blog_name) ?></h4>
                                        <p class="date"><?php echo zdate($__Context->val->regdate, "Y.m.d") ?> <span class="hhmm"><?php echo zdate($__Context->val->regdate, "H:i") ?></span></p>
                                    </div>
                                    <div class="data textyleContent">
										<h4 class="trackbackTitle"><a href="<?php echo $__Context->val->url ?>"><?php echo htmlspecialchars($__Context->val->title) ?></a></h4>
                                        <?php echo $__Context->val->excerpt ?>
                                    </div>
                                </li>
                                <?php } ?>
                            </ol>
                            <?php } ?>
                        </div>
                        <?php } ?>
                        <?php if($__Context->document->allowComment()){ ?>
                        <a name="comment"></a>
                        <div class="feedback reply">
                            <h3 class="feedbackTitle">Comments <em><?php echo $__Context->document->getCommentCount() ?></em></h3>
                            <?php if($__Context->document->getCommentCount()){ ?>
                            <ol class="feedbackOrder">
                                <?php  $__Context->_comment_list = $__Context->document->getComments()  ?>
                                <?php if($__Context->_comment_list&&count($__Context->_comment_list))foreach($__Context->_comment_list as $__Context->key => $__Context->comment){ ?>
                                <li class="item<?php if($__Context->comment->get('depth')){ ?> indent indent<?php echo $__Context->comment->get('depth');
} ?>">
                                    <div class="meta">
                                        <div class="thumb">
                                            <?php if($__Context->comment->getProfileImage()){ ?>
                                                <img src="<?php echo $__Context->comment->getProfileImage() ?>" alt="author" />
                                            <?php }else{ ?>
                                                <img src="/files/attach/textyle/623/img/iconAuthorNoImage.gif" width="39" height="39" alt="Author" />
                                            <?php } ?>
                                        </div>
                                        <h4 class="author">
                                            <?php if($__Context->comment->homepage){ ?>
                                            <a href="<?php echo $__Context->comment->homepage ?>" onclick="window.open(this.href);return false;" class="member_<?php echo $__Context->comment->member_srl ?>"><?php echo $__Context->comment->getNickName() ?></a>
                                            <?php }else{ ?>
                                            <span class="member_<?php echo $__Context->comment->member_srl ?>"><?php echo $__Context->comment->getNickName() ?></span>
                                            <?php } ?>
                                        </h4>
                                        <p class="date"><?php echo $__Context->comment->getRegdate('Y.m.d') ?> <span class="hhmm"><?php echo $__Context->comment->getRegdate('H:i') ?></span></p>
                                        <p class="ipAddress"><?php echo $__Context->comment->getIpaddress() ?></p>
                                    </div>
                                    <div class="data textyleContent">
                                        <a name="comment_<?php echo $__Context->comment->comment_srl ?>"></a>
										<?php if($__Context->comment->isAccessible()){ ?>
										<?php echo $__Context->comment->getContent(false) ?>
										<?php }else{ ?>
										<form action="./" method="get" onsubmit="return procFilter(this, input_password)" class="pwForm active"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
											<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
											<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
											<input type="hidden" name="document_srl" value="<?php echo $__Context->comment->get('document_srl') ?>" />
											<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment->get('comment_srl') ?>" />
											<label for="readPw"><?php echo $__Context->lang->password ?> : </label> <input name="password" type="password" class="iText" id="readPw" value="" /><input name="" type="submit" value="<?php echo $__Context->lang->cmd_confirm ?>" class="submit" />
										</form>
										<?php } ?>
										<?php if(!$__Context->comment->member_srl){ ?>
										<form action="" method="post" class="modifyPw pwForm comment<?php echo $__Context->key ?>" onsubmit="return checkPasswordForModifyComment(this)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
											<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
											<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
											<input type="hidden" name="document_srl" value="<?php echo $__Context->comment->get('document_srl') ?>" />
											<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment->get('comment_srl') ?>" />
											<label for="modifyPw"><?php echo $__Context->lang->password ?> : </label> <input name="password" type="password" class="iText" id="modifyPw" value="" /><input name="" type="submit" value="<?php echo $__Context->lang->cmd_confirm ?>" class="submit" />
										</form>
										<form action="" method="post" class="deletePw pwForm comment<?php echo $__Context->key ?>" onsubmit="return checkPasswordForDeleteComment(this)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
											<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
											<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
											<input type="hidden" name="document_srl" value="<?php echo $__Context->comment->get('document_srl') ?>" />
											<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment->get('comment_srl') ?>" />
											<label for="deletePw"><?php echo $__Context->lang->password ?> : </label> <input name="password" type="password" class="iText" id="deletePw" value="" /><input name="" type="submit" value="<?php echo $__Context->lang->cmd_confirm ?>" class="submit" />
										</form>
										<?php } ?>
                                        <ul class="reAction">
			
										<?php if($__Context->comment->isAccessible()){ ?>
                                            <?php if($__Context->textyle->isEnableComment()){ ?><li><a href="<?php echo getUrl('','mid',$__Context->mid,'comment_srl',$__Context->comment->comment_srl,'document_srl',$__Context->document->document_srl,'act','dispTextyleCommentReply') ?>"><?php echo $__Context->lang->cmd_reply ?></a></li><?php } ?>
											<?php if($__Context->comment->member_srl){ ?>
												<?php if($__Context->comment->isGranted() || $__Context->comment->member_srl==$__Context->logged_info->member_srl){ ?>
												<li><a href="<?php echo getUrl('','mid',$__Context->mid,'comment_srl',$__Context->comment->comment_srl,'document_srl',$__Context->document->document_srl,'act','dispTextyleCommentModify') ?>"><?php echo $__Context->lang->cmd_modify ?>...</a></li>
												<li><button type="button" onclick="if(confirm('<?php echo $__Context->lang->confirm_delete ?>')) deleteCommentItem(<?php echo $__Context->comment->comment_srl ?>);"><?php echo $__Context->lang->cmd_delete ?></button></li>
                                                    <?php }elseif($__Context->logged_info->is_site_admin){ ?>
                                                    <li><button type="button" onclick="if(confirm('<?php echo $__Context->lang->confirm_delete ?>')) deleteCommentItem(<?php echo $__Context->comment->comment_srl ?>);"><?php echo $__Context->lang->cmd_delete ?></button></li>
												<?php } ?>
											<?php }else{ ?>
                                                <?php if($__Context->logged_info->is_site_admin){ ?>
												<li><button type="button" onclick="if(confirm('<?php echo $__Context->lang->confirm_delete ?>')) deleteCommentItem(<?php echo $__Context->comment->comment_srl ?>);"><?php echo $__Context->lang->cmd_delete ?></button></li>
                                                <?php }else{ ?>
												<li><button type="button" onclick="jQuery('.comment<?php echo $__Context->key ?>').removeClass('active');jQuery('.modifyPw.comment<?php echo $__Context->key ?>').addClass('active')"><?php echo $__Context->lang->cmd_modify ?>...</button></li>
												<li><button type="button" onclick="jQuery('.comment<?php echo $__Context->key ?>').removeClass('active');jQuery('.deletePw.comment<?php echo $__Context->key ?>').addClass('active')"><?php echo $__Context->lang->cmd_delete ?></button></li>
                                                <?php } ?>
											<?php } ?>
										<?php } ?>
                                        </ul>
                                    </div>
                                </li>
                                <?php } ?>
                            </ol>
                            <?php } ?>
                        </div>
                        <?php if($__Context->document->comment_page_navigation){ ?>
                        <div class="pagination paginationNum">
                            <a href="<?php echo getUrl('cpage',1) ?>#comment" class="prev"><span><?php echo $__Context->lang->first_page ?></span></a>
                            <?php while($__Context->page_no = $__Context->document->comment_page_navigation->getNextPage()){ ?>
                            <?php if($__Context->cpage == $__Context->page_no){ ?>
                            <strong><?php echo $__Context->page_no ?></strong>
                            <?php }else{ ?>
                            <a href="<?php echo getUrl('cpage',$__Context->page_no) ?>#comment"><?php echo $__Context->page_no ?></a>
                            <?php } ?>
                            <?php } ?>
                            <a href="<?php echo getUrl('cpage',$__Context->document->comment_page_navigation->last_page) ?>#comment" class="next"><span><?php echo $__Context->lang->last_page ?></span></a>
                        </div>
                        <?php } ?>
                        <div class="replyForm">
                            <h3>Leave Comments</h3>
                            <?php if($__Context->textyle->isEnableComment()){ ?>
                            <fieldset>
                                <form method="post" onsubmit="return insertCommentItem(this, insert_comment)" action=""><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
									<input name="mid" type="hidden" value="<?php echo $__Context->mid ?>" />
                                    <input type="hidden" name="document_srl" value="<?php echo $__Context->document->document_srl ?>" />
                                    <input type="hidden" name="comment_srl" value="" />
                                    <input type="hidden" name="content" value="" />
                                    <?php echo $__Context->document->getCommentEditor() ?>
                                    <?php if($__Context->is_logged){ ?>
                                    <span class="member_<?php echo $__Context->logged_info->member_srl ?>"><strong class="name"><?php echo $__Context->logged_info->nick_name ?></strong></span> <span class="email"><?php echo $__Context->logged_info->email_address ?></span> <span class="url"><?php echo $__Context->logged_info->homepage ?></span>
                                    <?php }else{ ?>
                                    <input name="nick_name" type="text" class="iText name" value="Name" title="Name"/>
                                    <input name="password" type="password" class="iText pw" value="Password" title="Password" />
									<?php if($__Context->textyle->getInputEmail()!='N'){ ?>
										<input type="hidden" name="msg_input_email_address" value="<?php echo $__Context->lang->msg_input_email_address ?>"/>
										<input name="email_address" type="text" class="iText email<?php if($__Context->textyle->getInputEmail()=='R'){ ?> request<?php } ?>" value="Email address" title="Email address" />
									<?php } ?>
									<?php if($__Context->textyle->getInputWebsite()!='N'){ ?>
										<input type="hidden" name="msg_input_homepage" value="<?php echo $__Context->lang->msg_input_homepage ?>"/>
										<input name="homepage" type="text" class="iText url<?php if($__Context->textyle->getInputWebsite()=='R'){ ?> request<?php } ?>" value="URL" title="URL" />
									<?php } ?>
                                    <?php } ?>
                                    <input name="is_secret" id="secret1" type="checkbox" value="Y" class="inputCheck" />
                                    <label for="secret1"><?php echo $__Context->lang->secret ?></label>
                                    <input name="submit" type="submit" value="SUBMIT" class="inputSubmit" />
                                </form>
                            </fieldset>
                            <?php }else{ ?>
                            <p><?php echo $__Context->lang->disable_comment ?></p>
                            <?php } ?>
                        </div>
                    <?php } ?>
                <?php } ?>
