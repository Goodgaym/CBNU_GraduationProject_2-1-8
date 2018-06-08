<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertTextyle");
$query->setAction("insert");
$query->setPriority("");

${'module_srl7_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl7_argument'}->checkFilter('number');
${'module_srl7_argument'}->checkNotNull();
if(!${'module_srl7_argument'}->isValid()) return ${'module_srl7_argument'}->getErrorMessage();
if(${'module_srl7_argument'} !== null) ${'module_srl7_argument'}->setColumnType('number');

${'member_srl8_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl8_argument'}->checkFilter('number');
${'member_srl8_argument'}->checkNotNull();
if(!${'member_srl8_argument'}->isValid()) return ${'member_srl8_argument'}->getErrorMessage();
if(${'member_srl8_argument'} !== null) ${'member_srl8_argument'}->setColumnType('number');
if(isset($args->textyle_content)) {
${'textyle_content9_argument'} = new Argument('textyle_content', $args->{'textyle_content'});
if(!${'textyle_content9_argument'}->isValid()) return ${'textyle_content9_argument'}->getErrorMessage();
} else
${'textyle_content9_argument'} = NULL;if(${'textyle_content9_argument'} !== null) ${'textyle_content9_argument'}->setColumnType('varchar');

${'profile_content10_argument'} = new Argument('profile_content', $args->{'profile_content'});
${'profile_content10_argument'}->ensureDefaultValue('');
if(!${'profile_content10_argument'}->isValid()) return ${'profile_content10_argument'}->getErrorMessage();
if(${'profile_content10_argument'} !== null) ${'profile_content10_argument'}->setColumnType('text');
if(isset($args->textyle_title)) {
${'textyle_title11_argument'} = new Argument('textyle_title', $args->{'textyle_title'});
if(!${'textyle_title11_argument'}->isValid()) return ${'textyle_title11_argument'}->getErrorMessage();
} else
${'textyle_title11_argument'} = NULL;if(${'textyle_title11_argument'} !== null) ${'textyle_title11_argument'}->setColumnType('varchar');
if(isset($args->post_style)) {
${'post_style12_argument'} = new Argument('post_style', $args->{'post_style'});
if(!${'post_style12_argument'}->isValid()) return ${'post_style12_argument'}->getErrorMessage();
} else
${'post_style12_argument'} = NULL;if(${'post_style12_argument'} !== null) ${'post_style12_argument'}->setColumnType('varchar');
if(isset($args->post_editor_skin)) {
${'post_editor_skin13_argument'} = new Argument('post_editor_skin', $args->{'post_editor_skin'});
if(!${'post_editor_skin13_argument'}->isValid()) return ${'post_editor_skin13_argument'}->getErrorMessage();
} else
${'post_editor_skin13_argument'} = NULL;if(${'post_editor_skin13_argument'} !== null) ${'post_editor_skin13_argument'}->setColumnType('varchar');
if(isset($args->post_list_count)) {
${'post_list_count14_argument'} = new Argument('post_list_count', $args->{'post_list_count'});
${'post_list_count14_argument'}->checkFilter('number');
if(!${'post_list_count14_argument'}->isValid()) return ${'post_list_count14_argument'}->getErrorMessage();
} else
${'post_list_count14_argument'} = NULL;if(${'post_list_count14_argument'} !== null) ${'post_list_count14_argument'}->setColumnType('number');
if(isset($args->comment_list_count)) {
${'comment_list_count15_argument'} = new Argument('comment_list_count', $args->{'comment_list_count'});
${'comment_list_count15_argument'}->checkFilter('number');
if(!${'comment_list_count15_argument'}->isValid()) return ${'comment_list_count15_argument'}->getErrorMessage();
} else
${'comment_list_count15_argument'} = NULL;if(${'comment_list_count15_argument'} !== null) ${'comment_list_count15_argument'}->setColumnType('number');
if(isset($args->guestbook_list_count)) {
${'guestbook_list_count16_argument'} = new Argument('guestbook_list_count', $args->{'guestbook_list_count'});
${'guestbook_list_count16_argument'}->checkFilter('number');
if(!${'guestbook_list_count16_argument'}->isValid()) return ${'guestbook_list_count16_argument'}->getErrorMessage();
} else
${'guestbook_list_count16_argument'} = NULL;if(${'guestbook_list_count16_argument'} !== null) ${'guestbook_list_count16_argument'}->setColumnType('number');
if(isset($args->comment_editor_skin)) {
${'comment_editor_skin17_argument'} = new Argument('comment_editor_skin', $args->{'comment_editor_skin'});
if(!${'comment_editor_skin17_argument'}->isValid()) return ${'comment_editor_skin17_argument'}->getErrorMessage();
} else
${'comment_editor_skin17_argument'} = NULL;if(${'comment_editor_skin17_argument'} !== null) ${'comment_editor_skin17_argument'}->setColumnType('varchar');
if(isset($args->comment_editor_colorset)) {
${'comment_editor_colorset18_argument'} = new Argument('comment_editor_colorset', $args->{'comment_editor_colorset'});
if(!${'comment_editor_colorset18_argument'}->isValid()) return ${'comment_editor_colorset18_argument'}->getErrorMessage();
} else
${'comment_editor_colorset18_argument'} = NULL;if(${'comment_editor_colorset18_argument'} !== null) ${'comment_editor_colorset18_argument'}->setColumnType('varchar');
if(isset($args->guestbook_editor_skin)) {
${'guestbook_editor_skin19_argument'} = new Argument('guestbook_editor_skin', $args->{'guestbook_editor_skin'});
if(!${'guestbook_editor_skin19_argument'}->isValid()) return ${'guestbook_editor_skin19_argument'}->getErrorMessage();
} else
${'guestbook_editor_skin19_argument'} = NULL;if(${'guestbook_editor_skin19_argument'} !== null) ${'guestbook_editor_skin19_argument'}->setColumnType('varchar');
if(isset($args->guestbook_editor_colorset)) {
${'guestbook_editor_colorset20_argument'} = new Argument('guestbook_editor_colorset', $args->{'guestbook_editor_colorset'});
if(!${'guestbook_editor_colorset20_argument'}->isValid()) return ${'guestbook_editor_colorset20_argument'}->getErrorMessage();
} else
${'guestbook_editor_colorset20_argument'} = NULL;if(${'guestbook_editor_colorset20_argument'} !== null) ${'guestbook_editor_colorset20_argument'}->setColumnType('varchar');
if(isset($args->input_email)) {
${'input_email21_argument'} = new Argument('input_email', $args->{'input_email'});
if(!${'input_email21_argument'}->isValid()) return ${'input_email21_argument'}->getErrorMessage();
} else
${'input_email21_argument'} = NULL;if(${'input_email21_argument'} !== null) ${'input_email21_argument'}->setColumnType('char');
if(isset($args->input_website)) {
${'input_website22_argument'} = new Argument('input_website', $args->{'input_website'});
if(!${'input_website22_argument'}->isValid()) return ${'input_website22_argument'}->getErrorMessage();
} else
${'input_website22_argument'} = NULL;if(${'input_website22_argument'} !== null) ${'input_website22_argument'}->setColumnType('char');
if(isset($args->post_use_prefix)) {
${'post_use_prefix23_argument'} = new Argument('post_use_prefix', $args->{'post_use_prefix'});
if(!${'post_use_prefix23_argument'}->isValid()) return ${'post_use_prefix23_argument'}->getErrorMessage();
} else
${'post_use_prefix23_argument'} = NULL;if(${'post_use_prefix23_argument'} !== null) ${'post_use_prefix23_argument'}->setColumnType('char');
if(isset($args->post_use_suffix)) {
${'post_use_suffix24_argument'} = new Argument('post_use_suffix', $args->{'post_use_suffix'});
if(!${'post_use_suffix24_argument'}->isValid()) return ${'post_use_suffix24_argument'}->getErrorMessage();
} else
${'post_use_suffix24_argument'} = NULL;if(${'post_use_suffix24_argument'} !== null) ${'post_use_suffix24_argument'}->setColumnType('char');

${'post_prefix25_argument'} = new Argument('post_prefix', $args->{'post_prefix'});
${'post_prefix25_argument'}->ensureDefaultValue('');
if(!${'post_prefix25_argument'}->isValid()) return ${'post_prefix25_argument'}->getErrorMessage();
if(${'post_prefix25_argument'} !== null) ${'post_prefix25_argument'}->setColumnType('text');

${'post_suffix26_argument'} = new Argument('post_suffix', $args->{'post_suffix'});
${'post_suffix26_argument'}->ensureDefaultValue('');
if(!${'post_suffix26_argument'}->isValid()) return ${'post_suffix26_argument'}->getErrorMessage();
if(${'post_suffix26_argument'} !== null) ${'post_suffix26_argument'}->setColumnType('text');
if(isset($args->timezone)) {
${'timezone27_argument'} = new Argument('timezone', $args->{'timezone'});
if(!${'timezone27_argument'}->isValid()) return ${'timezone27_argument'}->getErrorMessage();
} else
${'timezone27_argument'} = NULL;if(${'timezone27_argument'} !== null) ${'timezone27_argument'}->setColumnType('varchar');
if(isset($args->subscription_date)) {
${'subscription_date28_argument'} = new Argument('subscription_date', $args->{'subscription_date'});
if(!${'subscription_date28_argument'}->isValid()) return ${'subscription_date28_argument'}->getErrorMessage();
} else
${'subscription_date28_argument'} = NULL;if(${'subscription_date28_argument'} !== null) ${'subscription_date28_argument'}->setColumnType('varchar');

${'regdate29_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate29_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate29_argument'}->isValid()) return ${'regdate29_argument'}->getErrorMessage();
if(${'regdate29_argument'} !== null) ${'regdate29_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl7_argument'})
,new InsertExpression('`member_srl`', ${'member_srl8_argument'})
,new InsertExpression('`textyle_content`', ${'textyle_content9_argument'})
,new InsertExpression('`profile_content`', ${'profile_content10_argument'})
,new InsertExpression('`textyle_title`', ${'textyle_title11_argument'})
,new InsertExpression('`post_style`', ${'post_style12_argument'})
,new InsertExpression('`post_editor_skin`', ${'post_editor_skin13_argument'})
,new InsertExpression('`post_list_count`', ${'post_list_count14_argument'})
,new InsertExpression('`comment_list_count`', ${'comment_list_count15_argument'})
,new InsertExpression('`guestbook_list_count`', ${'guestbook_list_count16_argument'})
,new InsertExpression('`comment_editor_skin`', ${'comment_editor_skin17_argument'})
,new InsertExpression('`comment_editor_colorset`', ${'comment_editor_colorset18_argument'})
,new InsertExpression('`guestbook_editor_skin`', ${'guestbook_editor_skin19_argument'})
,new InsertExpression('`guestbook_editor_colorset`', ${'guestbook_editor_colorset20_argument'})
,new InsertExpression('`input_email`', ${'input_email21_argument'})
,new InsertExpression('`input_website`', ${'input_website22_argument'})
,new InsertExpression('`post_use_prefix`', ${'post_use_prefix23_argument'})
,new InsertExpression('`post_use_suffix`', ${'post_use_suffix24_argument'})
,new InsertExpression('`post_prefix`', ${'post_prefix25_argument'})
,new InsertExpression('`post_suffix`', ${'post_suffix26_argument'})
,new InsertExpression('`timezone`', ${'timezone27_argument'})
,new InsertExpression('`subscription_date`', ${'subscription_date28_argument'})
,new InsertExpression('`regdate`', ${'regdate29_argument'})
));
$query->setTables(array(
new Table('`xe_textyle`', '`textyle`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>