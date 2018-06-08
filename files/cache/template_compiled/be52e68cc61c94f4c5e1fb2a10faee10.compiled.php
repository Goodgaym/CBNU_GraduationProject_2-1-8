<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/textyle/tpl/js/tool_textyle.js--><?php $__tmp=array('modules/textyle/tpl/js/tool_textyle.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/textyle/tpl/css/layout.css--><?php $__tmp=array('modules/textyle/tpl/css/layout.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/textyle/tpl/css/layer.css--><?php $__tmp=array('modules/textyle/tpl/css/layer.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/textyle/tpl/css/layout@textyleAdmin.css--><?php $__tmp=array('modules/textyle/tpl/css/layout@textyleAdmin.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/textyle/tpl/css/button.css--><?php $__tmp=array('modules/textyle/tpl/css/button.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/textyle/tpl/css/calendar.css--><?php $__tmp=array('modules/textyle/tpl/css/calendar.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div id="textyleAdmin" class="textyleAdmin hybrid">
	<div id="container" class="<?php if($__Context->containerClassName){;
echo $__Context->containerClassName;
}else{ ?>ec<?php } ?>">\
		<!-- Header -->
		<div id="header">
			<a href="#content" class="skipToContent">Skip to content</a>
			<h1><a href="http://www.xpressengine.org" onclick="window.open(this.href);return false;"><img src="/modules/textyle/tpl/img/hTextyle.gif" width="106" height="30" alt="textyle" /></a></h1>
			<hr />
			<div class="navigation">
				<div class="section">
					<h2>Navigation</h2>
					<?php if(Context::get('is_logged')){ ?>
					<ul>
						<li class="logout"><a href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></li>
					</ul>
					<?php } ?>
				</div>
			</div>
			<div class="title">
				<h2><?php echo $__Context->textyle->getTextyleTitle() ?></h2>
				<span class="btnGray large"><a href="<?php echo getSiteUrl($__Context->textyle->domain) ?>"><?php echo $__Context->lang->cmd_go_blog ?></a></span>
				<div class="approach">
					<span class="btnNewPost"><a href="<?php echo getUrl('','act','dispTextyleToolPostManageWrite') ?>"><?php echo $__Context->lang->cmd_new_post ?></a></span>
				</div>
			</div>
		</div>
		<hr />
		<!-- /Header -->
		<!-- Body -->
		<div id="body">
