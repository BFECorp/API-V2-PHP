<?php

require "auth.php";

$request = array(
    'request' => array(
        'Token' => $token,
        'UserKey' => $user_key,
        'Custom' => '',      //客户参考号
        'ItemSign' => 'HTM121015TST000041',
        'OrderType' => 'Express',  // 订单类型可选'Express'或'OutStore'
        'MessageID' => '374298tracking',
    )
);

echo "<pre>";
print_r($request);

$result = $soap_client->GetTracking($request);

print_r($result);
echo "</pre>";
