<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteComponentList");
$query->setAction("select");
$query->setPriority("");

${'site_srl1_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl1_argument'}->checkNotNull();
${'site_srl1_argument'}->createConditionValue();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');
if(isset($args->enabled)) {
${'enabled2_argument'} = new ConditionArgument('enabled', $args->enabled, 'equal');
${'enabled2_argument'}->createConditionValue();
if(!${'enabled2_argument'}->isValid()) return ${'enabled2_argument'}->getErrorMessage();
} else
${'enabled2_argument'} = NULL;if(${'enabled2_argument'} !== null) ${'enabled2_argument'}->setColumnType('char');

${'sort_index3_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index3_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index3_argument'}->isValid()) return ${'sort_index3_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_editor_components_site`', '`editor_components_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl1_argument,"equal")
,new ConditionWithArgument('`enabled`',$enabled2_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index3_argument'}, "asc")
));
$query->setLimit();
return $query; ?>