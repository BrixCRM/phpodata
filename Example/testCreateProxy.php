<?php
/*
* By Silvio Garbes
* Em: 10/11/2015
*/
$uri = "http://services.odata.org/Northwind/Northwind.svc";
$archiveProxy = "proxieNorthwind.php";

$command = "php -c ".php_ini_loaded_file()." ../PHPDataSvcUtil.php /uri=".$uri." /out=../".$archiveProxy.""; 
//echo $command;
echo exec($command);

?>