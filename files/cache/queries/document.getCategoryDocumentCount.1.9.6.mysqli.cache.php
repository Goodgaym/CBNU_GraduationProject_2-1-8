<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCategoryDocumentCount");
$query->setAction("select");
$query->setPriority("");

${'category_srl28_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl28_argument'}->checkFilter('number');
${'category_srl28_argument'}->checkNotNull();
${'category_srl28_argument'}->createConditionValue();
if(!${'category_srl28_argument'}->isValid()) return ${'category_srl28_argument'}->getErrorMessage();
if(${'category_srl28_argument'} !== null) ${'category_srl28_argument'}->setColumnType('number');

${'module_srl29_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl29_argument'}->checkFilter('number');
${'module_srl29_argument'}->checkNotNull();
${'module_srl29_argument'}->createConditionValue();
if(!${'module_srl29_argument'}->isValid()) return ${'module_srl29_argument'}->getErrorMessage();
if(${'module_srl29_argument'} !== null) ${'module_srl29_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`category_srl`',$category_srl28_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl29_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>