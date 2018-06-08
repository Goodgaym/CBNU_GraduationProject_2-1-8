<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textylehub/skins/default','_header.html') ?>
		<!-- .postList -->
		<div class="postList">
			
			<!-- .postListHeader -->
			<div class="postListHeader">
				<h2 class="h2"><?php echo $__Context->lang->textyle_list ?></h2>
			</div>
			<!-- /.postListHeader -->
			
			<!-- .postListBody -->
            <?php if($__Context->hub->textyles){ ?>
			<div class="postListBody">
                <?php if(count($__Context->hub->textyles)){ ?>
				<ul class="memberList">
                    <?php if($__Context->hub->textyles&&count($__Context->hub->textyles))foreach($__Context->hub->textyles as $__Context->val){ ?>
					<li>
						<h3 class="postTitle"><a href="<?php echo getFullSiteUrl($__Context->val->domain) ?>"><img src="<?php echo $__Context->val->photo_src ?>" width="80" height="80" alt="" class="thumb" /> <?php echo htmlspecialchars($__Context->val->textyle_title) ?></a></h3>
						<p class="postSummary"><?php echo htmlspecialchars($__Context->val->textyle_content) ?></p>
						<dl class="blogMeta">
							<dt><?php echo $__Context->lang->posts ?></dt>
							<dd><?php echo number_format($__Context->val->document_count) ?></dd>
							<dt><?php echo $__Context->lang->comment ?></dt>
							<dd><?php echo number_format($__Context->val->comment_count) ?></dd>
							<dt><?php echo $__Context->lang->trackback ?></dt>
							<dd><?php echo number_format($__Context->val->trackback_count) ?></dd>
						</dl>
					</li>
                    <?php } ?>
				</ul>
                <?php } ?>
			</div>
			<!-- /.postListBody -->
			
                <!-- .pagination -->
                <?php if($__Context->page_navigation){ ?>
                <div class="pagination">
                    <?php if($__Context->page_navigation->cur_page-10>0){ ?><a href="<?php echo getUrl('page', $__Context->page_navigation->cur_page-10) ?>" class="nav prev10"><span>move prev 10 page</span></a><?php } ?>
                    <?php if($__Context->page_navigation->cur_page>1){ ?><a href="<?php echo getUrl('page', $__Context->page_navigation->cur_page-1) ?>" class="nav prev1"><span>move prev page</span></a><?php } ?>
                    <?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
                    <?php if($__Context->page_navigation->cur_page == $__Context->page_no){ ?>
                        <strong><?php echo $__Context->page_no ?></strong> 
                    <?php }else{ ?>
                        <a href="<?php echo getUrl('page',$__Context->page_no) ?>"><?php echo $__Context->page_no ?></a>
                    <?php } ?>
                    <?php } ?>
                    <?php if($__Context->page_navigation->cur_page<$__Context->page_navigation->total_page){ ?><a href="<?php echo getUrl('page', $__Context->page_navigation->cur_page+1) ?>" class="nav next1"><span>move next page</span></a><?php } ?>
                    <?php if($__Context->page_navigation->cur_page+10<$__Context->page_navigation->total_page){ ?><a href="<?php echo getUrl('page', $__Context->page_navigation->cur_page+10) ?>" class="nav next10"><span>move next 10 page</span></a><?php } ?>
                </div>
                <!-- /.pagination -->
                <?php } ?>
            <?php }else{ ?>
                <?php echo $__Context->lang->no_textyles ?>
            <?php } ?>
			
		</div>
		<!-- /.postList -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textylehub/skins/default','_footer.html') ?>
