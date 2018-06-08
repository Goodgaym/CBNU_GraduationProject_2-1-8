<?php if(!defined("__XE__"))exit;?><!--#Meta:files/attach/textyle/553/textyle.js--><?php $__tmp=array('files/attach/textyle/553/textyle.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!-- display Post Body -->
<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->document){ ?>
<h2 class="postTitle"><a href="<?php echo $__Context->document->getPermanentUrl() ?>"><?php echo $__Context->document->getTitle() ?></a> <span class="category"><?php echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?></span></h2>
<p class="postMeta">
	<span class="yymmdd"><?php echo $__Context->document->getRegdate('Y.m.d') ?></span> 
	<span class="hhmm"><?php echo $__Context->document->getRegdate('H:i') ?></span> 
	<span class="author"><?php echo $__Context->document->getNickName() ?></span> 
	<a href="<?php echo getSiteUrl($__Context->textyle->domain,'document_srl',$__Context->document->document_srl,'act','dispTextyleToolPostManageWrite') ?>" class="editPost">EDIT</a>
</p>
<div class="xe_content">
	<?php echo $__Context->post_prefix ?>
	<?php echo $__Context->document->getContent(false) ?>
	<?php echo $__Context->post_suffix ?>
</div>
<ul class="sns">
	<li class="twitter"><a href="http://twitter.com/">Twitter</a></li>
	<li class="me2day"><a href="http://me2day.net/">Me2day</a></li>
	<li class="facebook"><a href="http://facebook.com/">Facebook</a></li>
	<li class="delicious"><a href="http://delicious.com/">Delicious</a></li>
</ul>
<script>
	jQuery(function($){
		$('.twitter>a').snspost({
			type : 'twitter',
			content : '<?php echo $__Context->document->getTitle() ?> <?php echo $__Context->document->getPermanentUrl() ?>'
		});
		$('.me2day>a').snspost({
			type : 'me2day',
			content : '\"<?php echo $__Context->document->getTitle() ?>\":<?php echo $__Context->document->getPermanentUrl() ?>'
		});
		$('.facebook>a').snspost({
			type : 'facebook',
			content : '<?php echo $__Context->document->getTitle() ?>'
		});
		$('.delicious>a').snspost({
			type : 'delicious',
			content : '<?php echo $__Context->document->getTitle() ?>'
		});
	});
</script>
<?php $__Context->tag_list = $__Context->document->get('tag_list'); ?>
<?php if(count($__Context->tag_list)){ ?><dl class="usedTag">
	<dt>Tag :</dt>
	<dd>
		<?php for($__Context->i=0,$__Context->c=count($__Context->tag_list);$__Context->i<$__Context->c;$__Context->i++){ ?>
		<a href="<?php echo getUrl('search_target','tag','search_keyword',$__Context->tag_list[$__Context->i],'document_srl','') ?>" rel="tag"><?php echo htmlspecialchars($__Context->tag_list[$__Context->i]) ?></a><?php if($__Context->i<$__Context->c-1){ ?>, <?php } ?>
		<?php } ?>
	</dd>
</dl><?php } ?>
<!-- trackback -->
<div id="trackback" class="feedback trackback">
	<h3 class="feedbackTitle"><?php echo $__Context->lang->trackback ?> <em><?php echo $__Context->document->getTrackbackCount() ?></em></h3>
	<p class="trackbackURL">
		<a href="<?php echo $__Context->document->getTrackbackUrl() ?>" onclick="return false" title="<?php echo $__Context->lang->trackback_url ?>"><?php echo $__Context->document->getTrackbackUrl() ?></a>
	</p>
	<?php if($__Context->document->getTrackbackCount()){ ?><ol class="feedbackOrder">
		<?php if($__Context->document->getTrackbacks()&&count($__Context->document->getTrackbacks()))foreach($__Context->document->getTrackbacks() as $__Context->key=>$__Context->val){ ?><li class="item" id="trackback_<?php echo $__Context->val->trackback_srl ?>">
			<div class="meta">
				<h4 class="title"><a href="<?php echo $__Context->val->url ?>"><?php echo htmlspecialchars($__Context->val->blog_name) ?></a></h4>
				<p class="date"><?php echo zdate($__Context->val->regdate, "Y.m.d H:i") ?></p>
			</div>
			<p class="data xe_content"><?php echo $__Context->val->excerpt ?></p>
		</li><?php } ?>
	</ol><?php } ?>
</div>
<!-- /trackback -->
<!-- comment -->
<?php if($__Context->document->allowComment()){ ?><div id="comment" class="feedback reply">
	<h3 class="feedbackTitle"><?php echo $__Context->lang->comment ?> <em><?php echo $__Context->document->getCommentCount() ?></em></h3>
	<?php if($__Context->document->getCommentCount()){ ?><ol class="feedbackOrder">
		<?php if($__Context->document->getComments()&&count($__Context->document->getComments()))foreach($__Context->document->getComments() as $__Context->key=>$__Context->comment){ ?><li<?php if(!$__Context->comment->get('depth')){ ?> class="item"<?php };
if($__Context->comment->get('depth')){ ?> class="item indent indent<?php echo $__Context->comment->get('depth') ?>"<?php } ?>>
			<div class="meta">
				<h4 class="author">
					<?php if($__Context->comment->homepage){ ?><a href="<?php echo $__Context->comment->homepage ?>"><?php echo $__Context->comment->getNickName() ?></a><?php } ?>
					<?php if(!$__Context->comment->homepage){;
echo $__Context->comment->getNickName();
} ?>
				</h4>
				<p class="date"><?php echo $__Context->comment->getRegdate('Y.m.d H:i') ?></p>
			</div>
			<div id="comment_<?php echo $__Context->comment->comment_srl ?>" class="data xe_content">
				<?php if($__Context->comment->isAccessible()){ ?>
				<?php echo $__Context->comment->getContent(false) ?>
				<?php } ?>
				<?php if(!$__Context->comment->isAccessible()){ ?><form action="./" method="get" onsubmit="return procFilter(this, input_password)" class="pwForm active"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
					<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
					<input type="hidden" name="document_srl" value="<?php echo $__Context->comment->get('document_srl') ?>" />
					<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment->get('comment_srl') ?>" />
					<label for="readPw"><?php echo $__Context->lang->password ?> : </label> <input name="password" type="password" class="iText" id="readPw" value="" /><input name="" type="submit" value="<?php echo $__Context->lang->cmd_confirm ?>" class="submit" />
				</form><?php } ?>
				<?php if(!$__Context->comment->member_srl){ ?><form action="" method="post" class="modifyPw pwForm comment<?php echo $__Context->key ?>" onsubmit="return checkPasswordForModifyComment(this)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
					<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
					<input type="hidden" name="document_srl" value="<?php echo $__Context->comment->get('document_srl') ?>" />
					<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment->get('comment_srl') ?>" />
					<label for="modifyPw"><?php echo $__Context->lang->password ?> : </label> <input name="password" type="password" class="iText" id="modifyPw" value="" /><input name="" type="submit" value="<?php echo $__Context->lang->cmd_confirm ?>" class="submit" />
				</form><?php } ?>
				<?php if(!$__Context->comment->member_srl){ ?><form action="" method="post" class="deletePw pwForm comment<?php echo $__Context->key ?>" onsubmit="return checkPasswordForDeleteComment(this)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
					<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
					<input type="hidden" name="document_srl" value="<?php echo $__Context->comment->get('document_srl') ?>" />
					<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment->get('comment_srl') ?>" />
					<label for="deletePw"><?php echo $__Context->lang->password ?> : </label> <input name="password" type="password" class="iText" id="deletePw" value="" /><input name="" type="submit" value="<?php echo $__Context->lang->cmd_confirm ?>" class="submit" />
				</form><?php } ?>
			</div>
			<?php if($__Context->comment->isAccessible()){ ?><ul class="reAction">
				<?php if($__Context->textyle->isEnableComment()){ ?><li><a href="<?php echo getUrl('','mid',$__Context->mid,'comment_srl',$__Context->comment->comment_srl,'document_srl',$__Context->document->document_srl,'act','dispTextyleCommentReply') ?>"><?php echo $__Context->lang->cmd_reply ?></a></li><?php } ?>
				<?php if($__Context->comment->member_srl){ ?>
					<?php if($__Context->comment->isGranted() || $__Context->comment->member_srl==$__Context->logged_info->member_srl){ ?>
						<li><a href="<?php echo getUrl('','mid',$__Context->mid,'comment_srl',$__Context->comment->comment_srl,'document_srl',$__Context->document->document_srl,'act','dispTextyleCommentModify') ?>"><?php echo $__Context->lang->cmd_modify ?>...</a></li>
						<li><button type="button" onclick="if(confirm('<?php echo $__Context->lang->confirm_delete ?>')) deleteCommentItem(<?php echo $__Context->comment->comment_srl ?>);"><?php echo $__Context->lang->cmd_delete ?></button></li>
					<?php } ?>
				<?php } ?>
				<?php if(!$__Context->comment->member_srl){ ?>
					<li><button type="button" onclick="jQuery('.comment<?php echo $__Context->key ?>').removeClass('active');jQuery('.modifyPw.comment<?php echo $__Context->key ?>').addClass('active')"><?php echo $__Context->lang->cmd_modify ?>...</button></li>
					<li><button type="button" onclick="jQuery('.comment<?php echo $__Context->key ?>').removeClass('active');jQuery('.deletePw.comment<?php echo $__Context->key ?>').addClass('active')"><?php echo $__Context->lang->cmd_delete ?></button></li>
				<?php } ?>
			</ul><?php } ?>
		</li><?php } ?>
	</ol><?php } ?>
</div><?php } ?>
<!-- /comment -->
<?php } ?>
<!-- /display Post Body -->
<?php if($__Context->document->comment_page_navigation){ ?><div class="pn pnNum">
	<a href="<?php echo getUrl('cpage',1) ?>#comment" class="prev"><span><?php echo $__Context->lang->first_page ?></span></a>
	<?php while($__Context->page_no = $__Context->document->comment_page_navigation->getNextPage()){ ?>
	<?php if($__Context->cpage == $__Context->page_no){ ?><strong><?php echo $__Context->page_no ?></strong><?php } ?>
	<?php if($__Context->cpage != $__Context->page_no){ ?><a href="<?php echo getUrl('cpage',$__Context->page_no) ?>#comment"><?php echo $__Context->page_no ?></a><?php } ?>
	<?php } ?>
	<a href="<?php echo getUrl('cpage',$__Context->document->comment_page_navigation->last_page) ?>#comment" class="next"><span><?php echo $__Context->lang->last_page ?></span></a>
</div><?php } ?>
<?php if($__Context->document->allowComment()){ ?><div class="replyForm">
	<h3>Leave Comments</h3>
	<?php if($__Context->textyle->isEnableComment()){ ?>
	<fieldset>
		<form method="post" onsubmit="return insertCommentItem(this, insert_comment)" action=""><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input name="mid" type="hidden" value="textyle" />
			<input type="hidden" name="document_srl" value="<?php echo $__Context->document->document_srl ?>" />
			<input type="hidden" name="comment_srl" value="" />
			<textarea class="iTextArea" name="content" rows="8" cols="42"></textarea>
			<?php if($__Context->is_logged){ ?>
				<strong class="name"><?php echo $__Context->logged_info->nick_name ?></strong> <span class="email"><?php echo $__Context->logged_info->email_address ?></span> <span class="url"><?php echo $__Context->logged_info->homepage ?></span>
			<?php } ?>
			<?php if(!$__Context->is_logged){ ?>
				<input name="nick_name" type="text" class="iText name" placeholder="Name" title="Name"/>
				<input name="password" type="password" class="iText pw" placeholder="Password" title="Password" />
				<?php if($__Context->textyle->getInputEmail()!='N'){ ?>
					<input type="hidden" name="msg_input_email_address" value="<?php echo $__Context->lang->msg_input_email_address ?>"/>
					<input name="email_address" type="text"<?php if($__Context->textyle->getInputEmail()!='R'){ ?> class="iText email"<?php } ?> class="iText email request"|<?php if($__Context->textyle->getInputEmail()=='R'){ ?> class="iText email"<?php } ?> placeholder="Email address" title="Email address" />
				<?php } ?>
				<?php if($__Context->textyle->getInputWebsite()!='N'){ ?>
					<input type="hidden" name="msg_input_homepage" value="<?php echo $__Context->lang->msg_input_homepage ?>"/>
					<input name="homepage" type="text"<?php if($__Context->textyle->getInputWebsite()!='R'){ ?> class="iText url"<?php };
if($__Context->textyle->getInputWebsite()=='R'){ ?> class="iText url request"<?php } ?> placeholder="URL" title="URL" />
				<?php } ?>
			<?php } ?>
			<input name="is_secret" id="secret1" type="checkbox" value="Y" class="iCheck" />
			<label for="secret1"><?php echo $__Context->lang->secret ?></label>
			<input name="submit" type="submit" value="SUBMIT" class="inputSubmit" />
		</form>
	</fieldset>
	<?php } ?>
	<?php if(!$__Context->textyle->isEnableComment()){ ?><p><?php echo $__Context->lang->disable_comment ?></p><?php } ?>
</div><?php } ?>
