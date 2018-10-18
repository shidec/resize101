<?php
#read url segment
$link = $_SERVER['PHP_SELF'];
$link_array = explode('/',$link);
$size = $link_array[count($link_array) - 1];
$file = $link_array[count($link_array) - 2];

#select file from the right folder
$name = "{$size}/{$file}.png";

#send the right headers
header("Content-Type: image/png");
header("Content-Length: " . filesize($name));

#Reads a file and writes it to the output buffer
readfile($name);