<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/overpol/skins/default','_header.html') ?>
<!-- .postListBody -->
<?php if($__Context->hub->textyles){ ?>
<div class="postListBody col-md-12 col-sm-12 col-xs-12" style="margin-top:40px">
	<?php if(count($__Context->hub->textyles)){ ?>
	<ul class="memberList">
		<?php if($__Context->hub->textyles&&count($__Context->hub->textyles))foreach($__Context->hub->textyles as $__Context->val){ ?>
		<div class="portpolio_pic col-lg-2 col-md-2 col-sm-2 col-xs-2" align="center">
			<a href="<?php echo getFullSiteUrl($__Context->val->domain) ?>">
			<img src="<?php echo $__Context->val->photo_src ?>" width="130"  height="130" alt="" class="thumb" />
			<p class="postTitle"><?php echo htmlspecialchars($__Context->val->textyle_title) ?></p>
				<dl class="blogMeta">
					<dt><?php echo $__Context->lang->posts ?></dt>
					<dd><?php echo number_format($__Context->val->document_count) ?></dd>
					<dt><?php echo $__Context->lang->comment ?></dt>
					<dd><?php echo number_format($__Context->val->comment_count) ?></dd>
				</dl>
			</a>
		</div>
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