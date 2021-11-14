<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<style>
		#news{
			display: none;
		}
		#news:target{
			display: block;
		}
		div{
			margin-top: 20px;
		}
		</style>
	</head>
	<body>
		<a href="index.php">Назад</a>
		<div class="task">
			В переменной $a лежит текст новости. В переменной $link лежит ссылка на страницу с полным текстом этой новости.
			Нужно в переменную $b записать сокращенный текст новости по правилам:
			- обрезать до 180 символов
			- приписать многоточие
			- последние 2 слова и многоточие сделать ссылкой на полный текст новости.
			Какие проблемы вы видите в решении этой задачи? Что может пойти не так?
		</div>
		<?php
		$a = "<p>Проблема - учет кодировки. Существуют многобайтовые и однобайтовые кодировки, и соответсвенно в php существуют функии как для одних так и дургих. Например UTF-8 является многобайтовой. Если использовать в данном примере аналог mb_substr, просто функцию substr то количество символов для UTF-8 будет посчитано неправильно. Вместо 180 - всего 90. и если есть далее связаные функии/методы работающие с ответом и ожидающие определнную длинну строки то можно очень долго искать баг и ошибку. 
			</p> 
			<p>
				Кроме того mb_*** функции потребляют больше ресурсов.</p>";
		$link = "#news";
		$b = trim_by_size($a,180,$link);
		?>
		<div class="item">
			<?=$b?>
		</div>
		<div id="news">
			<?=$a?>
			<br>
			<a href="#" id="close"> Закрыть</a>
		</div>
		<div class="problems">
			
		</div>
	</body>
</html>

<?
function trim_by_size($string,$size,$link){
	$current = mb_substr($string, 0, $size);
	$current = explode(" ", $current);
		for ($i=0; $i < count($current) - 2; $i++) {
			$b .= $current[$i]." ";
		}
		$b.= "<a href='$link'>";
		$b.= $current[count($current) -2] ." ". $current[count($current) - 1]. "... </a>";

		return $b;
}
?>