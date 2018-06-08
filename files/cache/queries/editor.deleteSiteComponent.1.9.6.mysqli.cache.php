<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteSiteComponent");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl13_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl13_argument'}->checkFilter('number');
${'site_srl13_argument'}->createConditionValue();
if(!${'site_srl13_argument'}->isValid()) return ${'site_srl13_argument'}->getErrorMessage();
} else
${'site_srl13_argument'} = NULL;if(${'site_srl13_argument'} !== null) ${'site_srl13_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_editor_components_site`', '`editor_components_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl13_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>