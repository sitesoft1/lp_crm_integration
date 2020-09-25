<?php 
$site = $_SERVER['HTTP_HOST'];
$utm_link = $_SERVER['HTTP_REFERER'];
 
if (!empty($_POST['upsell'])) {$upsell = htmlspecialchars($_POST['upsell']); }
if (!empty($_POST['name'])) {$name = htmlspecialchars($_POST['name']);} 
if (!empty($_POST['phone'])) {$phone = htmlspecialchars($_POST['phone']);}   

$address  = 'ilona.kurdogly.95@gmail.com';
$mes = "Тема: Заказ ".$_SERVER['HTTP_HOST']."!\nИмя: $name\nТелефон: $phone\nПродукт: $upsell\nСсылка: $utm_link\nIP: ".$_SERVER['REMOTE_ADDR'];   
$sub="Заказ $site"; 
$email='admin@'.$_SERVER['HTTP_HOST']; 
$send = mail($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");  
?> 
