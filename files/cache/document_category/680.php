<?php if(!defined("__XE__")) exit(); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srsl = array(); } 
$_titles = array();$_descriptions = array();$_titles[701]["ko"] = '포트폴리오'; $_descriptions[701]["ko"] = ''; $_titles[702]["ko"] = '이력서'; $_descriptions[702]["ko"] = ''; $_titles[703]["ko"] = '수상'; $_descriptions[703]["ko"] = ''; $menu = new stdClass;$menu->list = array(701=>array("mid" => "textyle", "module_srl" => "680","node_srl"=>"701","category_srl"=>"701","parent_srl"=>"0","text"=>$_titles[701][$lang_type],"selected"=>(in_array(Context::get("category"),array("701"))?1:0),"expand"=>'N',"color"=>NULL,"description"=>$_descriptions[701][$lang_type],"list"=>array(),"document_count"=>"0","grant"=>true?true:false),702=>array("mid" => "textyle", "module_srl" => "680","node_srl"=>"702","category_srl"=>"702","parent_srl"=>"0","text"=>$_titles[702][$lang_type],"selected"=>(in_array(Context::get("category"),array("702"))?1:0),"expand"=>'N',"color"=>NULL,"description"=>$_descriptions[702][$lang_type],"list"=>array(),"document_count"=>"0","grant"=>true?true:false),703=>array("mid" => "textyle", "module_srl" => "680","node_srl"=>"703","category_srl"=>"703","parent_srl"=>"0","text"=>$_titles[703][$lang_type],"selected"=>(in_array(Context::get("category"),array("703"))?1:0),"expand"=>'N',"color"=>NULL,"description"=>$_descriptions[703][$lang_type],"list"=>array(),"document_count"=>"0","grant"=>true?true:false),); 