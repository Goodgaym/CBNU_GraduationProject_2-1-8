<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertSiteAdmin");
$query->setAction("insert");
$query->setPriority("");

${'site_srl4_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl4_argument'}->checkNotNull();
if(!${'site_srl4_argument'}->isValid()) return ${'site_srl4_argument'}->getErrorMessage();
if(${'site_srl4_argument'} !== null) ${'site_srl4_argument'}->setColumnType('number');

${'member_srl5_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl5_argument'}->checkNotNull();
if(!${'member_srl5_argument'}->isValid()) return ${'member_srl5_argument'}->getErrorMessage();
if(${'member_srl5_argument'} !== null) ${'member_srl5_argument'}->setColumnType('number');

${'regdate6_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate6_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate6_argument'}->isValid()) return ${'regdate6_argument'}->getErrorMessage();
if(${'regdate6_argument'} !== null) ${'regdate6_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl4_argument'})
,new InsertExpression('`member_srl`', ${'member_srl5_argument'})
,new InsertExpression('`regdate`', ${'regdate6_argument'})
));
$query->setTables(array(
new Table('`xe_site_admin`', '`site_admin`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>