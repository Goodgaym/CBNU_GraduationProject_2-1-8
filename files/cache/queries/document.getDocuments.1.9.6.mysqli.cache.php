<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocuments");
$query->setAction("select");
$query->setPriority("");

${'document_srls13_argument'} = new ConditionArgument('document_srls', $args->document_srls, 'in');
${'document_srls13_argument'}->checkNotNull();
${'document_srls13_argument'}->createConditionValue();
if(!${'document_srls13_argument'}->isValid()) return ${'document_srls13_argument'}->getErrorMessage();
if(${'document_srls13_argument'} !== null) ${'document_srls13_argument'}->setColumnType('number');

${'page16_argument'} = new Argument('page', $args->{'page'});
${'page16_argument'}->ensureDefaultValue('1');
if(!${'page16_argument'}->isValid()) return ${'page16_argument'}->getErrorMessage();

${'page_count17_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count17_argument'}->ensureDefaultValue('10');
if(!${'page_count17_argument'}->isValid()) return ${'page_count17_argument'}->getErrorMessage();

${'list_count18_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count18_argument'}->ensureDefaultValue('20');
if(!${'list_count18_argument'}->isValid()) return ${'list_count18_argument'}->getErrorMessage();

${'list_order14_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order14_argument'}->ensureDefaultValue('list_order');
if(!${'list_order14_argument'}->isValid()) return ${'list_order14_argument'}->getErrorMessage();

${'order_type15_argument'} = new SortArgument('order_type15', $args->order_type);
${'order_type15_argument'}->ensureDefaultValue('asc');
if(!${'order_type15_argument'}->isValid()) return ${'order_type15_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srls13_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'list_order14_argument'}, $order_type15_argument)
));
$query->setLimit(new Limit(${'list_count18_argument'}, ${'page16_argument'}, ${'page_count17_argument'}));
return $query; ?>