<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTextyleSubscription");
$query->setAction("select");
$query->setPriority("");

${'module_srl16_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl16_argument'}->checkFilter('number');
${'module_srl16_argument'}->checkNotNull();
${'module_srl16_argument'}->createConditionValue();
if(!${'module_srl16_argument'}->isValid()) return ${'module_srl16_argument'}->getErrorMessage();
if(${'module_srl16_argument'} !== null) ${'module_srl16_argument'}->setColumnType('number');
if(isset($args->less_publish_date)) {
${'less_publish_date17_argument'} = new ConditionArgument('less_publish_date', $args->less_publish_date, 'less');
${'less_publish_date17_argument'}->createConditionValue();
if(!${'less_publish_date17_argument'}->isValid()) return ${'less_publish_date17_argument'}->getErrorMessage();
} else
${'less_publish_date17_argument'} = NULL;if(${'less_publish_date17_argument'} !== null) ${'less_publish_date17_argument'}->setColumnType('date');
if(isset($args->more_publish_date)) {
${'more_publish_date18_argument'} = new ConditionArgument('more_publish_date', $args->more_publish_date, 'more');
${'more_publish_date18_argument'}->createConditionValue();
if(!${'more_publish_date18_argument'}->isValid()) return ${'more_publish_date18_argument'}->getErrorMessage();
} else
${'more_publish_date18_argument'} = NULL;if(${'more_publish_date18_argument'} !== null) ${'more_publish_date18_argument'}->setColumnType('date');

${'list_order19_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order19_argument'}->ensureDefaultValue('publish_date');
if(!${'list_order19_argument'}->isValid()) return ${'list_order19_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_textyle_subscription`', '`textyle_subscription`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl16_argument,"equal")
,new ConditionWithArgument('`publish_date`',$less_publish_date17_argument,"less", 'and')
,new ConditionWithArgument('`publish_date`',$more_publish_date18_argument,"more", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'list_order19_argument'}, "asc")
));
$query->setLimit();
return $query; ?>