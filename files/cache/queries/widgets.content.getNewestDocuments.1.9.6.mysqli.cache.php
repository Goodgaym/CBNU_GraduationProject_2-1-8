<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestDocuments");
$query->setAction("select");
$query->setPriority("");

${'module_srl10_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl10_argument'}->checkFilter('number');
${'module_srl10_argument'}->checkNotNull();
${'module_srl10_argument'}->createConditionValue();
if(!${'module_srl10_argument'}->isValid()) return ${'module_srl10_argument'}->getErrorMessage();
if(${'module_srl10_argument'} !== null) ${'module_srl10_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl11_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl11_argument'}->createConditionValue();
if(!${'category_srl11_argument'}->isValid()) return ${'category_srl11_argument'}->getErrorMessage();
} else
${'category_srl11_argument'} = NULL;if(${'category_srl11_argument'} !== null) ${'category_srl11_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList12_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList12_argument'}->createConditionValue();
if(!${'statusList12_argument'}->isValid()) return ${'statusList12_argument'}->getErrorMessage();
} else
${'statusList12_argument'} = NULL;if(${'statusList12_argument'} !== null) ${'statusList12_argument'}->setColumnType('varchar');

${'list_count15_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count15_argument'}->ensureDefaultValue('20');
if(!${'list_count15_argument'}->isValid()) return ${'list_count15_argument'}->getErrorMessage();

${'sort_index13_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index13_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index13_argument'}->isValid()) return ${'sort_index13_argument'}->getErrorMessage();

${'order_type14_argument'} = new SortArgument('order_type14', $args->order_type);
${'order_type14_argument'}->ensureDefaultValue('asc');
if(!${'order_type14_argument'}->isValid()) return ${'order_type14_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`documents`.`module_srl`',$module_srl10_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`category_srl`',$category_srl11_argument,"equal", 'and')
,new ConditionWithArgument('`status`',$statusList12_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index13_argument'}, $order_type14_argument)
));
$query->setLimit(new Limit(${'list_count15_argument'}));
return $query; ?>