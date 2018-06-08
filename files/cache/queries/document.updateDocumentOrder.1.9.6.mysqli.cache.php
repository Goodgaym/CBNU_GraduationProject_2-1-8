<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateDocumentOrder");
$query->setAction("update");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl33_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl33_argument'}->checkFilter('number');
if(!${'module_srl33_argument'}->isValid()) return ${'module_srl33_argument'}->getErrorMessage();
} else
${'module_srl33_argument'} = NULL;if(${'module_srl33_argument'} !== null) ${'module_srl33_argument'}->setColumnType('number');

${'regdate34_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate34_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate34_argument'}->isValid()) return ${'regdate34_argument'}->getErrorMessage();
if(${'regdate34_argument'} !== null) ${'regdate34_argument'}->setColumnType('date');

${'last_update35_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update35_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update35_argument'}->isValid()) return ${'last_update35_argument'}->getErrorMessage();
if(${'last_update35_argument'} !== null) ${'last_update35_argument'}->setColumnType('date');
if(isset($args->list_order)) {
${'list_order36_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order36_argument'}->isValid()) return ${'list_order36_argument'}->getErrorMessage();
} else
${'list_order36_argument'} = NULL;if(${'list_order36_argument'} !== null) ${'list_order36_argument'}->setColumnType('number');

${'update_order37_argument'} = new Argument('update_order', $args->{'update_order'});
${'update_order37_argument'}->ensureDefaultValue('0');
if(!${'update_order37_argument'}->isValid()) return ${'update_order37_argument'}->getErrorMessage();
if(${'update_order37_argument'} !== null) ${'update_order37_argument'}->setColumnType('number');

${'document_srl38_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl38_argument'}->checkFilter('number');
${'document_srl38_argument'}->checkNotNull();
${'document_srl38_argument'}->createConditionValue();
if(!${'document_srl38_argument'}->isValid()) return ${'document_srl38_argument'}->getErrorMessage();
if(${'document_srl38_argument'} !== null) ${'document_srl38_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module_srl`', ${'module_srl33_argument'})
,new UpdateExpression('`regdate`', ${'regdate34_argument'})
,new UpdateExpression('`last_update`', ${'last_update35_argument'})
,new UpdateExpression('`list_order`', ${'list_order36_argument'})
,new UpdateExpression('`update_order`', ${'update_order37_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl38_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>