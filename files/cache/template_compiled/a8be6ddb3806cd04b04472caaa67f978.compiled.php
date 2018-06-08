<?php if(!defined("__XE__"))exit;
$__Context->_menu_class=array('dashboard','post','comment','statistics','design','setup') ?>
			<div class="extension e1">
				<div class="section" id="tool_navigation">
					<h3>Navigation</h3>
					<ul>
					<?php $__Context->i=0 ?>
                        <?php if($__Context->lang->textyle_first_menus&&count($__Context->lang->textyle_first_menus))foreach($__Context->lang->textyle_first_menus as $__Context->key => $__Context->val){ ?>
                            <?php if(!in_array($__Context->val, $__Context->custom_menu->hidden_menu)){ ?>
                            <?php $__Context->_sub = $__Context->lang->textyle_second_menus[$__Context->key] ?>
                            <?php $__Context->_attached = $__Context->custom_menu->attached_menu[$__Context->key] ?>
                            <?php if($__Context->act==$__Context->val[0]||in_array($__Context->act,array_keys($__Context->_sub))){;
$__Context->_sel="active";
}else{;
echo $__Context->_sel="";
} ?>
                            
							<li class="<?php echo $__Context->_menu_class[$__Context->i++] ?> <?php echo $__Context->_sel;
if(!count($__Context->_sub)){ ?> noChild<?php } ?>">
 
                            <?php if($__Context->val[0]){ ?>
                                <a href="<?php echo getSiteUrl($__Context->textyle->domain,'','mid',$__Context->mid,'act',$__Context->val[0]) ?>"><span><?php echo $__Context->val[1] ?></span></a>
                            <?php }else{ ?>
                                <a href="#nav"><span><?php echo $__Context->val[1] ?></span></a>
                            <?php } ?>
                            <?php if(count($__Context->_sub) || count($__Context->_attached)){ ?>
                            <ul>
                                <?php if($__Context->_sub&&count($__Context->_sub))foreach($__Context->_sub as $__Context->k => $__Context->v){ ?>
                                <?php if(!in_array(strtolower($__Context->k), $__Context->custom_menu->hidden_menu) && $__Context->k != 'dispTextyleToolConfigEditorComponents'){ ?>
								<li<?php if($__Context->k==$__Context->act){ ?> class="active"<?php } ?>><a href="<?php echo getSiteUrl($__Context->textyle->domain,'','mid',$__Context->mid,'act',$__Context->k) ?>"><?php echo $__Context->v ?></a></li>
                                <?php } ?>
                                <?php } ?>
                                <?php if($__Context->_attached&&count($__Context->_attached))foreach($__Context->_attached  as $__Context->k => $__Context->v){ ?>
								<li<?php if($__Context->k==$__Context->act){ ?> class="active"<?php } ?>><a href="<?php echo getSiteUrl($__Context->textyle->domain,'','mid',$__Context->mid,'act',$__Context->k) ?>"><?php echo $__Context->v ?></a></li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            <?php } ?>
                        </li>
                        <?php } ?>
					</ul>
				</div>
				
				<p class="goToHelp">
					<a href="http://code.google.com/p/xe-textyle/issues/list" target="_blank" title="<?php echo $__Context->lang->cmd_new_window ?>"><?php echo $__Context->lang->textyle_bug_report ?></a>
				</p>
				<div class="language">
					<button type="button" onclick="jQuery('#selectLang').toggleClass('hide'); return false;" class="selected" title="<?php echo $__Context->lang_type ?>"><?php echo $__Context->lang_supported[$__Context->lang_type] ?></button>
					<ul class="hide" id="selectLang">
						<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key => $__Context->val){;
if($__Context->key!= $__Context->lang_type){ ?>
						<li><button type="button" onclick="doChangeLangType('<?php echo $__Context->key ?>');return false;"><?php echo $__Context->val ?></button></li>
						<?php };
} ?>
					</ul>
				</div>
				
			</div>
