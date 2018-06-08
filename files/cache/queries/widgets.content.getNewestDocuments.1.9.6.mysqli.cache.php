<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestDocuments");
$query->setAction("select");
$query->setPriority("");

${'module_srl79_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl79_argument'}->checkFilter('number');
${'module_srl79_argument'}->checkNotNull();
${'module_srl79_argument'}->createConditionValue();
if(!${'module_srl79_argument'}->isValid()) return ${'module_srl79_argument'}->getErrorMessage();
if(${'module_srl79_argument'} !== null) ${'module_srl79_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl80_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl80_argument'}->createConditionValue();
if(!${'category_srl80_argument'}->isValid()) return ${'category_srl80_argument'}->getErrorMessage();
} else
${'category_srl80_argument'} = NULL;if(${'category_srl80_argument'} !== null) ${'category_srl80_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList81_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList81_argument'}->createConditionValue();
if(!${'statusList81_argument'}->isValid()) return ${'statusList81_argument'}->getErrorMessage();
} else
${'statusList81_argument'} = NULL;if(${'statusList81_argument'} !== null) ${'statusList81_argument'}->setColumnType('varchar');

${'list_count84_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count84_argument'}->ensureDefaultValue('20');
if(!${'list_count84_argument'}->isValid()) return ${'list_count84_argument'}->getErrorMessage();

${'sort_index82_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index82_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index82_argument'}->isValid()) return ${'sort_index82_argument'}->getErrorMessage();

${'order_type83_argument'} = new SortArgument('order_type83', $args->order_type);
${'order_type83_argument'}->ensureDefaultValue('asc');
if(!${'order_type83_argument'}->isValid()) return ${'order_type83_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`documents`.`module_srl`',$module_srl79_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`category_srl`',$category_srl80_argument,"equal", 'and')
,new ConditionWithArgument('`status`',$statusList81_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index82_argument'}, $order_type83_argument)
));
$query->setLimit(new Limit(${'list_count84_argument'}));
return $query; ?>