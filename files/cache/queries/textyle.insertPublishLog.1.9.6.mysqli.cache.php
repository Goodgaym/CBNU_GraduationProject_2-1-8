<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPublishLog");
$query->setAction("insert");
$query->setPriority("");

${'document_srl40_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl40_argument'}->checkNotNull();
if(!${'document_srl40_argument'}->isValid()) return ${'document_srl40_argument'}->getErrorMessage();
if(${'document_srl40_argument'} !== null) ${'document_srl40_argument'}->setColumnType('number');

${'module_srl41_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl41_argument'}->checkNotNull();
if(!${'module_srl41_argument'}->isValid()) return ${'module_srl41_argument'}->getErrorMessage();
if(${'module_srl41_argument'} !== null) ${'module_srl41_argument'}->setColumnType('number');
if(isset($args->logs)) {
${'logs42_argument'} = new Argument('logs', $args->{'logs'});
if(!${'logs42_argument'}->isValid()) return ${'logs42_argument'}->getErrorMessage();
} else
${'logs42_argument'} = NULL;if(${'logs42_argument'} !== null) ${'logs42_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl40_argument'})
,new InsertExpression('`module_srl`', ${'module_srl41_argument'})
,new InsertExpression('`logs`', ${'logs42_argument'})
));
$query->setTables(array(
new Table('`xe_textyle_publish_logs`', '`textyle_publish_logs`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>