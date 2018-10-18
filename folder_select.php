<?php
#read url segment
$link = $_SERVER['PHP_SELF'];
$link_array = explode('/',$link);
$size = $link_array[count($link_array) - 1];
$file = $link_array[count($link_array) - 2];

#select file from the right folder
$name = "{$size}/{$file}.png";
#open the file in a binary mode
$fp = fopen($name, 'rb');

#send the right headers
header("Content-Type: image/png");
header("Content-Length: " . filesize($name));

#dump the picture and close the file
fpassthru($fp);
fclose($fp);