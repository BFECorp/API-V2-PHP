<?php
//OutStoreGetOrder API
//用户通过调用该方法查询出指定的出库单信息
//

require 'auth.php';

$request = array
(
	'request' => array
	(
		'Token' => $token,	//系统验证字符串
		'UserKey' => $user_key,	//第三方验证字符串
		//'CustomUserKey' => '', //第三方自定义验证字符串
		'OrderSign' => 'ETST15011600005',	//出库单号
		'MessageID' => '73839outstoreGO',	//客户请求号（可不填）
		'Version' => 'V2.1',
	)
);

$result = $soap_client->OutStoreGetOrder($request);
echo "<pre>";
print_r($result);
echo "</pre>";
