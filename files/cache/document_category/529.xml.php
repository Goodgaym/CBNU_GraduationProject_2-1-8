<?php define('__XE__', true); require_once('D:/School_Folder/Project/GP2-1-8/config/config.inc.php'); $oContext = &Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srsl = array(); } 
$_titles[550]["ko"] = '기본 카테고리'; $_descriptions[550]["ko"] = ''; $_titles[551]["ko"] = '포트폴리오'; $_descriptions[551]["ko"] = '';  $oContext->close();?><root><node mid="textyle" module_srl="0" node_srl="550" parent_srl="0" category_srl="550" text="<?php echo (true?($_titles[550][$lang_type]):"")?>" url='/index.php?mid=textyle&amp;category=550' expand='N' color='' description="<?php echo (true?($_descriptions[550][$lang_type]):"")?>" document_count="0"  /><node mid="textyle" module_srl="0" node_srl="551" parent_srl="0" category_srl="551" text="<?php echo (true?($_titles[551][$lang_type]):"")?>" url='/index.php?mid=textyle&amp;category=551' expand='N' color='' description="<?php echo (true?($_descriptions[551][$lang_type]):"")?>" document_count="0"  /></root>