<?php
/*
* Download and install a MySQL Cloud Drivers for create a odata server
* From: http://www.cdata.com/drivers/mysql/download/cloud/
*
* In Cloud Driver:
* - Configure the connection with mysql
* - Import de tables
* - Create a security authtoken
* - Change de Default Version to 2.0
* - Test the url for example: view-source:http://localhost:8065/api.rsc/@2r1K7w3d0Y2v0u2C5l1m
*
* By Silvio Garbes
*/
/**
Table MySQL Tested

database: teste

CREATE TABLE `tabela1` (
  `codigo` int(11) primary key NOT NULL,
  `nome` varchar(10) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

*/
$uri = "http://localhost:8065/api.rsc";
$token = "2r1K7w3d0Y2v0u2C5l1m";
$archiveProxy = "proxieMySQLEntities.php";

$command = "php -c ".php_ini_loaded_file()." ../PHPDataSvcUtil.php /uri=".$uri."/@".$token." /out=../".$archiveProxy.""; 
//echo $command;
echo exec($command);

?>