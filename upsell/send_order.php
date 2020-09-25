<?php
function sendOrder($order_id, $products_list, $name, $phone, $file){
    $products = urlencode(serialize($products_list));
    $sender = urlencode(serialize($_SERVER));
// параметры запроса
    $data = array(
        'key'             => '2c12285bc124aa66708425cfc66de3c7', //Ваш секретный токен
        'order_id'        => $order_id, //идентификатор (код) заказа (*автоматически*)
        'country'         => 'UA',                         // Географическое направление заказа
        'office'          => '1',                          // Офис (id в CRM)
        'products'        => $products,                    // массив с товарами в заказе
        'bayer_name'      => $name,            // покупатель (Ф.И.О)
        'phone'           => $phone,           // телефон
        'sender'          => $sender
    );

// запрос
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://megaslon.lp-crm.biz/api/addNewOrder.html');
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $out = curl_exec($curl);
    curl_close($curl);
    
    $out = json_decode($out, true);
    file_put_contents(__DIR__.'/orders/crm_out_log.txt', print_r($out, true));
    if(file_exists($file)){
        unlink($file);
    }
}

file_put_contents(__DIR__.'/orders/post_log.txt', print_r($_POST, true));
//Закоментить
$_SERVER['SERVER_ADDR'] = '176.9.76.79';
$_SERVER['REMOTE_ADDR'] = '176.9.76.79';
//Закоментить КОНЕЦ
$name = urldecode($_POST['name']);
$phone = urldecode($_POST['phone']);
$product_id = urldecode($_POST['product_id']);
$price = urldecode($_POST['price']);
$order_id = urldecode($_POST['order_id']);
$upsell = urldecode($_POST['upsell']);
$file = __DIR__.'/orders/'.$order_id.'.txt';
$sleep = 60;

if($upsell==0){
    //Запишем в файл данные о заказе
    $products_list = [];
    $products_list[] = array(
        'product_id' => $product_id,
        'price' => $price,
        'count' => '1'
    );
    
    file_put_contents($file, serialize($products_list));
    sleep($sleep);
    if(file_exists($file)){
        $products_list = file_get_contents($file);
        $products_list = unserialize($products_list);
        /*
        $products_list[] = array(
            'product_id' => 7,
            'price' => 249,
            'count' => '1'
        );
        */
    }
    sendOrder($order_id, $products_list, $name, $phone, $file);
}
else{
    $products_list = [];
    if(file_exists($file)){
        $products_list = file_get_contents($file);
        $products_list = unserialize($products_list);
        $products_list[] = array(
            'product_id' => $product_id,
            'price' => $price,
            'count' => '1'
        );
        file_put_contents($file, serialize($products_list));
    }else{
        $products_list[] = array(
            'product_id' => $product_id,
            'price' => $price,
            'count' => '1'
        );
        sendOrder($order_id, $products_list, $name, $phone, $file);
    }
}

?>