<?php
session_start();
$captcha_num = rand(1000, 9999);
$_SESSION['code'] = $captcha_num;

$font_size = 30;
$img_width = 70;
$img_height = 40;

$im = imagecreatetruecolor($img_width, $img_height);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 4, 5, 5,  $captcha_num, $text_color);

// Set the content type header - in this case image/jpeg
header('Content-Type: image/jpeg');

// Output the image
imagejpeg($im);
?>