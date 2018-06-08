<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/overpol/skins/default','_header.html') ?>
<?php if(count($__Context->hub->posts)){ ?>
    <!-- .postListBody -->
    <div class="postListBody col-md-12 col-sm-12 col-xs-12" style="margin-top:40px">
        <?php if($__Context->hub->posts&&count($__Context->hub->posts))foreach($__Context->hub->posts as $__Context->key => $__Context->val){ ?>
            <div class="portpolio_pic col-lg-4 col-md-4 col-sm-4 col-xs-6" align="center">
                <span class="postTitle">
					<a href="<?php echo getFullUrl('','document_srl',$__Context->val->document_srl) ?>">
					<?php if($__Context->val->thumbnailExists()){ ?>
						<img src="<?php echo $__Context->val->getThumbnail(323,200) ?>" alt="" class="img-responsive thumb" />
					<?php }else{ ?>
						<img src="/modules/Overpol/skins/default/assets/photo_1.jpg" alt="" class="img-responsive thumb" />
					<?php } ?>
					<?php echo $__Context->val->getTitle() ?></a> 
					<?php if($__Context->val->getCommentCount()){ ?>
						<em>[<?php echo $__Context->val->getCommentCount() ?>]</em>
					<?php } ?>
				</span>
                <p class="postMeta"><a href="#" onclick="return false;" class="member_<?php echo $__Context->val->get('member_srl') ?>"><?php echo $__Context->val->getNickName() ?></a></span> <span class="ymd"><?php echo $__Context->val->getRegdate("y.m.d") ?></span> <span class="hm" style="font-size:50%">(<?php echo $__Context->val->getRegdate("H:i") ?>)</span></p>
            </div>
        <?php } ?>
    </div>
    <!-- /.postListBody -->
    <!-- .pagination -->
    <?php if($__Context->page_navigation){ ?>
        <div class="pagination" align="center">
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
    <?php echo $__Context->lang->no_posts ?>
<?php } ?>