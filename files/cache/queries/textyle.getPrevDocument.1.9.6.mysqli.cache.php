<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPrevDocument");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl49_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl49_argument'}->checkFilter('number');
${'module_srl49_argument'}->createConditionValue();
if(!${'module_srl49_argument'}->isValid()) return ${'module_srl49_argument'}->getErrorMessage();
} else
${'module_srl49_argument'} = NULL;if(${'module_srl49_argument'} !== null) ${'module_srl49_argument'}->setColumnType('number');

${'document_srl50_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'below');
${'document_srl50_argument'}->checkNotNull();
${'document_srl50_argument'}->createConditionValue();
if(!${'document_srl50_argument'}->isValid()) return ${'document_srl50_argument'}->getErrorMessage();
if(${'document_srl50_argument'} !== null) ${'document_srl50_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl51_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl51_argument'}->createConditionValue();
if(!${'category_srl51_argument'}->isValid()) return ${'category_srl51_argument'}->getErrorMessage();
} else
${'category_srl51_argument'} = NULL;if(${'category_srl51_argument'} !== null) ${'category_srl51_argument'}->setColumnType('number');
if(isset($args->s_is_notice)) {
${'s_is_notice52_argument'} = new ConditionArgument('s_is_notice', $args->s_is_notice, 'equal');
${'s_is_notice52_argument'}->createConditionValue();
if(!${'s_is_notice52_argument'}->isValid()) return ${'s_is_notice52_argument'}->getErrorMessage();
} else
${'s_is_notice52_argument'} = NULL;if(${'s_is_notice52_argument'} !== null) ${'s_is_notice52_argument'}->setColumnType('char');
if(isset($args->member_srl)) {
${'member_srl53_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl53_argument'}->checkFilter('number');
${'member_srl53_argument'}->createConditionValue();
if(!${'member_srl53_argument'}->isValid()) return ${'member_srl53_argument'}->getErrorMessage();
} else
${'member_srl53_argument'} = NULL;if(${'member_srl53_argument'} !== null) ${'member_srl53_argument'}->setColumnType('number');
if(isset($args->division)) {
${'division54_argument'} = new ConditionArgument('division', $args->division, 'more');
${'division54_argument'}->createConditionValue();
if(!${'division54_argument'}->isValid()) return ${'division54_argument'}->getErrorMessage();
} else
${'division54_argument'} = NULL;if(${'division54_argument'} !== null) ${'division54_argument'}->setColumnType('number');
if(isset($args->last_division)) {
${'last_division55_argument'} = new ConditionArgument('last_division', $args->last_division, 'below');
${'last_division55_argument'}->createConditionValue();
if(!${'last_division55_argument'}->isValid()) return ${'last_division55_argument'}->getErrorMessage();
} else
${'last_division55_argument'} = NULL;if(${'last_division55_argument'} !== null) ${'last_division55_argument'}->setColumnType('number');
if(isset($args->s_title)) {
${'s_title56_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title56_argument'}->createConditionValue();
if(!${'s_title56_argument'}->isValid()) return ${'s_title56_argument'}->getErrorMessage();
} else
${'s_title56_argument'} = NULL;if(${'s_title56_argument'} !== null) ${'s_title56_argument'}->setColumnType('varchar');
if(isset($args->s_content)) {
${'s_content57_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content57_argument'}->createConditionValue();
if(!${'s_content57_argument'}->isValid()) return ${'s_content57_argument'}->getErrorMessage();
} else
${'s_content57_argument'} = NULL;if(${'s_content57_argument'} !== null) ${'s_content57_argument'}->setColumnType('bigtext');
if(isset($args->s_user_name)) {
${'s_user_name58_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name58_argument'}->createConditionValue();
if(!${'s_user_name58_argument'}->isValid()) return ${'s_user_name58_argument'}->getErrorMessage();
} else
${'s_user_name58_argument'} = NULL;if(${'s_user_name58_argument'} !== null) ${'s_user_name58_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id59_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id59_argument'}->createConditionValue();
if(!${'s_user_id59_argument'}->isValid()) return ${'s_user_id59_argument'}->getErrorMessage();
} else
${'s_user_id59_argument'} = NULL;if(${'s_user_id59_argument'} !== null) ${'s_user_id59_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name60_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name60_argument'}->createConditionValue();
if(!${'s_nick_name60_argument'}->isValid()) return ${'s_nick_name60_argument'}->getErrorMessage();
} else
${'s_nick_name60_argument'} = NULL;if(${'s_nick_name60_argument'} !== null) ${'s_nick_name60_argument'}->setColumnType('varchar');
if(isset($args->s_email_addres)) {
${'s_email_addres61_argument'} = new ConditionArgument('s_email_addres', $args->s_email_addres, 'like');
${'s_email_addres61_argument'}->createConditionValue();
if(!${'s_email_addres61_argument'}->isValid()) return ${'s_email_addres61_argument'}->getErrorMessage();
} else
${'s_email_addres61_argument'} = NULL;if(${'s_email_addres61_argument'} !== null) ${'s_email_addres61_argument'}->setColumnType('varchar');
if(isset($args->s_homepage)) {
${'s_homepage62_argument'} = new ConditionArgument('s_homepage', $args->s_homepage, 'like');
${'s_homepage62_argument'}->createConditionValue();
if(!${'s_homepage62_argument'}->isValid()) return ${'s_homepage62_argument'}->getErrorMessage();
} else
${'s_homepage62_argument'} = NULL;if(${'s_homepage62_argument'} !== null) ${'s_homepage62_argument'}->setColumnType('varchar');
if(isset($args->s_tags)) {
${'s_tags63_argument'} = new ConditionArgument('s_tags', $args->s_tags, 'like');
${'s_tags63_argument'}->createConditionValue();
if(!${'s_tags63_argument'}->isValid()) return ${'s_tags63_argument'}->getErrorMessage();
} else
${'s_tags63_argument'} = NULL;if(${'s_tags63_argument'} !== null) ${'s_tags63_argument'}->setColumnType('text');
if(isset($args->s_is_secret)) {
${'s_is_secret64_argument'} = new ConditionArgument('s_is_secret', $args->s_is_secret, 'equal');
${'s_is_secret64_argument'}->createConditionValue();
if(!${'s_is_secret64_argument'}->isValid()) return ${'s_is_secret64_argument'}->getErrorMessage();
} else
${'s_is_secret64_argument'} = NULL;if(isset($args->s_member_srl)) {
${'s_member_srl65_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl65_argument'}->createConditionValue();
if(!${'s_member_srl65_argument'}->isValid()) return ${'s_member_srl65_argument'}->getErrorMessage();
} else
${'s_member_srl65_argument'} = NULL;if(${'s_member_srl65_argument'} !== null) ${'s_member_srl65_argument'}->setColumnType('number');
if(isset($args->s_readed_count)) {
${'s_readed_count66_argument'} = new ConditionArgument('s_readed_count', $args->s_readed_count, 'more');
${'s_readed_count66_argument'}->createConditionValue();
if(!${'s_readed_count66_argument'}->isValid()) return ${'s_readed_count66_argument'}->getErrorMessage();
} else
${'s_readed_count66_argument'} = NULL;if(${'s_readed_count66_argument'} !== null) ${'s_readed_count66_argument'}->setColumnType('number');
if(isset($args->s_voted_count)) {
${'s_voted_count67_argument'} = new ConditionArgument('s_voted_count', $args->s_voted_count, 'more');
${'s_voted_count67_argument'}->createConditionValue();
if(!${'s_voted_count67_argument'}->isValid()) return ${'s_voted_count67_argument'}->getErrorMessage();
} else
${'s_voted_count67_argument'} = NULL;if(${'s_voted_count67_argument'} !== null) ${'s_voted_count67_argument'}->setColumnType('number');
if(isset($args->s_comment_count)) {
${'s_comment_count68_argument'} = new ConditionArgument('s_comment_count', $args->s_comment_count, 'more');
${'s_comment_count68_argument'}->createConditionValue();
if(!${'s_comment_count68_argument'}->isValid()) return ${'s_comment_count68_argument'}->getErrorMessage();
} else
${'s_comment_count68_argument'} = NULL;if(${'s_comment_count68_argument'} !== null) ${'s_comment_count68_argument'}->setColumnType('number');
if(isset($args->s_trackback_count)) {
${'s_trackback_count69_argument'} = new ConditionArgument('s_trackback_count', $args->s_trackback_count, 'more');
${'s_trackback_count69_argument'}->createConditionValue();
if(!${'s_trackback_count69_argument'}->isValid()) return ${'s_trackback_count69_argument'}->getErrorMessage();
} else
${'s_trackback_count69_argument'} = NULL;if(${'s_trackback_count69_argument'} !== null) ${'s_trackback_count69_argument'}->setColumnType('number');
if(isset($args->s_uploaded_count)) {
${'s_uploaded_count70_argument'} = new ConditionArgument('s_uploaded_count', $args->s_uploaded_count, 'more');
${'s_uploaded_count70_argument'}->createConditionValue();
if(!${'s_uploaded_count70_argument'}->isValid()) return ${'s_uploaded_count70_argument'}->getErrorMessage();
} else
${'s_uploaded_count70_argument'} = NULL;if(${'s_uploaded_count70_argument'} !== null) ${'s_uploaded_count70_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate71_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate71_argument'}->createConditionValue();
if(!${'s_regdate71_argument'}->isValid()) return ${'s_regdate71_argument'}->getErrorMessage();
} else
${'s_regdate71_argument'} = NULL;if(${'s_regdate71_argument'} !== null) ${'s_regdate71_argument'}->setColumnType('date');
if(isset($args->s_last_update)) {
${'s_last_update72_argument'} = new ConditionArgument('s_last_update', $args->s_last_update, 'like_prefix');
${'s_last_update72_argument'}->createConditionValue();
if(!${'s_last_update72_argument'}->isValid()) return ${'s_last_update72_argument'}->getErrorMessage();
} else
${'s_last_update72_argument'} = NULL;if(${'s_last_update72_argument'} !== null) ${'s_last_update72_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress73_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress73_argument'}->createConditionValue();
if(!${'s_ipaddress73_argument'}->isValid()) return ${'s_ipaddress73_argument'}->getErrorMessage();
} else
${'s_ipaddress73_argument'} = NULL;if(${'s_ipaddress73_argument'} !== null) ${'s_ipaddress73_argument'}->setColumnType('varchar');
if(isset($args->start_date)) {
${'start_date74_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date74_argument'}->createConditionValue();
if(!${'start_date74_argument'}->isValid()) return ${'start_date74_argument'}->getErrorMessage();
} else
${'start_date74_argument'} = NULL;if(${'start_date74_argument'} !== null) ${'start_date74_argument'}->setColumnType('date');
if(isset($args->end_date)) {
${'end_date75_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date75_argument'}->createConditionValue();
if(!${'end_date75_argument'}->isValid()) return ${'end_date75_argument'}->getErrorMessage();
} else
${'end_date75_argument'} = NULL;if(${'end_date75_argument'} !== null) ${'end_date75_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('max(`document_srl`)', '`document_srl`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl49_argument,"in")
,new ConditionWithArgument('`document_srl`',$document_srl50_argument,"below", 'and')
,new ConditionWithArgument('`category_srl`',$category_srl51_argument,"in", 'and')
,new ConditionWithArgument('`is_notice`',$s_is_notice52_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl53_argument,"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`list_order`',$division54_argument,"more", 'and')
,new ConditionWithArgument('`list_order`',$last_division55_argument,"below", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`title`',$s_title56_argument,"like")
,new ConditionWithArgument('`content`',$s_content57_argument,"like", 'or')
,new ConditionWithArgument('`user_name`',$s_user_name58_argument,"like", 'or')
,new ConditionWithArgument('`user_id`',$s_user_id59_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name60_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_addres61_argument,"like", 'or')
,new ConditionWithArgument('`homepage`',$s_homepage62_argument,"like", 'or')
,new ConditionWithArgument('`tags`',$s_tags63_argument,"like", 'or')
,new ConditionWithArgument('`is_secret`',$s_is_secret64_argument,"equal", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srl65_argument,"equal", 'or')
,new ConditionWithArgument('`readed_count`',$s_readed_count66_argument,"more", 'or')
,new ConditionWithArgument('`voted_count`',$s_voted_count67_argument,"more", 'or')
,new ConditionWithArgument('`comment_count`',$s_comment_count68_argument,"more", 'or')
,new ConditionWithArgument('`trackback_count`',$s_trackback_count69_argument,"more", 'or')
,new ConditionWithArgument('`uploaded_count`',$s_uploaded_count70_argument,"more", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate71_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_update`',$s_last_update72_argument,"like_prefix", 'or')
,new ConditionWithArgument('`ipaddress`',$s_ipaddress73_argument,"like_prefix", 'or')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`last_update`',$start_date74_argument,"more", 'and')
,new ConditionWithArgument('`last_update`',$end_date75_argument,"less", 'and')),'and')
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>