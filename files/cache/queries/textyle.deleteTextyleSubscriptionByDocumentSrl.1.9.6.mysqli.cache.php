<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteTextyleSubscriptionByDocumentSrl");
$query->setAction("delete");
$query->setPriority("");

${'document_srl43_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl43_argument'}->checkFilter('number');
${'document_srl43_argument'}->checkNotNull();
${'document_srl43_argument'}->createConditionValue();
if(!${'document_srl43_argument'}->isValid()) return ${'document_srl43_argument'}->getErrorMessage();
if(${'document_srl43_argument'} !== null) ${'document_srl43_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_textyle_subscription`', '`textyle_subscription`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl43_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>