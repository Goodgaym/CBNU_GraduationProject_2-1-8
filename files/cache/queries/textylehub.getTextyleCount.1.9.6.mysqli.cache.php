<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTextyleCount");
$query->setAction("select");
$query->setPriority("");

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_textyle`', '`textyle`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>