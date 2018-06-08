<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteSiteCounter");
$query->setAction("delete");
$query->setPriority("");

${'site_srl10_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl10_argument'}->checkFilter('number');
${'site_srl10_argument'}->checkNotNull();
${'site_srl10_argument'}->createConditionValue();
if(!${'site_srl10_argument'}->isValid()) return ${'site_srl10_argument'}->getErrorMessage();
if(${'site_srl10_argument'} !== null) ${'site_srl10_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_counter_site_status`', '`counter_site_status`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl10_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>