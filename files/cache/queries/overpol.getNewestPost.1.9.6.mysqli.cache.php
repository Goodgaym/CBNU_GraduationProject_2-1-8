<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestDocuments");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status1_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status1_argument'}->createConditionValue();
if(!${'status1_argument'}->isValid()) return ${'status1_argument'}->getErrorMessage();
} else
${'status1_argument'} = NULL;if(${'status1_argument'} !== null) ${'status1_argument'}->setColumnType('varchar');
if(isset($args->s_title)) {
${'s_title2_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title2_argument'}->createConditionValue();
if(!${'s_title2_argument'}->isValid()) return ${'s_title2_argument'}->getErrorMessage();
} else
${'s_title2_argument'} = NULL;if(${'s_title2_argument'} !== null) ${'s_title2_argument'}->setColumnType('varchar');
if(isset($args->s_content)) {
${'s_content3_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content3_argument'}->createConditionValue();
if(!${'s_content3_argument'}->isValid()) return ${'s_content3_argument'}->getErrorMessage();
} else
${'s_content3_argument'} = NULL;if(${'s_content3_argument'} !== null) ${'s_content3_argument'}->setColumnType('bigtext');
if(isset($args->s_tag)) {
${'s_tag4_argument'} = new ConditionArgument('s_tag', $args->s_tag, 'like');
${'s_tag4_argument'}->createConditionValue();
if(!${'s_tag4_argument'}->isValid()) return ${'s_tag4_argument'}->getErrorMessage();
} else
${'s_tag4_argument'} = NULL;if(${'s_tag4_argument'} !== null) ${'s_tag4_argument'}->setColumnType('text');
if(isset($args->s_category)) {
${'s_category5_argument'} = new ConditionArgument('s_category', $args->s_category, 'like');
${'s_category5_argument'}->createConditionValue();
if(!${'s_category5_argument'}->isValid()) return ${'s_category5_argument'}->getErrorMessage();
} else
${'s_category5_argument'} = NULL;if(${'s_category5_argument'} !== null) ${'s_category5_argument'}->setColumnType('varchar');

${'page7_argument'} = new Argument('page', $args->{'page'});
${'page7_argument'}->ensureDefaultValue('1');
if(!${'page7_argument'}->isValid()) return ${'page7_argument'}->getErrorMessage();

${'page_count8_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count8_argument'}->ensureDefaultValue('10');
if(!${'page_count8_argument'}->isValid()) return ${'page_count8_argument'}->getErrorMessage();

${'list_count9_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count9_argument'}->ensureDefaultValue('24');
if(!${'list_count9_argument'}->isValid()) return ${'list_count9_argument'}->getErrorMessage();

${'sort_index6_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index6_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index6_argument'}->isValid()) return ${'sort_index6_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`documents`.*')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
,new Table('`xe_modules`', '`modules`')
,new Table('`xe_document_categories`', '`category`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`modules`.`module`',"'textyle'","equal", 'and')
,new ConditionWithoutArgument('`documents`.`module_srl`','`modules`.`module_srl`',"equal", 'and')
,new ConditionWithoutArgument('`documents`.`category_srl`','`category`.`category_srl`',"equal", 'and')
,new ConditionWithArgument('`documents`.`status`',$status1_argument,"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`documents`.`title`',$s_title2_argument,"like")
,new ConditionWithArgument('`documents`.`content`',$s_content3_argument,"like", 'or')
,new ConditionWithArgument('`documents`.`tags`',$s_tag4_argument,"like", 'or')
,new ConditionWithArgument('`category`.`title`',$s_category5_argument,"like", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index6_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count9_argument'}, ${'page7_argument'}, ${'page_count8_argument'}));
return $query; ?>