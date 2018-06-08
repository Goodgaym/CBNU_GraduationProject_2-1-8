<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTextyleSupporterList");
$query->setAction("select");
$query->setPriority("");

${'module_srl2_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl2_argument'}->checkFilter('number');
${'module_srl2_argument'}->checkNotNull();
${'module_srl2_argument'}->createConditionValue();
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');

${'regdate3_argument'} = new ConditionArgument('regdate', $args->regdate, 'equal');
${'regdate3_argument'}->checkFilter('number');
${'regdate3_argument'}->checkNotNull();
${'regdate3_argument'}->createConditionValue();
if(!${'regdate3_argument'}->isValid()) return ${'regdate3_argument'}->getErrorMessage();
if(${'regdate3_argument'} !== null) ${'regdate3_argument'}->setColumnType('char');

${'page5_argument'} = new Argument('page', $args->{'page'});
${'page5_argument'}->ensureDefaultValue('1');
if(!${'page5_argument'}->isValid()) return ${'page5_argument'}->getErrorMessage();

${'page_count6_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count6_argument'}->ensureDefaultValue('10');
if(!${'page_count6_argument'}->isValid()) return ${'page_count6_argument'}->getErrorMessage();

${'list_count7_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count7_argument'}->ensureDefaultValue('10');
if(!${'list_count7_argument'}->isValid()) return ${'list_count7_argument'}->getErrorMessage();

${'sort_index4_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index4_argument'}->ensureDefaultValue('total_count');
if(!${'sort_index4_argument'}->isValid()) return ${'sort_index4_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_textyle_supporter`', '`textyle_supporter`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl2_argument,"equal")
,new ConditionWithArgument('`regdate`',$regdate3_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index4_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count7_argument'}, ${'page5_argument'}, ${'page_count6_argument'}));
return $query; ?>