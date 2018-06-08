<?php if(!defined("__XE__"))exit;?><!-- aside -->	
<div id="aside">
	<div class="section">
		<h2><?php echo $__Context->lang->category ?></h2>
		<img class="zbxe_widget_output" widget="category" skin="default" total_title="<?php echo $__Context->lang->view_all ?>"  srl="<?php echo $__Context->textyle->module_srl ?>" />
	</div>
	<div class="section">
		<h2><?php echo $__Context->lang->newest_document ?></h2>
		<img class="zbxe_widget_output" widget="content" markup_type="list" list_count="10" skin="default" content_type="document" option_view="title" show_comment_count="Y" show_trackback_count="Y" show_category="N" show_icon="N" order_target="list_order" order_type="desc" thumbnail_type="crop" page_count="1" subject_cut_size="26" module_srls="<?php echo $__Context->textyle->module_srl ?>" />
	</div>
	<div class="section">
		<h2><?php echo $__Context->lang->newest_comment ?></h2>
		<img class="zbxe_widget_output" widget="content" markup_type="list" list_count="10" skin="default" content_type="comment" option_view="title" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="list_order" order_type="desc" thumbnail_type="crop" page_count="1" subject_cut_size="30" module_srls="<?php echo $__Context->textyle->module_srl ?>"/>
	</div>
	<div class="section">
		<h2><?php echo $__Context->lang->newest_trackback ?></h2>
		<img class="zbxe_widget_output" widget="content" markup_type="list" list_count="5" skin="default" content_type="trackback" option_view="title" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="list_order" order_type="desc" thumbnail_type="crop" page_count="1" subject_cut_size="30" module_srls="<?php echo $__Context->textyle->module_srl ?>"/>
	</div>
	<div class="section">
		<h2><?php echo $__Context->lang->tag ?></h2>
		<img class="zbxe_widget_output" widget="tag_list" list_count="10" skin="default" module_srls="<?php echo $__Context->textyle->module_srl ?>" />
	</div>
</div>
<!-- /aside -->	
