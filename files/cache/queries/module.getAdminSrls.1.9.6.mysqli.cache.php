<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getAdminSrls");
$query->setAction("select");
$query->setPriority("");
if(isset($args->user_ids)) {
${'user_ids2_argument'} = new ConditionArgument('user_ids', $args->user_ids, 'in');
${'user_ids2_argument'}->createConditionValue();
if(!${'user_ids2_argument'}->isValid()) return ${'user_ids2_argument'}->getErrorMessage();
} else
${'user_ids2_argument'} = NULL;if(${'user_ids2_argument'} !== null) ${'user_ids2_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address3_argument'} = new ConditionArgument('email_address', $args->email_address, 'in');
${'email_address3_argument'}->createConditionValue();
if(!${'email_address3_argument'}->isValid()) return ${'email_address3_argument'}->getErrorMessage();
} else
${'email_address3_argument'} = NULL;if(${'email_address3_argument'} !== null) ${'email_address3_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`member_srl`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$user_ids2_argument,"in")
,new ConditionWithArgument('`email_address`',$email_address3_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>