<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="scripts/jquery.js"></script>
	<script src="scripts/site.js"></script>
	<title>Онлайн магазин</title>
	<link rel="stylesheet" href="styles/site.css">
</head>
<body>
	<header>
		<div id="headerInside">
			<div id="logo"></div>
			<div id="companyName">Brand</div>
			<div id="navWrap">
				<a href="#">Главная</a>
				<a href="#">Магазин</a>
			</div>
		</div>
	</header>
	<div id="content">
		<?php                        /*Если не подключается - очистить кэш*/

						

			$goods = [
				[	'id' => 1,
					'name' => 'Iphone',
					'desc' => 'Описание для Iphone',
					'img' => 'images/goods/iphone.jpg',
					'price' => '2000 $'],
				
				[	'id' => 2,
					'name' => 'HTC',
					'desc' => 'Описание для HTC',
					'img' => 'images/goods/htc.jpg',
					'price' => '1200 $'],

				[	'id' => 3,
					'name' => 'Samsung',
					'desc' => 'Описание для Samsung',
					'img' => 'images/goods/samsung.jpg',
					'price' => '1400 $'],	
			];
			/*ЦИКЛЫ: {foreach}*/
			foreach ($goods as $key => $good) {     /*новая переменная, которая принадлежит массиву good*/
				echo 'Ключ массива: '.$key.'<br>';	/*Выводит надпись -> номер массива -> перенос на другую строку*/
				echo $good['id'].'<br>';
				echo $good['name'].'<br>';
				echo $good['desc'].'<br>';
				echo $good['img'].'<br>';
				echo $good['price'].'<br>';
				echo '<hr>';
			}

			


		?>
		<!-- <div id="promo">
			<h1 id="promoText">
				Здесь будет рекламный заголовок
			</h1>
		</div>
		<div id="mainTextWrap">
			<div id="mainText">
				Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.Здесь будет текст для главной страницы.
			</div>
		</div>
		<div style="width: 1100px; margin: 0 auto">
			<hr>
			<h2>
				Это будет отдельная страница с отдельным магазином
			</h2>
			<div style="width: 1100px; margin: 0 auto">
				<h1>
					Каталог товаров
				</h1>
				<div>
					<div class="shopUnit">
						<img src="http://placehold.it/308x231">

						<div class="shopUnitName">
							Название продукта
						</div>
						<div class="shopUnitShortDesc">
							Здесь будет немного текста описывающего продукт
							Здесь будет немного текста описывающего продукт
							Здесь будет немного текста описывающего продукт
						</div>
						<div class="shopUnitPrice">
							Цена: 0000$
						</div>
						<a href="#" class="shopUnitMore">
							Подробнее
						</a>
					</div>
					
					<div class="shopUnit">
						<img src="http://placehold.it/308x231">

						<div class="shopUnitName">
							Название продукта
						</div>
						<div class="shopUnitShortDesc">
							Здесь будет немного текста описывающего продукт
							Здесь будет немного текста описывающего продукт
							Здесь будет немного текста описывающего продукт
						</div>
						<div class="shopUnitPrice">
							Цена: 0000$
						</div>
						<a href="#" class="shopUnitMore">
							Подробнее
						</a>
					</div>
					
					<div class="shopUnit">
						<img src="http://placehold.it/308x231">

						<div class="shopUnitName">
							Название продукта
						</div>
						<div class="shopUnitShortDesc">
							Здесь будет немного текста описывающего продукт
							Здесь будет немного текста описывающего продукт
							Здесь будет немного текста описывающего продукт
						</div>
						<div class="shopUnitPrice">
							Цена: 0000$
						</div>
						<a href="#" class="shopUnitMore">
							Подробнее
						</a>
					</div>	
				</div>
			</div>

			<div style="margin-bottom: 20px; float: left;">
				<hr>
				<h2>
					Это будет отдельная страница с открытым товаром
				</h2>
				
				<div id="openedProduct-img">
					<img src="http://.it/342x260">
				</div>
				<div id="openedProduct-content">
					<h1 id="openedProduct-name">
						Название продукта
					</h1>
					<div id="openedProduct-desc">
						Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта. 
					</div>
					<div id="openedProduct-price">
						Цена: 0000 $
					</div> 
				</div>
			</div>
		</div> -->
	</div>


	<footer>
		<div id="footerInside">
			
			<div id="contacts">
				<div class="contactWrap">
					<img src="images/envelope.svg" alt="" class="contactIcon">
					info@rustechnics.ru
				</div>
				<div class="contactWrap">
					<img src="images/phone-call.svg" alt="" class="contactIcon">
					8 800 555 00 00
				</div>
				<div class="contactWrap">
					<img src="images/placeholder.svg" alt="" class="contactIcon">
					Москва, пр-т Ленина, д. 1 офис 304
				</div>
			</div>

			<div id="footerNav">
				<a href="#">Главная</a>
				<a href="#">Магазин</a>
			</div>

			<div id="social">
				<img src="images/vk-social-logotype.svg" class="socialItem">
				<img src="images/google-plus-social-logotype.svg" class="socialItem">
				<img src="images/facebook-logo.svg" class="socialItem">
			</div>

			<div id="copyrights">&copy; Brand</div>
		</div>
	</footer>

</body>
</html>