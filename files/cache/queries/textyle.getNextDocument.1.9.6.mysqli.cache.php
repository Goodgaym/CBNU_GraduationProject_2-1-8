<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNextDocument");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl22_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl22_argument'}->checkFilter('number');
${'module_srl22_argument'}->createConditionValue();
if(!${'module_srl22_argument'}->isValid()) return ${'module_srl22_argument'}->getErrorMessage();
} else
${'module_srl22_argument'} = NULL;if(${'module_srl22_argument'} !== null) ${'module_srl22_argument'}->setColumnType('number');

${'document_srl23_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'excess');
${'document_srl23_argument'}->checkNotNull();
${'document_srl23_argument'}->createConditionValue();
if(!${'document_srl23_argument'}->isValid()) return ${'document_srl23_argument'}->getErrorMessage();
if(${'document_srl23_argument'} !== null) ${'document_srl23_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl24_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl24_argument'}->createConditionValue();
if(!${'category_srl24_argument'}->isValid()) return ${'category_srl24_argument'}->getErrorMessage();
} else
${'category_srl24_argument'} = NULL;if(${'category_srl24_argument'} !== null) ${'category_srl24_argument'}->setColumnType('number');
if(isset($args->s_is_notice)) {
${'s_is_notice25_argument'} = new ConditionArgument('s_is_notice', $args->s_is_notice, 'equal');
${'s_is_notice25_argument'}->createConditionValue();
if(!${'s_is_notice25_argument'}->isValid()) return ${'s_is_notice25_argument'}->getErrorMessage();
} else
${'s_is_notice25_argument'} = NULL;if(${'s_is_notice25_argument'} !== null) ${'s_is_notice25_argument'}->setColumnType('char');
if(isset($args->member_srl)) {
${'member_srl26_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl26_argument'}->checkFilter('number');
${'member_srl26_argument'}->createConditionValue();
if(!${'member_srl26_argument'}->isValid()) return ${'member_srl26_argument'}->getErrorMessage();
} else
${'member_srl26_argument'} = NULL;if(${'member_srl26_argument'} !== null) ${'member_srl26_argument'}->setColumnType('number');
if(isset($args->division)) {
${'division27_argument'} = new ConditionArgument('division', $args->division, 'more');
${'division27_argument'}->createConditionValue();
if(!${'division27_argument'}->isValid()) return ${'division27_argument'}->getErrorMessage();
} else
${'division27_argument'} = NULL;if(${'division27_argument'} !== null) ${'division27_argument'}->setColumnType('number');
if(isset($args->last_division)) {
${'last_division28_argument'} = new ConditionArgument('last_division', $args->last_division, 'below');
${'last_division28_argument'}->createConditionValue();
if(!${'last_division28_argument'}->isValid()) return ${'last_division28_argument'}->getErrorMessage();
} else
${'last_division28_argument'} = NULL;if(${'last_division28_argument'} !== null) ${'last_division28_argument'}->setColumnType('number');
if(isset($args->s_title)) {
${'s_title29_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title29_argument'}->createConditionValue();
if(!${'s_title29_argument'}->isValid()) return ${'s_title29_argument'}->getErrorMessage();
} else
${'s_title29_argument'} = NULL;if(${'s_title29_argument'} !== null) ${'s_title29_argument'}->setColumnType('varchar');
if(isset($args->s_content)) {
${'s_content30_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content30_argument'}->createConditionValue();
if(!${'s_content30_argument'}->isValid()) return ${'s_content30_argument'}->getErrorMessage();
} else
${'s_content30_argument'} = NULL;if(${'s_content30_argument'} !== null) ${'s_content30_argument'}->setColumnType('bigtext');
if(isset($args->s_user_name)) {
${'s_user_name31_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name31_argument'}->createConditionValue();
if(!${'s_user_name31_argument'}->isValid()) return ${'s_user_name31_argument'}->getErrorMessage();
} else
${'s_user_name31_argument'} = NULL;if(${'s_user_name31_argument'} !== null) ${'s_user_name31_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id32_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id32_argument'}->createConditionValue();
if(!${'s_user_id32_argument'}->isValid()) return ${'s_user_id32_argument'}->getErrorMessage();
} else
${'s_user_id32_argument'} = NULL;if(${'s_user_id32_argument'} !== null) ${'s_user_id32_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name33_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name33_argument'}->createConditionValue();
if(!${'s_nick_name33_argument'}->isValid()) return ${'s_nick_name33_argument'}->getErrorMessage();
} else
${'s_nick_name33_argument'} = NULL;if(${'s_nick_name33_argument'} !== null) ${'s_nick_name33_argument'}->setColumnType('varchar');
if(isset($args->s_email_addres)) {
${'s_email_addres34_argument'} = new ConditionArgument('s_email_addres', $args->s_email_addres, 'like');
${'s_email_addres34_argument'}->createConditionValue();
if(!${'s_email_addres34_argument'}->isValid()) return ${'s_email_addres34_argument'}->getErrorMessage();
} else
${'s_email_addres34_argument'} = NULL;if(${'s_email_addres34_argument'} !== null) ${'s_email_addres34_argument'}->setColumnType('varchar');
if(isset($args->s_homepage)) {
${'s_homepage35_argument'} = new ConditionArgument('s_homepage', $args->s_homepage, 'like');
${'s_homepage35_argument'}->createConditionValue();
if(!${'s_homepage35_argument'}->isValid()) return ${'s_homepage35_argument'}->getErrorMessage();
} else
${'s_homepage35_argument'} = NULL;if(${'s_homepage35_argument'} !== null) ${'s_homepage35_argument'}->setColumnType('varchar');
if(isset($args->s_tags)) {
${'s_tags36_argument'} = new ConditionArgument('s_tags', $args->s_tags, 'like');
${'s_tags36_argument'}->createConditionValue();
if(!${'s_tags36_argument'}->isValid()) return ${'s_tags36_argument'}->getErrorMessage();
} else
${'s_tags36_argument'} = NULL;if(${'s_tags36_argument'} !== null) ${'s_tags36_argument'}->setColumnType('text');
if(isset($args->s_is_secret)) {
${'s_is_secret37_argument'} = new ConditionArgument('s_is_secret', $args->s_is_secret, 'equal');
${'s_is_secret37_argument'}->createConditionValue();
if(!${'s_is_secret37_argument'}->isValid()) return ${'s_is_secret37_argument'}->getErrorMessage();
} else
${'s_is_secret37_argument'} = NULL;if(isset($args->s_member_srl)) {
${'s_member_srl38_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl38_argument'}->createConditionValue();
if(!${'s_member_srl38_argument'}->isValid()) return ${'s_member_srl38_argument'}->getErrorMessage();
} else
${'s_member_srl38_argument'} = NULL;if(${'s_member_srl38_argument'} !== null) ${'s_member_srl38_argument'}->setColumnType('number');
if(isset($args->s_readed_count)) {
${'s_readed_count39_argument'} = new ConditionArgument('s_readed_count', $args->s_readed_count, 'more');
${'s_readed_count39_argument'}->createConditionValue();
if(!${'s_readed_count39_argument'}->isValid()) return ${'s_readed_count39_argument'}->getErrorMessage();
} else
${'s_readed_count39_argument'} = NULL;if(${'s_readed_count39_argument'} !== null) ${'s_readed_count39_argument'}->setColumnType('number');
if(isset($args->s_voted_count)) {
${'s_voted_count40_argument'} = new ConditionArgument('s_voted_count', $args->s_voted_count, 'more');
${'s_voted_count40_argument'}->createConditionValue();
if(!${'s_voted_count40_argument'}->isValid()) return ${'s_voted_count40_argument'}->getErrorMessage();
} else
${'s_voted_count40_argument'} = NULL;if(${'s_voted_count40_argument'} !== null) ${'s_voted_count40_argument'}->setColumnType('number');
if(isset($args->s_comment_count)) {
${'s_comment_count41_argument'} = new ConditionArgument('s_comment_count', $args->s_comment_count, 'more');
${'s_comment_count41_argument'}->createConditionValue();
if(!${'s_comment_count41_argument'}->isValid()) return ${'s_comment_count41_argument'}->getErrorMessage();
} else
${'s_comment_count41_argument'} = NULL;if(${'s_comment_count41_argument'} !== null) ${'s_comment_count41_argument'}->setColumnType('number');
if(isset($args->s_trackback_count)) {
${'s_trackback_count42_argument'} = new ConditionArgument('s_trackback_count', $args->s_trackback_count, 'more');
${'s_trackback_count42_argument'}->createConditionValue();
if(!${'s_trackback_count42_argument'}->isValid()) return ${'s_trackback_count42_argument'}->getErrorMessage();
} else
${'s_trackback_count42_argument'} = NULL;if(${'s_trackback_count42_argument'} !== null) ${'s_trackback_count42_argument'}->setColumnType('number');
if(isset($args->s_uploaded_count)) {
${'s_uploaded_count43_argument'} = new ConditionArgument('s_uploaded_count', $args->s_uploaded_count, 'more');
${'s_uploaded_count43_argument'}->createConditionValue();
if(!${'s_uploaded_count43_argument'}->isValid()) return ${'s_uploaded_count43_argument'}->getErrorMessage();
} else
${'s_uploaded_count43_argument'} = NULL;if(${'s_uploaded_count43_argument'} !== null) ${'s_uploaded_count43_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate44_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate44_argument'}->createConditionValue();
if(!${'s_regdate44_argument'}->isValid()) return ${'s_regdate44_argument'}->getErrorMessage();
} else
${'s_regdate44_argument'} = NULL;if(${'s_regdate44_argument'} !== null) ${'s_regdate44_argument'}->setColumnType('date');
if(isset($args->s_last_update)) {
${'s_last_update45_argument'} = new ConditionArgument('s_last_update', $args->s_last_update, 'like_prefix');
${'s_last_update45_argument'}->createConditionValue();
if(!${'s_last_update45_argument'}->isValid()) return ${'s_last_update45_argument'}->getErrorMessage();
} else
${'s_last_update45_argument'} = NULL;if(${'s_last_update45_argument'} !== null) ${'s_last_update45_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress46_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress46_argument'}->createConditionValue();
if(!${'s_ipaddress46_argument'}->isValid()) return ${'s_ipaddress46_argument'}->getErrorMessage();
} else
${'s_ipaddress46_argument'} = NULL;if(${'s_ipaddress46_argument'} !== null) ${'s_ipaddress46_argument'}->setColumnType('varchar');
if(isset($args->start_date)) {
${'start_date47_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date47_argument'}->createConditionValue();
if(!${'start_date47_argument'}->isValid()) return ${'start_date47_argument'}->getErrorMessage();
} else
${'start_date47_argument'} = NULL;if(${'start_date47_argument'} !== null) ${'start_date47_argument'}->setColumnType('date');
if(isset($args->end_date)) {
${'end_date48_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date48_argument'}->createConditionValue();
if(!${'end_date48_argument'}->isValid()) return ${'end_date48_argument'}->getErrorMessage();
} else
${'end_date48_argument'} = NULL;if(${'end_date48_argument'} !== null) ${'end_date48_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('min(`document_srl`)', '`document_srl`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl22_argument,"in")
,new ConditionWithArgument('`document_srl`',$document_srl23_argument,"excess", 'and')
,new ConditionWithArgument('`category_srl`',$category_srl24_argument,"in", 'and')
,new ConditionWithArgument('`is_notice`',$s_is_notice25_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl26_argument,"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`list_order`',$division27_argument,"more", 'and')
,new ConditionWithArgument('`list_order`',$last_division28_argument,"below", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`title`',$s_title29_argument,"like")
,new ConditionWithArgument('`content`',$s_content30_argument,"like", 'or')
,new ConditionWithArgument('`user_name`',$s_user_name31_argument,"like", 'or')
,new ConditionWithArgument('`user_id`',$s_user_id32_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name33_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_addres34_argument,"like", 'or')
,new ConditionWithArgument('`homepage`',$s_homepage35_argument,"like", 'or')
,new ConditionWithArgument('`tags`',$s_tags36_argument,"like", 'or')
,new ConditionWithArgument('`is_secret`',$s_is_secret37_argument,"equal", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srl38_argument,"equal", 'or')
,new ConditionWithArgument('`readed_count`',$s_readed_count39_argument,"more", 'or')
,new ConditionWithArgument('`voted_count`',$s_voted_count40_argument,"more", 'or')
,new ConditionWithArgument('`comment_count`',$s_comment_count41_argument,"more", 'or')
,new ConditionWithArgument('`trackback_count`',$s_trackback_count42_argument,"more", 'or')
,new ConditionWithArgument('`uploaded_count`',$s_uploaded_count43_argument,"more", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate44_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_update`',$s_last_update45_argument,"like_prefix", 'or')
,new ConditionWithArgument('`ipaddress`',$s_ipaddress46_argument,"like_prefix", 'or')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`last_update`',$start_date47_argument,"more", 'and')
,new ConditionWithArgument('`last_update`',$end_date48_argument,"less", 'and')),'and')
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>