<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertSiteComponent");
$query->setAction("insert");
$query->setPriority("");

${'site_srl37_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl37_argument'}->checkNotNull();
if(!${'site_srl37_argument'}->isValid()) return ${'site_srl37_argument'}->getErrorMessage();
if(${'site_srl37_argument'} !== null) ${'site_srl37_argument'}->setColumnType('number');

${'component_name38_argument'} = new Argument('component_name', $args->{'component_name'});
${'component_name38_argument'}->checkNotNull();
if(!${'component_name38_argument'}->isValid()) return ${'component_name38_argument'}->getErrorMessage();
if(${'component_name38_argument'} !== null) ${'component_name38_argument'}->setColumnType('varchar');

${'enabled39_argument'} = new Argument('enabled', $args->{'enabled'});
${'enabled39_argument'}->ensureDefaultValue('N');
if(!${'enabled39_argument'}->isValid()) return ${'enabled39_argument'}->getErrorMessage();
if(${'enabled39_argument'} !== null) ${'enabled39_argument'}->setColumnType('char');

${'list_order40_argument'} = new Argument('list_order', $args->{'list_order'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'list_order40_argument'}->ensureDefaultValue($sequence);
if(!${'list_order40_argument'}->isValid()) return ${'list_order40_argument'}->getErrorMessage();
if(${'list_order40_argument'} !== null) ${'list_order40_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl37_argument'})
,new InsertExpression('`component_name`', ${'component_name38_argument'})
,new InsertExpression('`enabled`', ${'enabled39_argument'})
,new InsertExpression('`list_order`', ${'list_order40_argument'})
));
$query->setTables(array(
new Table('`xe_editor_components_site`', '`editor_components_site`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>