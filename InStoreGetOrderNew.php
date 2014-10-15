<?php

require 'auth.php';

$request = array
(
	'request' => array
	(
		'Token' => $token,	//系统验证字符串
		'UserKey' => $user_key,	//第三方验证字符串
		'OrderSign' => 'ITST13121100001',	//入库单单号，形如ITST12041300001
		'MessageID' => '234782187instoreGO',	//客户请求号（可不填）
	)
);

echo "<pre>";
print_r($request);

try
{
	$result = $soap_client->InStoreGetOrderNew($request);
}
catch(exception $e)
{
	echo $e;
}
print_r($result);
echo "</pre>";
