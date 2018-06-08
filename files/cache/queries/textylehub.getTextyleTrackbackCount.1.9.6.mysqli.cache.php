<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTextyleTrackbackCount");
$query->setAction("select");
$query->setPriority("");

${'module_srls7_argument'} = new ConditionArgument('module_srls', $args->module_srls, 'in');
${'module_srls7_argument'}->checkFilter('numbers');
${'module_srls7_argument'}->checkNotNull();
${'module_srls7_argument'}->createConditionValue();
if(!${'module_srls7_argument'}->isValid()) return ${'module_srls7_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`module_srl`')
,new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_trackbacks`', '`trackbacks`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srls7_argument,"in", 'and')))
));
$query->setGroups(array(
'`trackbacks`.`module_srl`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>