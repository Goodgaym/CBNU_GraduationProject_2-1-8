<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateSiteCounterUnique");
$query->setAction("update");
$query->setPriority("");

${'unique_visitor11_argument'} = new Argument('unique_visitor', NULL);
${'unique_visitor11_argument'}->setColumnOperation('+');
${'unique_visitor11_argument'}->ensureDefaultValue(1);
if(!${'unique_visitor11_argument'}->isValid()) return ${'unique_visitor11_argument'}->getErrorMessage();
if(${'unique_visitor11_argument'} !== null) ${'unique_visitor11_argument'}->setColumnType('number');

${'pageview12_argument'} = new Argument('pageview', NULL);
${'pageview12_argument'}->setColumnOperation('+');
${'pageview12_argument'}->ensureDefaultValue(1);
if(!${'pageview12_argument'}->isValid()) return ${'pageview12_argument'}->getErrorMessage();
if(${'pageview12_argument'} !== null) ${'pageview12_argument'}->setColumnType('number');

${'site_srl13_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl13_argument'}->checkNotNull();
${'site_srl13_argument'}->createConditionValue();
if(!${'site_srl13_argument'}->isValid()) return ${'site_srl13_argument'}->getErrorMessage();
if(${'site_srl13_argument'} !== null) ${'site_srl13_argument'}->setColumnType('number');

${'regdate14_argument'} = new ConditionArgument('regdate', $args->regdate, 'in');
${'regdate14_argument'}->checkNotNull();
${'regdate14_argument'}->createConditionValue();
if(!${'regdate14_argument'}->isValid()) return ${'regdate14_argument'}->getErrorMessage();
if(${'regdate14_argument'} !== null) ${'regdate14_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`unique_visitor`', ${'unique_visitor11_argument'})
,new UpdateExpression('`pageview`', ${'pageview12_argument'})
));
$query->setTables(array(
new Table('`xe_counter_site_status`', '`counter_site_status`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl13_argument,"equal")
,new ConditionWithArgument('`regdate`',$regdate14_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>