<?php

$api_address = 'http://demo.chukou1.cn/client/ws/v2.1/ck1.asmx?WSDL';
$token = '887E99B5F89BB18BEA12B204B620D236';
$user_key = 'wr5qjqh4gj';		//请在这里输入您的UserKey

$soap_client = new SoapClient($api_address);
echo "<h4>Current API address: $api_address!</h4>";
