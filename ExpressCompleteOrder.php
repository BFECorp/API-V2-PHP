<?php

require "auth.php";

$request = array(
	'request' => array(
		'Token' => $token,
		'UserKey' => $user_key,
		'MessageID' => '273643expCO',
		'ActionType' => 'Submit',       // 操作类型: 提审Submit 或者 删除Cancel
		'OrderSign' => 'STST13121100008' // 订单号
	)
);

$result = $soap_client->ExpressCompleteOrder($request);
echo "<pre>";
print_r($result);
echo "</pre>";
