<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/textyle/tpl/filter','insert_custom_menu.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/textyle/tpl/js/textle.js--><?php $__tmp=array('modules/textyle/tpl/js/textle.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','header.html') ?>
<form action="./" method="post" onsubmit="return procFilter(this, insert_custom_menu);"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<?php if($__Context->lang->textyle_first_menus&&count($__Context->lang->textyle_first_menus))foreach($__Context->lang->textyle_first_menus as $__Context->key=>$__Context->val){ ?><section class="section">
		<?php $__Context->_sub = $__Context->lang->textyle_second_menus[$__Context->key] ?>
		<?php $__Context->_attached = $__Context->custom_menu->attached_menu[$__Context->key] ?>
		<h1>
			<?php echo $__Context->val[1] ?>
			<?php if(!count($__Context->_sub)){ ?><label class="x_inline" style="font-weight:normal"><input type="checkbox" name="hidden_<?php echo $__Context->key ?>"<?php if(in_array($__Context->key, $__Context->custom_menu->hidden_menu)){ ?> checked="checked"<?php } ?> value="Y" /> <?php echo $__Context->lang->cmd_hide ?></label><?php } ?>
		</h1>
		<?php if(count($__Context->_sub)){ ?><table class="x_table x_table-striped x_table-hover">
			<thead>
				<tr>
					<th scope="col">action</th>
					<th scope="col">title</th>
					<th scope="col"><label><input type="checkbox" name="hidden_<?php echo $__Context->key ?>"<?php if(in_array($__Context->val, $__Context->custom_menu->hidden_menu)){ ?> checked="checked"<?php } ?> value="Y" /> <?php echo $__Context->lang->cmd_select_all ?></label></th>
				</tr>
			</thead>
			<tbody>
				<?php if($__Context->_sub&&count($__Context->_sub))foreach($__Context->_sub as $__Context->k=>$__Context->v){ ?><tr>
					<td><?php echo $__Context->k ?></td>
					<td><?php echo $__Context->v ?></td>
					<td>
						<label for="menu_<?php echo $__Context->k ?>"><input type="checkbox" name="hidden_<?php echo $__Context->k ?>"<?php if(in_array(strtolower($__Context->k), $__Context->custom_menu->hidden_menu)){ ?> checked="checked"<?php } ?> value="Y" id="menu_<?php echo $__Context->k ?>" /> <?php echo $__Context->lang->cmd_hide ?></label>
					</td>
				</tr><?php } ?>
				<?php if($__Context->_attached&&count($__Context->_attached))foreach($__Context->_attached as $__Context->k=>$__Context->v){ ?><tr>
					<td><?php echo $__Context->k ?></td>
					<td><?php echo $__Context->v ?></td>
					<td>
						<label for="menu_<?php echo $__Context->k ?>"><input type="checkbox" name="delete_<?php echo $__Context->k ?>"<?php if($__Context->custom_menu->hidden_menu[$__Context->k]){ ?> checked="checked"<?php } ?> value="Y" id="menu_<?php echo $__Context->k ?>" /> <?php echo $__Context->lang->cmd_delete ?></label>
					</td>
				</tr><?php } ?>
				<tr>
					<td><input type="text" name="custom_act_<?php echo $__Context->key ?>" /></td>
					<td><input type="text" name="custom_name_<?php echo $__Context->key ?>" id="custom_name_<?php echo $__Context->key ?>" class="lang_code" /></td>
					<td>
						<input type="submit" value="<?php echo $__Context->lang->cmd_insert ?>" class="x_btn">
					</td>
				</tr>
			</tbody>
		</table><?php } ?>
	</section><?php } ?>
	<div class="x_clearfix">
		<input type="submit" value="<?php echo $__Context->lang->save ?>" class="x_btn x_btn-primary x_pull-right">
	</div>
</form>