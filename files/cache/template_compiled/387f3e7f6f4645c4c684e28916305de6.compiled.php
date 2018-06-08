<?php if(!defined("__XE__"))exit;?>                    <h2 class="postTitle">Tag <?php if(count($__Context->tag_list>0)){ ?> <em><?php echo count($__Context->tag_list) ?></em> <?php } ?></h2>
                    <?php if($__Context->tag_list){ ?>
                        <ul class="tagCloud">
                            <?php if($__Context->tag_list&&count($__Context->tag_list))foreach($__Context->tag_list as $__Context->val){ ?>
                                <?php if($__Context->val->count>5){ ?>
                                    <?php  $__Context->_level = "4"  ?>
                                <?php }elseif($__Context->val->count>3){ ?>
                                    <?php  $__Context->_level = "3"  ?>
                                <?php }elseif($__Context->val->count>1){ ?>
                                    <?php  $__Context->_level = "2"  ?>
                                <?php }else{ ?>
                                    <?php  $__Context->_level = "1"  ?>
                                <?php } ?>
                                <li class="level<?php echo $__Context->_level ?>"><a href="<?php echo getUrl('search_keyword',$__Context->val->tag,'search_target','tag','act','dispTextyle') ?>"><?php echo $__Context->val->tag ?></a></li>
                            <?php } ?>
                        </ul>
                    <?php }else{ ?>
                        <p>no tags</p>
                    <?php } ?>
