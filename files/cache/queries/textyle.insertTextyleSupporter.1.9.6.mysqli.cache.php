<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertTextyleSupporter");
$query->setAction("insert");
$query->setPriority("");

${'textyle_supporter_srl45_argument'} = new Argument('textyle_supporter_srl', $args->{'textyle_supporter_srl'});
${'textyle_supporter_srl45_argument'}->checkNotNull();
if(!${'textyle_supporter_srl45_argument'}->isValid()) return ${'textyle_supporter_srl45_argument'}->getErrorMessage();
if(${'textyle_supporter_srl45_argument'} !== null) ${'textyle_supporter_srl45_argument'}->setColumnType('number');

${'module_srl46_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl46_argument'}->checkNotNull();
if(!${'module_srl46_argument'}->isValid()) return ${'module_srl46_argument'}->getErrorMessage();
if(${'module_srl46_argument'} !== null) ${'module_srl46_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl47_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl47_argument'}->isValid()) return ${'member_srl47_argument'}->getErrorMessage();
} else
${'member_srl47_argument'} = NULL;if(${'member_srl47_argument'} !== null) ${'member_srl47_argument'}->setColumnType('number');

${'nick_name48_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name48_argument'}->checkNotNull();
if(!${'nick_name48_argument'}->isValid()) return ${'nick_name48_argument'}->getErrorMessage();
if(${'nick_name48_argument'} !== null) ${'nick_name48_argument'}->setColumnType('varchar');
if(isset($args->homepage)) {
${'homepage49_argument'} = new Argument('homepage', $args->{'homepage'});
if(!${'homepage49_argument'}->isValid()) return ${'homepage49_argument'}->getErrorMessage();
} else
${'homepage49_argument'} = NULL;if(${'homepage49_argument'} !== null) ${'homepage49_argument'}->setColumnType('varchar');

${'comment_count50_argument'} = new Argument('comment_count', $args->{'comment_count'});
${'comment_count50_argument'}->ensureDefaultValue('0');
${'comment_count50_argument'}->checkNotNull();
if(!${'comment_count50_argument'}->isValid()) return ${'comment_count50_argument'}->getErrorMessage();
if(${'comment_count50_argument'} !== null) ${'comment_count50_argument'}->setColumnType('number');

${'trackback_count51_argument'} = new Argument('trackback_count', $args->{'trackback_count'});
${'trackback_count51_argument'}->ensureDefaultValue('0');
${'trackback_count51_argument'}->checkNotNull();
if(!${'trackback_count51_argument'}->isValid()) return ${'trackback_count51_argument'}->getErrorMessage();
if(${'trackback_count51_argument'} !== null) ${'trackback_count51_argument'}->setColumnType('number');

${'guestbook_count52_argument'} = new Argument('guestbook_count', $args->{'guestbook_count'});
${'guestbook_count52_argument'}->ensureDefaultValue('0');
${'guestbook_count52_argument'}->checkNotNull();
if(!${'guestbook_count52_argument'}->isValid()) return ${'guestbook_count52_argument'}->getErrorMessage();
if(${'guestbook_count52_argument'} !== null) ${'guestbook_count52_argument'}->setColumnType('number');

${'total_count53_argument'} = new Argument('total_count', $args->{'total_count'});
${'total_count53_argument'}->ensureDefaultValue('0');
${'total_count53_argument'}->checkNotNull();
if(!${'total_count53_argument'}->isValid()) return ${'total_count53_argument'}->getErrorMessage();
if(${'total_count53_argument'} !== null) ${'total_count53_argument'}->setColumnType('number');
if(isset($args->regdate)) {
${'regdate54_argument'} = new Argument('regdate', $args->{'regdate'});
if(!${'regdate54_argument'}->isValid()) return ${'regdate54_argument'}->getErrorMessage();
} else
${'regdate54_argument'} = NULL;if(${'regdate54_argument'} !== null) ${'regdate54_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`textyle_supporter_srl`', ${'textyle_supporter_srl45_argument'})
,new InsertExpression('`module_srl`', ${'module_srl46_argument'})
,new InsertExpression('`member_srl`', ${'member_srl47_argument'})
,new InsertExpression('`nick_name`', ${'nick_name48_argument'})
,new InsertExpression('`homepage`', ${'homepage49_argument'})
,new InsertExpression('`comment_count`', ${'comment_count50_argument'})
,new InsertExpression('`trackback_count`', ${'trackback_count51_argument'})
,new InsertExpression('`guestbook_count`', ${'guestbook_count52_argument'})
,new InsertExpression('`total_count`', ${'total_count53_argument'})
,new InsertExpression('`regdate`', ${'regdate54_argument'})
));
$query->setTables(array(
new Table('`xe_textyle_supporter`', '`textyle_supporter`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>