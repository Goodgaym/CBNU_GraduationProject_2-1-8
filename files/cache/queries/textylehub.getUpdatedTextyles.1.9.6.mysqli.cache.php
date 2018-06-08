<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getUpdatedTextyles");
$query->setAction("select");
$query->setPriority("");

${'document_srls1_argument'} = new ConditionArgument('document_srls', $args->document_srls, 'in');
${'document_srls1_argument'}->checkFilter('numbers');
${'document_srls1_argument'}->checkNotNull();
${'document_srls1_argument'}->createConditionValue();
if(!${'document_srls1_argument'}->isValid()) return ${'document_srls1_argument'}->getErrorMessage();
if(${'document_srls1_argument'} !== null) ${'document_srls1_argument'}->setColumnType('number');

${'sort_index2_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index2_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index2_argument'}->isValid()) return ${'sort_index2_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`sites`.`domain`', '`domain`')
,new SelectExpression('`textyle`.`textyle_title`', '`textyle_title`')
,new SelectExpression('`textyle`.`textyle_content`', '`textyle_content`')
,new SelectExpression('`documents`.*')
));
$query->setTables(array(
new Table('`xe_sites`', '`sites`')
,new Table('`xe_modules`', '`modules`')
,new Table('`xe_textyle`', '`textyle`')
,new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`documents`.`document_srl`',$document_srls1_argument,"in", 'and')
,new ConditionWithoutArgument('`modules`.`module_srl`','`documents`.`module_srl`',"equal", 'and')
,new ConditionWithoutArgument('`textyle`.`module_srl`','`modules`.`module_srl`',"equal", 'and')
,new ConditionWithoutArgument('`sites`.`index_module_srl`','`textyle`.`module_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index2_argument'}, "asc")
));
$query->setLimit();
return $query; ?>