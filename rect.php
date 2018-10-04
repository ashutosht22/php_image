<?php
 
// example3.php
 
// set the HTTP header type to PNG
header("Content-type: image/png"); 
 
// set the width and height of the new image in pixels
$width = 350;
$height = 360;
 
// create a pointer to a new true colour image
$im = ImageCreateTrueColor($width, $height); 
 
// switch on image antialising if it is available
ImageAntiAlias($im, true);
 
// sets background to white
$white = ImageColorAllocate($im, 255, 255, 255); 
ImageFillToBorder($im, 0, 0, $white, $white);
 
// define black and blue colours
$black = ImageColorAllocate($im, 0, 0, 0);
$blue = ImageColorAllocate($im, 0, 0, 255);
 
// define the dimensions of our rectangle
$r_width = 150;
$r_height = 100;
$r_x = 100;
$r_y = 50;
 
ImageRectangle($im, $r_x, $r_y, $r_x+$r_width, $r_y+$r_height, $black);
 
// define the dimensions of our filled rectangle
$r_width = 150;
$r_height = 100;
$r_x = 100;
$r_y = 200;
 
ImageFilledRectangle($im, $r_x, $r_y, $r_x+$r_width, $r_y+$r_height, $blue);
 
// send the new PNG image to the browser
ImagePNG($im); 
 
// destroy the reference pointer to the image in memory to free up resources
ImageDestroy($im); 
 