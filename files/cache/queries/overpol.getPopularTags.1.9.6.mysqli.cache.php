<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPopularTags");
$query->setAction("select");
$query->setPriority("");

${'list_count2_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count2_argument'}->ensureDefaultValue('30');
if(!${'list_count2_argument'}->isValid()) return ${'list_count2_argument'}->getErrorMessage();

${'count1_argument'} = new Argument('count', $args->{'count'});
${'count1_argument'}->ensureDefaultValue('count');
if(!${'count1_argument'}->isValid()) return ${'count1_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`tags`.`tag`')
,new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
,new Table('`xe_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`modules`.`module`',"'textyle'","equal", 'and')
,new ConditionWithoutArgument('`tags`.`module_srl`','`modules`.`module_srl`',"equal", 'and')))
));
$query->setGroups(array(
'`tags`.`tag`' ));
$query->setOrder(array(
new OrderByColumn(${'count1_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count2_argument'}));
return $query; ?>