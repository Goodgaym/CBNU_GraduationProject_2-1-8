<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertSavedDoc");
$query->setAction("insert");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl1_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
} else
${'module_srl1_argument'} = NULL;if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl2_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
} else
${'member_srl2_argument'} = NULL;if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');

${'document_srl3_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl3_argument'}->ensureDefaultValue('0');
if(!${'document_srl3_argument'}->isValid()) return ${'document_srl3_argument'}->getErrorMessage();
if(${'document_srl3_argument'} !== null) ${'document_srl3_argument'}->setColumnType('number');
if(isset($args->title)) {
${'title4_argument'} = new Argument('title', $args->{'title'});
if(!${'title4_argument'}->isValid()) return ${'title4_argument'}->getErrorMessage();
} else
${'title4_argument'} = NULL;if(${'title4_argument'} !== null) ${'title4_argument'}->setColumnType('varchar');
if(isset($args->content)) {
${'content5_argument'} = new Argument('content', $args->{'content'});
if(!${'content5_argument'}->isValid()) return ${'content5_argument'}->getErrorMessage();
} else
${'content5_argument'} = NULL;if(${'content5_argument'} !== null) ${'content5_argument'}->setColumnType('bigtext');
if(isset($args->certify_key)) {
${'certify_key6_argument'} = new Argument('certify_key', $args->{'certify_key'});
if(!${'certify_key6_argument'}->isValid()) return ${'certify_key6_argument'}->getErrorMessage();
} else
${'certify_key6_argument'} = NULL;if(${'certify_key6_argument'} !== null) ${'certify_key6_argument'}->setColumnType('varchar');

${'regdate7_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate7_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate7_argument'}->isValid()) return ${'regdate7_argument'}->getErrorMessage();
if(${'regdate7_argument'} !== null) ${'regdate7_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl1_argument'})
,new InsertExpression('`member_srl`', ${'member_srl2_argument'})
,new InsertExpression('`document_srl`', ${'document_srl3_argument'})
,new InsertExpression('`title`', ${'title4_argument'})
,new InsertExpression('`content`', ${'content5_argument'})
,new InsertExpression('`certify_key`', ${'certify_key6_argument'})
,new InsertExpression('`regdate`', ${'regdate7_argument'})
));
$query->setTables(array(
new Table('`xe_editor_autosave`', '`editor_autosave`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>