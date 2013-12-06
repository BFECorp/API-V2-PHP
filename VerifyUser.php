<?php

require 'auth.php';

$request = array
(
	'request' => array
	(
		'Token' => $token,	//系统验证字符串
		'UserID' => 'guest',	//用户登录系统所用的账号
		'UserKey' => $user_key,	//第三方验证字符串
		//'MessageID' => '1323748018',	//客户请求号（可不填）
	)
);

$result = $soap_client->VerifyUser($request);
echo "<pre>";
print_r($result);
echo "</pre>";
