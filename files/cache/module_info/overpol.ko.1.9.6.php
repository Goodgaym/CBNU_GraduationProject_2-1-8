<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = 'dispOverpolHub';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispOverpolAdminList';
$info->action = new stdClass;
$info->action->dispOverpolHub = new stdClass;
$info->action->dispOverpolHub->type='view';
$info->action->dispOverpolHub->grant='guest';
$info->action->dispOverpolHub->standalone='true';
$info->action->dispOverpolHub->ruleset='';
$info->action->dispOverpolHub->method='';
$info->action->dispOverpolHub->check_csrf='true';
$info->action->dispOverpolSearch = new stdClass;
$info->action->dispOverpolSearch->type='view';
$info->action->dispOverpolSearch->grant='guest';
$info->action->dispOverpolSearch->standalone='true';
$info->action->dispOverpolSearch->ruleset='';
$info->action->dispOverpolSearch->method='';
$info->action->dispOverpolSearch->check_csrf='true';
$info->action->dispOverpolResume = new stdClass;
$info->action->dispOverpolResume->type='view';
$info->action->dispOverpolResume->grant='guest';
$info->action->dispOverpolResume->standalone='true';
$info->action->dispOverpolResume->ruleset='';
$info->action->dispOverpolResume->method='';
$info->action->dispOverpolResume->check_csrf='true';
$info->action->dispOverpolPorfolio = new stdClass;
$info->action->dispOverpolPorfolio->type='view';
$info->action->dispOverpolPorfolio->grant='guest';
$info->action->dispOverpolPorfolio->standalone='true';
$info->action->dispOverpolPorfolio->ruleset='';
$info->action->dispOverpolPorfolio->method='';
$info->action->dispOverpolPorfolio->check_csrf='true';
$info->action->dispOverpolAdminList = new stdClass;
$info->action->dispOverpolAdminList->type='view';
$info->action->dispOverpolAdminList->grant='guest';
$info->action->dispOverpolAdminList->standalone='true';
$info->action->dispOverpolAdminList->ruleset='';
$info->action->dispOverpolAdminList->method='';
$info->action->dispOverpolAdminList->check_csrf='true';
$info->action->dispOverpolAdminInsert = new stdClass;
$info->action->dispOverpolAdminInsert->type='view';
$info->action->dispOverpolAdminInsert->grant='guest';
$info->action->dispOverpolAdminInsert->standalone='true';
$info->action->dispOverpolAdminInsert->ruleset='';
$info->action->dispOverpolAdminInsert->method='';
$info->action->dispOverpolAdminInsert->check_csrf='true';
$info->action->procOverpolAdminInsert = new stdClass;
$info->action->procOverpolAdminInsert->type='controller';
$info->action->procOverpolAdminInsert->grant='guest';
$info->action->procOverpolAdminInsert->standalone='true';
$info->action->procOverpolAdminInsert->ruleset='';
$info->action->procOverpolAdminInsert->method='';
$info->action->procOverpolAdminInsert->check_csrf='true';
$info->action->dispOverpolAdminInfo = new stdClass;
$info->action->dispOverpolAdminInfo->type='view';
$info->action->dispOverpolAdminInfo->grant='guest';
$info->action->dispOverpolAdminInfo->standalone='true';
$info->action->dispOverpolAdminInfo->ruleset='';
$info->action->dispOverpolAdminInfo->method='';
$info->action->dispOverpolAdminInfo->check_csrf='true';
$info->action->dispOverpolAdminDelete = new stdClass;
$info->action->dispOverpolAdminDelete->type='view';
$info->action->dispOverpolAdminDelete->grant='guest';
$info->action->dispOverpolAdminDelete->standalone='true';
$info->action->dispOverpolAdminDelete->ruleset='';
$info->action->dispOverpolAdminDelete->method='';
$info->action->dispOverpolAdminDelete->check_csrf='true';
$info->action->procOverpolAdminDelete = new stdClass;
$info->action->procOverpolAdminDelete->type='controller';
$info->action->procOverpolAdminDelete->grant='guest';
$info->action->procOverpolAdminDelete->standalone='true';
$info->action->procOverpolAdminDelete->ruleset='';
$info->action->procOverpolAdminDelete->method='';
$info->action->procOverpolAdminDelete->check_csrf='true';
$info->action->dispOverpolAdminGrantInfo = new stdClass;
$info->action->dispOverpolAdminGrantInfo->type='view';
$info->action->dispOverpolAdminGrantInfo->grant='guest';
$info->action->dispOverpolAdminGrantInfo->standalone='true';
$info->action->dispOverpolAdminGrantInfo->ruleset='';
$info->action->dispOverpolAdminGrantInfo->method='';
$info->action->dispOverpolAdminGrantInfo->check_csrf='true';
$info->action->dispOverpolAdminSkinInfo = new stdClass;
$info->action->dispOverpolAdminSkinInfo->type='view';
$info->action->dispOverpolAdminSkinInfo->grant='guest';
$info->action->dispOverpolAdminSkinInfo->standalone='true';
$info->action->dispOverpolAdminSkinInfo->ruleset='';
$info->action->dispOverpolAdminSkinInfo->method='';
$info->action->dispOverpolAdminSkinInfo->check_csrf='true';
return $info;