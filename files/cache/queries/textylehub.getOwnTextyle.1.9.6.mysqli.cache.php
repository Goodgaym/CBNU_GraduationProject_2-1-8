<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getOwnTextyle");
$query->setAction("select");
$query->setPriority("");

${'member_srl1_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl1_argument'}->checkFilter('number');
${'member_srl1_argument'}->checkNotNull();
${'member_srl1_argument'}->createConditionValue();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`sites`.`domain`', '`domain`')
,new SelectExpression('`textyle`.*')
));
$query->setTables(array(
new Table('`xe_site_admin`', '`admin`')
,new Table('`xe_sites`', '`sites`')
,new Table('`xe_textyle`', '`textyle`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`admin`.`member_srl`',$member_srl1_argument,"equal")
,new ConditionWithoutArgument('`sites`.`site_srl`','`admin`.`site_srl`',"equal", 'and')
,new ConditionWithoutArgument('`textyle`.`module_srl`','`sites`.`index_module_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>