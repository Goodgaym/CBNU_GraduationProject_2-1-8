<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertSiteTodayStatus");
$query->setAction("insert");
$query->setPriority("");

${'site_srl3_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl3_argument'}->ensureDefaultValue('0');
${'site_srl3_argument'}->checkNotNull();
if(!${'site_srl3_argument'}->isValid()) return ${'site_srl3_argument'}->getErrorMessage();
if(${'site_srl3_argument'} !== null) ${'site_srl3_argument'}->setColumnType('number');

${'regdate4_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate4_argument'}->ensureDefaultValue('0');
${'regdate4_argument'}->checkNotNull();
if(!${'regdate4_argument'}->isValid()) return ${'regdate4_argument'}->getErrorMessage();
if(${'regdate4_argument'} !== null) ${'regdate4_argument'}->setColumnType('number');

${'unique_visitor5_argument'} = new Argument('unique_visitor', $args->{'unique_visitor'});
${'unique_visitor5_argument'}->ensureDefaultValue('0');
if(!${'unique_visitor5_argument'}->isValid()) return ${'unique_visitor5_argument'}->getErrorMessage();
if(${'unique_visitor5_argument'} !== null) ${'unique_visitor5_argument'}->setColumnType('number');

${'pageview6_argument'} = new Argument('pageview', $args->{'pageview'});
${'pageview6_argument'}->ensureDefaultValue('0');
if(!${'pageview6_argument'}->isValid()) return ${'pageview6_argument'}->getErrorMessage();
if(${'pageview6_argument'} !== null) ${'pageview6_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl3_argument'})
,new InsertExpression('`regdate`', ${'regdate4_argument'})
,new InsertExpression('`unique_visitor`', ${'unique_visitor5_argument'})
,new InsertExpression('`pageview`', ${'pageview6_argument'})
));
$query->setTables(array(
new Table('`xe_counter_site_status`', '`counter_site_status`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>