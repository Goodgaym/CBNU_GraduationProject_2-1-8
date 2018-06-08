<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getExportList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->export_status)) {
${'export_status1_argument'} = new ConditionArgument('export_status', $args->export_status, 'equal');
${'export_status1_argument'}->createConditionValue();
if(!${'export_status1_argument'}->isValid()) return ${'export_status1_argument'}->getErrorMessage();
} else
${'export_status1_argument'} = NULL;if(${'export_status1_argument'} !== null) ${'export_status1_argument'}->setColumnType('char');

${'page3_argument'} = new Argument('page', $args->{'page'});
${'page3_argument'}->ensureDefaultValue('1');
if(!${'page3_argument'}->isValid()) return ${'page3_argument'}->getErrorMessage();

${'page_count4_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count4_argument'}->ensureDefaultValue('10');
if(!${'page_count4_argument'}->isValid()) return ${'page_count4_argument'}->getErrorMessage();

${'list_count5_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count5_argument'}->ensureDefaultValue('20');
if(!${'list_count5_argument'}->isValid()) return ${'list_count5_argument'}->getErrorMessage();

${'sort_index2_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index2_argument'}->ensureDefaultValue('export.export_date');
if(!${'sort_index2_argument'}->isValid()) return ${'sort_index2_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`sites`.`site_srl`', '`site_srl`')
,new SelectExpression('`sites`.`domain`', '`domain`')
,new SelectExpression('`member`.`nick_name`', '`nick_name`')
,new SelectExpression('`member`.`user_name`', '`user_name`')
,new SelectExpression('`member`.`user_id`', '`user_id`')
,new SelectExpression('`member`.`member_srl`', '`member_srl`')
,new SelectExpression('`member`.`email_address`', '`email_address`')
,new SelectExpression('`export`.`export_status`', '`export_status`')
,new SelectExpression('`export`.`export_date`', '`export_date`')
,new SelectExpression('`export`.`export_type`', '`export_type`')
,new SelectExpression('`export`.`export_file`', '`export_file`')
,new SelectExpression('`export`.`regdate`', '`regdate`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
,new Table('`xe_textyle_export`', '`export`')
,new Table('`xe_member`', '`member`')
,new Table('`xe_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`export`.`export_status`',$export_status1_argument,"equal", 'and')
,new ConditionWithoutArgument('`modules`.`module_srl`','`export`.`module_srl`',"equal", 'and')
,new ConditionWithoutArgument('`sites`.`site_srl`','`modules`.`site_srl`',"equal", 'and')
,new ConditionWithoutArgument('`export`.`member_srl`','`member`.`member_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index2_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count5_argument'}, ${'page3_argument'}, ${'page_count4_argument'}));
return $query; ?>