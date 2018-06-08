<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getOverpolDocumentCount");
$query->setAction("select");
$query->setPriority("");

${'module_srls5_argument'} = new ConditionArgument('module_srls', $args->module_srls, 'in');
${'module_srls5_argument'}->checkFilter('numbers');
${'module_srls5_argument'}->checkNotNull();
${'module_srls5_argument'}->createConditionValue();
if(!${'module_srls5_argument'}->isValid()) return ${'module_srls5_argument'}->getErrorMessage();
if(${'module_srls5_argument'} !== null) ${'module_srls5_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`module_srl`')
,new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srls5_argument,"in", 'and')))
));
$query->setGroups(array(
'`documents`.`module_srl`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>