<?php if(!defined("__XE__")) exit(); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srsl = array(); } 
$_titles = array();$_descriptions = array();$_titles[417]["ko"] = '기본 카테고리'; $_descriptions[417]["ko"] = ''; $menu = new stdClass;$menu->list = array(417=>array("mid" => "textyle", "module_srl" => "396","node_srl"=>"417","category_srl"=>"417","parent_srl"=>"0","text"=>$_titles[417][$lang_type],"selected"=>(in_array(Context::get("category"),array("417"))?1:0),"expand"=>'N',"color"=>NULL,"description"=>$_descriptions[417][$lang_type],"list"=>array(),"document_count"=>"1","grant"=>true?true:false),); 