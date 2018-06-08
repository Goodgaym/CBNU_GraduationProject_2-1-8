<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateSiteCounterPageview");
$query->setAction("update");
$query->setPriority("");

${'pageview4_argument'} = new Argument('pageview', NULL);
${'pageview4_argument'}->setColumnOperation('+');
${'pageview4_argument'}->ensureDefaultValue(1);
if(!${'pageview4_argument'}->isValid()) return ${'pageview4_argument'}->getErrorMessage();
if(${'pageview4_argument'} !== null) ${'pageview4_argument'}->setColumnType('number');

${'site_srl5_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl5_argument'}->ensureDefaultValue('0');
${'site_srl5_argument'}->createConditionValue();
if(!${'site_srl5_argument'}->isValid()) return ${'site_srl5_argument'}->getErrorMessage();
if(${'site_srl5_argument'} !== null) ${'site_srl5_argument'}->setColumnType('number');

${'regdate6_argument'} = new ConditionArgument('regdate', $args->regdate, 'in');
${'regdate6_argument'}->checkNotNull();
${'regdate6_argument'}->createConditionValue();
if(!${'regdate6_argument'}->isValid()) return ${'regdate6_argument'}->getErrorMessage();
if(${'regdate6_argument'} !== null) ${'regdate6_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`pageview`', ${'pageview4_argument'})
));
$query->setTables(array(
new Table('`xe_counter_site_status`', '`counter_site_status`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl5_argument,"equal")
,new ConditionWithArgument('`regdate`',$regdate6_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>