<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/textyle/tpl/js/textle.js--><?php $__tmp=array('modules/textyle/tpl/js/textle.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','header.html') ?>
<section class="section">
	<h1><?php echo $__Context->lang->cmd_textyle_export_request ?></h1>
	<table class="x_table x_table-striped x_table-hover">
		<thead>
			<tr>
				<th scope="col"><?php echo $__Context->lang->textyle ?></th>
				<th scope="col"><?php echo $__Context->lang->nick_name ?></th>
				<th scope="col"><?php echo $__Context->lang->export_format ?></th>
				<th scope="col"><?php echo $__Context->lang->textyle_export_date ?></th>
				<th scope="col"><?php echo $__Context->lang->textyle_export_file ?></th>
				<th scope="col"><?php echo $__Context->lang->actions ?></th>
			</tr>
		</thead>
		<?php if($__Context->export_list){ ?><tbody>
			<?php if($__Context->export_list&&count($__Context->export_list))foreach($__Context->export_list as $__Context->no=>$__Context->val){ ?><tr>
				<td><a href="<?php echo getSiteUrl($__Context->val->domain) ?>" onclick="window.open(this.href); return false;" title="<?php echo htmlspecialchars($__Context->lang->cmd_view) ?>"><?php echo $__Context->val->domain ?></a></td>
				<td><a href="#popup_menu_area" class="member_<?php echo $__Context->val->member_srl ?>"><?php echo $__Context->val->nick_name ?></a></td>
				<td><?php echo $__Context->val->export_type ?></td>
				<td><?php echo zdate($__Context->val->export_date,'Y.m.d H:i') ?></td>
				<td><?php echo $__Context->val->export_file ?></td>
				<td>
					<button type="button" onclick="exportTextyle(<?php echo $__Context->val->site_srl ?>,'ttxml')" class="x_icon-download-alt"><?php echo $__Context->lang->cmd_textyle_export_file ?></button>
					<button type="button" onclick="deleteExportTextyle(<?php echo $__Context->val->site_srl ?>)" class="x_icon-trash"><?php echo $__Context->lang->cmd_delete ?></button>
				</td>
			</tr><?php } ?>
		</tbody><?php } ?>
	</table>
	<form action="" style="text-align:center"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="error_return_url" value="" />
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
		<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
		<?php if($__Context->search_keyword){ ?><input type="hidden" name="search_keyword" value="<?php echo $__Context->search_keyword ?>" /><?php } ?>
		<?php if($__Context->search_target){ ?><input type="hidden" name="search_target" value="<?php echo $__Context->search_target ?>" /><?php } ?>
		<?php  $__Context->page = $__Context->page_navigation->cur_page ?>
		<a href="<?php echo getUrl('page', '') ?>">&laquo;</a>
		<?php if($__Context->page_navigation->first_page + $__Context->page_navigation->page_count > $__Context->page_navigation->last_page && $__Context->page_navigation->page_count != $__Context->page_navigation->total_page){ ?>
			<?php $__Context->isGoTo = true ?>
			<a href="<?php echo getUrl('page', '') ?>" class="xe-ui-button-gray pagination">1</a>
		<?php } ?>
		<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
		<?php $__Context->last_page = $__Context->page_no ?>
		<?php if($__Context->page_no == $__Context->page){ ?><a href="#"><?php echo $__Context->page_no ?></a><?php } ?>
		<?php if($__Context->page_no != $__Context->page){ ?><a href="<?php echo getUrl('page', $__Context->page_no) ?>"><?php echo $__Context->page_no ?></a><?php } ?>
		<?php } ?>
		<?php if($__Context->last_page != $__Context->page_navigation->last_page){ ?>
			<?php $__Context->isGoTo = true ?>
			<a href="<?php echo getUrl('page', $__Context->page_navigation->last_page) ?>"><?php echo $__Context->page_navigation->last_page ?></a>
		<?php } ?>
		<a href="<?php echo getUrl('page', $__Context->page_navigation->last_page) ?>">&raquo;</a>
	</form>
</section>