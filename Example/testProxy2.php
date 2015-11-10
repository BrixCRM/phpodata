<?php
/*
* By Silvio Garbes
* Em: 10/11/2015
*/
require_once '../proxieMySQLEntities.php';


try{
	$proxy = new CData();
	$response = $proxy->Execute("tabela1"); 
	foreach($response->Result as $customer) 
	{ 
	    print_r($customer);
	}
} catch (Exception $e) {    //catch errors from the Cloud Driver for MySQL
	echo $e->getError(), "\n";
}

?>