<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textylehub/skins/default','_header.html') ?>
        <?php if($__Context->module_info->intro_image || $__Context->module_info->intro_text){ ?>
		<div class="userDefine">
            <?php if($__Context->module_info->intro_image){ ?>
			<img src="<?php echo $__Context->module_info->intro_image ?>" alt="" />
            <?php } ?>
            <?php if($__Context->module_info->intro_text){ ?>
            <p class="introText"><?php echo $__Context->module_info->intro_text ?></p>
            <?php } ?>
		</div>
        <?php } ?>
		
		<!-- .postList -->
		<div class="postList">
			
			<!-- .postListHeader -->
			<div class="postListHeader">
				<h2 class="h2"><?php echo $__Context->lang->newest_posts ?></h2>
				<form action="<?php echo getUrl('') ?>" method="get" class="postSearch"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
                    <input type="hidden" name="mid" value="<?php echo $__Context->module_info->mid ?>" />
					<fieldset>
						<legend><?php echo $__Context->lang->cmd_search ?></legend>
						<select name="search_target">
							<option value="title"><?php echo $__Context->lang->title ?></option>
							<option value="tag" <?php if($__Context->search_target=='tag'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->tag ?></option>
							<option value="content" <?php if($__Context->search_target=='content'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->content ?></option>
						</select>
						<input name="search_keyword" type="text" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" title="<?php echo $__Context->lang->cmd_search ?>" class="inputText" />
                        <?php if($__Context->search_target && $__Context->search_keyword){ ?>
						<span class="tcb tcbMedium"><input type="button" value="<?php echo $__Context->lang->cmd_cancel ?>" onclick="location.href='<?php echo getUrl('','mid',$__Context->module_info->mid) ?>'; return false;"/></span>
                        <?php }else{ ?>
						<span class="tcb tcbMedium"><input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" /></span>
                        <?php } ?>
					</fieldset>
				</form>
			</div>
			<!-- /.postListHeader -->
			
            <?php if(count($__Context->hub->posts)){ ?>
                <!-- .postListBody -->
                <div class="postListBody">
                    <ul class="postList">
                        <?php if($__Context->hub->posts&&count($__Context->hub->posts))foreach($__Context->hub->posts as $__Context->key => $__Context->val){ ?>
                        <li>
                            <h3 class="postTitle"><a href="<?php echo getFullUrl('','document_srl',$__Context->val->document_srl) ?>"><?php if($__Context->val->thumbnailExists()){ ?><img src="<?php echo $__Context->val->getThumbnail(95,95) ?>" width="95" height="95" alt="" class="thumb" /><?php };
echo $__Context->val->getTitle() ?></a> <?php if($__Context->val->getCommentCount()){ ?><em>[<?php echo $__Context->val->getCommentCount() ?>]</em><?php } ?></h3>
                            <p class="postMeta"><span class="userName">by <a href="#" onclick="return false;" class="member_<?php echo $__Context->val->get('member_srl') ?>"><?php echo $__Context->val->getNickName() ?></a></span> <span class="ymd"><?php echo $__Context->val->getRegdate("y.m.d") ?></span> <span class="hm"><?php echo $__Context->val->getRegdate("H:i") ?></span></p>
                            <p class="postSummary"><?php echo $__Context->val->getSummary(140) ?></p>
                        </li>
                        <?php } ?>
                    </ul>
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
                <?php echo $__Context->lang->no_posts ?>
            <?php } ?>
			
		</div>
		<!-- /.postList -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textylehub/skins/default','_footer.html') ?>
