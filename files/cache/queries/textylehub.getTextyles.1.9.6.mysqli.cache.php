<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTextyles");
$query->setAction("select");
$query->setPriority("");

${'page2_argument'} = new Argument('page', $args->{'page'});
${'page2_argument'}->ensureDefaultValue('1');
if(!${'page2_argument'}->isValid()) return ${'page2_argument'}->getErrorMessage();

${'page_count3_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count3_argument'}->ensureDefaultValue('10');
if(!${'page_count3_argument'}->isValid()) return ${'page_count3_argument'}->getErrorMessage();

${'list_count4_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count4_argument'}->ensureDefaultValue('5');
if(!${'list_count4_argument'}->isValid()) return ${'list_count4_argument'}->getErrorMessage();

${'sort_index1_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index1_argument'}->ensureDefaultValue('textyle.module_srl');
if(!${'sort_index1_argument'}->isValid()) return ${'sort_index1_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`sites`.`domain`', '`domain`')
,new SelectExpression('`sites`.`site_srl`', '`site_srl`')
,new SelectExpression('`textyle`.*')
));
$query->setTables(array(
new Table('`xe_sites`', '`sites`')
,new Table('`xe_textyle`', '`textyle`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`sites`.`index_module_srl`','`textyle`.`module_srl`',"equal", 'and')
,new ConditionWithoutArgument('`sites`.`site_srl`','1',"more", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index1_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count4_argument'}, ${'page2_argument'}, ${'page_count3_argument'}));
return $query; ?>