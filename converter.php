<?php
$file = 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Priyanka-chopra-gesf-2018-7565.jpg/220px-Priyanka-chopra-gesf-2018-7565.jpg';
$image=  imagecreatefromjpeg($file);
ob_start();
imagejpeg($image,NULL,100);
$cont=  ob_get_contents();
ob_end_clean();
imagedestroy($image);
$content =  imagecreatefromstring($cont);

//here webp is the folder where the webp image will be stored

imagewebp($content,'webp/' .  $url_id."-".$name_for_image . '.webp');
imagedestroy($content);
?>
