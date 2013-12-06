<?php

require 'auth.php';

$request = array
(
	'request' => array
	(
		'Token' => $token,	//系统验证字符串
		'UserKey' => $user_key,	//第三方验证字符串
		'OrderSign' => 'ETST13121200023',	//出库单号
		'MessageID' => '73839M2CGO',	//客户请求号（可不填）
	)
);

echo "<pre>";
print_r($request);

$result = $soap_client->M2CGetOrder($request);

print_r($result);
echo "</pre>";
