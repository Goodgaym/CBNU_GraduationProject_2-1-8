<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTextyle");
$query->setAction("select");
$query->setPriority("");

${'module_srl15_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl15_argument'}->checkFilter('number');
${'module_srl15_argument'}->checkNotNull();
${'module_srl15_argument'}->createConditionValue();
if(!${'module_srl15_argument'}->isValid()) return ${'module_srl15_argument'}->getErrorMessage();
if(${'module_srl15_argument'} !== null) ${'module_srl15_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`sites`.`domain`', '`domain`')
,new SelectExpression('`sites`.`default_language`', '`default_language`')
,new SelectExpression('`member`.`nick_name`', '`nick_name`')
,new SelectExpression('`member`.`user_name`', '`user_name`')
,new SelectExpression('`member`.`user_id`', '`user_id`')
,new SelectExpression('`member`.`email_address`')
,new SelectExpression('`modules`.*')
,new SelectExpression('`textyle`.*')
));
$query->setTables(array(
new Table('`xe_sites`', '`sites`')
,new Table('`xe_modules`', '`modules`')
,new Table('`xe_textyle`', '`textyle`')
,new JoinTable('`xe_member`', '`member`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`textyle`.`member_srl`','`member`.`member_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`modules`.`module_srl`',$module_srl15_argument,"equal")
,new ConditionWithoutArgument('`sites`.`site_srl`','`modules`.`site_srl`',"equal", 'and')
,new ConditionWithoutArgument('`modules`.`module_srl`','`textyle`.`module_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>