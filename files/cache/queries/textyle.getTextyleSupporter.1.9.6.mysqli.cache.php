<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTextyleSupporter");
$query->setAction("select");
$query->setPriority("");

${'module_srl39_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl39_argument'}->checkFilter('number');
${'module_srl39_argument'}->checkNotNull();
${'module_srl39_argument'}->createConditionValue();
if(!${'module_srl39_argument'}->isValid()) return ${'module_srl39_argument'}->getErrorMessage();
if(${'module_srl39_argument'} !== null) ${'module_srl39_argument'}->setColumnType('number');
if(isset($args->textyle_supporter_srl)) {
${'textyle_supporter_srl40_argument'} = new ConditionArgument('textyle_supporter_srl', $args->textyle_supporter_srl, 'equal');
${'textyle_supporter_srl40_argument'}->createConditionValue();
if(!${'textyle_supporter_srl40_argument'}->isValid()) return ${'textyle_supporter_srl40_argument'}->getErrorMessage();
} else
${'textyle_supporter_srl40_argument'} = NULL;if(${'textyle_supporter_srl40_argument'} !== null) ${'textyle_supporter_srl40_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl41_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl41_argument'}->createConditionValue();
if(!${'member_srl41_argument'}->isValid()) return ${'member_srl41_argument'}->getErrorMessage();
} else
${'member_srl41_argument'} = NULL;if(${'member_srl41_argument'} !== null) ${'member_srl41_argument'}->setColumnType('number');
if(isset($args->nick_name)) {
${'nick_name42_argument'} = new ConditionArgument('nick_name', $args->nick_name, 'equal');
${'nick_name42_argument'}->createConditionValue();
if(!${'nick_name42_argument'}->isValid()) return ${'nick_name42_argument'}->getErrorMessage();
} else
${'nick_name42_argument'} = NULL;if(${'nick_name42_argument'} !== null) ${'nick_name42_argument'}->setColumnType('varchar');
if(isset($args->homepage)) {
${'homepage43_argument'} = new ConditionArgument('homepage', $args->homepage, 'equal');
${'homepage43_argument'}->createConditionValue();
if(!${'homepage43_argument'}->isValid()) return ${'homepage43_argument'}->getErrorMessage();
} else
${'homepage43_argument'} = NULL;if(${'homepage43_argument'} !== null) ${'homepage43_argument'}->setColumnType('varchar');
if(isset($args->regdate)) {
${'regdate44_argument'} = new ConditionArgument('regdate', $args->regdate, 'equal');
${'regdate44_argument'}->createConditionValue();
if(!${'regdate44_argument'}->isValid()) return ${'regdate44_argument'}->getErrorMessage();
} else
${'regdate44_argument'} = NULL;if(${'regdate44_argument'} !== null) ${'regdate44_argument'}->setColumnType('char');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_textyle_supporter`', '`textyle_supporter`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl39_argument,"equal")
,new ConditionWithArgument('`textyle_supporter_srl`',$textyle_supporter_srl40_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl41_argument,"equal", 'and')
,new ConditionWithArgument('`nick_name`',$nick_name42_argument,"equal", 'and')
,new ConditionWithArgument('`homepage`',$homepage43_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$regdate44_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>