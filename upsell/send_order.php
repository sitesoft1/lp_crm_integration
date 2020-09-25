<?php
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
$file = __DIR__.'/orders/'.$order_id.'.txt';

//Запишем в файл данные о заказе
$products_list = [];
$products_list[] = array(
    'product_id' => $product_id,
    'price' => $price,
    'count' => '1'
);

file_put_contents($file, serialize($products_list));
sleep(60);
$products_list = file_get_contents($file);
$products_list = unserialize($products_list);
$products_list[] = array(
    'product_id' => 7,
    'price' => 249,
    'count' => '1'
);
//Запишем в файл данные о заказе

/* Отправляем заказ в LP CRM ############################################ */
//***************** Страница с завершением заказа ******************
// формируем массив с товарами в заказе (если товар один - оставляйте только первый элемент массива)
/*
$products_list = array(
    0 => array(
        'product_id' => $product_id,    //29 код товара (из каталога CRM)
        'price'      => $price, //цена товара 1
        'count'      => '1',                     //количество товара 1
    ),
    
    1 => array(
        'product_id' => $_REQUEST['product_id'],    //код товара 2 (из каталога CRM)
        'price'      => $_REQUEST['product_price'], //цена товара 2
        'count'      => '1',                     //количество товара 2
        // если есть смежные товары, тогда количество общего товара игнорируется
        'subs'       => array(
            0  => array(
                'sub_id' => $_REQUEST['product_id'],
                'count'  => '1'
            ),
            1  => array(
                'sub_id' => $_REQUEST['product_id'],
                'count'  => '1'
            )
        )
    )
    
);
*/
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
    //'email'           => 'sitesoft1@gmail.com',           // электронка
    'sender'          => $sender
    //'comment'         => $_REQUEST['product_name'],    // комментарий
    // 'delivery'        => $_REQUEST['delivery'],        // способ доставки (id в CRM)
    //'delivery_adress' => $_REQUEST['delivery_adress'], // адрес доставки
    //'payment'         => '',                           // вариант оплаты (id в CRM)
    //'utm_source'      => $_SESSION['utms']['utm_source'],  // utm_source
    //'utm_medium'      => $_SESSION['utms']['utm_medium'],  // utm_medium
    //'utm_term'        => $_SESSION['utms']['utm_term'],    // utm_term
    //'utm_content'     => $_SESSION['utms']['utm_content'], // utm_content
    //'utm_campaign'    => $_SESSION['utms']['utm_campaign'],// utm_campaign
    //'additional_1'    => '',                               // Дополнительное поле 1
    //'additional_2'    => '',                               // Дополнительное поле 2
    //'additional_3'    => '',                               // Дополнительное поле 3
    //'additional_4'    => ''                                // Дополнительное поле 4
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
/*
echo '<pre>';
var_dump($_SERVER);
echo '</pre>';
*/
/* Отправляем заказ в LP CRM КОНЕЦ ############################################ */
?>