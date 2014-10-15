<?php

require 'auth.php';

$request = array
(
	'request' => array
	(
		'Token' => $token,	//系统验证字符串
		'UserKey' => $user_key,	//第三方验证字符串
		'Submit' => false,		//为True则直接提审
		/* 入库单详细信息 */
		'OrderDetail' => array
		(
			'Remark' => '易燃物',	//入库单备注信息
            'State' => 'Initial',
			/* 这三项的设置与物流计划有关  */
			'Location' => 'None',	//默认
			'WarehouseNew' => 'AU',	//处理仓库代码，枚举类型,取值范围为US（美国）、AU（澳大利亚）、UK（英国）、MA（曼城）
			'LocationNew' => 'GZ',	//出口易处理点，可选值有三个，分别是GZ（广州）、SZ（深圳）、SH（上海）
			'Warehouse' => 'None',	//默认
			'ShippingMethod' => 'BFE',	//默认
			'ShippingMethodNew' =>	'DHL',	//物流方式,可选值为AIR(空运)/SEA(海运)/EMS(中国邮政速递物流)/DHL(中外运敦豪国际航空快递有限公司)/UPS(美国邮政)		
			/* 这三项的设置与物流计划有关 */
			'PickupType' => 1,	//收货方式，0:上门揽收，1:自送货
			'Remark' => 'API V2.0 PHP 测试',	//备注信息
			'ArriveTime' => '2013-12-25',	//交货日期
			'IsInsured' => TRUE,	//是否保价，只有挂号的包裹才可以进行保价
			'InsuredRate' => '1.1',  //保价系数，支持小数点后1位，基数为申报价值，数值范围是1.0-3.0，详细保价条款请与业务人员了解
			/* 装箱清单 */
			'CaseList' => array
			(				
				 array
				(
					'CaseNo' => 1,		//序列号
					'State' => 'Sutmitted',
					'Weight' => 10, //包裹重量					
					/* 包装规格  */
					'Packing' => array
								(
									'Length' => 10,	//长（单位：厘米）
									'Width' => 10,	//宽（单位：厘米）
									'Height' => 10,	//高（单位：厘米）
								),
					/* 产品列表 */
					'ProductList' => array
					(
						'0' => array
						(
							'Quantity' => '100',	//产品名称
							'SKU' => 'iphone 4S',	//产品编号
							'DeclaredName' => 'desire',	//申报名称
							'DeclaredValue' => 100,	//申报价值	
						),
						'1' => array
						(
							'Quantity' => '5',	//产品数量
							'SKU' => 'duck',	//产品编号
							'DeclaredName' => 'defy',	//申报名称
							'DeclaredValue' => 260,	//申报价值	
						),
					),
				),
				 array
				(
					'CaseNo' => 22,		//序列号
					'State' => 'Sutmitted',//订单状态，枚举类型，取值范围为Initial（初始订单）、Sutmitted（已提交）
					'Weight' => 11.2, //包裹重量					
					/* 包装规格  */
					'Packing' => array
								(
									'Length' => 0,	//长（单位：厘米）
									'Width' => 0,	//宽（单位：厘米）
									'Height' => 0,	//高（单位：厘米）
								),
					/* 产品列表 */
					'ProductList' => array
					(
						'0' => array
						(
							'Quantity' => '100',	//产品名称
							'SKU' => 'iphone 4S',	//产品编号
							'DeclaredName' => 'desire',	//申报名称
							'DeclaredValue' => 100,	//申报价值	
						),
						'1' => array
						(
							'Quantity' => '5',	//产品数量
							'SKU' => 'duck',	//产品编号
							'DeclaredName' => 'defy',	//申报名称
							'DeclaredValue' => 260,	//申报价值	
						),
					),
				),
			),
		),
	),
);

try
{
	$result = $soap_client->InStoreAddOrderNew($request);		//用户通过调用该方法添加入库单，添加成功返回入库订单号
}
catch(exception $e)
{
	echo $e;
}
echo "<pre>";
print_r($result);
echo "</pre>";
