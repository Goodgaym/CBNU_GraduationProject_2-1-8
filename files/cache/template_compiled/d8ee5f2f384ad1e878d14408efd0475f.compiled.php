<?php if(!defined("__XE__"))exit;?>﻿
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="/layouts/J_Finder/assets/js/ie/html5shiv.js"></script><![endif]-->
    <!--#Meta:layouts/J_Finder/assets/css/main.css--><?php $__tmp=array('layouts/J_Finder/assets/css/main.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
    <!--#Meta:layouts/J_Finder/assets/css/font-awesome.min.css--><?php $__tmp=array('layouts/J_Finder/assets/css/font-awesome.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
</head>
<style type="text/css">
    #header {
        background-image: url("<?php echo $__Context->layout_info->header_img ?>");
        padding-top: <?php echo $__Context->layout_info->logo_padding ?>em;
    }
    #nav > ul > li > a{
        color: <?php echo $__Context->layout_info->nav_color ?>;
    }
    body.homepage #header {
        height: <?php echo $__Context->layout_info->header_vh ?>vh;
    }
    .image.featured{
        overflow: hidden;        
    }
    .widgetContainer img{
        -webkit-transition-duration: 0.3s;
        -moz-transition-duration: 0.3s;
        -ms-transition-duration: 0.3s;
        -o-transition-duration: 0.3s;
        transition-duration: 0.3s;
    }
    .widgetContainer img:hover{
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
        -o-transform: scale(1.1);
        transform: scale(1.1);        
    }
    #footer h3{
        font-size: 1.1em;
    }
</style>
<?php if($__Context->layout_info->layout_type == main){ ?>
<body class="homepage" style="line-height:0;">
    <div id="page-wrapper" style="line-height:1.85em;">
        <!-- 헤더 -->
        <div id="header">
            <!-- 로고 -->
            <div class="inner">
                <header>
                    <h1>
                        <?php if($__Context->layout_info->logo_img){ ?><a href="<?php echo $__Context->layout_info->logo_url ?>" id="logo"><img src="<?php echo $__Context->layout_info->logo_img ?>" /></a><?php } ?>
                        <?php if($__Context->layout_info->logo_text){ ?><a href="<?php echo $__Context->layout_info->logo_url ?>" id="logo"><?php echo $__Context->layout_info->logo_text ?></a><?php } ?></h1>
                    <hr />
                    <p class="main_text_<?php echo $__Context->layout_info->layout_type ?>"><?php echo $__Context->layout_info->logo_text2 ?></p>
                </header>
                <footer class="main_text_<?php echo $__Context->layout_info->layout_type ?>">
                    <a href="#banner" class="button circled scrolly">Start</a>
                    <?php if($__Context->logged_info){ ?>
                    <a href="<?php echo getUrl('act','dispMemberLogout') ?>" class="button circled">Logout</a>
                    <?php }else{ ?>
                    <a id="login" class="button circled">Login</a>
                    <?php } ?>
                    <div id="login_pop">
                        <img class="zbxe_widget_output" widget="login_info" skin="xe_official" colorset="default" />
                    </div>
                </footer>
            </div>
            <script>
                jQuery('#login').on('click',function(){
                    jQuery('#login_pop').toggle();
                })
            </script>
            <style>
                .login_default fieldset{
                    background: #fff;
                }
                .login_default fieldset ul.help li{
                    display: inline-block;
                    padding: 0 10px;
                }
                .login_default fieldset p.keep_msg{
                    display: none !important;
                }
                .login_default fieldset .idpw input{
                    margin: 0;
                    height: 20px;
                }
                .login_default fieldset .login{
                    padding-top: 5px;
                }
                #login_pop{
                    position: absolute;
                    left: 90%;
                    top: 60%;
                    display: none;
                    z-index: 99;
                }
            </style>          
            <!-- 메인 메뉴 -->
            <?php if($__Context->GNB->list){ ?><nav id="nav">
                <ul>
                    <?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){ ?><li>
                        <a href="<?php echo $__Context->val1['href'] ?>" target="_self" |cond="$__Context->val1['open_window'] == 'Y'"><?php echo $__Context->val1['link'] ?></a>
                        <?php if($__Context->val1['selected']){;
$__Context->_selected_menu = $__Context->val1;
} ?>
                        <?php if($__Context->val1['list']){ ?><ul>
                            <?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li |cond="$__Context->val2['list']">
                                <a href="<?php echo $__Context->val2['href'] ?>" target="_self" |cond="$__Context->val2['open_window'] == 'Y'"><?php echo $__Context->val2['link'] ?></a>
                            </li><?php } ?>
                        </ul><?php } ?>
                    </li><?php } ?>
                </ul>
            </nav><?php } ?>
        </div>
        <!-- 스크롤 제목 -->
        <section id="banner">
            <header>
                <h2><?php echo $__Context->layout_info->scroll_title ?></h2>
                <p><?php echo $__Context->layout_info->scroll_text ?></p>
            </header>
        </section>
        <!-- 스크롤 슬라이드 -->
        <img class="zbxe_widget_output"
             widget="content"
             skin="J_Finder_scroll"
             colorset="white"
             content_type="gallery"
             module_srls="<?php echo $__Context->layout_info->scroll_srl ?>"
             list_type="image_title_content"
             tab_type="none"
             markup_type="table"
             cols_list_count="3"
             list_count="<?php echo $__Context->layout_info->scroll_list_count ?>"
             page_count="1"
             subject_cut_size="<?php echo $__Context->layout_info->scroll_subject_cut ?>"
             content_cut_size="<?php echo $__Context->layout_info->scroll_content_cut ?>"
             option_view="title,content,thumbnail"
             show_browser_title="N"
             show_comment_count="N"
             show_trackback_count="N"
             show_category="N"
             show_icon="N"
             order_target="regdate"
             order_type="desc"
             thumbnail_width="300"
             thumbnail_height="200"
             thumbnail_type="crop" />
        <!-- 본문 -->
        <div class="wrapper2">
            <article id="main" class="container special">
                <a href="<?php echo $__Context->layout_info->contain_btn_url ?>" class="image featured"><img src="<?php echo $__Context->layout_info->contain_img ?>" alt="" /></a>
                <header>
                    <h2><a href="<?php echo $__Context->layout_info->contain_btn_url ?>"><?php echo $__Context->layout_info->contain_text_01 ?></a></h2>
                    <p><?php echo $__Context->layout_info->contain_text_02 ?></p>
                </header>
                <footer>
                    <a href="<?php echo $__Context->layout_info->contain_btn_url ?>" class="button"><?php echo $__Context->layout_info->contain_btn_text ?></a>
                </footer>
            </article>
        </div>
        <!-- 최근 이미지 -->
        <div class="wrapper2">
            <section id="features" class="container special">
                <header>
                    <h2><?php echo $__Context->layout_info->latest_text_01 ?></h2>
                    <p><?php echo $__Context->layout_info->latest_text_02 ?></p>
                </header>
                <img class="zbxe_widget_output"
                     widget="content"
                     skin="J_Finder"
                     colorset="white"
                     content_type="gallery"
                     module_srls="<?php echo $__Context->layout_info->latest_srl ?>"
                     list_type="image_title_content"
                     tab_type="none"
                     markup_type="table"
                     cols_list_count="3"
                     list_count="3"
                     page_count="1"
                     subject_cut_size="<?php echo $__Context->layout_info->latest_subject_cut ?>"
                     content_cut_size="<?php echo $__Context->layout_info->latest_content_cut ?>"
                     option_view="title,content,thumbnail"
                     show_browser_title="N"
                     show_comment_count="N"
                     show_trackback_count="N"
                     show_category="N"
                     show_icon="N"
                     order_target="regdate"
                     order_type="desc"
                     thumbnail_width="300"
                     thumbnail_height="300"
                     thumbnail_type="crop" />
            </section>
        </div>
        
<?php }else{ ?>
<body class="left-sidebar" style="line-height:0;">
    <div id="page-wrapper" style="line-height:1.85em;">
        <!-- 헤더 -->
        <div id="header" style="padding: 9em 0 3em 0;">
            <!-- 로고 -->
            <div class="inner">
                <header>
                    <h1><a href="<?php echo $__Context->layout_info->logo_url ?>" id="logo"><?php echo $__Context->layout_info->logo_text ?></a></h1>
                </header>
            </div>
            <!-- 메인메뉴 -->
            <?php if($__Context->GNB->list){ ?><nav id="nav">
                <ul>
                    <?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){ ?><li>
                        <a href="<?php echo $__Context->val1['href'] ?>" target="_self" |cond="$__Context->val1['open_window'] == 'Y'"><?php echo $__Context->val1['link'] ?></a>
                        <?php if($__Context->val1['selected']){;
$__Context->_selected_menu = $__Context->val1;
} ?>
                        <?php if($__Context->val1['list']){ ?><ul>
                            <?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li |cond="$__Context->val2['list']">
                                <a href="<?php echo $__Context->val2['href'] ?>" target="_self" |cond="$__Context->val2['open_window'] == 'Y'"><?php echo $__Context->val2['link'] ?></a>
                            </li><?php } ?>
                        </ul><?php } ?>
                    </li><?php } ?>
                </ul>
            </nav><?php } ?>
        </div>
        <!-- 본문 -->
        <div class="wrapper">
            <!-- 사이드 2차메뉴 -->
            <?php if($__Context->layout_info->layout_type_lnb == 'Y'){ ?><div class="container">
                <div class="row 100%">
                    <div class="3u 12u(mobile)" id="sidebar">
                        <hr class="first" />
                        <nav class="lnb_1">
                            <?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected'] && $__Context->val1['list']){ ?><ul>
                                <?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li class="lnb_2" |cond="$__Context->val2['selected']">
                                    <h4><a href="<?php echo $__Context->val2['href'] ?>" target="_self" |cond="$__Context->val2['open_window']=='Y'"><?php echo $__Context->val2['link'] ?></a></h4>
                                </li><?php } ?>
                            </ul><?php }} ?>
                        </nav>
                    </div>
                    <div class="9u 12u(mobile) important(mobile)" id="content">
                        <article id="main">
                            <?php echo $__Context->content ?>
                        </article>
                    </div>
                </div>
            </div><?php } ?>
            <!-- 풀페이지 -->
            <?php if($__Context->layout_info->layout_type_lnb == 'N'){ ?><div class="container">
                <article id="main">
                        <?php echo $__Context->content ?>
                </article>
            </div><?php } ?>
        </div>
        <?php } ?>
        <!-- 푸터 -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <!-- 최근 게시물 -->
                    <section class="4u 12u(mobile)">
                        <header>
                            <h2 class="icon fa-file circled"><span class="label">Tweets</span></h2>
                        </header>
                        <img class="zbxe_widget_output"
                             widget="content"
                             skin="J_Finder"
                             colorset="white"
                             content_type="document"
                             module_srls=""
                             list_type="normal"
                             tab_type="none"
                             markup_type="list"
                             list_count="4"
                             page_count="1"
                             subject_cut_size="25"
                             option_view="title,regdate,nickname"
                             show_browser_title="N"
                             show_comment_count="N"
                             show_trackback_count="N"
                             show_category="N"
                             show_icon="N"
                             order_target="regdate"
                             order_type="desc"
                             thumbnail_type="crop" />
                    </section>
                    <!-- 최근 댓글 -->
                    <section class="4u 12u(mobile)">
                        <header>
                            <h2 class="icon fa-comment circled"><span class="label">Posts</span></h2>
                        </header>
                        <img class="zbxe_widget_output"
                             widget="content"
                             skin="J_Finder"
                             colorset="white"
                             content_type="comment"
                             module_srls=""
                             list_type="normal"
                             tab_type="none"
                             markup_type="list"
                             list_count="4"
                             page_count="1"
                             subject_cut_size="25"
                             option_view="title,regdate,nickname"
                             show_browser_title="N"
                             show_comment_count="N"
                             show_trackback_count="N"
                             show_category="N"
                             show_icon="N"
                             order_target="regdate"
                             order_type="desc"
                             thumbnail_type="crop" />
                    </section>
                    <!-- 갤러리 -->
                    <section class="4u 12u(mobile)">
                        <header>
                            <h2 class="icon fa-camera circled"><span class="label">Photos</span></h2>
                        </header>
                        <img class="zbxe_widget_output"
                             widget="content"
                             skin="default"
                             colorset="white"
                             content_type="gallery"
                             module_srls="<?php echo $__Context->layout_info->footer_gallery_srl ?>"
                             list_type="gallery"
                             tab_type="none"
                             markup_type="list"
                             list_count="6"
                             cols_list_count="2"
                             page_count="1"
                             option_view="thumbnail"
                             order_target="regdate"
                             order_type="desc"
                             thumbnail_type="crop"
                             thumbnail_width="150"
                             thumbnail_height="120" />
                    </section>
                </div>
                <hr />
                <div class="row">
                    <div class="12u">
                        <!-- 하단 문구 -->
                        <section class="contact">
                            <header>
                                <h3><?php echo $__Context->layout_info->footer_text_01 ?></h3>
                            </header>
                            <p><?php echo $__Context->layout_info->footer_text_02 ?></p>
                            <ul class="icons">
                                <li><?php if($__Context->layout_info->facebook){ ?><a href="<?php echo $__Context->layout_info->facebook ?>" target="_blank" class="icon fa-facebook"><span class="label"></span></a><?php } ?></li>
                                <li><?php if($__Context->layout_info->twitter){ ?><a href="<?php echo $__Context->layout_info->twitter ?>" target="_blank" class="icon fa-twitter"><span class="label"></span></a><?php } ?></li>
                                <li><?php if($__Context->layout_info->instargram){ ?><a href="<?php echo $__Context->layout_info->instargram ?>" target="_blank" class="icon fa-instagram"><span class="label"></span></a><?php } ?></li>
                                <li><?php if($__Context->layout_info->youtube){ ?><a href="<?php echo $__Context->layout_info->youtube ?>" target="_blank" class="icon fa-youtube"><span class="label"></span></a><?php } ?></li>
                                <li><?php if($__Context->layout_info->google_plus){ ?><a href="<?php echo $__Context->layout_info->google_plus ?>" target="_blank" class="icon fa-google-plus"><span class="label"></span></a><?php } ?></li>
                            </ul>
                        </section>
                        <!-- 카피라이트 -->
                        <div class="copyright">
                            <ul class="menu">
                                <li><?php echo $__Context->layout_info->copyright ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="/layouts/J_Finder/assets/js/jquery.dropotron.min.js"></script>
    <script src="/layouts/J_Finder/assets/js/jquery.scrolly.min.js"></script>
    <script src="/layouts/J_Finder/assets/js/jquery.onvisible.min.js"></script>
    <script src="/layouts/J_Finder/assets/js/skel.min.js"></script>
    <script src="/layouts/J_Finder/assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="/layouts/J_Finder/assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="/layouts/J_Finder/assets/js/main.js"></script>
</body>
