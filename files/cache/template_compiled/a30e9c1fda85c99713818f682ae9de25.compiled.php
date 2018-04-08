<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textylehub/skins/default','_header.html') ?>
		<!-- .contentHeader -->
		<div class="postListHeader">
			<h2 class="h2"><?php echo $__Context->lang->cmd_create_textyle ?></h2>
		</div>
		<!-- /.contentHeader -->
		<!-- .blogCreation -->
		<form action="./" method="post" onsubmit="if(!jQuery('#userAgreement').get(0).checked) {alert('You have to agree to agreement prior to creating new blog.');return false;} return procFilter(this,creation);" class="blogCreation"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
            <input type="hidden" name="mid" value="<?php echo $__Context->module_info->mid ?>" />
			<fieldset>
				<table border="1" cellspacing="0">
					<tr>
						<th scope="row"><label for="blogAddress"><?php echo $__Context->lang->textyle_address ?></label></th>
						<td>
                            <?php if($__Context->module_info->access_type == 'vid'){ ?>
							<p><?php echo getFullUrl() ?><input name="textyle_address" type="text" class="inputText blogAddress" id="blogAddress" /></p>
                            <?php }else{ ?>
							<p>http://<input name="textyle_address" type="text" class="inputText blogAddress" id="blogAddress" />.<?php echo $__Context->module_info->default_domain ?></p>
                            <?php } ?>
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="blogTitle"><?php echo $__Context->lang->blog_title ?></label></th>
						<td><input name="blog_title" type="text" value="<?php echo $__Context->logged_info->nick_name ?>`s Textyle" class="inputText" id="blogTitle" /></td>
					</tr>
					<tr>
						<th scope="row"><label for="blogInfo"><?php echo $__Context->lang->blog_description ?></label></th>
						<td><input name="blog_description" type="text" class="inputText" id="blogInfo" /></td>
					</tr>
					<tr>
						<th scope="row"><?php echo $__Context->lang->textyle_agreement ?></th>
						<td>
							<div class="userAgreement"><?php echo nl2br($__Context->module_info->textyle_agreement) ?></div>
							<p class="check"><input name="accept_agree" type="checkbox" value="Y" class="inputCheck" id="userAgreement" /> <label for="userAgreement"><?php echo $__Context->lang->cmd_agree ?></label></p>
						</td>
					</tr>
				</table>
			</fieldset>
			<span class="tcb tcbLarge strong"><input type="submit" value="<?php echo $__Context->lang->cmd_create_textyle ?>" /></span>
			<span class="tcb tcbLarge"><a href="<?php echo getUrl('act','') ?>"><?php echo $__Context->lang->cmd_cancel ?></a></span>
		</form>
		<!-- .blogCreation -->
		
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textylehub/skins/default','_footer.html') ?>
