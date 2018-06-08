<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRefererHostMaxVisitor");
$query->setAction("select");
$query->setPriority("");

${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->checkNotNull();
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');
if(isset($args->day)) {
${'day2_argument'} = new ConditionArgument('day', $args->day, 'equal');
${'day2_argument'}->createConditionValue();
if(!${'day2_argument'}->isValid()) return ${'day2_argument'}->getErrorMessage();
} else
${'day2_argument'} = NULL;if(${'day2_argument'} !== null) ${'day2_argument'}->setColumnType('date');
if(isset($args->month)) {
${'month3_argument'} = new ConditionArgument('month', $args->month, 'like_prefix');
${'month3_argument'}->createConditionValue();
if(!${'month3_argument'}->isValid()) return ${'month3_argument'}->getErrorMessage();
} else
${'month3_argument'} = NULL;if(${'month3_argument'} !== null) ${'month3_argument'}->setColumnType('date');
if(isset($args->start_date)) {
${'start_date4_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date4_argument'}->createConditionValue();
if(!${'start_date4_argument'}->isValid()) return ${'start_date4_argument'}->getErrorMessage();
} else
${'start_date4_argument'} = NULL;if(${'start_date4_argument'} !== null) ${'start_date4_argument'}->setColumnType('date');
if(isset($args->end_date)) {
${'end_date5_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date5_argument'}->createConditionValue();
if(!${'end_date5_argument'}->isValid()) return ${'end_date5_argument'}->getErrorMessage();
} else
${'end_date5_argument'} = NULL;if(${'end_date5_argument'} !== null) ${'end_date5_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('max(`visitor`)', '`visitor`')
));
$query->setTables(array(
new Table('`xe_textyle_referer_hosts`', '`referer`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`referer`.`module_srl`',$module_srl1_argument,"equal")
,new ConditionWithArgument('`referer`.`regdate`',$day2_argument,"equal", 'and')
,new ConditionWithArgument('`referer`.`regdate`',$month3_argument,"like_prefix", 'and')
,new ConditionWithArgument('`referer`.`regdate`',$start_date4_argument,"more", 'and')
,new ConditionWithArgument('`referer`.`regdate`',$end_date5_argument,"less", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>