<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTextyleList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->s_user_id)) {
${'s_user_id1_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id1_argument'}->createConditionValue();
if(!${'s_user_id1_argument'}->isValid()) return ${'s_user_id1_argument'}->getErrorMessage();
} else
${'s_user_id1_argument'} = NULL;if(${'s_user_id1_argument'} !== null) ${'s_user_id1_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name2_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name2_argument'}->createConditionValue();
if(!${'s_user_name2_argument'}->isValid()) return ${'s_user_name2_argument'}->getErrorMessage();
} else
${'s_user_name2_argument'} = NULL;if(${'s_user_name2_argument'} !== null) ${'s_user_name2_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name3_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name3_argument'}->createConditionValue();
if(!${'s_nick_name3_argument'}->isValid()) return ${'s_nick_name3_argument'}->getErrorMessage();
} else
${'s_nick_name3_argument'} = NULL;if(${'s_nick_name3_argument'} !== null) ${'s_nick_name3_argument'}->setColumnType('varchar');
if(isset($args->s_domain)) {
${'s_domain4_argument'} = new ConditionArgument('s_domain', $args->s_domain, 'like');
${'s_domain4_argument'}->createConditionValue();
if(!${'s_domain4_argument'}->isValid()) return ${'s_domain4_argument'}->getErrorMessage();
} else
${'s_domain4_argument'} = NULL;if(${'s_domain4_argument'} !== null) ${'s_domain4_argument'}->setColumnType('varchar');
if(isset($args->s_regdate)) {
${'s_regdate5_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like');
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
${'sort_index6_argument'}->ensureDefaultValue('modules.module_srl');
if(!${'sort_index6_argument'}->isValid()) return ${'sort_index6_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`sites`.`domain`', '`domain`')
,new SelectExpression('`sites`.`default_language`', '`default_language`')
,new SelectExpression('`member`.`nick_name`', '`nick_name`')
,new SelectExpression('`member`.`user_name`', '`user_name`')
,new SelectExpression('`member`.`user_id`', '`user_id`')
,new SelectExpression('`member`.`email_address`')
,new SelectExpression('`modules`.*')
,new SelectExpression('`textyle`.*')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
,new Table('`xe_sites`', '`sites`')
,new Table('`xe_textyle`', '`textyle`')
,new JoinTable('`xe_member`', '`member`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`textyle`.`member_srl`','`member`.`member_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`modules`.`module_srl`','`textyle`.`module_srl`',"equal", 'and')
,new ConditionWithoutArgument('`sites`.`site_srl`','`modules`.`site_srl`',"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`member`.`user_id`',$s_user_id1_argument,"like")
,new ConditionWithArgument('`member`.`user_name`',$s_user_name2_argument,"like", 'or')
,new ConditionWithArgument('`member`.`nick_name`',$s_nick_name3_argument,"like", 'or')
,new ConditionWithArgument('`sites`.`domain`',$s_domain4_argument,"like", 'or')
,new ConditionWithArgument('`textyle`.`regdate`',$s_regdate5_argument,"like", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index6_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count9_argument'}, ${'page7_argument'}, ${'page_count8_argument'}));
return $query; ?>