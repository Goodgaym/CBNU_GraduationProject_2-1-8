<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateSiteAddon");
$query->setAction("update");
$query->setPriority("");
if(isset($args->is_used)) {
${'is_used30_argument'} = new Argument('is_used', $args->{'is_used'});
if(!${'is_used30_argument'}->isValid()) return ${'is_used30_argument'}->getErrorMessage();
} else
${'is_used30_argument'} = NULL;if(${'is_used30_argument'} !== null) ${'is_used30_argument'}->setColumnType('char');
if(isset($args->is_used_m)) {
${'is_used_m31_argument'} = new Argument('is_used_m', $args->{'is_used_m'});
if(!${'is_used_m31_argument'}->isValid()) return ${'is_used_m31_argument'}->getErrorMessage();
} else
${'is_used_m31_argument'} = NULL;if(${'is_used_m31_argument'} !== null) ${'is_used_m31_argument'}->setColumnType('char');
if(isset($args->extra_vars)) {
${'extra_vars32_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars32_argument'}->isValid()) return ${'extra_vars32_argument'}->getErrorMessage();
} else
${'extra_vars32_argument'} = NULL;if(${'extra_vars32_argument'} !== null) ${'extra_vars32_argument'}->setColumnType('text');

${'site_srl33_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl33_argument'}->checkNotNull();
${'site_srl33_argument'}->createConditionValue();
if(!${'site_srl33_argument'}->isValid()) return ${'site_srl33_argument'}->getErrorMessage();
if(${'site_srl33_argument'} !== null) ${'site_srl33_argument'}->setColumnType('number');

${'addon34_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon34_argument'}->checkNotNull();
${'addon34_argument'}->createConditionValue();
if(!${'addon34_argument'}->isValid()) return ${'addon34_argument'}->getErrorMessage();
if(${'addon34_argument'} !== null) ${'addon34_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`is_used`', ${'is_used30_argument'})
,new UpdateExpression('`is_used_m`', ${'is_used_m31_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars32_argument'})
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl33_argument,"equal")
,new ConditionWithArgument('`addon`',$addon34_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>