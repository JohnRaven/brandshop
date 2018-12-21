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
			$myVariable = "hello world";   /*переменная*/
			$myVariable1 = 432;
			echo $myVariable;
			var_dump($myVariable);
			var_dump($myVariable1);
			$a = 2;
			$b = 5;
			$c = $a + $b;
			var_dump($c);

			$password = " ";
			var_dump($password == " ");
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