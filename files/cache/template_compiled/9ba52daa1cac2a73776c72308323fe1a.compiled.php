<?php if(!defined("__XE__"))exit;?><div id="xe" class="fixed">
	<div id="container" class="c">
		<div id="header">
			<a href="#content" class="skipToContent">Skip to content</a>
			<h1><a href="<?php echo $__Context->home_url ?>"><?php echo $__Context->textyle_title ?></a></h1>
			<p class="blogURL"><a href="<?php echo $__Context->home_url ?>"><?php echo $__Context->home_url ?></a></p>
			<hr />
			<form action="<?php echo $__Context->root_url ?>" method="get" class="search"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
				<input name="vid" type="hidden" value="<?php echo $__Context->vid ?>" />
				<input name="mid" type="hidden" value="<?php echo $__Context->mid ?>" />
				<input name="act" type="hidden" value="dispTextyle" />
				<input name="search_target" type="hidden" value="title_content" />
				<fieldset>
					<legend><?php echo $__Context->lang->cmd_search ?></legend>
					<input name="search_keyword" type="text" class="iText" value="<?php echo $__Context->search_keyword ?>" title="SEARCH" />
					<input type="image" src="/files/attach/textyle/223/img/buttonSearch.gif" alt="<?php echo $__Context->lang->cmd_search ?>" class="btnSearch" />
				</fieldset>
			</form>
			<hr />
			<div class="extension">
				<div class="extexsionFixer"></div>
				<ul>
					<li<?php if($__Context->act=='dispTextyleProfile'){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->profile_url ?>">Profile</a></li>
					<li<?php if($__Context->act=='dispTextyleGuestbook'){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->guestbook_url ?>">GuestBook</a></li>
					<li<?php if($__Context->act=='dispTextyleTag'){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->tag_url ?>">Tag</a></li>
                    <?php if($__Context->extra_menus&&count($__Context->extra_menus))foreach($__Context->extra_menus as $__Context->key => $__Context->val){ ?>
					<li<?php if($__Context->key==$__Context->mid || $__Context->val==getUrl('','mid',$__Context->mid)){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val ?>"><?php echo $__Context->key ?></a></li>
                    <?php } ?>
                    <li><a href="<?php echo $__Context->admin_url ?>" accesskey="A">Admin</a></li>
				</ul>
			</div>
		</div>
        <hr />
        <div id="body">
            <div id="content" class="content">
				<div class="ieMarginFixer"></div>
                <?php if($__Context->textyle_mode == 'module'){ ?>
                    <?php echo $__Context->content ?>
                <?php }elseif($__Context->textyle_mode == 'profile'){ ?>
					<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('files/attach/textyle/223','profile.html') ?>
                
                <?php }else if($__Context->textyle_mode == 'guestbook'){ ?>
					<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('files/attach/textyle/223','guestbook.html') ?>
                
                <?php }else if($__Context->textyle_mode=='tags'){ ?>
					<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('files/attach/textyle/223','tags.html') ?>
                
                <?php }else if($__Context->textyle_mode=='comment_form'){ ?>
					<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('files/attach/textyle/223','comment_form.html') ?>
                 
                <?php }elseif($__Context->textyle_mode=='list'){ ?>
					<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('files/attach/textyle/223','post.title_list.html') ?>
					
                
                <?php }elseif($__Context->textyle_mode=='summary'){ ?>
					<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('files/attach/textyle/223','post.summary.html') ?>
                
                <?php }else{ ?>
					<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('files/attach/textyle/223','post.list.html') ?>
				<?php } ?>
                <?php if($__Context->page_navigation && $__Context->textyle_mode != 'module'){ ?>
                <div class="pagination paginationNum">
                    <?php if($__Context->page_navigation->cur_page>1){ ?><a class="prev" href="<?php echo getUrl('page',$__Context->page_navigation->cur_page-1) ?>"><span>PREV</span></a><?php } ?>
                    <?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
                        <?php if($__Context->page == $__Context->page_no){ ?>
                        <strong><?php echo $__Context->page_no ?></strong>
                        <?php }else{ ?>
                        <a href="<?php echo getUrl('page',$__Context->page_no,'document_srl','','entry','') ?>"><?php echo $__Context->page_no ?></a>
                        <?php } ?>
                    <?php } ?>
                    <?php if($__Context->page_navigation->cur_page<$__Context->page_navigation->total_page){ ?><a class="next" href="<?php echo getUrl('page',$__Context->page_navigation->cur_page+1) ?>"><span>NEXT</span></a><?php } ?>
                </div>
                <?php } ?>
            </div>
            <hr />
            
            <div class="extension e1">
				<!-- extensionHeader -->
				<div class="extensionHeader">
					<!-- section -->
					<div class="section sectionProfile">
						<div class="profileBody">
							<h2>Profile</h2>
							<div class="wgContainer">
								<div class="widgetProfile">
									<p><img src="<?php echo $__Context->textyle->getProfilePhotoSrc() ?>" alt="profile" class="profile" /><?php echo $__Context->textyle->getTextyleContent() ?></p>
								</div>
							</div>
						</div>
						<div class="profileFooter"></div>
					</div>
					<!-- /section -->
					<!-- section -->
					<div class="section sectionCategory">
						<div class="categoryBody">
							<h2>Category</h2>
                            <img class="zbxe_widget_output" widget="category" skin="default" total_title="<?php echo $__Context->lang->view_all ?>"  srl="<?php echo $__Context->textyle->module_srl ?>" />
						</div>
						<div class="categoryFooter"></div>
					</div>
					<!-- /section -->
				</div>
				<!-- /extensionHeader -->
				<!-- extensionFooter -->
				<div class="extensionFooter">
					<div class="section recentPost">
						<h2>Recent Post</h2>
                        <img class="zbxe_widget_output" widget="content" markup_type="list" list_count="5" skin="default" content_type="document" list_type="image_title" option_view="title" show_comment_count="Y" show_trackback_count="Y" show_category="N" show_icon="N" order_target="list_order" order_type="desc" thumbnail_type="crop" page_count="1" subject_cut_size="20" module_srls="<?php echo $__Context->textyle->module_srl ?>" thumbnail_width="84" thumbnail_height="93" />
                    </div>
                    <div class="section">
						<h2>Recent Comment</h2>
                        <img class="zbxe_widget_output" widget="content" markup_type="list" list_count="5" skin="default" content_type="comment" option_view="title" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="list_order" order_type="desc" thumbnail_type="crop" page_count="1" subject_cut_size="30" module_srls="<?php echo $__Context->textyle->module_srl ?>"/>
                    </div>
                    <div class="section">
						<h2>Recent Trackback</h2>
                        <img class="zbxe_widget_output" widget="content" markup_type="list" list_count="5" skin="default" content_type="trackback" option_view="title" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="list_order" order_type="desc" thumbnail_type="crop" page_count="1" subject_cut_size="30" module_srls="<?php echo $__Context->textyle->module_srl ?>"/>
                    </div>
                    <div class="section">
						<h2>Tag</h2>
                        <img class="zbxe_widget_output" widget="tag_list" list_count="20" skin="default" module_srls="<?php echo $__Context->textyle->module_srl ?>" />
                    </div>
					<div class="section">
						<h2>Link Site</h2>
						<div class="wgContainer">
							<ul class="widgetA">
								<li><a href="http://www.textyle.kr">Textyle</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /extensionFooter -->
            </div>
        </div>
        <hr />
		<div id="footer">
			<a href="<?php echo $__Context->home_url ?>/rss" class="rss"><img src="/files/attach/textyle/223/img/iconRss.gif" width="16" height="16" alt="RSS" /></a>
			<div class="language">
				<button type="button" onclick="jQuery('#selectLang').toggleClass('hide'); return false;" class="selected" title="<?php echo $__Context->lang_type ?>"><?php echo $__Context->lang_supported[$__Context->lang_type] ?></button>
            	<ul class="hide" id="selectLang">
                	<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key => $__Context->val){;
if($__Context->key!= $__Context->lang_type){ ?>
                	<li><button type="button" onclick="doChangeLangType('<?php echo $__Context->key ?>');return false;"><?php echo $__Context->val ?></button></li>
                	<?php };
} ?>
            	</ul>
			</div>
			<address>
			Powered by <a href="http://textyle.kr/">Textyle</a>
			</address>
		</div>
		<div class="pencilDecoration"></div>
	</div>
</div>
