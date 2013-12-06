<?php

require 'auth.php';

$request = array
(
	'request' => array
	(
		'Token' => $token,	//系统验证字符串
		'UserKey' => $user_key,	//第三方验证字符串
        'SKU' => 'The New iPad1',	//产品名称
	)
);

$result = $soap_client->ProductGetModel($request);
echo "<pre>";
print_r($result);
echo "</pre>";
