<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/textyle/tpl/js/textle.js--><?php $__tmp=array('modules/textyle/tpl/js/textle.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/textyle/tpl/filter','insert_blogapi_service.xml');$__xmlFilter->compile(); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','header.html') ?>
<form action="./" method="post" onsubmit="return procFilter(this, insert_blogapi_service);" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="textyle_blogapi_services_srl" value="<?php echo $__Context->service->textyle_blogapi_services_srl ?>" />
	<div class="x_control-group">
		<label class="x_control-label" for="lang_service_name"><?php echo $__Context->lang->service_name ?></label>
		<div class="x_controls">
			<input type="text" name="service_name" id="service_name" value="<?php echo $__Context->service->service_name ?>"  class="lang_code" />
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="api_type"><?php echo $__Context->lang->api_type ?></label>
		<div class="x_controls">
			<select name="api_type" id="api_type">
				<option value="metaweblog">metaweblog</option>
				<option value="movalbletype">movalbletype</option>
				<option value="blogger">blogger</option>
			</select>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="lang_url_description"><?php echo $__Context->lang->url_description ?></label>
		<div class="x_controls">
			<input type="text" name="url_description" value="<?php echo $__Context->service->url_description ?>" class="lang_code" id="url_description" />
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="lang_id_description"><?php echo $__Context->lang->id_description ?></label>
		<div class="x_controls">
			<input type="text" name="id_description" value="<?php echo $__Context->service->id_description ?>" class="lang_code" id="id_description" />
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="lang_password_description"><?php echo $__Context->lang->password_description ?></label>
		<div class="x_controls">
			<input type="text" name="password_description" value="<?php echo $__Context->service->password_description ?>" class="lang_code" id="password_description" />
		</div>
	</div>
	<div class="btnArea">
		<input type="submit" value="<?php echo $__Context->lang->cmd_insert ?>" class="x_btn x_btn-primary x_pull-right">
	</div>
</form>
<?php if(!$__Context->textyle_blogapi_services_srl){ ?><table class="x_table x_table-striped x_table-hover">
	<thead>
		<tr>
			<th scope="col"><?php echo $__Context->lang->service_name ?></th>
			<th scope="col"><?php echo $__Context->lang->api_type ?></th>
			<th scope="col"><?php echo $__Context->lang->url_description ?></th>
			<th scope="col"><?php echo $__Context->lang->id_description ?></th>
			<th scope="col"><?php echo $__Context->lang->password_description ?></th>
			<th scope="col"><?php echo $__Context->lang->actions ?></th>
		</tr>
	</thead>
	<?php if($__Context->blogapi_services_list){ ?><tbody>
		<?php if($__Context->blogapi_services_list&&count($__Context->blogapi_services_list))foreach($__Context->blogapi_services_list as $__Context->no=>$__Context->val){ ?><tr>
			<td><?php echo $__Context->val->service_name ?></td>
			<td><?php echo $__Context->val->api_type ?></td>
			<td><?php echo $__Context->val->url_description ?></td>
			<td><?php echo $__Context->val->id_description ?></td>
			<td><?php echo $__Context->val->password_description ?></td>
			<td>
				<a href="<?php echo getUrl('textyle_blogapi_services_srl',$__Context->val->textyle_blogapi_services_srl) ?>" class="x_icon-wrench"><?php echo $__Context->lang->cmd_modify ?></a>
				<button type="button" onclick="deleteBlogApiService(<?php echo $__Context->val->textyle_blogapi_services_srl ?>)" class="x_icon-trash"><?php echo $__Context->lang->cmd_delete ?></button>
			</td>
		</tr><?php } ?>
	</tbody><?php } ?>
</table><?php } ?>
