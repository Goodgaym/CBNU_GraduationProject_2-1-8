<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertCounterLog");
$query->setAction("insert");
$query->setPriority("");

${'site_srl7_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl7_argument'}->ensureDefaultValue('0');
${'site_srl7_argument'}->checkNotNull();
if(!${'site_srl7_argument'}->isValid()) return ${'site_srl7_argument'}->getErrorMessage();
if(${'site_srl7_argument'} !== null) ${'site_srl7_argument'}->setColumnType('number');

${'regdate8_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate8_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate8_argument'}->checkNotNull();
if(!${'regdate8_argument'}->isValid()) return ${'regdate8_argument'}->getErrorMessage();
if(${'regdate8_argument'} !== null) ${'regdate8_argument'}->setColumnType('date');

${'ipaddress9_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress9_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
${'ipaddress9_argument'}->checkNotNull();
if(!${'ipaddress9_argument'}->isValid()) return ${'ipaddress9_argument'}->getErrorMessage();
if(${'ipaddress9_argument'} !== null) ${'ipaddress9_argument'}->setColumnType('varchar');
if(isset($args->user_agent)) {
${'user_agent10_argument'} = new Argument('user_agent', $args->{'user_agent'});
if(!${'user_agent10_argument'}->isValid()) return ${'user_agent10_argument'}->getErrorMessage();
} else
${'user_agent10_argument'} = NULL;if(${'user_agent10_argument'} !== null) ${'user_agent10_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl7_argument'})
,new InsertExpression('`regdate`', ${'regdate8_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress9_argument'})
,new InsertExpression('`user_agent`', ${'user_agent10_argument'})
));
$query->setTables(array(
new Table('`xe_counter_log`', '`counter_log`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>