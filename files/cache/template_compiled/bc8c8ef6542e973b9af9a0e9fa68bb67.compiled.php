<?php if(!defined("__XE__"))exit;?><!--#Meta:widgets/category/skins/default/js/category.js--><?php $__tmp=array('widgets/category/skins/default/js/category.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php  $__Context->_pDepth = 0; ?>
<?php if($__Context->colorset == "black" || $__Context->colorset == "white"){ ?>
<!--#Meta:widgets/category/skins/default/css/widget.css--><?php $__tmp=array('widgets/category/skins/default/css/widget.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<div class="widgetContainer<?php if($__Context->colorset=="black"){ ?> black<?php } ?>">
	<div class="widgetTree">
		<a href="<?php echo getSiteUrl($__Context->widget_info->domain,'','mid',$__Context->widget_info->module_info->mid?$__Context->widget_info->module_info->mid:$__Context->layout_info->target_mid) ?>" class="all <?php if(!$__Context->category){ ?>strong<?php } ?>">
		<?php if($__Context->widget_info->total_title){ ?>
		<?php echo $__Context->widget_info->total_title ?>
		<?php }else{ ?>
		<?php echo $__Context->widget_info->module_info->browser_title ?>
		<?php } ?>
		</a> <span class="sum">(<?php echo $__Context->widget_info->total_document_count ?>)</span>
		<ul>
			<?php if($__Context->widget_info->category_list&&count($__Context->widget_info->category_list))foreach($__Context->widget_info->category_list as $__Context->key => $__Context->val){ ?>
			<?php if($__Context->_pDepth > $__Context->val->depth){ ?>
			<?php for($__Context->i=$__Context->val->depth; $__Context->i<$__Context->_pDepth; $__Context->i++){ ?>
		</ul>
		</li>
		<?php } ?>
		<?php  $__Context->_pDepth = $__Context->val->depth ?>
		<?php } ?>
		<li class="<?php if($__Context->val->last){ ?>nav_tree_last<?php } ?> <?php if($__Context->val->expand){ ?>nav_tree_on<?php }else{ ?>nav_tree_off<?php } ?> <?php if($__Context->category==$__Context->val->category_srl){ ?>active<?php } ?>" id="category_parent_<?php echo $__Context->val->category_srl ?>">
		<?php if($__Context->val->child_count){ ?>
		<?php if($__Context->val->expand){ ?>
		<button type="button" class="category_<?php echo $__Context->val->category_srl ?>">+</button>
		<?php }else{ ?>
		<button type="button" class="category_<?php echo $__Context->val->category_srl ?>">-</button>
		<?php } ?>
		<?php } ?>
		<a href="<?php echo getSiteUrl($__Context->widget_info->domain, '','mid',$__Context->widget_info->module_info->mid, 'category',$__Context->val->category_srl) ?>" class="nav_tree_label <?php if($__Context->val->selected){ ?>selected<?php } ?>"><?php echo $__Context->val->text ?></a>
		<?php if($__Context->val->document_count){ ?>
		<span class="sum">(<?php echo $__Context->val->document_count ?>)</span>
		<?php } ?>
		<?php if($__Context->val->child_count){ ?>
		<?php $__Context->_pDepth++ ?>
		<ul>
			<?php }else{ ?>
			</li>
			<?php } ?>
			<?php } ?>
			<?php for($__Context->i=0;$__Context->i<$__Context->_pDepth;$__Context->i++){ ?>
		</ul>
		<?php } ?>
		</li>
		</ul>
	</div>
</div>
