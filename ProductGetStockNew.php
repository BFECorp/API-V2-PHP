<?php

require "auth.php";

$request = array(
    'request' => array(
        'Token' => $token,
        'UserKey' => $user_key,
        'Warehouse' => 'None',
        'WarehouseNew' => 'US',
        'SKU' => 'testProduct',
    )
);

$result = $soap_client->ProductGetStockNew($request);
echo "<pre>";
print_r($request);
print_r($result);
echo "</pre>";
