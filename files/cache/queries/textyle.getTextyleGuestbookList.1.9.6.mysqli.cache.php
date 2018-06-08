<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTextyleGuestbookList");
$query->setAction("select");
$query->setPriority("");

${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->checkNotNull();
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');
if(isset($args->user_id_search)) {
${'user_id_search2_argument'} = new ConditionArgument('user_id_search', $args->user_id_search, 'like');
${'user_id_search2_argument'}->createConditionValue();
if(!${'user_id_search2_argument'}->isValid()) return ${'user_id_search2_argument'}->getErrorMessage();
} else
${'user_id_search2_argument'} = NULL;if(${'user_id_search2_argument'} !== null) ${'user_id_search2_argument'}->setColumnType('varchar');
if(isset($args->user_name_search)) {
${'user_name_search3_argument'} = new ConditionArgument('user_name_search', $args->user_name_search, 'like');
${'user_name_search3_argument'}->createConditionValue();
if(!${'user_name_search3_argument'}->isValid()) return ${'user_name_search3_argument'}->getErrorMessage();
} else
${'user_name_search3_argument'} = NULL;if(${'user_name_search3_argument'} !== null) ${'user_name_search3_argument'}->setColumnType('varchar');
if(isset($args->nick_name_search)) {
${'nick_name_search4_argument'} = new ConditionArgument('nick_name_search', $args->nick_name_search, 'like');
${'nick_name_search4_argument'}->createConditionValue();
if(!${'nick_name_search4_argument'}->isValid()) return ${'nick_name_search4_argument'}->getErrorMessage();
} else
${'nick_name_search4_argument'} = NULL;if(${'nick_name_search4_argument'} !== null) ${'nick_name_search4_argument'}->setColumnType('varchar');
if(isset($args->homepage_search)) {
${'homepage_search5_argument'} = new ConditionArgument('homepage_search', $args->homepage_search, 'like');
${'homepage_search5_argument'}->createConditionValue();
if(!${'homepage_search5_argument'}->isValid()) return ${'homepage_search5_argument'}->getErrorMessage();
} else
${'homepage_search5_argument'} = NULL;if(${'homepage_search5_argument'} !== null) ${'homepage_search5_argument'}->setColumnType('varchar');
if(isset($args->regdate_search)) {
${'regdate_search6_argument'} = new ConditionArgument('regdate_search', $args->regdate_search, 'likei_prefix');
${'regdate_search6_argument'}->createConditionValue();
if(!${'regdate_search6_argument'}->isValid()) return ${'regdate_search6_argument'}->getErrorMessage();
} else
${'regdate_search6_argument'} = NULL;if(${'regdate_search6_argument'} !== null) ${'regdate_search6_argument'}->setColumnType('date');
if(isset($args->email_address_search)) {
${'email_address_search7_argument'} = new ConditionArgument('email_address_search', $args->email_address_search, 'like');
${'email_address_search7_argument'}->createConditionValue();
if(!${'email_address_search7_argument'}->isValid()) return ${'email_address_search7_argument'}->getErrorMessage();
} else
${'email_address_search7_argument'} = NULL;if(${'email_address_search7_argument'} !== null) ${'email_address_search7_argument'}->setColumnType('varchar');
if(isset($args->ipaddress_search)) {
${'ipaddress_search8_argument'} = new ConditionArgument('ipaddress_search', $args->ipaddress_search, 'like');
${'ipaddress_search8_argument'}->createConditionValue();
if(!${'ipaddress_search8_argument'}->isValid()) return ${'ipaddress_search8_argument'}->getErrorMessage();
} else
${'ipaddress_search8_argument'} = NULL;if(${'ipaddress_search8_argument'} !== null) ${'ipaddress_search8_argument'}->setColumnType('varchar');
if(isset($args->content_search)) {
${'content_search9_argument'} = new ConditionArgument('content_search', $args->content_search, 'like');
${'content_search9_argument'}->createConditionValue();
if(!${'content_search9_argument'}->isValid()) return ${'content_search9_argument'}->getErrorMessage();
} else
${'content_search9_argument'} = NULL;if(${'content_search9_argument'} !== null) ${'content_search9_argument'}->setColumnType('bigtext');

${'page12_argument'} = new Argument('page', $args->{'page'});
${'page12_argument'}->ensureDefaultValue('1');
if(!${'page12_argument'}->isValid()) return ${'page12_argument'}->getErrorMessage();

${'page_count13_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count13_argument'}->ensureDefaultValue('10');
if(!${'page_count13_argument'}->isValid()) return ${'page_count13_argument'}->getErrorMessage();

${'list_count14_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count14_argument'}->ensureDefaultValue('20');
if(!${'list_count14_argument'}->isValid()) return ${'list_count14_argument'}->getErrorMessage();

${'parent_srl11_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl11_argument'}->ensureDefaultValue('guestbook.parent_srl');
if(!${'parent_srl11_argument'}->isValid()) return ${'parent_srl11_argument'}->getErrorMessage();

${'list_order10_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order10_argument'}->ensureDefaultValue('guestbook.list_order');
if(!${'list_order10_argument'}->isValid()) return ${'list_order10_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_textyle_guestbook`', '`guestbook`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl1_argument,"equal")))
,new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$user_id_search2_argument,"like", 'or')
,new ConditionWithArgument('`user_name`',$user_name_search3_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$nick_name_search4_argument,"like", 'or')
,new ConditionWithArgument('`homepage`',$homepage_search5_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$regdate_search6_argument,"likei_prefix", 'or')
,new ConditionWithArgument('`email_address`',$email_address_search7_argument,"like", 'or')
,new ConditionWithArgument('`ipaddress`',$ipaddress_search8_argument,"like", 'or')
,new ConditionWithArgument('`content`',$content_search9_argument,"like", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'list_order10_argument'}, "asc")
,new OrderByColumn(${'parent_srl11_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count14_argument'}, ${'page12_argument'}, ${'page_count13_argument'}));
return $query; ?>