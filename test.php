<?php
// параметры запроса
$data = array(
    'key'        => '2c12285bc124aa66708425cfc66de3c7', //Ваш секретный токен
    'status'     => '18',
    //'date_start' => '2020-09-18', //не обязятельно
    //'date_end'   => '2020-09-25', //не обязятельно
);

// запрос
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://megaslon.lp-crm.biz/api/getOrdersIdByStatus.html');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$out = curl_exec($curl);
curl_close($curl);
//$out – ответ сервера в формате JSON
$out = json_decode($out, true);

echo '<pre>';
var_dump($out);
echo '</pre>';













/*
// параметры запроса
$data = array(
    'key' => '2c12285bc124aa66708425cfc66de3c7', //Ваш секретный токен
);

// запрос
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://megaslon.lp-crm.biz/api/getStatuses.html');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$out = curl_exec($curl);
curl_close($curl);

var_dump(json_decode($out));
//$out – ответ сервера в формате JSON
*/