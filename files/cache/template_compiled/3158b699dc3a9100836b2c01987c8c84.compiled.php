<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/overpol/tpl','header.html') ?>
<div style="padding:30px">
	<h1>관리자(Administrator) 뷰(View) 템플릿 파일</h1>
	<p>이 페이지가 보인다면 관리자용 백 엔드(back-end) 뷰(View) 템플릿 파일이 정상적으로 로드 된 것입니다.</p>
</div>
<!--목록-->
<table cellspacing="0" class="rowTable">
	<thead>
		<tr>
			<th scope="col"><div><?php echo $__Context->lang->no ?></div></th>
			<th scope="col" class="half_wide"><div><?php echo $__Context->lang->mid ?></div></th>
			<th scope="col" class="half_wide"><div><?php echo $__Context->lang->browser_title ?></div></th>
			<th scope="col" colspan="2"><div>&nbsp;</div></th>
		</tr>
	</thead>
	<tbody>
		<!--모듈의 관리자 목록 시작-->
		<?php if($__Context->overpol_list&&count($__Context->overpol_list))foreach($__Context->overpol_list as $__Context->no => $__Context->val){ ?>
		<tr class="row($cycle_idx)">
			<td class="center number"><?php echo $__Context->no ?></td>
			<td><?php echo htmlspecialchars($__Context->val->mid) ?></td>
			<td><a href="<?php echo getUrl('','mid',$__Context->val->mid) ?>"><?php echo $__Context->val->browser_title ?></a></td>
			<td class="nowrap"><?php echo zdate($__Context->val->regdate, "Y-m-d") ?></td>
			<td><a href="<?php echo getUrl('act','dispOverpolAdminInfo','module_srl',$__Context->val->module_srl) ?>" class="buttonset buttonSetting" title="<?php echo $__Context->lang->cmd_setup ?>"><span><?php echo $__Context->lang->cmd_setup ?></span></a></td>
			<td><a href="<?php echo getUrl('act','dispOverpolAdminDelete','module_srl',$__Context->val->module_srl) ?>" class="buttonset buttonDelete" title="<?php echo $__Context->lang->cmd_delete ?>"><span><?php echo $__Context->lang->cmd_delete ?></span></a></td>
		</tr>
		<?php } ?>
		
	</tbody>
</table>
<!--모듈 생성 버튼-->
<div class="clear">
	<div class="tr">
		<a href="<?php echo getUrl('act','dispOverpolAdminInsert') ?>" class="buttonblack strong"><span><?php echo $__Context->lang->cmd_make ?></span></a>
	</div>
</div>