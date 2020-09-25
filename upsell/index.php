<?php
header('Content-Type: text/html; charset=utf8');
$order_id = number_format(round(microtime(true)*10),0,'.','');
$site = $_SERVER['HTTP_HOST'];
$utm_link = $_SERVER['HTTP_REFERER'];

$url = file_get_contents('php://input');

$name = urldecode($_POST['name']);
$phone = urldecode($_POST['phone']);


$address  = 'ilona.kurdogly.95@gmail.com';
$mes = "Заявка ".$_SERVER['HTTP_HOST']."!\nИмя: $name\nТелефон: $phone\nСсылка: $utm_link\nIP: ".$_SERVER['REMOTE_ADDR'];   
$sub="Заказ $site"; 
$email='admin@'.$_SERVER['HTTP_HOST']; 
$send = mail($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
?> 


<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Спецпредложение от нашего интернет-магазина, товары по супер цене!</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link type="image/x-icon" rel="icon" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/favicon.ico">
		<link type="image/x-icon" rel="shortcut icon" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/favicon.ico">
		<link type="text/css" rel="stylesheet" href="upsell.css">
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="upsell.js?2"></script>
	    <script src="send/timer.min.js"></script><link href="css" rel="stylesheet" type="text/css">





		
		</head>
	<body class="man">

    <script>
        function sendOrder(name, phone, product_id, price, order_id){
            $.ajax({
                url: 'send_order.php',
                type: 'post',
                data: {
                    name:name,
                    phone:phone,
                    product_id:product_id,
                    price:price,
                    order_id:order_id,
                }
            });
        }
        sendOrder('<?php echo $name; ?>', '<?php echo $phone; ?>', '29', '299', '<?php echo $order_id; ?>');
    </script>

		<div class="section block-1">
			<div class="wrap">
				<img src="call-girl.png">
				<div class="top-title">
					<h2>Спасибо, Ваш заказ принят!</h2>
					<div>Наш оператор свяжется с вами в ближайшее время</div>
					<p><b style="color:black">Операторы работают без выходных с 10:00 до 22:00</b></p>
				</div>
			</div>
		</div>
		<div class="section block-2">
			<div class="wrap">
				<h1>Для всех новых клиентов эксклюзивная 15-минутная акция!</h1>
				<p>Вы можете добавить эти товары с супер-скидками к заказу прямо сейчас:</p>
			</div>
		</div>
		<center class="timer">
			<script src="4cfe04346a315ffcfcc46c483227a5e6.js"></script>
		</center>
		<div class="section block-3">
			<div class="wrap">
			
			
			
			
			
				
			
				
				
				
				
				
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-30%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/w7OSPaqxjZw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="a1.jpg" class="image2" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image2"><img src="a1.jpg"></span>
								<span class="animate" data-target=".image2"><img src="a2.jpg"></span>
							    <span class="animate" data-target=".image2"><img src="a3.jpg"></span>
								<span class="animate" data-target=".image2"><img src="a4.jpg"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Бритва-триммер Gemei</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">369 грн</span>
							<span class="new-cost">249 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b> Бритва-триммер Gemei — инновационное устройство, разработанное специально для настоящих мужчин. Разнообразное сочетание насадок и режимов бритья позволяют реализовать любые задумки для идеального внешнего вида.</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="gemei 249">Добавить к заказу</button>
					</div>
				</div>
				
				
				
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-41%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/GqDDD0j6RKQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="b1.jpg" class="image4" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image4"><img src="b1.jpg"></span>
								<span class="animate" data-target=".image4"><img src="b2.jpg"></span>
							    <span class="animate" data-target=".image4"><img src="b3.jpg"></span>
								<span class="animate" data-target=".image4"><img src="b4.jpg"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Инновационный депилятор Flawless</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">299 грн</span>
							<span class="new-cost">169 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b>Новый портативный депилятор в стиле губной помады. Мгновенно и безболезненно удаляет волосы даже в самых труднодоступных местах, не вызывает аллергии подходит для любого типа кожи. Одобрен дерматологами!</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="flawless 169">Добавить к заказу</button>
					</div>
				</div>
				
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-53%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/hcFgguXgxq0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="abc1.jpg" class="image123" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image123"><img src="abc1.jpg"></span>
								<span class="animate" data-target=".image123"><img src="abc2.jpg"></span>
							    <span class="animate" data-target=".image123"><img src="abc3.jpg"></span>
								<span class="animate" data-target=".image123"><img src="abc4.jpg"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Сенсорный дозатор для мыла и моющих средств</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">549 грн</span>
							<span class="new-cost">249 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b> Пользоваться диспенсером невероятно просто. После того, как вы вставили в него батарейки, необходимо поднять крышку и залить внутрь емкости жидкое мыло, гель для душа или средство для мытья посуды (в зависимости от того, где и для чего вы будете использовать). В общем, подойдет любое жидкое моющее средство. Объем составляет 400 мл. Этого вполне достаточно, чтобы подолгу не беспокоиться о наполнении резервуара средством.</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="дозатор мыла 249">Добавить к заказу</button>
					</div>
				</div>
				
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-39%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/7aYMCc9xxjY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="abc1i.jpg" class="image1231" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image1231"><img src="abc1i.jpg"></span>
								<span class="animate" data-target=".image1231"><img src="abc2i.jpg"></span>
							    <span class="animate" data-target=".image1231"><img src="abc3i.jpg"></span>
								<span class="animate" data-target=".image1231"><img src="abc4i.jpg"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Подарочный набор "Жемчужина Желаний"</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">309 грн</span>
							<span class="new-cost">179 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b> Heoбычный noдapok с сюрпризом. Жeмчyжинa находится внутри pakoвины с мoллюckoм, зaпeчaтанной в прозрачной бaнoчке. Красивое и оригинальное украшение. Настоящая жемчужина со специальным кулоном для жемчужины и цепочкой в комплекте. Цвет жeмчyжины является сюрпризом, возможны пять вариантов: БЕЛАЯ жемчужина - ЗДОРОВЬЕ; БЕЖЕВАЯ жемчужина -СЧАСТЬЕ; РОЗОВАЯ жемчужина - ЛЮБОВЬ; ЗОЛОТАЯ жемчужина - БОГАТСТВО; ЧЁРНАЯ жемчужина - МУДРОСТЬ</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="жемчужина 179">Добавить к заказу</button>
					</div>
				</div>
				
				
				
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-38%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/iRrsYzZhvTM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="i1.png" class="image0" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image0"><img src="i1.png"></span>
								<span class="animate" data-target=".image0"><img src="i2.png"></span>
							    <span class="animate" data-target=".image0"><img src="i3.png"></span>
								<span class="animate" data-target=".image0"><img src="i4.png"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Пластик-сварка 5 Second Fix</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">259 грн</span>
							<span class="new-cost">149 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b>Добавьте к заказу дополнительный комплект жидкого пластика 5 Second Fix по шокирующей цене! Уникальный пластик-сварка SecondFix безупречно скрепляет всё: от пластика до металла, изделия из дерева или разбитые в дребезги стеклянные вещи! Всего несколько секунд - и ремонт завершен!</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="5 second fix 149">Добавить к заказу</button>
					</div>
				</div>
				
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-41%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/WNKS5EWpM3Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="g1.jpg" class="image6" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image6"><img src="g1.jpg"></span>
								<span class="animate" data-target=".image6"><img src="g2.jpg"></span>
							    <span class="animate" data-target=".image6"><img src="g3.jpg"></span>
								<span class="animate" data-target=".image6"><img src="g4.jpg"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Magic Wrench универсальный чудо - ключ</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">279 грн</span>
							<span class="new-cost">159 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b>Универсальный чудо-ключ Magic Wrench - удобнейший многофункциональный инструмент, объединивший в себе функции сразу четырех типов ключей: рожкового, разводного, накидного и газового. Незаменимый помощник любого мужчины.</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="snap'n grip 159">Добавить к заказу</button>
					</div>
				</div>
				
				
				
				
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-48%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/G1mEyfNcZro"" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="t1.jpg" class="image4" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image4"><img src="t1.jpg"></span>
								<span class="animate" data-target=".image4"><img src="t2.jpg"></span>
							    <span class="animate" data-target=".image4"><img src="t3.jpg"></span>
								<span class="animate" data-target=".image4"><img src="t4.jpg"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Влаговпитывающий коврик, с антибактериальным эффектом</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">537 грн</span>
							<span class="new-cost">279 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b>Мгновенное впитование большого количества жидкости. Натуральный диатомовый минерал. Удаляет запахи. Антибактериальный эффект. Нескользящий и легко моющийся.</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="диатомовый коврик 279">Добавить к заказу</button>
					</div>
				</div>
				
				
				
				
				
				
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-32%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/SNmOp4nFzBc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="1ai.jpg" class="image7i" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image7i"><img src="1ai.jpg"></span>
								<span class="animate" data-target=".image7i"><img src="2ai.jpg"></span>
							    <span class="animate" data-target=".image7i"><img src="3ai.jpg"></span>
								<span class="animate" data-target=".image7i"><img src="4ai.jpg"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Супер-впитывающий коврик Clean Step Mat</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">349 грн</span>
							<span class="new-cost">229 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b>– В стране, где девять месяцев в году идут осадки, придверный коврик для вытирания ног просто необходим. Особенно если это супервпитывающий коврик Clean Step Mat, который «задерживает» грязь и не дает ей распространиться за пределами входа. Знакома ситуация, когда после уборки дома кто-то входит в грязной обуви и всё нужно начинать сначала? Благодаря новому коврику для ног полы будут чистыми гораздо дольше. Абсорбирующие волокна Clean Step Mat моментально впитывают грязь, пыль и даже воду. Кроме того, этот коврик можно использовать снаружи, за дверью, а также для ванной комнаты. Он не скользит, не сворачивается и не забивается под дверь благодаря виниловой основе.</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="коврик 229">Добавить к заказу</button>
					</div>
				</div>
				
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-46%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/W7S7iu6gJ34" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="1c.jpg" class="image9" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image9"><img src="1c.jpg"></span>
								<span class="animate" data-target=".image9"><img src="2c.jpg"></span>
							    <span class="animate" data-target=".image9"><img src="3c.jpg"></span>
								<span class="animate" data-target=".image9"><img src="4c.jpg"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Конструктор Bunchems 400 деталей</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">459 грн</span>
							<span class="new-cost">239 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b>Конструктор-липучка - это множество разноцветных лохматых шариков, которые соединяются между собой, как репейники. Дети могут лепить разнообразные фигурки, развивая свою фантазию, образное мышление, а заодно - и мелкую моторику рук.</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="bunchems 239">Добавить к заказу</button>
					</div>
				</div>
				
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-34%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/rW37Ml3Ht_M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="1a.png" class="image16" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image16"><img src="1a.png"></span>
								<span class="animate" data-target=".image16"><img src="2a.png"></span>
							    <span class="animate" data-target=".image16"><img src="3a.png"></span>
								<span class="animate" data-target=".image16"><img src="4a.png"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Корсет для спины Power Magnetic</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">229 грн</span>
							<span class="new-cost">139 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b> Магнитный корректор осанки широкого спектра действия. Самый простой и эффективный способ вернуть себе здоровую осанку и избавиться от болей в спине. Подходит и мужчинам, и женщинам. Можно носить под одеждой.</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="корректор осанки 139">Добавить к заказу</button>
					</div>
				</div>
				
				
			
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-72%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
								<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/9KecCznZp-w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="1d.jpg" class="image8" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image8"><img src="1d.jpg"></span>
								<span class="animate" data-target=".image8"><img src="2d.jpg"></span>
							    <span class="animate" data-target=".image8"><img src="3d.jpg"></span>
								<span class="animate" data-target=".image8"><img src="4d.jpg"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>"Ленивая" кружка-мешалка</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">689 грн</span>
							<span class="new-cost">189 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b>Всего 1 кнопка на ручке кружки мешалки и ваш напиток полностью перемешается. Герметичная крышка! Долго держит температуру! Очень просто мыть!</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="кружка-мешалка 189">Добавить к заказу</button>
					</div>
				</div>
				
				
				
				
				
			
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-34%</span>
					<div class="tov-left-cont">
						<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							<iframe width="100%" height="235px" src="https://www.youtube.com/embed/R4EnGCUOoUo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="i1.jpg" class="image3" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image3"><img src="i1.jpg"></span>
								<span class="animate" data-target=".image3"><img src="i2.jpg"></span>
							    <span class="animate" data-target=".image3"><img src="i3.jpg"></span>
								<span class="animate" data-target=".image3"><img src="i4.jpg"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Силиконовая крышка-пленка Stretch and Fresh</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">239 грн</span>
							<span class="new-cost">149 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b>Силиконовая крышка-пленка Stretch and Fresh решит все проблемы, связанные с поиском подходящей упаковки для хранения продуктов. Ее надо просто натянуть на тарелку, миску, кастрюлю, и вот у Вас есть герметичная крышка подходящего размера! Кроме того, в пленку можно обернуть сам продукт, растянув ее перед этим.В наборе 4 шт. Крышки-пленки набора кажутся небольшими по размеру, но они растягиваются больше, чем в три раза, и возвращаются в свою первоначальную форму, сколько бы времени они не использовались. </b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="stretch and fresh 149">Добавить к заказу</button>
					</div>
				</div>
		
				
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-62%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/6X-mn1bNSBU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="1b.jpg" class="image10" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image10"><img src="1b.jpg"></span>
								<span class="animate" data-target=".image10"><img src="2b.jpg"></span>
							    <span class="animate" data-target=".image10"><img src="3b.jpg"></span>
								<span class="animate" data-target=".image10"><img src="4b.jpg"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Маска от черных точек и прыщей Black Mask 2 шт</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">119 грн</span>
							<span class="new-cost">39 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b>Легендарная маска от черных точек и прыщей Black Mask на основе древесного угля. Уменьшает количество высыпаний в виде прыщей и угревой сыпи, устраняет очаги воспаления, успокаивает раздражения и улучшает цвет лица. Внимание! Товар продается от 2х штук.</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="black mask 39">Добавить к заказу</button>
					</div>
				</div>
				
				
				
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-40%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/YADhMdNho8g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>	
					
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="a1.png" class="image13" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image13"><img src="a1.png"></span>
								<span class="animate" data-target=".image13"><img src="a2.png"></span>
							    <span class="animate" data-target=".image13"><img src="a3.png"></span>
								<span class="animate" data-target=".image13"><img src="a4.png"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Машинка для удаления катышек Lint Remover</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">329 грн</span>
							<span class="new-cost">189 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b>Добавьте к заказу дополнительный комплект машинки Lint Remover по шокирующей цене! Удалит катышки, не повреждая саму ткань. Супер мощная, работает от сети 220В.</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="машинка для удаления катышков 189">Добавить к заказу</button>
					</div>
				</div>
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-51%</span>
					<div class="tov-left-cont">		
						<div class="tov-gal clearfix">
								<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/GoDXeFmm4x0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="ii1.png" class="image1" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image1"><img src="ii1.png"></span>
								<span class="animate" data-target=".image1"><img src="ii2.png"></span>
							    <span class="animate" data-target=".image1"><img src="ii3.png"></span>
								<span class="animate" data-target=".image1"><img src="ii4.png"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Электрическая ножеточка Острые грани</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">319 грн</span>
							<span class="new-cost">149 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b>Невероятно удобный и компактный прибор для заточки, мультифункциональность которого поражает! Вы можете использовать его для работы с самыми разными типами ножей, ножницами, инструментами и даже отвертками. Вам больше не придется тратить часы, чтобы наточить все ножи в доме. Благодаря наличию специальных пазов, заточка всегда происходит под правильным углом, что исключает риск повреждения ножа или инструмента.</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="ножеточка 149">Добавить к заказу</button>
					</div>
				</div>
				
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-44%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/D1kuECeb-4E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="b1.png" class="image14" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image14"><img src="b1.png"></span>
								<span class="animate" data-target=".image14"><img src="b2.png"></span>
							    <span class="animate" data-target=".image14"><img src="b3.png"></span>
								<span class="animate" data-target=".image14"><img src="b4.png"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Multi Combine</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">419 грн</span>
							<span class="new-cost">229 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b>Добавьте к заказу дополнительный комплект овощерезки Multi Combine по шокирующей цене! Каждая овощерезка Multi Combine комплектуется большим количеством лезвий и приспособлений для измельчения овощей и фруктов самыми оригинальными формами!</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="nicer dicer 229">Добавить к заказу</button>
					</div>
				</div>
				
				
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-63%</span>
					<div class="tov-left-cont">		
						<div class="tov-gal clearfix">
								<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/yBVTAsRdE-Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="ii1s.jpg" class="image1s" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image1s"><img src="ii1s.jpg"></span>
								<span class="animate" data-target=".image1s"><img src="ii2s.jpg"></span>
							    <span class="animate" data-target=".image1s"><img src="ii3s.jpg"></span>
								<span class="animate" data-target=".image1s"><img src="ii4s.jpg"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Органайзер для багажа</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">629 грн</span>
							<span class="new-cost">229 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b>Упаковка вещей- одна из самых сложных процедур при сборке чемодана. Наш набор для организации упаковки багажа решает эту проблему, аккуратно упаковывая всю одежду в наши компактные сумки. Набор для путешествий поможет разложить все вещи по порядку. Одежду в одно место, обувь в другое и аксессуары в третье. Кроме того набор помогает экономить до 40% места в вашем чемодане за счет правильно разложенных вещей в компактных отдельных сумках. Весь набор изготовлен из водоотталкивающего и дышащего материала, так что ваши вещи всегда будут сухими и свежими.</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="орг для багажа 229">Добавить к заказу</button>
					</div>
				</div>
				
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-49%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/mbX5T7nIoN4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="a1s.jpg" class="image2s" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image2s"><img src="a1s.jpg"></span>
								<span class="animate" data-target=".image2s"><img src="a2s.jpg"></span>
							    <span class="animate" data-target=".image2s"><img src="a3s.jpg"></span>
								<span class="animate" data-target=".image2s"><img src="a4s.jpg"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Органайзер для хранения обуви</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">329 грн</span>
							<span class="new-cost">159 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b> Органайзер для обуви позволяет легко и компактно сложить обувь, вмещает 12 пар. Защитный кожух защитит обувь от пыли и влаги. Изготовлен из дышащего материала. Прозрачный верх позволяет быстро найти нужную пару. Подходит для хранения любой обуви.</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="орг для обуви 159">Добавить к заказу</button>
					</div>
				</div>
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-48%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/2gXRBewuZAs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="1e.jpg" class="image11" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image11"><img src="1e.jpg"></span>
								<span class="animate" data-target=".image11"><img src="2e.jpg"></span>
							    <span class="animate" data-target=".image11"><img src="3e.jpg"></span>
								<span class="animate" data-target=".image11"><img src="4e.jpg"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Spot Cleaner - очиститель пор для лица</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">319 грн</span>
							<span class="new-cost">159 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b>Spot Cleaner - вакуумный очиститель пор для лица, отлично справляется с черными точками, улучшает тональность кожи и придает ей здоровый блеск. Настолько компактный, что помещается даже в карман.</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="spot cleaner 159">Добавить к заказу</button>
					</div>
				</div>
				
				
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-51%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/qu6mEY-CmQQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="v1.jpg" class="image5" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image5"><img src="v1.jpg"></span>
								<span class="animate" data-target=".image5"><img src="v2.jpg"></span>
							    <span class="animate" data-target=".image5"><img src="v3.jpg"></span>
															</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Расческа-выпрямитель Fast Hair</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">479 грн</span>
							<span class="new-cost">229 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b> Выпрямляет волосы на длительный период. Улучшает структуру волос благодаря ионизации. Избавляет от пушистости. 3 специальных режима! для тонких, нормальных и сильно вьющихся волос..</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="fast hair 229">Добавить к заказу</button>
					</div>
				</div>
				
				
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-42%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/OJOPKQiq0JQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="1f.jpg" class="image12" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image12"><img src="1f.jpg"></span>
								<span class="animate" data-target=".image12"><img src="2f.jpg"></span>
							    <span class="animate" data-target=".image12"><img src="3f.jpg"></span>
								<span class="animate" data-target=".image12"><img src="4f.jpg"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Кондитерский шприц</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">409 грн</span>
							<span class="new-cost">229 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b>Маркато Бисквит - профессиональный кондитерский пистолет, который поможет получить разнообразное печенье ручной работы в домашних условиях или на небольшом кондитерском производстве. Шприц из пищевого анодированного аллюминия, очень прочный и легкий металл, со специальным покрытием и дозатором. Дозатор позволяет делать печение большим размером и маленьким. Поворачиваете регулятор на 180 градусов и можете сами задавать нужный Вам размер. В комплекте идет 20 насадок. Объём - 450 мл.</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="кондитерский шприц 229">Добавить к заказу</button>
					</div>
				</div>
				
				
				
				
				<div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-56%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; margin-bottom: 20px; width: 100%; height: 230px; overflow: hidden;'>
							   <iframe width="100%" height="235px" src="https://www.youtube.com/embed/ELAjok5DBoI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						
						<div class="tov-gal clearfix">
							<div class="tov-gal-big" style='margin-top: 0px; height: 230px; overflow: hidden;'>
							    <!-- ПЕРВОЕ ИЗОБРАЖЕНИЕ В СЛАЙДЕРЕ -->
								<img src="a1is.jpg" class="image2is" style='height: 100%;'>
							</div>
							<div class="tov-gal-list">
							    <!-- ВСЕ ИЗОБРАЖЕНИЯ В СЛАЙДЕРЕ - ПЕРВАЯ СТРОКА ДУБЛИРУЕТСЯ С БЛОКОМ ВЫШЕ -->
								<span class="active animate" data-target=".image2is"><img src="a1is.jpg"></span>
								<span class="animate" data-target=".image2is"><img src="a2is.jpg"></span>
							    <span class="animate" data-target=".image2is"><img src="a3is.jpg"></span>
								<span class="animate" data-target=".image2is"><img src="a4is.jpg"></span>
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3>Магнитная щетка для окон</h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost">349 грн</span>
							<span class="new-cost">149 грн</span>
						</div>
						<p class="tov-info-text"></p>
						<p><b> Щетка для мытья окон нового поколения. Уникальная технология позволяет осуществлять идеальное мытье и полировку сразу с двух сторон стекла. Ваша задача помыть одну сторону, а со второй справится Glass Wiper!</b></p>
						<p>&nbsp;</p>
						<button class="tov-button animate" data-name="<?php echo $_POST['name']; ?>" data-phone="<?php echo $_POST['phone']; ?>" data-item="щетка для окон 149">Добавить к заказу</button>
					</div>
				</div>
				
				
				
				
				
				
				
				
				

				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				

				<center>
					← <a class="back" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>">Вернуться обратно на сайт</a>
				</center>
			</div>
		</div>
		<div class="section footer"> 
			<div class="wrap clearfix">
				<div class="left clearfix foot-logo">
					<p>(c) Copyright 2018</p>
				</div>
				<div class="right"></div>
			</div>
		</div>
</body></html>