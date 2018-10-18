<?php
#read url segment
$link = $_SERVER['PHP_SELF'];
$link_array = explode('/',$link);
$size = $link_array[count($link_array) - 1];
$file = $link_array[count($link_array) - 2];

#always read image from the biggest size, we will resize it later
$name = "1040/{$file}.png";
#create image from selected file
$img = imagecreatefrompng($name);
#create image for result
$result = imagecreate($size, $size);

// send the right headers
header("Content-Type: image/png");
#resize the image
imagecopyresized($result, $img, 0, 0, 0, 0, $size, $size, 1040, 1040);
#dump the picture
imagepng($result);
#free the memory
imagedestroy($img);
imagedestroy($result);