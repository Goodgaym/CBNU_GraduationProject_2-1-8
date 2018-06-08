<?php if(!defined("__XE__"))exit;?>                    <h2 class="postTitle">
                        <?php if($__Context->search_keyword){ ?>
                            <?php echo $__Context->lang->search_result ?> <em> '<?php echo $__Context->page_navigation->total_count ?>'</em>
                        <?php }elseif($__Context->category){ ?>
                            <?php echo $__Context->lang->category_result ?> <em> '<?php echo $__Context->selected_category ?> (<?php echo $__Context->page_navigation->total_count ?>)'</em>
                        <?php }else{ ?>
                            <?php echo $__Context->lang->view_all ?> <em> '<?php echo $__Context->page_navigation->total_count ?>'</em>
                        <?php } ?>
                    </h2>
                    <ul class="searchResult xe_content">
                        <?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no => $__Context->document){ ?>
                        <li>
                            <?php if($__Context->document->document_srl==$__Context->document_srl){ ?>
                            <strong>
                            <?php } ?>
                            <a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"><?php echo $__Context->document->getTitle() ?></a>
                            <?php if($__Context->document->document_srl==$__Context->document_srl){ ?>
                            </strong>
                            <?php } ?>
                            <span class="date"><?php echo zdate($__Context->document->get('last_update'),'Y.m.d') ?></span>
                        </li>
                        <?php } ?>
                    </ul>
