<?php

//Cчитываем данные из метода GET
$data = $_GET;

$w = $data['width'];
$h = $data['height'];
$r = $data['radius'];
$c = $data['count'];

$name = 'result.png';

// Создаём изображение заданых размеров    
$im = imagecreatetruecolor($w, $h);

//Делаем белый фон изображения
$white = imagecolorallocate($im, 255, 255, 255);
imagefilledrectangle($im, 0, 0, $w, $h, $white);

//Создаём массив цветов
$blue = imagecolorallocate($im, 0, 0, 255);
$red = imagecolorallocate($im, 255, 0, 0);
$green = imagecolorallocate($im, 0, 255, 0);
$black = imagecolorallocate($im, 0, 0, 0);
$yellow = imagecolorallocate($im, 255, 255, 0);
$colors = [$blue, $red, $green, $black, $yellow];

//Генерируем окружности
for ($i = 0; $i < $c; $i++) {
    $col = rand(0, count($colors));
    $x = rand($r, $w - $r);
    $y = rand($r, $h - $r);
    imagefilledellipse($im, $x, $y, 2 * $r, 2 * $r, $colors[$col]);
}

//Сохраняем изображения
imagePng($im, $name);

header('Content-type: application/png');
header('Content-Disposition: attachment; filename="image.png"');
readfile($name);

//Удалеям
imageDestroy($im);
unlink($name);
header("Location: /");
