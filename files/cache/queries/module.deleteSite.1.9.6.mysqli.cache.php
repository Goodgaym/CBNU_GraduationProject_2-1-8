<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteSite");
$query->setAction("delete");
$query->setPriority("");

${'site_srl6_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl6_argument'}->checkFilter('number');
${'site_srl6_argument'}->checkNotNull();
${'site_srl6_argument'}->createConditionValue();
if(!${'site_srl6_argument'}->isValid()) return ${'site_srl6_argument'}->getErrorMessage();
if(${'site_srl6_argument'} !== null) ${'site_srl6_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl6_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>