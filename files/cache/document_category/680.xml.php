<?php define('__XE__', true); require_once('D:/School_Folder/Project/GP2-1-8/config/config.inc.php'); $oContext = &Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srsl = array(); } 
$_titles[701]["ko"] = '포트폴리오'; $_descriptions[701]["ko"] = ''; $_titles[702]["ko"] = '이력서'; $_descriptions[702]["ko"] = ''; $_titles[703]["ko"] = '수상'; $_descriptions[703]["ko"] = '';  $oContext->close();?><root><node mid="textyle" module_srl="0" node_srl="701" parent_srl="0" category_srl="701" text="<?php echo (true?($_titles[701][$lang_type]):"")?>" url='/index.php?mid=textyle&amp;category=701' expand='N' color='' description="<?php echo (true?($_descriptions[701][$lang_type]):"")?>" document_count="0"  /><node mid="textyle" module_srl="0" node_srl="702" parent_srl="0" category_srl="702" text="<?php echo (true?($_titles[702][$lang_type]):"")?>" url='/index.php?mid=textyle&amp;category=702' expand='N' color='' description="<?php echo (true?($_descriptions[702][$lang_type]):"")?>" document_count="0"  /><node mid="textyle" module_srl="0" node_srl="703" parent_srl="0" category_srl="703" text="<?php echo (true?($_titles[703][$lang_type]):"")?>" url='/index.php?mid=textyle&amp;category=703' expand='N' color='' description="<?php echo (true?($_descriptions[703][$lang_type]):"")?>" document_count="0"  /></root>