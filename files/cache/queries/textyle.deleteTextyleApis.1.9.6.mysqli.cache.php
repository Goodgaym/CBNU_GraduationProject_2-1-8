<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteTextyleApis");
$query->setAction("delete");
$query->setPriority("");

${'module_srl17_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl17_argument'}->checkFilter('number');
${'module_srl17_argument'}->checkNotNull();
${'module_srl17_argument'}->createConditionValue();
if(!${'module_srl17_argument'}->isValid()) return ${'module_srl17_argument'}->getErrorMessage();
if(${'module_srl17_argument'} !== null) ${'module_srl17_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_textyle_api`', '`textyle_api`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl17_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>