<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteComponent");
$query->setAction("select");
$query->setPriority("");

${'site_srl1_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl1_argument'}->checkNotNull();
${'site_srl1_argument'}->createConditionValue();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');

${'component_name2_argument'} = new ConditionArgument('component_name', $args->component_name, 'equal');
${'component_name2_argument'}->checkNotNull();
${'component_name2_argument'}->createConditionValue();
if(!${'component_name2_argument'}->isValid()) return ${'component_name2_argument'}->getErrorMessage();
if(${'component_name2_argument'} !== null) ${'component_name2_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_editor_components_site`', '`editor_components_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl1_argument,"equal")
,new ConditionWithArgument('`component_name`',$component_name2_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>