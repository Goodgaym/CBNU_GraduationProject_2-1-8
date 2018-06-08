<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteSiteCounterLog");
$query->setAction("delete");
$query->setPriority("");

${'site_srl11_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl11_argument'}->checkFilter('number');
${'site_srl11_argument'}->checkNotNull();
${'site_srl11_argument'}->createConditionValue();
if(!${'site_srl11_argument'}->isValid()) return ${'site_srl11_argument'}->getErrorMessage();
if(${'site_srl11_argument'} !== null) ${'site_srl11_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_counter_log`', '`counter_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl11_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>