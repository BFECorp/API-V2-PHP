<?php

require 'auth.php';

$request = array
    (
        'request' => array
        (
            'Token' => $token,	//系统验证字符串
            'UserKey' => $user_key,	//第三方验证字符串
            'MessageID' => '132374outAO',	//客户请求号（可选项）
            'Submit' => false,		//是否提审，是则为true，否则为false
            /* 出库单详细信息 */
            'OrderDetailNew' => array
            (
                //'Remark' => 'oo test',	//备注信息
                'WarehouseNew' => 'UK',
                'Warehouse' => 'None',
                /* 包裹列表 */
                'PackageListNew' => array	
                (
                    '0' => array
                    (
                        'Custom' => 'P122130ForPackage0',	//客户参考号
                        'Remark' => 'Remark API test',		//备注信息
                        'Shipping' => 'None',               //填None即可
                        'ShippingV2_1' => 'None',           //填None即可
                        'ShippingNew' => 'UKRLS',
                        'ClientPackageId' => '67896786786',
						//'IsInsured' => True,	//是否保价，只有挂号的包裹才可以进行保价
						//'InsuredRate' => '2.2',  //保价系数，支持小数点后1位，基数为申报价值，数值范围是1.0-3.0，详细保价条款请与业务人员了解
                        /* 产品信息列表 */
                        'ProductList' => array
                        (
                            '0' => array
                            (
                                'Quantity' => '1',	//产品数量
                                'SKU' => 'icndiddkdl',	//产品名称
                                'StorageNo' => 'ETST00001391',	//库存编码
                                'DeclareName' => 'electronic accessories', //申报名称
                                'DeclareValue' => '10',  //申报价值

                            ),
                        ),
                        /* 送货地址 */
                        'ShipToAddress' => array
                        (
                            'Company' => 'ssfes',
                            'City' => 'St. Leonard\'s-On-Sea',	//城市	
                            'Contact' => 'Jennifer Snelling',		//联系人
                            'Country' => 'GB',	//国家
                            'Email' => 'mario@mkkm.org',	//电子邮箱
                            'Phone' => '01424 425635',	//手机
                            'PostCode' => 'TN38 9DE',	//邮政编码,对格式有验证，必须为真实的邮政编码！
                            'Province' => 'East Sussex',	//省份
                            'Street1' => '83 Bevin Court',	//街道1
                            'Street2' => 'Stonehouse Drive'		//街道2
                        ),
                        'BuyerID' => 'jennifers2984',
                    ),
                    '1' => array
                    (
                        'Custom' => 'P122130ForPackage1',	//客户参考号
                        //'Sign' => '123',		//数据库其字段名为package_sign
                        'Remark' => 'Remark API test',		//备注信息
                        'Shipping' => 'None',
                        'ShippingV2_1' => 'None',
                        'ShippingNew' => 'UKRLS',
                        'ClientPackageId' => 'abc7328de',
						//'IsInsured' => True,	//是否保价，只有挂号的包裹才可以进行保价
						//'InsuredRate' => '1.1',  //保价系数，支持小数点后1位，基数为申报价值，数值范围是1.0-3.0，详细保价条款请与业务人员了解
                        /* 产品信息列表 */
                        'ProductList' => array
                        (
                            '0' => array
                            (
                                'Quantity' => '1',	//产品数量
                                'SKU' => 'skdfjksdfjskdj',	//产品名称
                                'StorageNo' => 'ETST00001390',	//库存编码
                                'DeclareName' => 'electronic accessories', //申报名称
                                'DeclareValue' => '10',  //申报价值

                            ),
                        ),
                        /* 送货地址 */
                        'ShipToAddress' => array
                        (
                            'Company' => 'ssfes',
                            'City' => 'St. Leonard\'s-On-Sea',	//城市	
                            'Contact' => 'Jennifer Snelling',		//联系人
                            'Country' => 'GB',	//国家
                            'Email' => 'mario@mkkm.org',	//电子邮箱
                            'Phone' => '01424 425635',	//手机
                            'PostCode' => 'TN38 9DE',	//邮政编码,对格式有验证，必须为真实的邮政编码！
                            'Province' => 'East Sussex',	//省份
                            'Street1' => '83 Bevin Court',	//街道1
                            'Street2' => 'Stonehouse Drive'		//街道2
                        ),
                        'BuyerID' => 'jennifers2984',
                    )
                ),
            ),
        )
    );

$result = $soap_client->OutStoreAddOrderNew($request);
echo "<pre>";
print_r($result);
echo "</pre>";
