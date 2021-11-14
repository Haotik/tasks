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
			3. БД
			Чем отличаются эти запросы:
			1. SELECT * FROM a, b WHERE a.id=b.a_id;
			2. SELECT * FROM a JOIN b ON a.id=b.a_id;
			Пришлите ответ текстом
		</div>
		<div class="answer">
			Запрос №1 является устаревшим и в Standard SQL-1992 бы заменен на явное соединение - Запрос №2 
			Однако он и сейчас работает в целях обратной совместимости. 
		</div>
	</body>
</html>

<?php

	foreach ($variable as $key => $value) {
		// code...
	}