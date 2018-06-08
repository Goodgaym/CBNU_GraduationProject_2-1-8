<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/textyle/tpl/filter','insert_textyle.xml');$__xmlFilter->compile(); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','header.html') ?>
<ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispTextyleAdminList'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispTextyleAdminList','module_srl','') ?>"><?php echo $__Context->lang->cmd_textyle_list ?></a></li>
	<li<?php if($__Context->act=='dispTextyleAdminInsert'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispTextyleAdminInsert','module_srl') ?>"><?php echo $__Context->lang->cmd_textyle_creation ?></a></li>
	<li<?php if($__Context->act=='dispTextyleAdminCustomMenu'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispTextyleAdminCustomMenu','module_srl') ?>"><?php echo $__Context->lang->cmd_textyle_custom_menu ?></a></li>
	<li<?php if($__Context->act=='dispTextyleAdminBlogApiConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispTextyleAdminBlogApiConfig','module_srl') ?>"><?php echo $__Context->lang->cmd_textyle_blogapi_service ?></a></li>
	<li<?php if($__Context->act=='dispTextyleAdminExportList'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispTextyleAdminExportList','module_srl') ?>"><?php echo $__Context->lang->cmd_textyle_export_request ?></a></li>
	<li<?php if($__Context->act=='dispTextyleAdminExtraMenu'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispTextyleAdminExtraMenu','module_srl') ?>"><?php echo $__Context->lang->cmd_textyle_extra_menu_config ?></a></li>
</ul>
<table class="x_table x_table-striped x_table-hover">
	<caption>
		<strong>Total <?php echo number_format($__Context->page_navigation->total_count) ?>, Page <?php echo number_format($__Context->page_navigation->cur_page) ?>/<?php echo number_format($__Context->page_navigation->total_page) ?></strong>
	</caption>
	<thead>
		<tr>
			<th scope="col"><?php echo $__Context->lang->browser_title ?></th>
			<th scope="col"><?php echo $__Context->lang->domain ?></th>
			<th scope="col"><?php echo $__Context->lang->user_id ?>(<?php echo $__Context->lang->nick_name ?>)</th>
			<th scope="col"><?php echo $__Context->lang->regdate ?></th>
			<th scope="col"><?php echo $__Context->lang->cmd_setup ?></th>
			<th scope="col"><?php echo $__Context->lang->cmd_delete ?></th>
		</tr>
	</thead>
	<tbody>
		<?php if($__Context->textyle_list&&count($__Context->textyle_list))foreach($__Context->textyle_list as $__Context->no=>$__Context->val){ ?><tr>
			<td><a href="<?php echo getSiteUrl($__Context->val->domain) ?>" title="<?php echo htmlspecialchars($__Context->lang->cmd_view) ?>"><?php echo $__Context->val->getBrowserTitle() ?></a></td>
			<td><a href="<?php echo getSiteUrl($__Context->val->domain) ?>"><?php echo $__Context->val->domain ?></a></td>
			<td>
				<?php if($__Context->val->getUserId()){ ?>
				<a href="#popup_menu_area" class="member_<?php echo $__Context->val->getMemberSrl() ?>"><?php echo $__Context->val->getUserId() ?>(<?php echo $__Context->val->getNickName() ?>)</a>
				<?php }else{ ?>
				-
				<?php } ?>
			</td>
			<td><?php echo zdate($__Context->val->get('regdate'),"Y-m-d") ?></td>
			<td>
				<a href="<?php echo getUrl('act','dispTextyleAdminInsert','module_srl',$__Context->val->getModuleSrl()) ?>" class="xe-ui-button-gray"><?php echo $__Context->lang->cmd_setup ?></a>
			</td>
			<td>
				<a href="<?php echo getUrl('act','dispTextyleAdminDelete','module_srl',$__Context->val->getModuleSrl()) ?>" title="<?php echo htmlspecialchars($__Context->lang->cmd_delete) ?>" class="xe-ui-button-gray"><?php echo $__Context->lang->cmd_delete ?></a>
			</td>
		</tr><?php } ?>
	</tbody>
</table>
<div class="x_clearfix">
<form action="" class="x_pull-left"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="error_return_url" value="" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
	<?php if($__Context->search_keyword){ ?><input type="hidden" name="search_keyword" value="<?php echo $__Context->search_keyword ?>" /><?php } ?>
	<?php if($__Context->search_target){ ?><input type="hidden" name="search_target" value="<?php echo $__Context->search_target ?>" /><?php } ?>
	<?php  $__Context->page = $__Context->page_navigation->cur_page ?>
	<a href="<?php echo getUrl('page', '') ?>" class="xe-ui-button-gray pagination first">&laquo;</a>
	<?php if($__Context->page_navigation->first_page + $__Context->page_navigation->page_count > $__Context->page_navigation->last_page && $__Context->page_navigation->page_count != $__Context->page_navigation->total_page){ ?>
		<?php $__Context->isGoTo = true ?>
		<a href="<?php echo getUrl('page', '') ?>" class="xe-ui-button-gray pagination">1</a>
		<a href="#goTo" class="tgAnchor" title="<?php echo $__Context->lang->cmd_go_to_page ?>">...</a>
	<?php } ?>
	<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
	<?php $__Context->last_page = $__Context->page_no ?>
	<?php if($__Context->page_no == $__Context->page){ ?><a href="#" class="xe-ui-button-gray pagination disabled"><?php echo $__Context->page_no ?></a><?php } ?>
	<?php if($__Context->page_no != $__Context->page){ ?><a href="<?php echo getUrl('page', $__Context->page_no) ?>" class="xe-ui-button-gray pagination"><?php echo $__Context->page_no ?></a><?php } ?>
	<?php } ?>
	<?php if($__Context->last_page != $__Context->page_navigation->last_page){ ?>
		<?php $__Context->isGoTo = true ?>
		<a href="#goTo" class="tgAnchor" title="<?php echo $__Context->lang->cmd_go_to_page ?>">...</a>
		<a href="<?php echo getUrl('page', $__Context->page_navigation->last_page) ?>" class="xe-ui-button-gray pagination"><?php echo $__Context->page_navigation->last_page ?></a>
	<?php } ?>
	<a href="<?php echo getUrl('page', $__Context->page_navigation->last_page) ?>" class="xe-ui-button-gray pagination last">&raquo;</a>
	<?php if($__Context->isGoTo){ ?><span id="goTo" class="tgContent">
		<input name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
		<button type="submit">Go</button>
	</span><?php } ?>
</form>
<form action="./" method="get" id="search_fo" class="search x_input-append x_pull-right" style="margin:0"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" value="<?php echo $__Context->module ?>" name="module"/>
	<input type="hidden" value="<?php echo $__Context->act ?>" name="act"/>
	<select name="search_target" style="width:auto;margin-right:4px">
		<option value="user_id"<?php if($__Context->search_target == 'user_id'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->user_id ?></option>
		<option value="nick_name"<?php if($__Context->search_target == 'nick_name'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->nick_name ?></option>
		<option value="user_name"<?php if($__Context->search_target == 'user_name'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->user_name ?></option>
		<option value="domain"<?php if($__Context->search_target == 'domain'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->domain ?></option>
		<option value="regdate"<?php if($__Context->search_target == 'regdate'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->regdate ?></option>
	</select>
	<input type="search" name="search_keyword" value="<?php echo $__Context->search_keyword ?>" required />
	<input type="submit" class="x_btn x_btn-inverse" value="<?php echo $__Context->lang->cmd_search ?>" />
</form>
</div>
