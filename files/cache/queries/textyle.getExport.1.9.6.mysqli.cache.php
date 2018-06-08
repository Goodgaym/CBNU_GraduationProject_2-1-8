<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getExport");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl1_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl1_argument'}->checkFilter('number');
${'site_srl1_argument'}->createConditionValue();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
} else
${'site_srl1_argument'} = NULL;if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`sites`.`domain`', '`domain`')
,new SelectExpression('`member`.`nick_name`', '`nick_name`')
,new SelectExpression('`member`.`user_name`', '`user_name`')
,new SelectExpression('`member`.`user_id`', '`user_id`')
,new SelectExpression('`member`.`email_address`', '`email_address`')
,new SelectExpression('`export`.`export_status`', '`export_status`')
,new SelectExpression('`export`.`export_type`', '`export_type`')
,new SelectExpression('`export`.`regdate`', '`regdate`')
,new SelectExpression('`export`.`export_file`', '`export_file`')
,new SelectExpression('`export`.`export_date`', '`export_date`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
,new Table('`xe_textyle_export`', '`export`')
,new Table('`xe_member`', '`member`')
,new Table('`xe_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`export`.`site_srl`',$site_srl1_argument,"equal", 'and')
,new ConditionWithoutArgument('`sites`.`site_srl`','`modules`.`site_srl`',"equal", 'and')
,new ConditionWithoutArgument('`export`.`member_srl`','`member`.`member_srl`',"equal", 'and')
,new ConditionWithoutArgument('`modules`.`module_srl`','`export`.`module_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>