<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getUpdatedTextyle");
$query->setAction("select");
$query->setPriority("");

${'page13_argument'} = new Argument('page', $args->{'page'});
${'page13_argument'}->ensureDefaultValue('1');
if(!${'page13_argument'}->isValid()) return ${'page13_argument'}->getErrorMessage();

${'page_count14_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count14_argument'}->ensureDefaultValue('10');
if(!${'page_count14_argument'}->isValid()) return ${'page_count14_argument'}->getErrorMessage();

${'list_count15_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count15_argument'}->ensureDefaultValue('5');
if(!${'list_count15_argument'}->isValid()) return ${'list_count15_argument'}->getErrorMessage();

${'sort_index12_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index12_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index12_argument'}->isValid()) return ${'sort_index12_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('max(`documents`.`document_srl`)', '`document_srl`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
,new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`modules`.`module`',"'textyle'","equal")
,new ConditionWithoutArgument('`documents`.`module_srl`','`modules`.`module_srl`',"equal", 'and')))
));
$query->setGroups(array(
'`documents`.`module_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index12_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count15_argument'}, ${'page13_argument'}, ${'page_count14_argument'}));
return $query; ?>