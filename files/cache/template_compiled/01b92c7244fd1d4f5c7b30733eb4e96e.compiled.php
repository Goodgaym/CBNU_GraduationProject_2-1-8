<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
<!--#Meta:modules/textyle/tpl/css/calendar.css--><?php $__tmp=array('modules/textyle/tpl/css/calendar.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
			<!-- Content -->
			<div id="content">
				
				<!-- contentHeader -->
				<div class="contentHeader skinHeader">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[4]['dispTextyleToolLayoutConfigSkin'] ?></h3>
				</div>
				<!-- /contentHeader -->
				
				<!-- mySkin -->
				<div class="section mySkin">
					<div class="container">
						<div class="thumb">
							<img src="<?php echo $__Context->cur_skin->large_screenshot ?>" width="260" height="195" alt="<?php echo htmlspecialchars($__Context->cur_skin->title) ?>" />
						</div>
						<p class="using"><img src="/modules/textyle/tpl/img/iconUsing.png" width="57" height="58" alt="<?php echo $__Context->lang->cmd_use_ing ?>" /></p>
						<div class="summary">
							<div class="sHeader">
								<h4 class="h4"><?php echo htmlspecialchars($__Context->cur_skin->title) ?></h4>
							</div>
							<p class="contributor">by <?php echo $__Context->cur_skin->author ?></p>
							<p class="description"><?php echo $__Context->cur_skin->description ?></p>
							<div class="btnArea">
								<span class="btnGray medium"><a href="<?php echo getUrl('act','dispTextyleToolLayoutConfigEdit') ?>"><?php echo $__Context->lang->cmd_edit_htmlcss ?></a></span>
							</div>
						</div>
					</div>
					<span class="outline ml"></span>
					<span class="outline mr"></span>
					<span class="outline tc"></span>
					<span class="outline bc"></span>
					<span class="outline tl"></span>
					<span class="outline tr"></span>
					<span class="outline bl"></span>
					<span class="outline br"></span>
				</div>
				<!-- /mySkin -->
				
				<!-- Skin List -->
				<div class="skinList">
					<ul>
                        <?php if($__Context->skins&&count($__Context->skins))foreach($__Context->skins as $__Context->key => $__Context->val){ ?>
						<li>
							<dl>
								<dt><a href="<?php echo getSiteUrl($__Context->textyle->domain, '', 'skin_preview', $__Context->key) ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->val->title ?></a></dt>
								<dd class="thumb"><img src="<?php echo $__Context->val->small_screenshot ?>" width="138" height="87" alt="<?php echo htmlspecialchars($__Context->val->title) ?>" /></dd>
								<dd class="download">
									<span class="btnGray small"><a href="<?php echo getSiteUrl($__Context->textyle->domain, '', 'preview_skin', $__Context->key) ?>" target="_blank" title="<?php echo $__Context->lang->cmd_new_window ?>"><?php echo $__Context->lang->cmd_preview_skin ?></a></span>
									<span class="btnGray small"><button type="button" onclick="if(confirm('<?php echo $__Context->lang->msg_select_skin ?>')) doSelectSkin('<?php echo $__Context->key ?>'); return false;"><?php echo $__Context->lang->cmd_select_skin ?></button></span>
								</dd>
							</dl>
						</li>
                        <?php } ?>
					</ul>
				</div>
				<!-- /Skin List -->
			</div>
			<hr />
			<!-- /Content -->
			
			<!-- Extension -->
				<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_menu.html') ?>
			<!-- Extension -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_footer.html') ?>
