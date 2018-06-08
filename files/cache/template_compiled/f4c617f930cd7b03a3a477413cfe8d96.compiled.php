<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/editor/tpl/css/editor.css--><?php $__tmp=array('modules/editor/tpl/css/editor.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/tpl/css/editor_admin.css--><?php $__tmp=array('modules/editor/tpl/css/editor_admin.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/tpl/js/editor_admin.js--><?php $__tmp=array('modules/editor/tpl/js/editor_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1><?php echo $__Context->lang->editor ?></h1>
</div>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/editor/tpl/setup_component/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<section class="section">
	<h1><?php echo $__Context->lang->cmd_setup ?></h1>
	<?php Context::addJsFile("modules/editor/ruleset/setupComponent.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="setupComponent" />
		<input type="hidden" name="module" value="editor" />
		<input type="hidden" name="act" value="procEditorAdminSetupComponent" />
		<input type="hidden" name="component_name" value="<?php echo $__Context->component_name ?>" />
		<input type="hidden" name="xe_validator_id" value="modules/editor/tpl/setup_component/1" />
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->component_name ?></label>
			<div class="x_controls"><?php echo $__Context->component->title ?>(<?php echo $__Context->component->component_name ?>) ver. <?php echo $__Context->component->version ?></div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->component_author ?></label>
			<div class="x_controls">
			<?php if($__Context->component->author&&count($__Context->component->author))foreach($__Context->component->author as $__Context->author){ ?>
<?php echo $__Context->author->name ?> (<a href="<?php echo $__Context->author->homepage ?>" target="_blank" rel="noopener"><?php echo $__Context->author->homepage ?></a>, <a href="mailto:<?php echo $__Context->author->email_address ?>"><?php echo $__Context->author->email_address ?></a>)<br />
<?php } ?>
			</div>
		</div>
		<?php if($__Context->component->link){ ?><div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->component_link ?></label>
			<div class="x_controls">
				<a href="#" onclick="winopen('<?php echo $__Context->component->link ?>');return false;"><?php echo $__Context->component->link ?></a>
			</div>
		</div><?php } ?>
		<?php if(count($__Context->component->extra_vars)){ ?>
			<?php if($__Context->component->extra_vars&&count($__Context->component->extra_vars))foreach($__Context->component->extra_vars as $__Context->id=>$__Context->var){ ?>
				<?php if($__Context->group != $__Context->var->group){ ?>
					<h2><?php echo $__Context->var->group ?></h2>
					<?php $__Context->group = $__Context->var->group ?>
				<?php } ?>
				<?php $__Context->not_first = true ?>
				<?php if(!$__Context->not_first && $__Context->group != $__Context->var->group){ ?><div class="x_control-group"></div><?php } ?>
				<div class="x_control-group">
					<label class="x_control-label"<?php if($__Context->var->type != 'textarea'){ ?> for="<?php echo $__Context->var->name ?>"<?php };
if($__Context->var->type == 'textarea'){ ?> for="lang_<?php echo $__Context->var->name ?>"<?php } ?>><?php echo $__Context->var->title ?></label>
					<div class="x_controls">
						<?php if($__Context->var->type == 'text'){ ?><input type="text" name="<?php echo $__Context->var->name ?>" id="<?php echo $__Context->var->name ?>" value="<?php echo htmlspecialchars($__Context->var->value, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>"><?php } ?>
						<?php if($__Context->var->type == 'textarea'){ ?><textarea name="<?php echo $__Context->var->name ?>" id="<?php echo $__Context->var->name ?>" rows="8" cols="42"><?php echo htmlspecialchars($__Context->var->value, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?></textarea><?php } ?>
						<?php if($__Context->var->type == 'select'){ ?><select name="<?php echo $__Context->var->name ?>" id="<?php echo $__Context->var->name ?>">
							<?php if($__Context->var->options&&count($__Context->var->options))foreach($__Context->var->options as $__Context->option){ ?><option value="<?php echo $__Context->option->value ?>"<?php if($__Context->var->value == $__Context->option->value){ ?> selected="selected"<?php } ?>><?php echo $__Context->option->title ?></option><?php } ?>
						</select><?php } ?>
						<span class="x_help-inline"><?php echo nl2br($__Context->var->description) ?></span>
					</div>
				</div>
			<?php } ?>
		<?php } ?>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->grant ?></label>
			<div class="x_controls">
				<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key=>$__Context->val){ ?><label class="x_inline">
					<input type="checkbox" name="target_group[]" value="<?php echo $__Context->key ?>" <?php if(in_array($__Context->key, $__Context->component->target_group)){ ?>checked="checked"<?php } ?> id="group_<?php echo $__Context->key ?>"> <?php echo $__Context->val->title ?>
				</label><?php } ?>
			</div>
		</div>
		<?php if($__Context->mid_list){ ?><div class="x_control-group">
			<label class="x_control-label">
				<?php echo $__Context->lang->module ?>
			</label>
			<div class="x_controls">
				<span class="x_help-block"><?php echo $__Context->lang->about_component_mid ?></span>
				 <label class="checked" for="check_all"> <input id="check_all" type="checkbox"/> Check all</label>
				<?php if($__Context->mid_list&&count($__Context->mid_list))foreach($__Context->mid_list as $__Context->module_category_srl => $__Context->modules){ ?>
				<?php if(count($__Context->mid_list) > 1){ ?>
				<fieldset>
					<legend>
						<input type="checkbox" />
						<?php if($__Context->modules->title){;
echo $__Context->modules->title;
}else{;
echo $__Context->lang->none_category;
} ?>
					</legend>
				<?php } ?>
					<div id="section_<?php echo $__Context->module_category_srl ?>">
					<?php if($__Context->modules->list&&count($__Context->modules->list))foreach($__Context->modules->list as $__Context->key => $__Context->val){ ?>
							<label>
								<input type="checkbox" value="<?php echo $__Context->key ?>" name="mid_list[]" id="chk_mid_list_<?php echo $__Context->key ?>" <?php if(in_array($__Context->key, $__Context->component->mid_list)){ ?>checked="checked"<?php } ?> />
								<?php echo $__Context->key ?> (<?php echo $__Context->val->browser_title ?>)
							</label>
					<?php } ?>
					</div>
				<?php if(count($__Context->mid_list) > 1){ ?>
				</fieldset>
				<?php } ?>
				<?php } ?>
			</div>
		</div><?php } ?>
		<div class="x_clearfix btnArea">
			<a class="x_btn x_pull-left" href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispEditorAdminIndex') ?>" ><?php echo $__Context->lang->cmd_back ?></a>
			<button type="submit" class="x_btn x_btn-primary x_pull-right"><?php echo $__Context->lang->cmd_save ?></button>
	    </div>
	</form>
</section>
<script>
(function($){
	$('#check_all')
		.bind('click', function(e){
			if (this.checked){
				$('input[name=mid_list\\[\\]]').attr('checked', 'checked');
			}else{
				$('input[name=mid_list\\[\\]]').removeAttr('checked');
			}
		});
})(jQuery);
</script>
