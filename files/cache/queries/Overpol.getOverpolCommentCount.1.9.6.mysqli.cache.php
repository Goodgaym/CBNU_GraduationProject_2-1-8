<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getOverpolCommentCount");
$query->setAction("select");
$query->setPriority("");

${'module_srls6_argument'} = new ConditionArgument('module_srls', $args->module_srls, 'in');
${'module_srls6_argument'}->checkFilter('numbers');
${'module_srls6_argument'}->checkNotNull();
${'module_srls6_argument'}->createConditionValue();
if(!${'module_srls6_argument'}->isValid()) return ${'module_srls6_argument'}->getErrorMessage();
if(${'module_srls6_argument'} !== null) ${'module_srls6_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`module_srl`')
,new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srls6_argument,"in", 'and')))
));
$query->setGroups(array(
'`comments`.`module_srl`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>