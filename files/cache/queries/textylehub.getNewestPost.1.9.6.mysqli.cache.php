<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestDocuments");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status16_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status16_argument'}->createConditionValue();
if(!${'status16_argument'}->isValid()) return ${'status16_argument'}->getErrorMessage();
} else
${'status16_argument'} = NULL;if(${'status16_argument'} !== null) ${'status16_argument'}->setColumnType('varchar');
if(isset($args->s_title)) {
${'s_title17_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title17_argument'}->createConditionValue();
if(!${'s_title17_argument'}->isValid()) return ${'s_title17_argument'}->getErrorMessage();
} else
${'s_title17_argument'} = NULL;if(${'s_title17_argument'} !== null) ${'s_title17_argument'}->setColumnType('varchar');
if(isset($args->s_content)) {
${'s_content18_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content18_argument'}->createConditionValue();
if(!${'s_content18_argument'}->isValid()) return ${'s_content18_argument'}->getErrorMessage();
} else
${'s_content18_argument'} = NULL;if(${'s_content18_argument'} !== null) ${'s_content18_argument'}->setColumnType('bigtext');
if(isset($args->s_tag)) {
${'s_tag19_argument'} = new ConditionArgument('s_tag', $args->s_tag, 'like');
${'s_tag19_argument'}->createConditionValue();
if(!${'s_tag19_argument'}->isValid()) return ${'s_tag19_argument'}->getErrorMessage();
} else
${'s_tag19_argument'} = NULL;if(${'s_tag19_argument'} !== null) ${'s_tag19_argument'}->setColumnType('text');

${'page21_argument'} = new Argument('page', $args->{'page'});
${'page21_argument'}->ensureDefaultValue('1');
if(!${'page21_argument'}->isValid()) return ${'page21_argument'}->getErrorMessage();

${'page_count22_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count22_argument'}->ensureDefaultValue('10');
if(!${'page_count22_argument'}->isValid()) return ${'page_count22_argument'}->getErrorMessage();

${'list_count23_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count23_argument'}->ensureDefaultValue('5');
if(!${'list_count23_argument'}->isValid()) return ${'list_count23_argument'}->getErrorMessage();

${'sort_index20_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index20_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index20_argument'}->isValid()) return ${'sort_index20_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`documents`.*')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
,new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`modules`.`module`',"'textyle'","equal")
,new ConditionWithoutArgument('`documents`.`module_srl`','`modules`.`module_srl`',"equal", 'and')
,new ConditionWithArgument('`documents`.`status`',$status16_argument,"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`documents`.`title`',$s_title17_argument,"like")
,new ConditionWithArgument('`documents`.`content`',$s_content18_argument,"like", 'or')
,new ConditionWithArgument('`documents`.`tags`',$s_tag19_argument,"like", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index20_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count23_argument'}, ${'page21_argument'}, ${'page_count22_argument'}));
return $query; ?>