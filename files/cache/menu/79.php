<?php if(!defined("__XE__")) exit(); $menu = new stdClass();$lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); }; $_menu_names[81] = array("en"=>'GitHub',"ko"=>'GitHub',"jp"=>'GitHub',"zh-CN"=>'GitHub',"zh-TW"=>'GitHub',"fr"=>'GitHub',"de"=>'GitHub',"ru"=>'GitHub',"es"=>'GitHub',"tr"=>'GitHub',"vi"=>'GitHub',"mn"=>'GitHub',); $_menu_names[70] = array("en"=>'Welcome Page',"ko"=>'Welcome Page',"jp"=>'Welcome Page',"zh-CN"=>'Welcome Page',"zh-TW"=>'Welcome Page',"fr"=>'Welcome Page',"de"=>'Welcome Page',"ru"=>'Welcome Page',"es"=>'Welcome Page',"tr"=>'Welcome Page',"vi"=>'Welcome Page',"mn"=>'Welcome Page',); ; $menu->list = array(81=>array("node_srl" => 81, "parent_srl" => 0, "menu_name_key" => 'GitHub', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[81][$lang_type] : ""), "href" => (true ? 'https://github.com/xpressengine' : ""), "url" => (true ? 'https://github.com/xpressengine' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("https://github.com/xpressengine") && in_array(Context::get("mid"), array("https://github.com/xpressengine")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("https://github.com/xpressengine") && in_array(Context::get("mid"), array("https://github.com/xpressengine")) ? $_menu_names[81][$lang_type] : $_menu_names[81][$lang_type]) : ""),),70=>array("node_srl" => 70, "parent_srl" => 0, "menu_name_key" => 'Welcome Page', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[70][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','index') : ""), "url" => (true ? 'index' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("index") && in_array(Context::get("mid"), array("index")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("index") && in_array(Context::get("mid"), array("index")) ? $_menu_names[70][$lang_type] : $_menu_names[70][$lang_type]) : ""),),); if(!$is_admin) { recurciveExposureCheck($menu->list); }Context::set("included_menu", $menu); ?>