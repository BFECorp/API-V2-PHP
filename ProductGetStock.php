<?php

require "auth.php";

$request = array(
    'request' => array(
        'Token' => $token,
        'UserKey' => $user_key,
        'Warehouse' => 'US',
        'SKU' => 'racheltest1',
    )
);

$result = $soap_client->ProductGetStock($request);
echo "<pre>";
print_r($request);
print_r($result);
echo "</pre>";
