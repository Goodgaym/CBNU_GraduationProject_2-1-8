<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = '';
$info->action = new stdClass;
$info->action->procMaterialDelete = new stdClass;
$info->action->procMaterialDelete->type='controller';
$info->action->procMaterialDelete->grant='guest';
$info->action->procMaterialDelete->standalone='true';
$info->action->procMaterialDelete->ruleset='';
$info->action->procMaterialDelete->method='';
$info->action->procMaterialDelete->check_csrf='true';
$info->action->procMaterialInsert = new stdClass;
$info->action->procMaterialInsert->type='controller';
$info->action->procMaterialInsert->grant='guest';
$info->action->procMaterialInsert->standalone='true';
$info->action->procMaterialInsert->ruleset='';
$info->action->procMaterialInsert->method='';
$info->action->procMaterialInsert->check_csrf='true';
$info->action->dispMaterialList = new stdClass;
$info->action->dispMaterialList->type='view';
$info->action->dispMaterialList->grant='guest';
$info->action->dispMaterialList->standalone='true';
$info->action->dispMaterialList->ruleset='';
$info->action->dispMaterialList->method='';
$info->action->dispMaterialList->check_csrf='true';
$info->action->dispMaterialPopup = new stdClass;
$info->action->dispMaterialPopup->type='view';
$info->action->dispMaterialPopup->grant='guest';
$info->action->dispMaterialPopup->standalone='true';
$info->action->dispMaterialPopup->ruleset='';
$info->action->dispMaterialPopup->method='';
$info->action->dispMaterialPopup->check_csrf='true';
return $info;