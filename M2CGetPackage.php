<?php

require 'auth.php';

$request = array
(
	'request' => array
	(
		'Token' => $token,	//系统验证字符串
		'UserKey' => $user_key,	//第三方验证字符串
		'Sign' => 'LTL131212TST000027',
		'Warehouse' => 'UK',
		'MessageID' => '3493849M2CGP',	//客户请求号（可不填）
	)
);

echo "<pre>";
print_r($request);

$result = $soap_client->M2CGetPackage($request);

print_r($result);
echo "</pre>";
