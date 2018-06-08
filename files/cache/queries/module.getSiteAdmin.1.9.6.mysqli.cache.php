<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAdmin");
$query->setAction("select");
$query->setPriority("");

${'site_srl1_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl1_argument'}->checkNotNull();
${'site_srl1_argument'}->createConditionValue();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`site_admin`.`site_srl`')
,new SelectExpression('`member`.*')
));
$query->setTables(array(
new Table('`xe_site_admin`', '`site_admin`')
,new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_admin`.`site_srl`',$site_srl1_argument,"equal")
,new ConditionWithoutArgument('`member`.`member_srl`','`site_admin`.`member_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>