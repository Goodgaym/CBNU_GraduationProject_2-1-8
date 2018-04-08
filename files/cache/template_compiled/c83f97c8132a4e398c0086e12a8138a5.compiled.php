<?php if(!defined("__XE__"))exit;?>		
	</div>
	<!-- /.textyleContent -->
	
	<hr />
	
	<!-- .textyleExtension -->
	<div class="textyleExtension">
	
        <?php if($__Context->is_logged){ ?>
		<!-- .userAccount -->
		<div class="userAccount">
			<div class="userTop">
				<h2><?php echo sprintf($__Context->lang->msg_greeting, htmlspecialchars($__Context->logged_info->nick_name)) ?></h2>
				<span class="tcb tcbSmall logOut"><a href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></span>
                <?php if($__Context->logged_info->is_admin == 'Y'){ ?>
				<ul class="communityInfo">
					<li><?php echo $__Context->lang->created_textyle_count ?> : <em><?php echo $__Context->hub->total_textyle_count ?></em></li>
					<li><a href="<?php echo getUrl('','module','admin','act','dispTextyleAdminList') ?>"><?php echo $__Context->lang->cmd_management ?></a></li>
				</ul>
                <?php } ?>
			</div>
            <?php if($__Context->hub->own_textyle){ ?>
			<ul class="blogList">
                <?php if($__Context->hub->own_textyle&&count($__Context->hub->own_textyle))foreach($__Context->hub->own_textyle as $__Context->val){ ?>
				<li><a href="<?php echo getFullSiteUrl($__Context->val->domain) ?>"><?php echo htmlspecialchars(cut_str($__Context->val->textyle_title),30) ?></a> <span class="tcb tcbSmall"><a href="<?php echo getFullSiteUrl($__Context->val->domain,'','act','dispTextyleToolDashboard') ?>"><?php echo $__Context->lang->cmd_management ?></a></span></li>
                <?php } ?>
			</ul>
            <?php } ?>
            <?php if($__Context->hub->enable_creation){ ?>
			<span class="tcb tcbLarge strong"><a href="<?php echo getUrl('act','dispTextylehubCreate') ?>"><?php echo $__Context->lang->cmd_create_textyle ?></a></span>
            <?php } ?>
		</div>
		<!-- /.userAccount -->
        <?php } ?>
		
		<!-- .userUpdate -->
		<div class="userUpdate">
        
            <?php if($__Context->hub->newest_posts){ ?>
            <div class="textyleSection blogUpdate">
                <h2><?php echo $__Context->lang->newest_posts ?></h2>
                <ul>
                    <?php if($__Context->hub->newest_posts&&count($__Context->hub->newest_posts))foreach($__Context->hub->newest_posts as $__Context->val){ ?>
                    <li><a href="<?php echo $__Context->val->getPermanentUrl() ?>" class="blogTitle"><?php if($__Context->val->thumbnailExists()){ ?><img src="<?php echo $__Context->val->getThumbnail(39,39) ?>" width="39" height="39" alt="" class="userThumb" /><?php };
echo $__Context->val->getTitle(24) ?></a> <span class="blogMeta"><a class="userName member_<?php echo $__Context->val->get('member_srl') ?>"><?php echo $__Context->val->getNickName() ?></a> <span class="ymd"><?php echo $__Context->val->getRegdate("y.m.d") ?></span> <span class="hm"><?php echo $__Context->val->getRegdate("H:i") ?></span></span></li>
                    <?php } ?>
                </ul>
                <a href="<?php echo getUrl('','mid',$__Context->module_info->mid) ?>" class="more"><?php echo $__Context->lang->more ?></a>
            </div>
            <?php } ?>
		
            <div class="textyleSection blogUpdate">
                <h2><?php echo $__Context->lang->updated_textyle ?></h2>
                <?php if(count($__Context->hub->updated_textyles)){ ?>
                <ul>
                    <?php if($__Context->hub->updated_textyles&&count($__Context->hub->updated_textyles))foreach($__Context->hub->updated_textyles as $__Context->val){ ?>
                    <li><a href="<?php echo getSiteUrl($__Context->val->domain) ?>" class="blogTitle"><img src="<?php echo $__Context->val->photo_src ?>" width="39" height="39" alt="" class="userThumb" /><?php echo htmlspecialchars(cut_str($__Context->val->textyle_title),24) ?></a> <span class="blogMeta"><a class="userName member_<?php echo $__Context->val->member_srl ?>"><?php echo $__Context->val->nick_name ?></a> <span class="ymd"><?php echo zdate($__Context->val->regdate,"y.m.d") ?></span> <span class="hm"><?php echo zdate($__Context->val->regdate,"H:i") ?></span></span></li>
                    <?php } ?>
                </ul>
                <a href="<?php echo getUrl('act','dispTextylehubUpdated') ?>" class="more"><?php echo $__Context->lang->more ?></a>
                <?php }else{ ?>
                    <?php echo $__Context->lang->no_textyles ?>
                <?php } ?>
            </div>
			
			<!-- .reply -->
			<div class="textyleSection blogReply">
				<h2><?php echo $__Context->lang->newest_comment ?></h2>
                <?php if(count($__Context->hub->newest_comment)){ ?>
				<ul>
                    <?php if($__Context->hub->newest_comment&&count($__Context->hub->newest_comment))foreach($__Context->hub->newest_comment as $__Context->val){ ?>
					<li><a href="<?php echo getFullUrl('','document_srl',$__Context->val->document_srl) ?>"><?php echo $__Context->val->getSummary(26) ?></a></li>
                    <?php } ?>
				</ul>
                <?php }else{ ?>
                    <?php echo $__Context->lang->no_comments ?>
                <?php } ?>
			</div>
			<!-- /.reply -->
			
			<!-- .trackback -->
			<div class="textyleSection blogTrackback">
				<h2><?php echo $__Context->lang->newest_trackback ?></h2>
                <?php if(count($__Context->hub->newest_trackback)){ ?>
				<ul>
                    <?php if($__Context->hub->newest_trackback&&count($__Context->hub->newest_trackback))foreach($__Context->hub->newest_trackback as $__Context->val){ ?>
					<li><a href="<?php echo getFullUrl('','document_srl',$__Context->val->document_srl) ?>#trackback"><?php echo htmlspecialchars(cut_str($__Context->val->title,26)) ?></a></li>
                    <?php } ?>
				</ul>
                <?php }else{ ?>
                    <?php echo $__Context->lang->no_trackbacks ?>
                <?php } ?>
			</div>
			<!-- /.trackback -->
            <?php if(count($__Context->hub->tags)){ ?>
			<!-- .tag -->
			<div class="textyleSection blogTag">
				<h2><?php echo $__Context->lang->tag ?></h2>
				<ul class="widgetTagCloud">
                    <?php if($__Context->hub->tags&&count($__Context->hub->tags))foreach($__Context->hub->tags as $__Context->key => $__Context->val){ ?>
					<li class="level<?php echo $__Context->val->rank ?>"><a href="<?php echo getUrl('search_target','tag','search_keyword',$__Context->val->tag) ?>"><?php echo $__Context->val->tag ?></a></li>
                    <?php } ?>
				</ul>
			</div>
			<!-- /.tag -->
            <?php } ?>
			
		</div>
		<!-- /.userUpdate -->
		
	</div>
	<!-- /.textyleExtension -->
	
</div>
<!-- /.textyleBody -->
<?php echo $__Context->module_info->footer_text ?>
