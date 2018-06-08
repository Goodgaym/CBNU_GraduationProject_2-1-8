<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isSiteComponentInserted");
$query->setAction("select");
$query->setPriority("");

${'site_srl35_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl35_argument'}->checkNotNull();
${'site_srl35_argument'}->createConditionValue();
if(!${'site_srl35_argument'}->isValid()) return ${'site_srl35_argument'}->getErrorMessage();
if(${'site_srl35_argument'} !== null) ${'site_srl35_argument'}->setColumnType('number');

${'component_name36_argument'} = new ConditionArgument('component_name', $args->component_name, 'equal');
${'component_name36_argument'}->checkNotNull();
${'component_name36_argument'}->createConditionValue();
if(!${'component_name36_argument'}->isValid()) return ${'component_name36_argument'}->getErrorMessage();
if(${'component_name36_argument'} !== null) ${'component_name36_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_editor_components_site`', '`editor_components_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl35_argument,"equal")
,new ConditionWithArgument('`component_name`',$component_name36_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>