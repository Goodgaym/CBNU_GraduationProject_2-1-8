<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMaterialList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
} else
${'module_srl1_argument'} = NULL;if(isset($args->member_srl)) {
${'member_srl2_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl2_argument'}->checkFilter('number');
${'member_srl2_argument'}->createConditionValue();
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
} else
${'member_srl2_argument'} = NULL;if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');
if(isset($args->s_content)) {
${'s_content3_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content3_argument'}->createConditionValue();
if(!${'s_content3_argument'}->isValid()) return ${'s_content3_argument'}->getErrorMessage();
} else
${'s_content3_argument'} = NULL;if(${'s_content3_argument'} !== null) ${'s_content3_argument'}->setColumnType('bigtext');
if(isset($args->s_type)) {
${'s_type4_argument'} = new ConditionArgument('s_type', $args->s_type, 'equal');
${'s_type4_argument'}->createConditionValue();
if(!${'s_type4_argument'}->isValid()) return ${'s_type4_argument'}->getErrorMessage();
} else
${'s_type4_argument'} = NULL;if(${'s_type4_argument'} !== null) ${'s_type4_argument'}->setColumnType('varchar');
if(isset($args->s_regdate)) {
${'s_regdate5_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate5_argument'}->createConditionValue();
if(!${'s_regdate5_argument'}->isValid()) return ${'s_regdate5_argument'}->getErrorMessage();
} else
${'s_regdate5_argument'} = NULL;if(${'s_regdate5_argument'} !== null) ${'s_regdate5_argument'}->setColumnType('date');

${'page7_argument'} = new Argument('page', $args->{'page'});
${'page7_argument'}->ensureDefaultValue('1');
if(!${'page7_argument'}->isValid()) return ${'page7_argument'}->getErrorMessage();

${'page_count8_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count8_argument'}->ensureDefaultValue('10');
if(!${'page_count8_argument'}->isValid()) return ${'page_count8_argument'}->getErrorMessage();

${'list_count9_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count9_argument'}->ensureDefaultValue('20');
if(!${'list_count9_argument'}->isValid()) return ${'list_count9_argument'}->getErrorMessage();

${'sort_index6_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index6_argument'}->ensureDefaultValue('material_srl');
if(!${'sort_index6_argument'}->isValid()) return ${'sort_index6_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_material`', '`material`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl1_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl2_argument,"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`content`',$s_content3_argument,"like", 'or')
,new ConditionWithArgument('`type`',$s_type4_argument,"equal", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate5_argument,"like_prefix", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index6_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count9_argument'}, ${'page7_argument'}, ${'page_count8_argument'}));
return $query; ?>