<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateTextyle");
$query->setAction("update");
$query->setPriority("");
if(isset($args->textyle_content)) {
${'textyle_content63_argument'} = new Argument('textyle_content', $args->{'textyle_content'});
if(!${'textyle_content63_argument'}->isValid()) return ${'textyle_content63_argument'}->getErrorMessage();
} else
${'textyle_content63_argument'} = NULL;if(${'textyle_content63_argument'} !== null) ${'textyle_content63_argument'}->setColumnType('varchar');
if(isset($args->profile_content)) {
${'profile_content64_argument'} = new Argument('profile_content', $args->{'profile_content'});
if(!${'profile_content64_argument'}->isValid()) return ${'profile_content64_argument'}->getErrorMessage();
} else
${'profile_content64_argument'} = NULL;if(${'profile_content64_argument'} !== null) ${'profile_content64_argument'}->setColumnType('text');

${'member_srl65_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl65_argument'}->checkFilter('number');
${'member_srl65_argument'}->checkNotNull();
if(!${'member_srl65_argument'}->isValid()) return ${'member_srl65_argument'}->getErrorMessage();
if(${'member_srl65_argument'} !== null) ${'member_srl65_argument'}->setColumnType('number');
if(isset($args->textyle_title)) {
${'textyle_title66_argument'} = new Argument('textyle_title', $args->{'textyle_title'});
if(!${'textyle_title66_argument'}->isValid()) return ${'textyle_title66_argument'}->getErrorMessage();
} else
${'textyle_title66_argument'} = NULL;if(${'textyle_title66_argument'} !== null) ${'textyle_title66_argument'}->setColumnType('varchar');
if(isset($args->post_style)) {
${'post_style67_argument'} = new Argument('post_style', $args->{'post_style'});
if(!${'post_style67_argument'}->isValid()) return ${'post_style67_argument'}->getErrorMessage();
} else
${'post_style67_argument'} = NULL;if(${'post_style67_argument'} !== null) ${'post_style67_argument'}->setColumnType('varchar');
if(isset($args->post_editor_skin)) {
${'post_editor_skin68_argument'} = new Argument('post_editor_skin', $args->{'post_editor_skin'});
if(!${'post_editor_skin68_argument'}->isValid()) return ${'post_editor_skin68_argument'}->getErrorMessage();
} else
${'post_editor_skin68_argument'} = NULL;if(${'post_editor_skin68_argument'} !== null) ${'post_editor_skin68_argument'}->setColumnType('varchar');
if(isset($args->post_list_count)) {
${'post_list_count69_argument'} = new Argument('post_list_count', $args->{'post_list_count'});
${'post_list_count69_argument'}->checkFilter('number');
if(!${'post_list_count69_argument'}->isValid()) return ${'post_list_count69_argument'}->getErrorMessage();
} else
${'post_list_count69_argument'} = NULL;if(${'post_list_count69_argument'} !== null) ${'post_list_count69_argument'}->setColumnType('number');
if(isset($args->comment_list_count)) {
${'comment_list_count70_argument'} = new Argument('comment_list_count', $args->{'comment_list_count'});
${'comment_list_count70_argument'}->checkFilter('number');
if(!${'comment_list_count70_argument'}->isValid()) return ${'comment_list_count70_argument'}->getErrorMessage();
} else
${'comment_list_count70_argument'} = NULL;if(${'comment_list_count70_argument'} !== null) ${'comment_list_count70_argument'}->setColumnType('number');
if(isset($args->guestbook_list_count)) {
${'guestbook_list_count71_argument'} = new Argument('guestbook_list_count', $args->{'guestbook_list_count'});
${'guestbook_list_count71_argument'}->checkFilter('number');
if(!${'guestbook_list_count71_argument'}->isValid()) return ${'guestbook_list_count71_argument'}->getErrorMessage();
} else
${'guestbook_list_count71_argument'} = NULL;if(${'guestbook_list_count71_argument'} !== null) ${'guestbook_list_count71_argument'}->setColumnType('number');
if(isset($args->input_email)) {
${'input_email72_argument'} = new Argument('input_email', $args->{'input_email'});
if(!${'input_email72_argument'}->isValid()) return ${'input_email72_argument'}->getErrorMessage();
} else
${'input_email72_argument'} = NULL;if(${'input_email72_argument'} !== null) ${'input_email72_argument'}->setColumnType('char');
if(isset($args->input_website)) {
${'input_website73_argument'} = new Argument('input_website', $args->{'input_website'});
if(!${'input_website73_argument'}->isValid()) return ${'input_website73_argument'}->getErrorMessage();
} else
${'input_website73_argument'} = NULL;if(${'input_website73_argument'} !== null) ${'input_website73_argument'}->setColumnType('char');
if(isset($args->comment_editor_skin)) {
${'comment_editor_skin74_argument'} = new Argument('comment_editor_skin', $args->{'comment_editor_skin'});
if(!${'comment_editor_skin74_argument'}->isValid()) return ${'comment_editor_skin74_argument'}->getErrorMessage();
} else
${'comment_editor_skin74_argument'} = NULL;if(${'comment_editor_skin74_argument'} !== null) ${'comment_editor_skin74_argument'}->setColumnType('varchar');
if(isset($args->comment_editor_colorset)) {
${'comment_editor_colorset75_argument'} = new Argument('comment_editor_colorset', $args->{'comment_editor_colorset'});
if(!${'comment_editor_colorset75_argument'}->isValid()) return ${'comment_editor_colorset75_argument'}->getErrorMessage();
} else
${'comment_editor_colorset75_argument'} = NULL;if(${'comment_editor_colorset75_argument'} !== null) ${'comment_editor_colorset75_argument'}->setColumnType('varchar');
if(isset($args->guestbook_editor_skin)) {
${'guestbook_editor_skin76_argument'} = new Argument('guestbook_editor_skin', $args->{'guestbook_editor_skin'});
if(!${'guestbook_editor_skin76_argument'}->isValid()) return ${'guestbook_editor_skin76_argument'}->getErrorMessage();
} else
${'guestbook_editor_skin76_argument'} = NULL;if(${'guestbook_editor_skin76_argument'} !== null) ${'guestbook_editor_skin76_argument'}->setColumnType('varchar');
if(isset($args->guestbook_editor_colorset)) {
${'guestbook_editor_colorset77_argument'} = new Argument('guestbook_editor_colorset', $args->{'guestbook_editor_colorset'});
if(!${'guestbook_editor_colorset77_argument'}->isValid()) return ${'guestbook_editor_colorset77_argument'}->getErrorMessage();
} else
${'guestbook_editor_colorset77_argument'} = NULL;if(${'guestbook_editor_colorset77_argument'} !== null) ${'guestbook_editor_colorset77_argument'}->setColumnType('varchar');
if(isset($args->post_use_prefix)) {
${'post_use_prefix78_argument'} = new Argument('post_use_prefix', $args->{'post_use_prefix'});
if(!${'post_use_prefix78_argument'}->isValid()) return ${'post_use_prefix78_argument'}->getErrorMessage();
} else
${'post_use_prefix78_argument'} = NULL;if(${'post_use_prefix78_argument'} !== null) ${'post_use_prefix78_argument'}->setColumnType('char');
if(isset($args->post_use_suffix)) {
${'post_use_suffix79_argument'} = new Argument('post_use_suffix', $args->{'post_use_suffix'});
if(!${'post_use_suffix79_argument'}->isValid()) return ${'post_use_suffix79_argument'}->getErrorMessage();
} else
${'post_use_suffix79_argument'} = NULL;if(${'post_use_suffix79_argument'} !== null) ${'post_use_suffix79_argument'}->setColumnType('char');
if(isset($args->timezone)) {
${'timezone80_argument'} = new Argument('timezone', $args->{'timezone'});
if(!${'timezone80_argument'}->isValid()) return ${'timezone80_argument'}->getErrorMessage();
} else
${'timezone80_argument'} = NULL;if(${'timezone80_argument'} !== null) ${'timezone80_argument'}->setColumnType('varchar');
if(isset($args->post_prefix)) {
${'post_prefix81_argument'} = new Argument('post_prefix', $args->{'post_prefix'});
if(!${'post_prefix81_argument'}->isValid()) return ${'post_prefix81_argument'}->getErrorMessage();
} else
${'post_prefix81_argument'} = NULL;if(${'post_prefix81_argument'} !== null) ${'post_prefix81_argument'}->setColumnType('text');
if(isset($args->post_suffix)) {
${'post_suffix82_argument'} = new Argument('post_suffix', $args->{'post_suffix'});
if(!${'post_suffix82_argument'}->isValid()) return ${'post_suffix82_argument'}->getErrorMessage();
} else
${'post_suffix82_argument'} = NULL;if(${'post_suffix82_argument'} !== null) ${'post_suffix82_argument'}->setColumnType('text');
if(isset($args->subscription_date)) {
${'subscription_date83_argument'} = new Argument('subscription_date', $args->{'subscription_date'});
if(!${'subscription_date83_argument'}->isValid()) return ${'subscription_date83_argument'}->getErrorMessage();
} else
${'subscription_date83_argument'} = NULL;if(${'subscription_date83_argument'} !== null) ${'subscription_date83_argument'}->setColumnType('varchar');

${'module_srl84_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl84_argument'}->checkFilter('number');
${'module_srl84_argument'}->checkNotNull();
${'module_srl84_argument'}->createConditionValue();
if(!${'module_srl84_argument'}->isValid()) return ${'module_srl84_argument'}->getErrorMessage();
if(${'module_srl84_argument'} !== null) ${'module_srl84_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`textyle_content`', ${'textyle_content63_argument'})
,new UpdateExpression('`profile_content`', ${'profile_content64_argument'})
,new UpdateExpression('`member_srl`', ${'member_srl65_argument'})
,new UpdateExpression('`textyle_title`', ${'textyle_title66_argument'})
,new UpdateExpression('`post_style`', ${'post_style67_argument'})
,new UpdateExpression('`post_editor_skin`', ${'post_editor_skin68_argument'})
,new UpdateExpression('`post_list_count`', ${'post_list_count69_argument'})
,new UpdateExpression('`comment_list_count`', ${'comment_list_count70_argument'})
,new UpdateExpression('`guestbook_list_count`', ${'guestbook_list_count71_argument'})
,new UpdateExpression('`input_email`', ${'input_email72_argument'})
,new UpdateExpression('`input_website`', ${'input_website73_argument'})
,new UpdateExpression('`comment_editor_skin`', ${'comment_editor_skin74_argument'})
,new UpdateExpression('`comment_editor_colorset`', ${'comment_editor_colorset75_argument'})
,new UpdateExpression('`guestbook_editor_skin`', ${'guestbook_editor_skin76_argument'})
,new UpdateExpression('`guestbook_editor_colorset`', ${'guestbook_editor_colorset77_argument'})
,new UpdateExpression('`post_use_prefix`', ${'post_use_prefix78_argument'})
,new UpdateExpression('`post_use_suffix`', ${'post_use_suffix79_argument'})
,new UpdateExpression('`timezone`', ${'timezone80_argument'})
,new UpdateExpression('`post_prefix`', ${'post_prefix81_argument'})
,new UpdateExpression('`post_suffix`', ${'post_suffix82_argument'})
,new UpdateExpression('`subscription_date`', ${'subscription_date83_argument'})
));
$query->setTables(array(
new Table('`xe_textyle`', '`textyle`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl84_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>