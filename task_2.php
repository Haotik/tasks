<?
$base_img = 'test.png'; 
//условия
$width = 200; 
$height = 100; 
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
		img{
			border: 1px solid black;
		}
		</style>
	</head>
	<body>
		<a href="index.php">Назад</a>
		<div class="task">
			2. Веб-разработка
			На диске лежит файл image.png, размер 20000 на 20000. Вывести картинку как баннер размером 200 на 100 пикселей.
			Обратите внимание на размер и пропорции, и подумайте о времени загрузки.
			Пришлите ссылку на репозиторий с решением
			Важно: решение требует использования PHP, сжатие картинки средствами HTML/CSS является некорректным решением.
		</div>
		<div class="answer">
			<?my_resize($base_img,$width,$height)?>
			<img src="result.png" alt="">
		</div>
	</body>
</html>


<?
function my_resize($img,$target_width,$target_height){

	$size = getimagesize($img); 
	if ($size){
		list($width, $height) = getimagesize($img);

		$srcImage = imageCreateFromPng($img);
		$result_img = imageCreateTrueColor($target_width, $target_height);
	
		imagealphablending($result_img, true); 
		imageSaveAlpha($result_img, true);
		$transparent = imagecolorallocatealpha($result_img, 0, 0, 0, 127); 
		imagefill($result_img, 0, 0, $transparent); 
		imagecolortransparent($result_img, $transparent); 

		$new_width = ceil($target_height / ($height / $width));
		$new_height = ceil($target_width / ($width / $height));

		if ($new_width < $target_width) {
			imageCopyResampled($result_img, $srcImage, ceil(($target_width - $new_width) / 2), 0, 0, 0, $new_width, $target_height, $width, $height);        
		} else {
			imageCopyResampled($result_img, $srcImage, 0, ceil(($target_height - $new_height) / 2), 0, 0, $target_width, $new_height, $width, $height);    
		}   
		// СОЗДАЁМ
		return imagepng($result_img, 'result.png', 9); 
		
		} else {
		exit("изображение не найдено");
		}
}
?>


  