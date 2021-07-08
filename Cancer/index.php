<?php
error_reporting(E_ALL);
header ("content-type: image/png");

$image = imagecreate(1000, 1000);
$background_color = imagecolorallocate($image, 5, 5, 60);
$white = imagecolorallocate( $image, 255, 255, 255);

imageline(
  $image,
  275,
  150,
  350,
  350,
  $white
);

imageline(
  $image,
  350,
  350,
  360,
  425,
  $white
);

imageline(
  $image,
  360,
  425,
  310,
  625,
  $white
);

imageline(
  $image,
  360,
  425,
  650,
  615,
  $white
);

$etoile = imagecreatefrompng("etoile.png");

imagecopymerge_alpha($image, $etoile, 275 - 15, 150 - 15, 0, 0, imagesx($etoile), imagesy($etoile), 100);

function imagecopymerge_alpha($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct){
    $cut = imagecreatetruecolor($src_w, $src_h);

    imagecopy($cut, $dst_im, 0, 0, $dst_x, $dst_y, $src_w, $src_h);

    imagecopy($cut, $src_im, 0, 0, $src_x, $src_y, $src_w, $src_h);

    imagecopymerge($dst_im, $cut, $dst_x, $dst_y, 0, 0, $src_w, $src_h, $pct);
}

imagecopymerge_alpha($image, $etoile, 350 - 15, 350 - 15, 0, 0, imagesx($etoile), imagesy($etoile), 100);

imagecopymerge_alpha($image, $etoile, 360 - 15, 425 - 15, 0, 0, imagesx($etoile), imagesy($etoile), 100);

imagecopymerge_alpha($image, $etoile, 310 - 15, 625 - 15, 0, 0, imagesx($etoile), imagesy($etoile), 100);

imagecopymerge_alpha($image, $etoile, 650 - 15, 615 - 15, 0, 0, imagesx($etoile), imagesy($etoile), 100);

imagepng($image);
