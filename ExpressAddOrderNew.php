<?php

require "auth.php";

$request = array(
	'request' => array(
		'Token' => $token,
		'UserKey' => $user_key,
		'MessageID' => '273643expAO',
        'ExpressTypeNew' => 'HKD',
		'OrderDetail' => array(
            'ExpressType' => 'UNKNOWN',
			//'Remark' => 'test Express order add',
			'IsTracking' => FALSE,
			'Location' => 'GZ', // 处理点: 广州'GZ', 深圳'SZ' 上海'SH'
			'PickupType' => 0,
			'PackageList' => array(
				'0' => array(
					//'Custom' => 'test customT1008-2-T02',
					'ProductList' => array
					(
						'0' => array
						(
							'Quantity' => '1',
							'SKU' => 'T1008-2-T02',
							//'StorageNo' => 'ATST00000213',
							'DeclareValue' => '15.00',
                            'Weight' => 344,
							'CustomsTitleEN' => 'test title',
						)
					),
					'Remark' => 'T1008-2-T02',
					'Weight' => 145,
					'ClientOrderSn' => 'testid',
					'ClientPackageId' => '78237xdjj',
					'Packing' => array
                    (
                        'Length' => '1',
                        'Width' => '1',
                        'Height' => '1',
                    ),
					'ShipToAddress' => array
					(
						'City' => '-',
						'Contact' => 'Elizabeth  Pardo',
						'Country' => 'US',
						'Email' => '',
						'Phone' => '07970134460',
						'PostCode' => '901065',
						'Province' => 'NSW',
						'Street1' => '48 Cartwright Gardens',
						'Street2' => ''
					),
                ),
				'1' => array(
					'Custom' => 'test customT1008-2-T02',
					'ProductList' => array
					(
						'0' => array
						(
							'Quantity' => '1',
							'SKU' => 'T1008-2-T02',
							//'StorageNo' => 'ATST00000213',
							'DeclareValue' => '5.00',
                            'Weight' => 500,
							'CustomsTitleEN' => 'newTitle',
						)
					),
					//'Remark' => 'T1008-2-T02',
					'Weight' => 345,
					//'ClientOrderSn' => 'testid', // Required for 俄罗斯服务如CRS等
					'ClientPackageId' => '78237xdkl',
					'Packing' => array
                    (
                        'Length' => '10',
                        'Width' => '10',
                        'Height' => '10',
                    ),
					'ShipToAddress' => array
					(
						'City' => 'London',
						'Contact' => 'Elizabeth  Pardo',
						'Country' => 'US',
						'Email' => '',
						'Phone' => '07970134460',
						'PostCode' => '141342',
						'Province' => 'NSW',
						'Street1' => '48 Cartwright Gardens',
						'Street2' => ''
					),
                ),
			)
		),
		'Submit' => True
	)
);

$result = $soap_client->ExpressAddOrderNew($request);
echo "<pre>";
print_r($result);
echo "</pre>";
