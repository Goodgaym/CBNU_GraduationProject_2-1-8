<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteTextyleReferer");
$query->setAction("delete");
$query->setPriority("");

${'module_srl15_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl15_argument'}->checkFilter('number');
${'module_srl15_argument'}->checkNotNull();
${'module_srl15_argument'}->createConditionValue();
if(!${'module_srl15_argument'}->isValid()) return ${'module_srl15_argument'}->getErrorMessage();
if(${'module_srl15_argument'} !== null) ${'module_srl15_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl16_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl16_argument'}->checkFilter('number');
${'document_srl16_argument'}->createConditionValue();
if(!${'document_srl16_argument'}->isValid()) return ${'document_srl16_argument'}->getErrorMessage();
} else
${'document_srl16_argument'} = NULL;if(${'document_srl16_argument'} !== null) ${'document_srl16_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_textyle_referers`', '`textyle_referers`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl15_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl16_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>