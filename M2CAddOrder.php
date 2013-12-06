<?php

require 'auth.php';

$request = array
(
	'request' => array
	(
		'Token' => $token,	//系统验证字符串
		'UserKey' => $user_key,	//第三方验证字符串
		'MessageID' => '34837489M2CAO',	//客户请求号（可选项）
		'Submit' => FALSE,		//是否提审，是则为true，否则为false
		'Version' => 'V2.1',	//（可选项）
		/* 出库单详细信息 */
		'OrderDetail' => array
		(
			//'Remark' => 'm2c order test',	//出库单备注信息
			'State' => 'Submitted',
			'Warehouse' => 'US',
			/* 装箱清单 */
			'PackageList' => array(	
				'0' => array(
					//'Custom' => 'test Custom XS1112003251',	//客户参考号
					//'Remark' => 'API test',		//选填备注信息
					'Shipping' => 'None',	//这里填None即可
					'ShippingV2_1' => 'USRUS',
                    /* 产品信息列表 */
					'ProductList' => array
					(
						'0' => array
						(
							'Quantity' => '1',	//产品数量
							'StorageNo' => 'LRMP00000002',	//产品名称
							//'DeclareName' => 'GB9210', //申报名称
                            //'DeclareValue' => '50',  //申报价值
						),
					),
					/* 送货地址 */
					'ShipToAddress' => array
					(
						'Company' => 'ssfes',
						'City' => 'Sydney',	//城市	
						'Contact' => 'Claudia Kim',		//联系人
						'Country' => 'US',	//国家
						'Email' => 'mario@mkkm.org',	//电子邮箱
						'Phone' => '',	//手机
						'PostCode' => '92281',	//邮政编码,对格式有验证，必须为真实的邮政编码！
						'Province' => 'CA',	//省份
						'Street1' => 'Murtzaner Ring 29',	//街道1
						'Street2' => 'Cornelia Walther'		//街道2 , ,  , Germany
					),
				)
			),
		),
	)
);

echo "<pre>";
print_r($request);

$result = $soap_client->M2CAddOrder($request);

print_r($result);
echo "</pre>";
