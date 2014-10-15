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
		'Sign' => 'ETE131211TST000002',
		'MessageID' => '3493849outstoreGP',	//客户请求号（可不填）
		//'Version' => 'V2.1',
	)
);

$result = $soap_client->OutStoreGetPackageNew($request);
echo "<pre>";
print_r($result);
echo "</pre>";
?>
