<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteSiteGroup");
$query->setAction("delete");
$query->setPriority("");

${'site_srl8_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl8_argument'}->checkFilter('number');
${'site_srl8_argument'}->checkNotNull();
${'site_srl8_argument'}->createConditionValue();
if(!${'site_srl8_argument'}->isValid()) return ${'site_srl8_argument'}->getErrorMessage();
if(${'site_srl8_argument'} !== null) ${'site_srl8_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_member_group`', '`member_group`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl8_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>