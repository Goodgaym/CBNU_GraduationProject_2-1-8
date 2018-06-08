<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteCounterStatus");
$query->setAction("select");
$query->setPriority("");

${'site_srl1_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl1_argument'}->ensureDefaultValue('0');
${'site_srl1_argument'}->createConditionValue();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');

${'regdate2_argument'} = new ConditionArgument('regdate', $args->regdate, 'in');
${'regdate2_argument'}->checkNotNull();
${'regdate2_argument'}->createConditionValue();
if(!${'regdate2_argument'}->isValid()) return ${'regdate2_argument'}->getErrorMessage();
if(${'regdate2_argument'} !== null) ${'regdate2_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_counter_site_status`', '`counter_site_status`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl1_argument,"equal")
,new ConditionWithArgument('`regdate`',$regdate2_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>