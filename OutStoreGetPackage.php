<?php
//OutStoreGetPackage API
//  用户通过调用该方法获取出库包裹(发多件产品)
//

require 'auth.php';

$request = array
(
	'request' => array
	(
		'Token' => $token,	//系统验证字符串
		'UserKey' => $user_key,	//第三方验证字符串
		//'CustomUserKey' => '', //第三方自定义验证字符串
		//'Sign' => 'ETE131211TST000002',
		//'Custom' => 'Custom0003',	//客户自定义号
		'RefNo' => 'RefNo0001',	//第三方单号
		//'MessageID' => '3493849outstoreGP',	//客户请求号（可不填）
		//'Version' => 'V2.0',
	)
);

$result = $soap_client->OutStoreGetPackage($request);
echo "<pre>";
print_r($result);
echo "</pre>";
?>
