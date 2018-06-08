<?php if(!defined("__XE__"))exit;?>                    <h2 class="postTitle">GuestBook <em><?php echo $__Context->page_navigation->total_count ?></em></h2>
                    <?php if(!$__Context->reply && !$__Context->modify){ ?>
                    <div class="replyForm">
                        <?php if($__Context->textyle->isEnableGuestbook()){ ?>
                        <form method="post" onsubmit="return insertGuestbookItem(this, insert_guestbook)" action=""><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
							<input name="mid" type="hidden" value="<?php echo $__Context->mid ?>" />
                            <input type="hidden" name="content" value="" />
                            <fieldset>
                                <?php echo $__Context->editor ?>
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
                            </fieldset>
                        </form>
                        <?php }else{ ?>
                        <p><?php echo $__Context->lang->disable_guestbook ?></p>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <div class="feedback reply">
                        <?php if($__Context->guestbook_list){ ?>
                        <ol class="feedbackOrder">
                            <?php if($__Context->guestbook_list&&count($__Context->guestbook_list))foreach($__Context->guestbook_list as $__Context->key => $__Context->val){ ?>
                            <?php if($__Context->modify == $__Context->val->textyle_guestbook_srl){ ?>
                            <li class="item replyForm">
                                <?php if($__Context->textyle->isEnableGuestbook()){ ?>
                                <form method="post" onsubmit="return insertGuestbookItem(this, insert_guestbook)" action=""><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
                                    <input name="mid" type="hidden" value="<?php echo $__Context->mid ?>" />
                                    <input type="hidden" name="content" value="<?php echo htmlspecialchars($__Context->val->content) ?>" />
                                    <input type="hidden" name="textyle_guestbook_srl" value="<?php echo $__Context->val->textyle_guestbook_srl ?>" />
                                    <fieldset>
                                        <?php echo $__Context->editor ?>
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
                                        <input name="is_secret" id="secret1" type="checkbox" value="Y" class="inputCheck" <?php if($__Context->val->is_secret==1){ ?>checked <?php } ?>/>
                                        <label for="secret1"><?php echo $__Context->lang->secret ?></label>
                                        <input name="submit" type="submit" value="SUBMIT" class="inputSubmit" />
                                    </fieldset>
                                </form>
                                <?php } ?>
                            </li>
                            <?php }else{ ?>
                            <li class="item<?php if($__Context->val->parent_srl>0){ ?> indent indent1<?php } ?>">
                                <div class="meta">
                                    <div class="thumb">
                                        <?php if($__Context->val->profile_image){ ?>
                                            <img src="<?php echo $__Context->val->profile_image ?>" alt="author" />
                                        <?php }else{ ?>
                                            <img src="/files/attach/textyle/396/img/iconAuthorNoImage.gif" width="39" height="39" alt="Author" />
                                        <?php } ?>
                                    </div>
                                    <h4 class="author">
										<?php if($__Context->val->homepage){ ?>
										<a href="<?php echo $__Context->val->homepage ?>" onclick="window.open(this.href);return false;" class="member_<?php echo $__Context->val->member_srl ?>"><?php echo $__Context->val->nick_name ?></a>
										<?php }else{ ?>
										<span class="member_<?php echo $__Context->val->member_srl ?>"><?php echo $__Context->val->nick_name ?></a>
										<?php } ?>
									</h4>
                                    <p class="date"><?php echo zdate($__Context->val->regdate,'Y.m.d') ?> <span class="hhmm"><?php echo zdate($__Context->val->regdate,'H:i') ?></span></p>
                                </div>
                                <div class="data textyleContent">
									<?php if($__Context->val->is_secret==-1 || $__Context->val->view_grant){ ?>
                                    <?php echo $__Context->val->content ?>
									<?php }else{ ?>
									<form action="" method="post" class="pwForm active guestbook<?php echo $__Context->key ?>" onsubmit="return checkPasswordGuestbook(this)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
										<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
										<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
										<input type="hidden" name="textyle_guestbook_srl" value="<?php echo $__Context->val->textyle_guestbook_srl ?>" />
										<label for="deletePw"><?php echo $__Context->lang->password ?> : </label> <input name="password" type="password" class="iText" id="deletePw" value="" /><input name="" type="submit" value="<?php echo $__Context->lang->cmd_confirm ?>" class="submit" />
									</form>
									<?php } ?>
									<form action="" method="post" class="modifyPw pwForm guestbook<?php echo $__Context->key ?>" onsubmit="return checkPasswordForModifyGuestbook(this)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
										<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
										<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
										<input type="hidden" name="textyle_guestbook_srl" value="<?php echo $__Context->val->textyle_guestbook_srl ?>" />
										<label for="deletePw"><?php echo $__Context->lang->password ?> : </label> <input name="password" type="password" class="iText" id="deletePw" value="" /><input name="" type="submit" value="<?php echo $__Context->lang->cmd_confirm ?>" class="submit" />
									</form>
									<form action="" method="post" class="deletePw pwForm guestbook<?php echo $__Context->key ?>"onsubmit="return checkPasswordForDeleteGuestbook(this)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
										<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
										<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
										<input type="hidden" name="textyle_guestbook_srl" value="<?php echo $__Context->val->textyle_guestbook_srl ?>" />
										<label for="deletePw"><?php echo $__Context->lang->password ?> : </label> <input name="password" type="password" class="iText" id="deletePw" value="" /><input name="" type="submit" value="<?php echo $__Context->lang->cmd_confirm ?>" class="submit" />
									</form>
									<ul class="reAction">
										<?php if($__Context->val->view_grant){ ?>
										<?php if($__Context->val->parent_srl==0&&$__Context->textyle->isEnableGuestbook()){ ?>
										<li><a href="<?php echo getUrl('modify','','reply',$__Context->val->textyle_guestbook_srl) ?>#gusetbook_<?php echo $__Context->val->textyle_guestbook_srl ?>"><?php echo $__Context->lang->cmd_reply ?></a></li>
										<?php } ?>
										
										<?php if($__Context->val->member_srl || $__Context->logged_info->is_site_admin){ ?>
											<?php if($__Context->logged_info->member_srl == $__Context->val->member_srl){ ?>
												<li><a href="<?php echo getUrl('reply','','modify',$__Context->val->textyle_guestbook_srl) ?>#gusetbook_<?php echo $__Context->val->textyle_guestbook_srl ?>"><?php echo $__Context->lang->cmd_modify ?>...</a></li>
											<?php } ?>
											<?php if($__Context->logged_info->is_site_admin || $__Context->logged_info->member_srl == $__Context->val->member_srl){ ?>
												<li><button type="button" onclick="if(confirm('<?php echo $__Context->lang->confirm_delete ?>')) deleteGuestbookItem(<?php echo $__Context->val->textyle_guestbook_srl ?>);"><?php echo $__Context->lang->cmd_delete ?></button></li>
											<?php } ?>
										<?php }else{ ?>
												<li><button type="button" onclick="jQuery('.guestbook<?php echo $__Context->key ?>').removeClass('active');jQuery('.modifyPw.guestbook<?php echo $__Context->key ?>').addClass('active')"><?php echo $__Context->lang->cmd_modify ?>...</button></li>
												<li><button type="button" onclick="jQuery('.guestbook<?php echo $__Context->key ?>').removeClass('active');jQuery('.deletePw.guestbook<?php echo $__Context->key ?>').addClass('active')"><?php echo $__Context->lang->cmd_delete ?></button></li>
										<?php } ?>
										<?php } ?>
									</ul>
                                </div>
                            </li>
                            <?php if($__Context->reply == $__Context->val->textyle_guestbook_srl){ ?>
                            <li class="item replyForm">
                                <?php if($__Context->textyle->isEnableGuestbook()){ ?>
                                <form method="post" onsubmit="return insertGuestbookItem(this, insert_guestbook)" action=""><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
									<input name="mid" type="hidden" value="<?php echo $__Context->mid ?>" />
                                    <input type="hidden" name="content" value="" />
                                    <input type="hidden" name="parent_srl" value="<?php echo $__Context->val->textyle_guestbook_srl ?>" />
                                    <fieldset>
                                        <?php echo $__Context->editor ?>
                                        <?php if($__Context->is_logged){ ?>
                                        <span class="member_<?php echo $__Context->logged_info->member_srl ?>"><strong class="name"><?php echo $__Context->logged_info->nick_name ?></strong></span> <span class="email"><?php echo $__Context->logged_info->email_address ?></span> <span class="url"><?php echo $__Context->logged_info->homepage ?></span>
                                        <?php }else{ ?>
                                        <input name="nick_name" type="text" class="iText name" value="Name" />
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
                                    </fieldset>
                                </form>
                                <?php }else{ ?>
                                <p><?php echo $__Context->lang->disable_guestbook ?></p>
                                <?php } ?>
                            </li>
                            <?php } ?>
                            <?php } ?>
                            <?php } ?>
                        </ol>
                        <?php } ?>
                    </div>
