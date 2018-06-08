<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getExtraMenus");
$query->setAction("select");
$query->setPriority("");

${'site_srl20_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl20_argument'}->checkFilter('number');
${'site_srl20_argument'}->checkNotNull();
${'site_srl20_argument'}->createConditionValue();
if(!${'site_srl20_argument'}->isValid()) return ${'site_srl20_argument'}->getErrorMessage();
if(${'site_srl20_argument'} !== null) ${'site_srl20_argument'}->setColumnType('number');

${'list_order21_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order21_argument'}->ensureDefaultValue('extra_menu.list_order');
if(!${'list_order21_argument'}->isValid()) return ${'list_order21_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`modules`.`module_srl`', '`module_srl`')
,new SelectExpression('`modules`.`module`', '`module`')
,new SelectExpression('`modules`.`mid`')
,new SelectExpression('`extra_menu`.`name`')
,new SelectExpression('`extra_menu`.`type`')
,new SelectExpression('`extra_menu`.`list_order`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
,new Table('`xe_textyle_extra_menu`', '`extra_menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`extra_menu`.`site_srl`',$site_srl20_argument,"equal")
,new ConditionWithoutArgument('`modules`.`module_srl`','`extra_menu`.`module_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'list_order21_argument'}, "asc")
));
$query->setLimit();
return $query; ?>