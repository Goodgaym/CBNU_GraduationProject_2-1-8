<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertTag");
$query->setAction("insert");
$query->setPriority("");

${'tag_srl58_argument'} = new Argument('tag_srl', $args->{'tag_srl'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'tag_srl58_argument'}->ensureDefaultValue($sequence);
${'tag_srl58_argument'}->checkNotNull();
if(!${'tag_srl58_argument'}->isValid()) return ${'tag_srl58_argument'}->getErrorMessage();
if(${'tag_srl58_argument'} !== null) ${'tag_srl58_argument'}->setColumnType('number');

${'module_srl59_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl59_argument'}->checkFilter('number');
${'module_srl59_argument'}->checkNotNull();
if(!${'module_srl59_argument'}->isValid()) return ${'module_srl59_argument'}->getErrorMessage();
if(${'module_srl59_argument'} !== null) ${'module_srl59_argument'}->setColumnType('number');

${'document_srl60_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl60_argument'}->checkFilter('number');
${'document_srl60_argument'}->checkNotNull();
if(!${'document_srl60_argument'}->isValid()) return ${'document_srl60_argument'}->getErrorMessage();
if(${'document_srl60_argument'} !== null) ${'document_srl60_argument'}->setColumnType('number');

${'tag61_argument'} = new Argument('tag', $args->{'tag'});
${'tag61_argument'}->checkNotNull();
if(!${'tag61_argument'}->isValid()) return ${'tag61_argument'}->getErrorMessage();
if(${'tag61_argument'} !== null) ${'tag61_argument'}->setColumnType('varchar');

${'regdate62_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate62_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate62_argument'}->isValid()) return ${'regdate62_argument'}->getErrorMessage();
if(${'regdate62_argument'} !== null) ${'regdate62_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`tag_srl`', ${'tag_srl58_argument'})
,new InsertExpression('`module_srl`', ${'module_srl59_argument'})
,new InsertExpression('`document_srl`', ${'document_srl60_argument'})
,new InsertExpression('`tag`', ${'tag61_argument'})
,new InsertExpression('`regdate`', ${'regdate62_argument'})
));
$query->setTables(array(
new Table('`xe_tags`', '`tags`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>