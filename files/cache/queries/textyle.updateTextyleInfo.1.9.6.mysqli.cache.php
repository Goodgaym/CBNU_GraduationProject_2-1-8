<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateTextyleInfo");
$query->setAction("update");
$query->setPriority("");

${'textyle_content1_argument'} = new Argument('textyle_content', $args->{'textyle_content'});
${'textyle_content1_argument'}->ensureDefaultValue('');
if(!${'textyle_content1_argument'}->isValid()) return ${'textyle_content1_argument'}->getErrorMessage();
if(${'textyle_content1_argument'} !== null) ${'textyle_content1_argument'}->setColumnType('varchar');

${'textyle_title2_argument'} = new Argument('textyle_title', $args->{'textyle_title'});
${'textyle_title2_argument'}->ensureDefaultValue('');
if(!${'textyle_title2_argument'}->isValid()) return ${'textyle_title2_argument'}->getErrorMessage();
if(${'textyle_title2_argument'} !== null) ${'textyle_title2_argument'}->setColumnType('varchar');
if(isset($args->timezone)) {
${'timezone3_argument'} = new Argument('timezone', $args->{'timezone'});
if(!${'timezone3_argument'}->isValid()) return ${'timezone3_argument'}->getErrorMessage();
} else
${'timezone3_argument'} = NULL;if(${'timezone3_argument'} !== null) ${'timezone3_argument'}->setColumnType('varchar');

${'module_srl4_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl4_argument'}->checkFilter('number');
${'module_srl4_argument'}->checkNotNull();
${'module_srl4_argument'}->createConditionValue();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`textyle_content`', ${'textyle_content1_argument'})
,new UpdateExpression('`textyle_title`', ${'textyle_title2_argument'})
,new UpdateExpression('`timezone`', ${'timezone3_argument'})
));
$query->setTables(array(
new Table('`xe_textyle`', '`textyle`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl4_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>