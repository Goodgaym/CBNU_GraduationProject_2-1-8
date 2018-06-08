<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getOverpolCategories");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status1_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status1_argument'}->createConditionValue();
if(!${'status1_argument'}->isValid()) return ${'status1_argument'}->getErrorMessage();
} else
${'status1_argument'} = NULL;if(${'status1_argument'} !== null) ${'status1_argument'}->setColumnType('varchar');
if(isset($args->s_category)) {
${'s_category2_argument'} = new ConditionArgument('s_category', $args->s_category, 'like');
${'s_category2_argument'}->createConditionValue();
if(!${'s_category2_argument'}->isValid()) return ${'s_category2_argument'}->getErrorMessage();
} else
${'s_category2_argument'} = NULL;if(${'s_category2_argument'} !== null) ${'s_category2_argument'}->setColumnType('varchar');

${'page4_argument'} = new Argument('page', $args->{'page'});
${'page4_argument'}->ensureDefaultValue('1');
if(!${'page4_argument'}->isValid()) return ${'page4_argument'}->getErrorMessage();

${'page_count5_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count5_argument'}->ensureDefaultValue('10');
if(!${'page_count5_argument'}->isValid()) return ${'page_count5_argument'}->getErrorMessage();

${'list_count6_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count6_argument'}->ensureDefaultValue('18');
if(!${'list_count6_argument'}->isValid()) return ${'list_count6_argument'}->getErrorMessage();

${'sort_index3_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index3_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index3_argument'}->isValid()) return ${'sort_index3_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`documents`.*')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
,new Table('`xe_modules`', '`modules`')
,new Table('`xe_document_categories`', '`document_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`modules`.`module`',"'textyle'","equal")
,new ConditionWithoutArgument('`documents`.`module_srl`','`modules`.`module_srl`',"equal", 'and')
,new ConditionWithArgument('`documents`.`status`',$status1_argument,"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`document_categories`.`title`',$s_category2_argument,"like")),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index3_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count6_argument'}, ${'page4_argument'}, ${'page_count5_argument'}));
return $query; ?>