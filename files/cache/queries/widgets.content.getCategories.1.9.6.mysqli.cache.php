<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCategories");
$query->setAction("select");
$query->setPriority("");

${'module_srl78_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl78_argument'}->checkFilter('number');
${'module_srl78_argument'}->checkNotNull();
${'module_srl78_argument'}->createConditionValue();
if(!${'module_srl78_argument'}->isValid()) return ${'module_srl78_argument'}->getErrorMessage();
if(${'module_srl78_argument'} !== null) ${'module_srl78_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`module_srl`')
,new SelectExpression('`category_srl`')
,new SelectExpression('`title`')
));
$query->setTables(array(
new Table('`xe_document_categories`', '`document_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl78_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>