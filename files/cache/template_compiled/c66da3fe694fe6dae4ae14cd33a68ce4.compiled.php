<?php if(!defined("__XE__"))exit;?><!-- header -->
<div id="header">
	<a href="#content" class="skip">Skip to Content</a>
	<h1><a href="<?php echo $__Context->home_url ?>"><?php echo $__Context->textyle_title ?></a></h1>
	<p class="blogInfo"><?php echo $__Context->textyle->getTextyleContent() ?></p>
	<!-- gnb -->
	<div class="gnb">
		<ul>
			<li<?php if($__Context->act=='dispTextyleProfile'){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->profile_url ?>">Profile</a></li>
			<li<?php if($__Context->act=='dispTextyleGuestbook'){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->guestbook_url ?>">GuestBook</a></li>
			<li<?php if($__Context->act=='dispTextyleTag'){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->tag_url ?>">Tag</a></li>
			<?php if($__Context->extra_menus&&count($__Context->extra_menus))foreach($__Context->extra_menus as $__Context->key => $__Context->val){ ?>
			<li<?php if(strtolower($__Context->key)==$__Context->mid){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val ?>"><?php echo $__Context->key ?></a></li>
			<?php } ?>
			<li><a href="<?php echo $__Context->admin_url ?>" class="admin" accesskey="A">Admin</a></li>
		</ul>
		<div class="search">
			<form action="<?php echo $__Context->root_url ?>" method="get"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
				<input name="vid" type="hidden" value="<?php echo $__Context->vid ?>" />
				<input name="mid" type="hidden" value="textyle" />
				<input name="act" type="hidden" value="dispTextyle" />
				<input name="search_target" type="hidden" value="title_content" />
				<fieldset>
					<legend><?php echo $__Context->lang->cmd_search ?></legend>
					<input name="search_keyword" type="text" class="iText" value="<?php echo $__Context->search_keyword ?>" title="SEARCH" />
					<button type="submit" class="btnSearch"><span><?php echo $__Context->lang->cmd_search ?></span></button>
				</fieldset>
			</form>
		</div>
	</div>
	<!-- /gnb -->
</div>
<!-- /header -->
