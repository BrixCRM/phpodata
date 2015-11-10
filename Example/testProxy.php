<?php
/*
* By Silvio Garbes
* Em: 10/11/2015
*/
require_once "../proxieNorthwind.php"; 

$proxy = new NorthwindEntities(); 
$response = $proxy->Execute("Customers"); 
foreach($response->Result as $customer) 
{ 
    echo $customer->CompanyName.": ".$customer->ContactName."</br>"; 
}

$response = $proxy->Customers() 
                        ->Filter("CustomerID eq 'ALFKI'") 
                        ->Expand('Orders') 
                        ->Execute(); 
$customer = $response->Result[0]; 
echo count($customer->Orders);


?>