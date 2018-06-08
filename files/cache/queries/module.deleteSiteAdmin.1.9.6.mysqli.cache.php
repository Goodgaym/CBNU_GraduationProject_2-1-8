<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteSiteAdmin");
$query->setAction("delete");
$query->setPriority("");

${'site_srl1_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl1_argument'}->checkFilter('number');
${'site_srl1_argument'}->checkNotNull();
${'site_srl1_argument'}->createConditionValue();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_site_admin`', '`site_admin`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>