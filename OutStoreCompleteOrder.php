<?php

require 'auth.php';

$request = array
(
	'request' => array
	(
		'Token' => $token,	//系统验证字符串
		'UserKey' => $user_key,	//第三方验证字符串
		'ActionType' =>	'Submit',	//操作类型，可选值为Submit和Cancel
		'OrderSign' => 'ETST13121100005',	//出库单单号，形如ETST12040600005
		'MessageID' => '383278outstoreCO',	//客户请求号（可不填）
	)
);

$result = $soap_client->OutStoreCompleteOrder($request);
echo "<pre>";
print_r($result);
echo "</pre>";
