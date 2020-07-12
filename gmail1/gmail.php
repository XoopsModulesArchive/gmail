<?php
header("Content-type: image/png");
// $user = $_POST['user'];
$user = $_GET['user'];
$im = imagecreatefrompng("gmail.png");
$user_width = imagettfbbox(9, 0, "tahoma.ttf", $user);
$x_value = (200 - ($user_width[2] + 113));
$color = imagecolorallocate($im, 165, 164, 164);
imagettftext($im, 9, 0, $x_value, 16, $color, "tahoma.ttf", $user);
imagepng($im);
imagedestroy($im);
?>
<!-- Gmail Sig Script - http://playtime.uni.cc -->