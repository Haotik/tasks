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
			Дан массив из 100 элементов. Требуется вывести количество последовательных пар одинаковых элементов
			Например: 1, 1, 2, 3, 4 -51, 12, 12, 12, -51
			Пришлите ссылку на репозиторий с решением
		</div>
		<div class="array">
			<?print_r($array);?>
		</div>
		<div class="answer">
			<?=count_pairs($array)?>
		</div>
	</body>
</html>

<?
function count_pairs($array){
	$max_chain = 0;
	$chain = 0;
	$result = 0;
	for ($i=0; $i < count($array); $i++) { 
		$c = $i+1;
		while($array[$i] == $array[$c]){
			$c++;
			$chain++;
		}

		if ($chain > $max_chain) {
			$max_chain = $chain;
		}

		if ($chain > 0) {
			echo 'Элемент №'.$i." цепочка ". $chain."<br>";
			$result += $chain;
		}

		$i = $c-1;	
		$chain = 0;
		}

	echo "Максимальная цепочка: ". $max_chain ." пары <br> Всего пар: ".$result;
}