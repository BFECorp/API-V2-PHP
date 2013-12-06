<?php

require 'auth.php';

$request = array
(
	'request' => array
	(
		'Token' => $token,	//系统验证字符串
		'UserKey' => $user_key,	//第三方验证字符串
		'ActionType' =>	'Submit',	//操作类型，可选值为Submit和Cancel
		'OrderSign' => 'ETST13121200023',	//单号，形如ETST12040600005
		'MessageID' => '347682M2CCO',	//客户请求号（可不填）
	)
);

echo "<pre>";
print_r($request);

$result = $soap_client->M2CCompleteOrder($request);

print_r($result);
echo "</pre>";
