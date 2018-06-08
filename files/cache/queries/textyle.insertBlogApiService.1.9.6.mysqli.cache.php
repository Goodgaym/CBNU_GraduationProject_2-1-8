<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertBlogApiService");
$query->setAction("insert");
$query->setPriority("");

${'textyle_blogapi_services_srl1_argument'} = new Argument('textyle_blogapi_services_srl', $args->{'textyle_blogapi_services_srl'});
${'textyle_blogapi_services_srl1_argument'}->checkNotNull();
if(!${'textyle_blogapi_services_srl1_argument'}->isValid()) return ${'textyle_blogapi_services_srl1_argument'}->getErrorMessage();
if(${'textyle_blogapi_services_srl1_argument'} !== null) ${'textyle_blogapi_services_srl1_argument'}->setColumnType('number');

${'service_name2_argument'} = new Argument('service_name', $args->{'service_name'});
${'service_name2_argument'}->checkNotNull();
if(!${'service_name2_argument'}->isValid()) return ${'service_name2_argument'}->getErrorMessage();
if(${'service_name2_argument'} !== null) ${'service_name2_argument'}->setColumnType('varchar');

${'api_type3_argument'} = new Argument('api_type', $args->{'api_type'});
${'api_type3_argument'}->checkNotNull();
if(!${'api_type3_argument'}->isValid()) return ${'api_type3_argument'}->getErrorMessage();
if(${'api_type3_argument'} !== null) ${'api_type3_argument'}->setColumnType('varchar');
if(isset($args->url_description)) {
${'url_description4_argument'} = new Argument('url_description', $args->{'url_description'});
if(!${'url_description4_argument'}->isValid()) return ${'url_description4_argument'}->getErrorMessage();
} else
${'url_description4_argument'} = NULL;if(${'url_description4_argument'} !== null) ${'url_description4_argument'}->setColumnType('varchar');
if(isset($args->id_description)) {
${'id_description5_argument'} = new Argument('id_description', $args->{'id_description'});
if(!${'id_description5_argument'}->isValid()) return ${'id_description5_argument'}->getErrorMessage();
} else
${'id_description5_argument'} = NULL;if(${'id_description5_argument'} !== null) ${'id_description5_argument'}->setColumnType('varchar');
if(isset($args->password_description)) {
${'password_description6_argument'} = new Argument('password_description', $args->{'password_description'});
if(!${'password_description6_argument'}->isValid()) return ${'password_description6_argument'}->getErrorMessage();
} else
${'password_description6_argument'} = NULL;if(${'password_description6_argument'} !== null) ${'password_description6_argument'}->setColumnType('varchar');
if(isset($args->list_order)) {
${'list_order7_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order7_argument'}->isValid()) return ${'list_order7_argument'}->getErrorMessage();
} else
${'list_order7_argument'} = NULL;if(${'list_order7_argument'} !== null) ${'list_order7_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`textyle_blogapi_services_srl`', ${'textyle_blogapi_services_srl1_argument'})
,new InsertExpression('`service_name`', ${'service_name2_argument'})
,new InsertExpression('`api_type`', ${'api_type3_argument'})
,new InsertExpression('`url_description`', ${'url_description4_argument'})
,new InsertExpression('`id_description`', ${'id_description5_argument'})
,new InsertExpression('`password_description`', ${'password_description6_argument'})
,new InsertExpression('`list_order`', ${'list_order7_argument'})
));
$query->setTables(array(
new Table('`xe_textyle_blogapi_services`', '`textyle_blogapi_services`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>