<?php

require 'auth.php';

$request = array
(
	'request' => array
	(
		'Token' => $token,	//系统验证字符串
		'UserKey' => $user_key,	//第三方验证字符串
		'ActionType' =>	'Submit',	//操作类型，可选值为Submit（目标入库单的当前状态必须为“初始”）和Cancel（目标入库单的当前状态必须为“提审”）
		'OrderSign' => 'ITST13121100001',	//入库单单号，形如ITST12041300001
		'MessageID' => 'instoreCO1323748018',	//客户请求号（可不填）
	)
);

$result = $soap_client->InStoreCompleteOrder($request);
echo "<pre>";
print_r($result);
echo "</pre>";
