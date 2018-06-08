<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertCategory");
$query->setAction("insert");
$query->setPriority("");

${'category_srl41_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl41_argument'}->checkFilter('number');
${'category_srl41_argument'}->checkNotNull();
if(!${'category_srl41_argument'}->isValid()) return ${'category_srl41_argument'}->getErrorMessage();
if(${'category_srl41_argument'} !== null) ${'category_srl41_argument'}->setColumnType('number');

${'module_srl42_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl42_argument'}->checkFilter('number');
${'module_srl42_argument'}->ensureDefaultValue('0');
${'module_srl42_argument'}->checkNotNull();
if(!${'module_srl42_argument'}->isValid()) return ${'module_srl42_argument'}->getErrorMessage();
if(${'module_srl42_argument'} !== null) ${'module_srl42_argument'}->setColumnType('number');

${'title43_argument'} = new Argument('title', $args->{'title'});
${'title43_argument'}->checkNotNull();
if(!${'title43_argument'}->isValid()) return ${'title43_argument'}->getErrorMessage();
if(${'title43_argument'} !== null) ${'title43_argument'}->setColumnType('varchar');
if(isset($args->description)) {
${'description44_argument'} = new Argument('description', $args->{'description'});
if(!${'description44_argument'}->isValid()) return ${'description44_argument'}->getErrorMessage();
} else
${'description44_argument'} = NULL;if(${'description44_argument'} !== null) ${'description44_argument'}->setColumnType('varchar');

${'document_count45_argument'} = new Argument('document_count', $args->{'document_count'});
${'document_count45_argument'}->ensureDefaultValue('0');
if(!${'document_count45_argument'}->isValid()) return ${'document_count45_argument'}->getErrorMessage();
if(${'document_count45_argument'} !== null) ${'document_count45_argument'}->setColumnType('number');

${'regdate46_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate46_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate46_argument'}->isValid()) return ${'regdate46_argument'}->getErrorMessage();
if(${'regdate46_argument'} !== null) ${'regdate46_argument'}->setColumnType('date');
if(isset($args->expand)) {
${'expand47_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand47_argument'}->isValid()) return ${'expand47_argument'}->getErrorMessage();
} else
${'expand47_argument'} = NULL;if(${'expand47_argument'} !== null) ${'expand47_argument'}->setColumnType('char');

${'parent_srl48_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl48_argument'}->checkFilter('number');
${'parent_srl48_argument'}->ensureDefaultValue('0');
if(!${'parent_srl48_argument'}->isValid()) return ${'parent_srl48_argument'}->getErrorMessage();
if(${'parent_srl48_argument'} !== null) ${'parent_srl48_argument'}->setColumnType('number');
if(isset($args->group_srls)) {
${'group_srls49_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls49_argument'}->isValid()) return ${'group_srls49_argument'}->getErrorMessage();
} else
${'group_srls49_argument'} = NULL;if(${'group_srls49_argument'} !== null) ${'group_srls49_argument'}->setColumnType('text');

${'last_update50_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update50_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update50_argument'}->isValid()) return ${'last_update50_argument'}->getErrorMessage();
if(${'last_update50_argument'} !== null) ${'last_update50_argument'}->setColumnType('date');

${'list_order51_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order51_argument'}->ensureDefaultValue('0');
if(!${'list_order51_argument'}->isValid()) return ${'list_order51_argument'}->getErrorMessage();
if(${'list_order51_argument'} !== null) ${'list_order51_argument'}->setColumnType('number');
if(isset($args->color)) {
${'color52_argument'} = new Argument('color', $args->{'color'});
if(!${'color52_argument'}->isValid()) return ${'color52_argument'}->getErrorMessage();
} else
${'color52_argument'} = NULL;if(${'color52_argument'} !== null) ${'color52_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`category_srl`', ${'category_srl41_argument'})
,new InsertExpression('`module_srl`', ${'module_srl42_argument'})
,new InsertExpression('`title`', ${'title43_argument'})
,new InsertExpression('`description`', ${'description44_argument'})
,new InsertExpression('`document_count`', ${'document_count45_argument'})
,new InsertExpression('`regdate`', ${'regdate46_argument'})
,new InsertExpression('`expand`', ${'expand47_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl48_argument'})
,new InsertExpression('`group_srls`', ${'group_srls49_argument'})
,new InsertExpression('`last_update`', ${'last_update50_argument'})
,new InsertExpression('`list_order`', ${'list_order51_argument'})
,new InsertExpression('`color`', ${'color52_argument'})
));
$query->setTables(array(
new Table('`xe_document_categories`', '`document_categories`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>