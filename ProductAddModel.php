<?php

require 'auth.php';

$request = array
(
	'request' => array
	(
		'Token' => $token,	//系统验证字符串
		'UserKey' => $user_key,	//第三方验证字符串
		'ModelDetail' => array
		(		
			'Category' => '3C',	//产品类别
			'Custom' => 'The New iPad.',	//客户参考号
			'DeclareName' => 'iPad',	//申报名称,可选
			'DeclareValue' => '499',	//申报价值（币种为USD），可选
			'Description' => '新iPad',	//产品描述，可选
			/* 包装规格  */
			'Packing' => array
						(
							'Length' => 35,	//长（单位：厘米）
							'Width' => 28,	//宽（单位：厘米）
							'Height' => 12,	//高（单位：厘米）
						),
			'ProductFlag' => 'Special',	//产品价值种类，Normal为一般产品，Special为特殊产品
			'Weight' => '400',
			'Warning' => '0',	//库存警报
			'SKU' => 'The New iPad1',	//产品名称
		)
	)
);

$result = $soap_client->ProductAddModel($request);
echo "<pre>";
print_r($result);
echo "</pre>";
