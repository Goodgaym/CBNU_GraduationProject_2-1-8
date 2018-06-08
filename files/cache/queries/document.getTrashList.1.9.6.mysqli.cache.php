<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTrashList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
} else
${'module_srl1_argument'} = NULL;if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl2_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl2_argument'}->checkFilter('number');
${'member_srl2_argument'}->createConditionValue();
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
} else
${'member_srl2_argument'} = NULL;if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');
if(isset($args->s_title)) {
${'s_title3_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title3_argument'}->createConditionValue();
if(!${'s_title3_argument'}->isValid()) return ${'s_title3_argument'}->getErrorMessage();
} else
${'s_title3_argument'} = NULL;if(${'s_title3_argument'} !== null) ${'s_title3_argument'}->setColumnType('varchar');
if(isset($args->s_content)) {
${'s_content4_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content4_argument'}->createConditionValue();
if(!${'s_content4_argument'}->isValid()) return ${'s_content4_argument'}->getErrorMessage();
} else
${'s_content4_argument'} = NULL;if(${'s_content4_argument'} !== null) ${'s_content4_argument'}->setColumnType('bigtext');
if(isset($args->s_user_name)) {
${'s_user_name5_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name5_argument'}->createConditionValue();
if(!${'s_user_name5_argument'}->isValid()) return ${'s_user_name5_argument'}->getErrorMessage();
} else
${'s_user_name5_argument'} = NULL;if(${'s_user_name5_argument'} !== null) ${'s_user_name5_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id6_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id6_argument'}->createConditionValue();
if(!${'s_user_id6_argument'}->isValid()) return ${'s_user_id6_argument'}->getErrorMessage();
} else
${'s_user_id6_argument'} = NULL;if(${'s_user_id6_argument'} !== null) ${'s_user_id6_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name7_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name7_argument'}->createConditionValue();
if(!${'s_nick_name7_argument'}->isValid()) return ${'s_nick_name7_argument'}->getErrorMessage();
} else
${'s_nick_name7_argument'} = NULL;if(${'s_nick_name7_argument'} !== null) ${'s_nick_name7_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address8_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address8_argument'}->createConditionValue();
if(!${'s_email_address8_argument'}->isValid()) return ${'s_email_address8_argument'}->getErrorMessage();
} else
${'s_email_address8_argument'} = NULL;if(${'s_email_address8_argument'} !== null) ${'s_email_address8_argument'}->setColumnType('varchar');
if(isset($args->s_homepage)) {
${'s_homepage9_argument'} = new ConditionArgument('s_homepage', $args->s_homepage, 'like');
${'s_homepage9_argument'}->createConditionValue();
if(!${'s_homepage9_argument'}->isValid()) return ${'s_homepage9_argument'}->getErrorMessage();
} else
${'s_homepage9_argument'} = NULL;if(${'s_homepage9_argument'} !== null) ${'s_homepage9_argument'}->setColumnType('varchar');
if(isset($args->s_tags)) {
${'s_tags10_argument'} = new ConditionArgument('s_tags', $args->s_tags, 'like');
${'s_tags10_argument'}->createConditionValue();
if(!${'s_tags10_argument'}->isValid()) return ${'s_tags10_argument'}->getErrorMessage();
} else
${'s_tags10_argument'} = NULL;if(${'s_tags10_argument'} !== null) ${'s_tags10_argument'}->setColumnType('text');
if(isset($args->s_is_secret)) {
${'s_is_secret11_argument'} = new ConditionArgument('s_is_secret', $args->s_is_secret, 'equal');
${'s_is_secret11_argument'}->createConditionValue();
if(!${'s_is_secret11_argument'}->isValid()) return ${'s_is_secret11_argument'}->getErrorMessage();
} else
${'s_is_secret11_argument'} = NULL;if(isset($args->s_member_srl)) {
${'s_member_srl12_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl12_argument'}->createConditionValue();
if(!${'s_member_srl12_argument'}->isValid()) return ${'s_member_srl12_argument'}->getErrorMessage();
} else
${'s_member_srl12_argument'} = NULL;if(${'s_member_srl12_argument'} !== null) ${'s_member_srl12_argument'}->setColumnType('number');
if(isset($args->s_readed_count)) {
${'s_readed_count13_argument'} = new ConditionArgument('s_readed_count', $args->s_readed_count, 'more');
${'s_readed_count13_argument'}->createConditionValue();
if(!${'s_readed_count13_argument'}->isValid()) return ${'s_readed_count13_argument'}->getErrorMessage();
} else
${'s_readed_count13_argument'} = NULL;if(${'s_readed_count13_argument'} !== null) ${'s_readed_count13_argument'}->setColumnType('number');
if(isset($args->s_voted_count)) {
${'s_voted_count14_argument'} = new ConditionArgument('s_voted_count', $args->s_voted_count, 'more');
${'s_voted_count14_argument'}->createConditionValue();
if(!${'s_voted_count14_argument'}->isValid()) return ${'s_voted_count14_argument'}->getErrorMessage();
} else
${'s_voted_count14_argument'} = NULL;if(${'s_voted_count14_argument'} !== null) ${'s_voted_count14_argument'}->setColumnType('number');
if(isset($args->s_blamed_count)) {
${'s_blamed_count15_argument'} = new ConditionArgument('s_blamed_count', $args->s_blamed_count, 'less');
${'s_blamed_count15_argument'}->createConditionValue();
if(!${'s_blamed_count15_argument'}->isValid()) return ${'s_blamed_count15_argument'}->getErrorMessage();
} else
${'s_blamed_count15_argument'} = NULL;if(${'s_blamed_count15_argument'} !== null) ${'s_blamed_count15_argument'}->setColumnType('number');
if(isset($args->s_comment_count)) {
${'s_comment_count16_argument'} = new ConditionArgument('s_comment_count', $args->s_comment_count, 'more');
${'s_comment_count16_argument'}->createConditionValue();
if(!${'s_comment_count16_argument'}->isValid()) return ${'s_comment_count16_argument'}->getErrorMessage();
} else
${'s_comment_count16_argument'} = NULL;if(${'s_comment_count16_argument'} !== null) ${'s_comment_count16_argument'}->setColumnType('number');
if(isset($args->s_trackback_count)) {
${'s_trackback_count17_argument'} = new ConditionArgument('s_trackback_count', $args->s_trackback_count, 'more');
${'s_trackback_count17_argument'}->createConditionValue();
if(!${'s_trackback_count17_argument'}->isValid()) return ${'s_trackback_count17_argument'}->getErrorMessage();
} else
${'s_trackback_count17_argument'} = NULL;if(${'s_trackback_count17_argument'} !== null) ${'s_trackback_count17_argument'}->setColumnType('number');
if(isset($args->s_uploaded_count)) {
${'s_uploaded_count18_argument'} = new ConditionArgument('s_uploaded_count', $args->s_uploaded_count, 'more');
${'s_uploaded_count18_argument'}->createConditionValue();
if(!${'s_uploaded_count18_argument'}->isValid()) return ${'s_uploaded_count18_argument'}->getErrorMessage();
} else
${'s_uploaded_count18_argument'} = NULL;if(${'s_uploaded_count18_argument'} !== null) ${'s_uploaded_count18_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate19_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate19_argument'}->createConditionValue();
if(!${'s_regdate19_argument'}->isValid()) return ${'s_regdate19_argument'}->getErrorMessage();
} else
${'s_regdate19_argument'} = NULL;if(${'s_regdate19_argument'} !== null) ${'s_regdate19_argument'}->setColumnType('date');
if(isset($args->s_last_update)) {
${'s_last_update20_argument'} = new ConditionArgument('s_last_update', $args->s_last_update, 'like_prefix');
${'s_last_update20_argument'}->createConditionValue();
if(!${'s_last_update20_argument'}->isValid()) return ${'s_last_update20_argument'}->getErrorMessage();
} else
${'s_last_update20_argument'} = NULL;if(${'s_last_update20_argument'} !== null) ${'s_last_update20_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress21_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress21_argument'}->createConditionValue();
if(!${'s_ipaddress21_argument'}->isValid()) return ${'s_ipaddress21_argument'}->getErrorMessage();
} else
${'s_ipaddress21_argument'} = NULL;if(${'s_ipaddress21_argument'} !== null) ${'s_ipaddress21_argument'}->setColumnType('varchar');

${'page24_argument'} = new Argument('page', $args->{'page'});
${'page24_argument'}->ensureDefaultValue('1');
if(!${'page24_argument'}->isValid()) return ${'page24_argument'}->getErrorMessage();

${'page_count25_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count25_argument'}->ensureDefaultValue('10');
if(!${'page_count25_argument'}->isValid()) return ${'page_count25_argument'}->getErrorMessage();

${'list_count26_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count26_argument'}->ensureDefaultValue('20');
if(!${'list_count26_argument'}->isValid()) return ${'list_count26_argument'}->getErrorMessage();

${'sort_index22_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index22_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index22_argument'}->isValid()) return ${'sort_index22_argument'}->getErrorMessage();

${'order_type23_argument'} = new SortArgument('order_type23', $args->order_type);
${'order_type23_argument'}->ensureDefaultValue('asc');
if(!${'order_type23_argument'}->isValid()) return ${'order_type23_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`documents`.*')
,new SelectExpression('`document_trash`.`trash_srl`', '`trash_srl`')
,new SelectExpression('`document_trash`.`module_srl`', '`module_srl`')
,new SelectExpression('`document_trash`.`trash_date`', '`trash_date`')
,new SelectExpression('`document_trash`.`description`', '`trash_description`')
,new SelectExpression('`document_trash`.`ipaddress`', '`trash_ipaddress`')
,new SelectExpression('`document_trash`.`user_id`', '`trash_user_id`')
,new SelectExpression('`document_trash`.`user_name`', '`trash_user_name`')
,new SelectExpression('`document_trash`.`nick_name`', '`trash_nick_name`')
,new SelectExpression('`document_trash`.`member_srl`', '`trash_member_srl`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
,new Table('`xe_document_trash`', '`document_trash`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`document_trash`.`document_srl`','`documents`.`document_srl`',"equal")
,new ConditionWithArgument('`document_trash`.`module_srl`',$module_srl1_argument,"in", 'and')
,new ConditionWithArgument('`document_trash`.`member_srl`',$member_srl2_argument,"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`documents`.`title`',$s_title3_argument,"like")
,new ConditionWithArgument('`documents`.`content`',$s_content4_argument,"like", 'or')
,new ConditionWithArgument('`documents`.`user_name`',$s_user_name5_argument,"like", 'or')
,new ConditionWithArgument('`documents`.`user_id`',$s_user_id6_argument,"like", 'or')
,new ConditionWithArgument('`documents`.`nick_name`',$s_nick_name7_argument,"like", 'or')
,new ConditionWithArgument('`documents`.`email_address`',$s_email_address8_argument,"like", 'or')
,new ConditionWithArgument('`documents`.`homepage`',$s_homepage9_argument,"like", 'or')
,new ConditionWithArgument('`documents`.`tags`',$s_tags10_argument,"like", 'or')
,new ConditionWithArgument('`documents`.`is_secret`',$s_is_secret11_argument,"equal", 'or')
,new ConditionWithArgument('`documents`.`member_srl`',$s_member_srl12_argument,"equal", 'or')
,new ConditionWithArgument('`documents`.`readed_count`',$s_readed_count13_argument,"more", 'or')
,new ConditionWithArgument('`documents`.`voted_count`',$s_voted_count14_argument,"more", 'or')
,new ConditionWithArgument('`documents`.`blamed_count`',$s_blamed_count15_argument,"less", 'or')
,new ConditionWithArgument('`documents`.`comment_count`',$s_comment_count16_argument,"more", 'or')
,new ConditionWithArgument('`documents`.`trackback_count`',$s_trackback_count17_argument,"more", 'or')
,new ConditionWithArgument('`documents`.`uploaded_count`',$s_uploaded_count18_argument,"more", 'or')
,new ConditionWithArgument('`documents`.`regdate`',$s_regdate19_argument,"like_prefix", 'or')
,new ConditionWithArgument('`documents`.`last_update`',$s_last_update20_argument,"like_prefix", 'or')
,new ConditionWithArgument('`documents`.`ipaddress`',$s_ipaddress21_argument,"like_prefix", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index22_argument'}, $order_type23_argument)
));
$query->setLimit(new Limit(${'list_count26_argument'}, ${'page24_argument'}, ${'page_count25_argument'}));
return $query; ?>