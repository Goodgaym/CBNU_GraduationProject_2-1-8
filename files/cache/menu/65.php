<?php if(!defined("__XE__")) exit(); $menu = new stdClass();$lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); }; $_menu_names[67] = array("en"=>'Welcome Page',"ko"=>'Welcome Page',"jp"=>'Welcome Page',"zh-CN"=>'Welcome Page',"zh-TW"=>'Welcome Page',"fr"=>'Welcome Page',"de"=>'Welcome Page',"ru"=>'Welcome Page',"es"=>'Welcome Page',"tr"=>'Welcome Page',"vi"=>'Welcome Page',"mn"=>'Welcome Page',); $_menu_names[69] = array("en"=>'Board',"ko"=>'Board',"jp"=>'Board',"zh-CN"=>'Board',"zh-TW"=>'Board',"fr"=>'Board',"de"=>'Board',"ru"=>'Board',"es"=>'Board',"tr"=>'Board',"vi"=>'Board',"mn"=>'Board',); $_menu_names[70] = array("en"=>'SAMPLE 1',"ko"=>'SAMPLE 1',"jp"=>'SAMPLE 1',"zh-CN"=>'SAMPLE 1',"zh-TW"=>'SAMPLE 1',"fr"=>'SAMPLE 1',"de"=>'SAMPLE 1',"ru"=>'SAMPLE 1',"es"=>'SAMPLE 1',"tr"=>'SAMPLE 1',"vi"=>'SAMPLE 1',"mn"=>'SAMPLE 1',); $_menu_names[71] = array("en"=>'SAMPLE 1-1',"ko"=>'SAMPLE 1-1',"jp"=>'SAMPLE 1-1',"zh-CN"=>'SAMPLE 1-1',"zh-TW"=>'SAMPLE 1-1',"fr"=>'SAMPLE 1-1',"de"=>'SAMPLE 1-1',"ru"=>'SAMPLE 1-1',"es"=>'SAMPLE 1-1',"tr"=>'SAMPLE 1-1',"vi"=>'SAMPLE 1-1',"mn"=>'SAMPLE 1-1',); $_menu_names[72] = array("en"=>'SAMPLE 2',"ko"=>'SAMPLE 2',"jp"=>'SAMPLE 2',"zh-CN"=>'SAMPLE 2',"zh-TW"=>'SAMPLE 2',"fr"=>'SAMPLE 2',"de"=>'SAMPLE 2',"ru"=>'SAMPLE 2',"es"=>'SAMPLE 2',"tr"=>'SAMPLE 2',"vi"=>'SAMPLE 2',"mn"=>'SAMPLE 2',); $_menu_names[73] = array("en"=>'SAMPLE 3',"ko"=>'SAMPLE 3',"jp"=>'SAMPLE 3',"zh-CN"=>'SAMPLE 3',"zh-TW"=>'SAMPLE 3',"fr"=>'SAMPLE 3',"de"=>'SAMPLE 3',"ru"=>'SAMPLE 3',"es"=>'SAMPLE 3',"tr"=>'SAMPLE 3',"vi"=>'SAMPLE 3',"mn"=>'SAMPLE 3',); $_menu_names[146] = array("en"=>'Textyle Hub',"ko"=>'Textyle Hub',"jp"=>'Textyle Hub',"zh-CN"=>'Textyle Hub',"zh-TW"=>'Textyle Hub',"fr"=>'Textyle Hub',"de"=>'Textyle Hub',"ru"=>'Textyle Hub',"es"=>'Textyle Hub',"tr"=>'Textyle Hub',"vi"=>'Textyle Hub',"mn"=>'Textyle Hub',); $_menu_names[75] = array("en"=>'XEIcon',"ko"=>'XEIcon',"jp"=>'XEIcon',"zh-CN"=>'XEIcon',"zh-TW"=>'XEIcon',"fr"=>'XEIcon',"de"=>'XEIcon',"ru"=>'XEIcon',"es"=>'XEIcon',"tr"=>'XEIcon',"vi"=>'XEIcon',"mn"=>'XEIcon',); ; $menu->list = array(67=>array("node_srl" => 67, "parent_srl" => 0, "menu_name_key" => 'Welcome Page', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[67][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','index') : ""), "url" => (true ? 'index' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("index") && in_array(Context::get("mid"), array("index")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("index") && in_array(Context::get("mid"), array("index")) ? $_menu_names[67][$lang_type] : $_menu_names[67][$lang_type]) : ""),),69=>array("node_srl" => 69, "parent_srl" => 0, "menu_name_key" => 'Board', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[69][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','board') : ""), "url" => (true ? 'board' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#","#","#","#","Textyle","board") && in_array(Context::get("mid"), array("#","#","#","#","Textyle","board")) ? 1 : 0), "expand" => 'N', "list" => array(70=>array("node_srl" => 70, "parent_srl" => 69, "menu_name_key" => 'SAMPLE 1', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[70][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#","#") && in_array(Context::get("mid"), array("#","#")) ? 1 : 0), "expand" => 'N', "list" => array(71=>array("node_srl" => 71, "parent_srl" => 70, "menu_name_key" => 'SAMPLE 1-1', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[71][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[71][$lang_type] : $_menu_names[71][$lang_type]) : ""),),), "link" => (true ? (array("#","#") && in_array(Context::get("mid"), array("#","#")) ? $_menu_names[70][$lang_type] : $_menu_names[70][$lang_type]) : ""),),72=>array("node_srl" => 72, "parent_srl" => 69, "menu_name_key" => 'SAMPLE 2', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[72][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[72][$lang_type] : $_menu_names[72][$lang_type]) : ""),),73=>array("node_srl" => 73, "parent_srl" => 69, "menu_name_key" => 'SAMPLE 3', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[73][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[73][$lang_type] : $_menu_names[73][$lang_type]) : ""),),146=>array("node_srl" => 146, "parent_srl" => 69, "menu_name_key" => 'Textyle Hub', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[146][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','Textyle') : ""), "url" => (true ? 'Textyle' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("Textyle") && in_array(Context::get("mid"), array("Textyle")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("Textyle") && in_array(Context::get("mid"), array("Textyle")) ? $_menu_names[146][$lang_type] : $_menu_names[146][$lang_type]) : ""),),), "link" => (true ? (array("#","#","#","#","Textyle","board") && in_array(Context::get("mid"), array("#","#","#","#","Textyle","board")) ? $_menu_names[69][$lang_type] : $_menu_names[69][$lang_type]) : ""),),75=>array("node_srl" => 75, "parent_srl" => 0, "menu_name_key" => 'XEIcon', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[75][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','xeicon') : ""), "url" => (true ? 'xeicon' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("xeicon") && in_array(Context::get("mid"), array("xeicon")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("xeicon") && in_array(Context::get("mid"), array("xeicon")) ? $_menu_names[75][$lang_type] : $_menu_names[75][$lang_type]) : ""),),); if(!$is_admin) { recurciveExposureCheck($menu->list); }Context::set("included_menu", $menu); ?>