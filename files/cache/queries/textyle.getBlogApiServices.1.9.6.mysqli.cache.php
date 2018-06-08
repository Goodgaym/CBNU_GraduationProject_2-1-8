<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getBlogApiServices");
$query->setAction("select");
$query->setPriority("");
if(isset($args->textyle_blogapi_services_srl)) {
${'textyle_blogapi_services_srl1_argument'} = new ConditionArgument('textyle_blogapi_services_srl', $args->textyle_blogapi_services_srl, 'equal');
${'textyle_blogapi_services_srl1_argument'}->checkFilter('number');
${'textyle_blogapi_services_srl1_argument'}->createConditionValue();
if(!${'textyle_blogapi_services_srl1_argument'}->isValid()) return ${'textyle_blogapi_services_srl1_argument'}->getErrorMessage();
} else
${'textyle_blogapi_services_srl1_argument'} = NULL;if(${'textyle_blogapi_services_srl1_argument'} !== null) ${'textyle_blogapi_services_srl1_argument'}->setColumnType('number');

${'list_order2_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order2_argument'}->ensureDefaultValue('list_order');
if(!${'list_order2_argument'}->isValid()) return ${'list_order2_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_textyle_blogapi_services`', '`textyle_blogapi_services`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`textyle_blogapi_services_srl`',$textyle_blogapi_services_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'list_order2_argument'}, "asc")
));
$query->setLimit();
return $query; ?>