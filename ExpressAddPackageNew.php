<?php

require "auth.php";

$request = array(
	'request' => array(
		'Token' => $token,
		'UserKey' => $user_key,
		'MessageID' => '273643expAP',
        'ExpressType' => 'UNKNOWN',
        'ExpressTypeNew' => 'HTM',
        'IsTracking' => False,
        'Location' => 'SH',
        'PickupType' => 0,  // 填0即可
        'PackageDetail' => array(
            'Custom' => 'Custom0003',   //客户参考号
            'RefNo' => 'RefNo0003',
            'CheckRepeatRefNo' => 'True',
            'ProductList' => array
            (
                array
                (
                    'Quantity' => '1',
                    'SKU' => 'shouji1025',
                    //'StorageNo' => 'GZ STOCK',
                    'DeclareValue' => '5.00',
                    'Weight' => 1000,
                    'CustomsTitleEN' => 'CARB1',
                ),
                array
                (
                    'Quantity' => '2',
                    'SKU' => 'ttt2342',
                    //'StorageNo' => 'GZ STOCK',
                    'DeclareValue' => '4.00',
                    'Weight' => 401,
                    'CustomsTitleEN' => 'CARB',
                )
            ),
            'Remark' => 'A1082-R02sldkfj',
            'Weight' => 0,
            //'ClientOrderSn' => 'testid2390', // Required for 俄罗斯服务如CRS等
            'Packing' => array
            (
                'Length' => '10',
                'Width' => '10',
                'Height' => '10',
            ),
            'ShipToAddress' => array
            (
                'City' => 'Sydney',
                'Contact' => 'Raio Bnster',
                'Country' => 'RU',
                'Email' => 'mario@mkkm.org',
                'Phone' => '(061)97694436',
                'PostCode' => '143913',
                'Province' => 'NSW',
                'Street1' => '55-59 Boxhill Rd',
                'Street2' => ''
            ),
            'Status' => 'Initial'
        )
	)
);

$result = $soap_client->ExpressAddPackageNew($request);
echo "<pre>";
print_r($result);
echo "</pre>";

