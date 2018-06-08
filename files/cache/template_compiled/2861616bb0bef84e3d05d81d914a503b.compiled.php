<?php if(!defined("__XE__"))exit;
if($__Context->colorset == "black" || $__Context->colorset == "white"){ ?>
    <!--#Meta:widgets/tag_list/skins/default/css/widget.css--><?php $__tmp=array('widgets/tag_list/skins/default/css/widget.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<div class="widgetContainer<?php if($__Context->colorset=="black"){ ?> black<?php } ?>">
    <ul class="widgetTagCloud">
        <?php if($__Context->widget_info->tag_list&&count($__Context->widget_info->tag_list))foreach($__Context->widget_info->tag_list as $__Context->val){ ?>
        <li class="level<?php echo $__Context->val->rank ?>">
            <?php if($__Context->widget_info->mid){ ?>
                <a href="<?php echo getUrl('','mid',$__Context->widget_info->mid,'search_target','tag','search_keyword',$__Context->val->tag) ?>"><?php echo htmlspecialchars($__Context->val->tag) ?></a>
            <?php }else{ ?>
                <a href="<?php echo getUrl('act','IS','where','document','search_target','tag','is_keyword',$__Context->val->tag) ?>"><?php echo htmlspecialchars($__Context->val->tag) ?></a>
            <?php } ?>
        </li>
        <?php } ?>
    </ul>
</div>
