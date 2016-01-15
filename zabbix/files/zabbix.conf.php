<?php
// Zabbix GUI configuration file
global $DB;

$DB["TYPE"]                     = 'MYSQL';
$DB["SERVER"]                   = getenv('INFRA_ZABBIX_DB_PORT_3306_TCP_ADDR');
$DB["PORT"]                     = getenv('INFRA_ZABBIX_DB_PORT_3306_TCP_PORT');
$DB["DATABASE"]                 = 'zabbix';
$DB["USER"]                     = 'root';
$DB["PASSWORD"]                 = 'mypassword';
// SCHEMA is relevant only for IBM_DB2 database
$DB["SCHEMA"]                   = '';

$ZBX_SERVER                     = 'infra-zabbix-server';
$ZBX_SERVER_PORT                = getenv('INFRA_ZABBIX_SERVER_PORT_10051_TCP_PORT');
$ZBX_SERVER_NAME                = '';

$IMAGE_FORMAT_DEFAULT   = IMAGE_FORMAT_PNG;
?>

