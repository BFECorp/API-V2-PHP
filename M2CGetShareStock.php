<?php

require 'auth.php';

$request = array
(
	'request' => array
	(
		'Token' => $token,	//系统验证字符串
		'UserKey' => $user_key,	//第三方验证字符串
		'StorageNo' => 'LRMP00000002',
		'MessageID' => '28347982374M2CGSS',	//客户请求号（可不填）
	)
);

echo "<pre>";
print_r($request);

$result = $soap_client->M2CGetShareStock($request);

print_r($result);
echo "</pre>";
