<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getAliases");
$query->setAction("select");
$query->setPriority("");

${'document_srl6_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl6_argument'}->checkFilter('number');
${'document_srl6_argument'}->checkNotNull();
${'document_srl6_argument'}->createConditionValue();
if(!${'document_srl6_argument'}->isValid()) return ${'document_srl6_argument'}->getErrorMessage();
if(${'document_srl6_argument'} !== null) ${'document_srl6_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_document_aliases`', '`document_aliases`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl6_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>