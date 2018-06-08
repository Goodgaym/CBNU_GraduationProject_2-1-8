<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertAdminId");
$query->setAction("insert");
$query->setPriority("");

${'module_srl55_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl55_argument'}->checkNotNull();
if(!${'module_srl55_argument'}->isValid()) return ${'module_srl55_argument'}->getErrorMessage();
if(${'module_srl55_argument'} !== null) ${'module_srl55_argument'}->setColumnType('number');

${'member_srl56_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl56_argument'}->checkNotNull();
if(!${'member_srl56_argument'}->isValid()) return ${'member_srl56_argument'}->getErrorMessage();
if(${'member_srl56_argument'} !== null) ${'member_srl56_argument'}->setColumnType('number');

${'regdate57_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate57_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate57_argument'}->isValid()) return ${'regdate57_argument'}->getErrorMessage();
if(${'regdate57_argument'} !== null) ${'regdate57_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl55_argument'})
,new InsertExpression('`member_srl`', ${'member_srl56_argument'})
,new InsertExpression('`regdate`', ${'regdate57_argument'})
));
$query->setTables(array(
new Table('`xe_module_admins`', '`module_admins`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>