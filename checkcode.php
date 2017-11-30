<?php
   header("content-type:text/html;charset=utf-8"); 
   header("content-type:image/jpeg");
   $image = imagecreate(100,30);
   $bgcoloer = imagecolorallocate($image,250,180,180);
   $fontcolor = imagecolorallocate($image,30,30,30);
   $font = "ygyxsziti2.0.ttf";
   $rand = '';
   for($a = 0;$a<4;$a++){
	   $rand .=dechex(rand(0,15));
   }
   $string = $rand;
   $string1=$string;

file_put_contents('p.txt', $string1);

   imagettftext($image,30,2,10,30,$fontcolor,$font,$string);
  imagejpeg($image);
  imagedestroy($image);
  
 ?> 

 