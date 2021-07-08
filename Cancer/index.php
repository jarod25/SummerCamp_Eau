<?php
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

function imagecopymerge_alpha(GdImage $dst_im, GdImage $src_im, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_w, int $src_h,int $opacite){
    $cut = imagecreatetruecolor($src_w, $src_h);
    imagecopy($cut, $dst_im, 0, 0, $dst_x, $dst_y, $src_w, $src_h);
    imagecopy($cut, $src_im, 0, 0, $src_x, $src_y, $src_w, $src_h);
    imagecopymerge($dst_im, $cut, $dst_x, $dst_y, 0, 0, $src_w, $src_h, $opacite);
}

imagepng($image);
