<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/overpol/skins/default','_header.html') ?>
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
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/overpol/skins/default','posts.html') ?>
