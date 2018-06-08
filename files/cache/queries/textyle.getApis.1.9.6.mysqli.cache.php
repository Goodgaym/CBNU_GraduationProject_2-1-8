<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getApis");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
} else
${'module_srl1_argument'} = NULL;if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');
if(isset($args->enable)) {
${'enable2_argument'} = new ConditionArgument('enable', $args->enable, 'equal');
${'enable2_argument'}->createConditionValue();
if(!${'enable2_argument'}->isValid()) return ${'enable2_argument'}->getErrorMessage();
} else
${'enable2_argument'} = NULL;if(${'enable2_argument'} !== null) ${'enable2_argument'}->setColumnType('char');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_textyle_api`', '`textyle_api`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl1_argument,"equal")
,new ConditionWithArgument('`enable`',$enable2_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>