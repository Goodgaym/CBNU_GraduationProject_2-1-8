<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateTextyleWriteConfig");
$query->setAction("update");
$query->setPriority("");
if(isset($args->post_editor_skin)) {
${'post_editor_skin1_argument'} = new Argument('post_editor_skin', $args->{'post_editor_skin'});
if(!${'post_editor_skin1_argument'}->isValid()) return ${'post_editor_skin1_argument'}->getErrorMessage();
} else
${'post_editor_skin1_argument'} = NULL;if(${'post_editor_skin1_argument'} !== null) ${'post_editor_skin1_argument'}->setColumnType('varchar');

${'post_use_prefix2_argument'} = new Argument('post_use_prefix', $args->{'post_use_prefix'});
${'post_use_prefix2_argument'}->ensureDefaultValue('N');
if(!${'post_use_prefix2_argument'}->isValid()) return ${'post_use_prefix2_argument'}->getErrorMessage();
if(${'post_use_prefix2_argument'} !== null) ${'post_use_prefix2_argument'}->setColumnType('char');

${'post_use_suffix3_argument'} = new Argument('post_use_suffix', $args->{'post_use_suffix'});
${'post_use_suffix3_argument'}->ensureDefaultValue('N');
if(!${'post_use_suffix3_argument'}->isValid()) return ${'post_use_suffix3_argument'}->getErrorMessage();
if(${'post_use_suffix3_argument'} !== null) ${'post_use_suffix3_argument'}->setColumnType('char');

${'post_prefix4_argument'} = new Argument('post_prefix', $args->{'post_prefix'});
${'post_prefix4_argument'}->ensureDefaultValue('');
if(!${'post_prefix4_argument'}->isValid()) return ${'post_prefix4_argument'}->getErrorMessage();
if(${'post_prefix4_argument'} !== null) ${'post_prefix4_argument'}->setColumnType('text');

${'post_suffix5_argument'} = new Argument('post_suffix', $args->{'post_suffix'});
${'post_suffix5_argument'}->ensureDefaultValue('');
if(!${'post_suffix5_argument'}->isValid()) return ${'post_suffix5_argument'}->getErrorMessage();
if(${'post_suffix5_argument'} !== null) ${'post_suffix5_argument'}->setColumnType('text');

${'module_srl6_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl6_argument'}->checkFilter('number');
${'module_srl6_argument'}->checkNotNull();
${'module_srl6_argument'}->createConditionValue();
if(!${'module_srl6_argument'}->isValid()) return ${'module_srl6_argument'}->getErrorMessage();
if(${'module_srl6_argument'} !== null) ${'module_srl6_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`post_editor_skin`', ${'post_editor_skin1_argument'})
,new UpdateExpression('`post_use_prefix`', ${'post_use_prefix2_argument'})
,new UpdateExpression('`post_use_suffix`', ${'post_use_suffix3_argument'})
,new UpdateExpression('`post_prefix`', ${'post_prefix4_argument'})
,new UpdateExpression('`post_suffix`', ${'post_suffix5_argument'})
));
$query->setTables(array(
new Table('`xe_textyle`', '`textyle`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl6_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>