<?php if(!defined("__XE__")) exit(); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srsl = array(); } 
$_titles = array();$_descriptions = array();$_titles[751]["ko"] = '포트폴리오'; $_descriptions[751]["ko"] = ''; $_titles[752]["ko"] = '이력서'; $_descriptions[752]["ko"] = ''; $_titles[753]["ko"] = '수상'; $_descriptions[753]["ko"] = ''; $menu = new stdClass;$menu->list = array(751=>array("mid" => "textyle", "module_srl" => "730","node_srl"=>"751","category_srl"=>"751","parent_srl"=>"0","text"=>$_titles[751][$lang_type],"selected"=>(in_array(Context::get("category"),array("751"))?1:0),"expand"=>'N',"color"=>NULL,"description"=>$_descriptions[751][$lang_type],"list"=>array(),"document_count"=>"0","grant"=>true?true:false),752=>array("mid" => "textyle", "module_srl" => "730","node_srl"=>"752","category_srl"=>"752","parent_srl"=>"0","text"=>$_titles[752][$lang_type],"selected"=>(in_array(Context::get("category"),array("752"))?1:0),"expand"=>'N',"color"=>NULL,"description"=>$_descriptions[752][$lang_type],"list"=>array(),"document_count"=>"1","grant"=>true?true:false),753=>array("mid" => "textyle", "module_srl" => "730","node_srl"=>"753","category_srl"=>"753","parent_srl"=>"0","text"=>$_titles[753][$lang_type],"selected"=>(in_array(Context::get("category"),array("753"))?1:0),"expand"=>'N',"color"=>NULL,"description"=>$_descriptions[753][$lang_type],"list"=>array(),"document_count"=>"0","grant"=>true?true:false),); 