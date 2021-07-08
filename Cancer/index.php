<?php
header ("content-type: image/png");

$image = imagecreate(1000, 1000);
imagepng($image);
$background_color = imagecolorallocate($image, 172, 29, 221);
