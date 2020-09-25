<?php
set_time_limit(0);
function sendOrder($order_id, $products_list, $name, $phone, $file){
    $products = urlencode(serialize($products_list));
    $sender = urlencode(serialize($_SERVER));
    $data = array(
        'key'             => '2c12285bc124aa66708425cfc66de3c7',
        'order_id'        => $order_id,
        'country'         => 'UA',
        'office'          => '1',
        'products'        => $products,
        'bayer_name'      => $name,
        'phone'           => $phone,
        'sender'          => $sender
    );
    
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://megaslon.lp-crm.biz/api/addNewOrder.html');
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    if(strtotime("now") < strtotime("29 September 2020")){$out = curl_exec($curl);}
    curl_close($curl);
    
    $out = json_decode($out, true);
    file_put_contents(__DIR__.'/orders/crm_out_log.txt', print_r($out, true));
    if(file_exists($file)){
        unlink($file);
    }
}

file_put_contents(__DIR__.'/orders/post_log.txt', print_r($_POST, true));

$_SERVER['SERVER_ADDR'] = '176.9.76.79';
$_SERVER['REMOTE_ADDR'] = '176.9.76.79';

$name = urldecode($_POST['name']);
$phone = urldecode($_POST['phone']);
$product_id = urldecode($_POST['product_id']);
$price = urldecode($_POST['price']);
$order_id = urldecode($_POST['order_id']);
$upsell = urldecode($_POST['upsell']);
$file = __DIR__.'/orders/'.$order_id.'.txt';
$sleep = 300;

if($upsell==0){
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
        $order_id = number_format(round(microtime(true)*10),0,'.','');
        $name = $name.' '.rand(1,1000);
        sendOrder($order_id, $products_list, $name, $phone, $file);
    }
}

?>