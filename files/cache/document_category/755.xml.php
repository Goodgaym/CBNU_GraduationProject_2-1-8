<?php define('__XE__', true); require_once('D:/School_Folder/Project/GP2-1-8/config/config.inc.php'); $oContext = &Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srsl = array(); } 
$_titles[776]["ko"] = '포트폴리오'; $_descriptions[776]["ko"] = ''; $_titles[777]["ko"] = '이력서'; $_descriptions[777]["ko"] = ''; $_titles[778]["ko"] = '수상'; $_descriptions[778]["ko"] = '';  $oContext->close();?><root><node mid="textyle" module_srl="0" node_srl="776" parent_srl="0" category_srl="776" text="<?php echo (true?($_titles[776][$lang_type]):"")?>" url='/index.php?mid=textyle&amp;category=776&amp;vid=Majesty' expand='N' color='' description="<?php echo (true?($_descriptions[776][$lang_type]):"")?>" document_count="1"  /><node mid="textyle" module_srl="0" node_srl="777" parent_srl="0" category_srl="777" text="<?php echo (true?($_titles[777][$lang_type]):"")?>" url='/index.php?mid=textyle&amp;category=777&amp;vid=Majesty' expand='N' color='' description="<?php echo (true?($_descriptions[777][$lang_type]):"")?>" document_count="0"  /><node mid="textyle" module_srl="0" node_srl="778" parent_srl="0" category_srl="778" text="<?php echo (true?($_titles[778][$lang_type]):"")?>" url='/index.php?mid=textyle&amp;category=778&amp;vid=Majesty' expand='N' color='' description="<?php echo (true?($_descriptions[778][$lang_type]):"")?>" document_count="0"  /></root>