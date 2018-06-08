<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRefererHostList");
$query->setAction("select");
$query->setPriority("");

${'module_srl6_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl6_argument'}->checkFilter('number');
${'module_srl6_argument'}->checkNotNull();
${'module_srl6_argument'}->createConditionValue();
if(!${'module_srl6_argument'}->isValid()) return ${'module_srl6_argument'}->getErrorMessage();
if(${'module_srl6_argument'} !== null) ${'module_srl6_argument'}->setColumnType('number');
if(isset($args->day)) {
${'day7_argument'} = new ConditionArgument('day', $args->day, 'equal');
${'day7_argument'}->createConditionValue();
if(!${'day7_argument'}->isValid()) return ${'day7_argument'}->getErrorMessage();
} else
${'day7_argument'} = NULL;if(${'day7_argument'} !== null) ${'day7_argument'}->setColumnType('date');
if(isset($args->month)) {
${'month8_argument'} = new ConditionArgument('month', $args->month, 'like_prefix');
${'month8_argument'}->createConditionValue();
if(!${'month8_argument'}->isValid()) return ${'month8_argument'}->getErrorMessage();
} else
${'month8_argument'} = NULL;if(${'month8_argument'} !== null) ${'month8_argument'}->setColumnType('date');
if(isset($args->start_date)) {
${'start_date9_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date9_argument'}->createConditionValue();
if(!${'start_date9_argument'}->isValid()) return ${'start_date9_argument'}->getErrorMessage();
} else
${'start_date9_argument'} = NULL;if(${'start_date9_argument'} !== null) ${'start_date9_argument'}->setColumnType('date');
if(isset($args->end_date)) {
${'end_date10_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date10_argument'}->createConditionValue();
if(!${'end_date10_argument'}->isValid()) return ${'end_date10_argument'}->getErrorMessage();
} else
${'end_date10_argument'} = NULL;if(${'end_date10_argument'} !== null) ${'end_date10_argument'}->setColumnType('date');

${'page12_argument'} = new Argument('page', $args->{'page'});
${'page12_argument'}->ensureDefaultValue('1');
if(!${'page12_argument'}->isValid()) return ${'page12_argument'}->getErrorMessage();

${'page_count13_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count13_argument'}->ensureDefaultValue('10');
if(!${'page_count13_argument'}->isValid()) return ${'page_count13_argument'}->getErrorMessage();

${'list_count14_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count14_argument'}->ensureDefaultValue('20');
if(!${'list_count14_argument'}->isValid()) return ${'list_count14_argument'}->getErrorMessage();

${'list_order11_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order11_argument'}->ensureDefaultValue('referer.visitor');
if(!${'list_order11_argument'}->isValid()) return ${'list_order11_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`documents`.*')
,new SelectExpression('`referer`.`textyle_host_srl`', '`host_srl`')
,new SelectExpression('`referer`.`host`', '`host`')
,new SelectExpression('`referer`.`visitor`', '`visitor`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
,new Table('`xe_textyle_referer_hosts`', '`referer`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`referer`.`module_srl`',$module_srl6_argument,"equal")
,new ConditionWithoutArgument('`documents`.`document_srl`','`referer`.`document_srl`',"equal", 'and')
,new ConditionWithArgument('`referer`.`regdate`',$day7_argument,"equal", 'and')
,new ConditionWithArgument('`referer`.`regdate`',$month8_argument,"like_prefix", 'and')
,new ConditionWithArgument('`referer`.`regdate`',$start_date9_argument,"more", 'and')
,new ConditionWithArgument('`referer`.`regdate`',$end_date10_argument,"less", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'list_order11_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count14_argument'}, ${'page12_argument'}, ${'page_count13_argument'}));
return $query; ?>