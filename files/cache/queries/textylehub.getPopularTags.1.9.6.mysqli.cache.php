<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPopularTags");
$query->setAction("select");
$query->setPriority("");

${'list_count11_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count11_argument'}->ensureDefaultValue('30');
if(!${'list_count11_argument'}->isValid()) return ${'list_count11_argument'}->getErrorMessage();

${'count10_argument'} = new Argument('count', $args->{'count'});
${'count10_argument'}->ensureDefaultValue('count');
if(!${'count10_argument'}->isValid()) return ${'count10_argument'}->getErrorMessage();

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
new OrderByColumn(${'count10_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count11_argument'}));
return $query; ?>