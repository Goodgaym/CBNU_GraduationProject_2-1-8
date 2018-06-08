<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteCounterLogStatus");
$query->setAction("select");
$query->setPriority("");

${'site_srl3_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl3_argument'}->checkNotNull();
${'site_srl3_argument'}->createConditionValue();
if(!${'site_srl3_argument'}->isValid()) return ${'site_srl3_argument'}->getErrorMessage();
if(${'site_srl3_argument'} !== null) ${'site_srl3_argument'}->setColumnType('number');

${'start_date4_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date4_argument'}->checkNotNull();
${'start_date4_argument'}->createConditionValue();
if(!${'start_date4_argument'}->isValid()) return ${'start_date4_argument'}->getErrorMessage();
if(${'start_date4_argument'} !== null) ${'start_date4_argument'}->setColumnType('date');

${'end_date5_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date5_argument'}->checkNotNull();
${'end_date5_argument'}->createConditionValue();
if(!${'end_date5_argument'}->isValid()) return ${'end_date5_argument'}->getErrorMessage();
if(${'end_date5_argument'} !== null) ${'end_date5_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_counter_log`', '`counter_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl3_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$start_date4_argument,"more", 'and')
,new ConditionWithArgument('`regdate`',$end_date5_argument,"less", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>