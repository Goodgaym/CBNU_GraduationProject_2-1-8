<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
			<!-- Content -->
			<div id="content" class="categoryContent">
				<!-- contentHeader -->
				<div class="contentHeader categoryHeader">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[1]['dispTextyleToolPostManageCategory'] ?></h3>
				</div>
				<?php echo $__Context->category_content ?>
				
			</div>
			<hr />
			<!-- /Content -->
			<!-- Extension -->
				<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_menu.html') ?>
			<!-- Extension -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_footer.html') ?>
