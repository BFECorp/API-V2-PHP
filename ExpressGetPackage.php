<?php

require 'auth.php';

$request = array
(
	'request' => array
	(
		'Token' => $token,	//系统验证字符串
		'UserKey' => $user_key,	//第三方验证字符串
		//'ItemSign' => 'HTM131211TST000003',	//包裹处理号
		//'Custom' => 'Custom0003',	//客户自定义号
		'RefNo' => 'RefNo0003',	//第三方单号
		//'MessageID' => '83478321expressGP',	//客户请求号（可不填）
	)
);

$result = $soap_client->ExpressGetPackage($request);
echo "<pre>";
print_r($result);
echo "</pre>";
