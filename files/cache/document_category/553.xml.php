<?php define('__XE__', true); require_once('D:/School_Folder/Project/GP2-1-8/config/config.inc.php'); $oContext = &Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srsl = array(); } 
$_titles[574]["ko"] = '포트폴리오'; $_descriptions[574]["ko"] = ''; $_titles[575]["ko"] = '이력서'; $_descriptions[575]["ko"] = ''; $_titles[576]["ko"] = '수상'; $_descriptions[576]["ko"] = '';  $oContext->close();?><root><node mid="textyle" module_srl="0" node_srl="574" parent_srl="0" category_srl="574" text="<?php echo (true?($_titles[574][$lang_type]):"")?>" url='/index.php?mid=textyle&amp;category=574&amp;vid=five' expand='N' color='' description="<?php echo (true?($_descriptions[574][$lang_type]):"")?>" document_count="1"  /><node mid="textyle" module_srl="0" node_srl="575" parent_srl="0" category_srl="575" text="<?php echo (true?($_titles[575][$lang_type]):"")?>" url='/index.php?mid=textyle&amp;category=575&amp;vid=five' expand='N' color='' description="<?php echo (true?($_descriptions[575][$lang_type]):"")?>" document_count="0"  /><node mid="textyle" module_srl="0" node_srl="576" parent_srl="0" category_srl="576" text="<?php echo (true?($_titles[576][$lang_type]):"")?>" url='/index.php?mid=textyle&amp;category=576&amp;vid=five' expand='N' color='' description="<?php echo (true?($_descriptions[576][$lang_type]):"")?>" document_count="0"  /></root>