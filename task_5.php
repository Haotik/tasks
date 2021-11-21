<?
$array = [];
while (count($array) < 100) {
	$array[] = rand(0,20);
}

?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<style>
		div{
			margin-top: 20px;
		}
		</style>
	</head>
	<body>
		<a href="index.php">Назад</a>
		<div class="task">
			Переделать меню основное и мобильное под новый вариант из фигмы
		</div>
		<div class="before">
			<video src="video/lumiatex_menu/before.mp4" controls></video>
		</div>
		<div class="after">
			<video src="video/lumiatex_menu/after.mp4"controls></video>
		</div>
		<div class="figma">
			<video src="video/lumiatex_menu/figma.mp4"controls></video>
		</div>
	</body>
</html>