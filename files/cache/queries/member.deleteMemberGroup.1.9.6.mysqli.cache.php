<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteMemberGroup");
$query->setAction("delete");
$query->setPriority("");

${'site_srl7_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl7_argument'}->checkNotNull();
${'site_srl7_argument'}->createConditionValue();
if(!${'site_srl7_argument'}->isValid()) return ${'site_srl7_argument'}->getErrorMessage();
if(${'site_srl7_argument'} !== null) ${'site_srl7_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_member_group_member`', '`member_group_member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl7_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>