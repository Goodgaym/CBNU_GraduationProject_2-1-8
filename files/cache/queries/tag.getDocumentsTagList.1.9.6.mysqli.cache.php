<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentsTagList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->document_srl)) {
${'document_srl3_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'in');
${'document_srl3_argument'}->checkFilter('number');
${'document_srl3_argument'}->createConditionValue();
if(!${'document_srl3_argument'}->isValid()) return ${'document_srl3_argument'}->getErrorMessage();
} else
${'document_srl3_argument'} = NULL;if(${'document_srl3_argument'} !== null) ${'document_srl3_argument'}->setColumnType('number');

${'list_count5_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count5_argument'}->ensureDefaultValue('100');
if(!${'list_count5_argument'}->isValid()) return ${'list_count5_argument'}->getErrorMessage();

${'count4_argument'} = new Argument('count', $args->{'count'});
${'count4_argument'}->ensureDefaultValue('count');
if(!${'count4_argument'}->isValid()) return ${'count4_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`tag`')
,new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl3_argument,"in")))
));
$query->setGroups(array(
'`tag`' ));
$query->setOrder(array(
new OrderByColumn(${'count4_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count5_argument'}));
return $query; ?>