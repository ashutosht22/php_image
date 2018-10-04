 <?php
 	 
   //$stamp = imagecreatefrompng('logo1.png');
 $color="";
 $public_file_path = '.';
 $bgimage = './1.jpg';			  
 $logoimage= './logo4.png';
 $facebookicon='./facebook.png';
$twittericon='./twitter.png';
$webicon='./web.png';


// $text=  "Making Of A Home To Remember ";
$text="Pakistan strongly reacted to Prime Minister Narendra ,";
 $weburl="www.dfizz.com"; 
 $facebookurl= "/dfizzrealestate";
 $twitterurl="";
 $text4= "/dfizzrealestate";
 //$font = $public_file_path . '/font.ttf';
 $font1 = $public_file_path . '/gidole.ttf';
 $font2 = $public_file_path . '/gidole.ttf';
 $rcolor="0";
 $gcolor="0";
 $bcolor="0";
 $textcolorR="255";
 $textcolorG="255";
 $textcolorB="255";


  editImageStructure3( $color, $bgimage, $logoimage,$facebookicon,$twittericon,$webicon,$text,$weburl,$facebookurl, $twitterurl,$font1,$font2,$rcolor,$gcolor,$bcolor,$textcolorR,$textcolorG,$textcolorB);
 
 
 function editImageStructure3($color, $bgimage,$logoimage,$facebookicon,$twittericon,$webicon,$text,$weburl,$facebookurl, $twitterurl, $font1,$font2,$rcolor,$gcolor,$bcolor,$textcolorR,$textcolorG,$textcolorB) { 
    
  $public_file_path = '.';
   
  $newwidth = 612;
  $newheight = 477;
  					
//for Banner image
$extension =  pathinfo($bgimage, PATHINFO_EXTENSION);
if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'JPG' || $extension == 'JPEG') {
$new1 = imagecreatefromjpeg($bgimage);
} else if ($extension == 'png' || $extension == 'PNG') {
$new1 =  imagecreatefrompng($bgimage);
} else {
return 'Banner Image should be in ".jpg" or ".png" format.';
}
list($w, $h) = getimagesize($bgimage);
$new   = imagecreatetruecolor($w, $h);
imagecopyresized($new, $new1, 0, 0, 0, 0, $w, $h,$w, $h);


   //Logo Image
   $extension = pathinfo($logoimage, PATHINFO_EXTENSION);
  if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'JPG' || $extension == 'JPEG') {
            $stamp1 = imagecreatefromjpeg($logoimage);
        } else if ($extension == 'png' || $extension == 'PNG') {
            $stamp1 = imagecreatefrompng($logoimage);
        } else {
            return 'Logo Image should be in ".jpg" or ".png" format.';
        }
list($w1, $h1) =    getimagesize($logoimage);
 $r = $w1 / $h1;
    
  $nlw=($w/3.7);
	  $nlh=($h/7.6);
        if (($nlw/$nlh) > $r) {
            $w2 = ($nlh*$r);
            $h2 =  $nlh;
        } else {
            $w2 = $nlw;
            $h2 = ( $nlw/$r);
        }
       $stamp = imagecreatetruecolor($w2, $h2);
//$stamp = imagecreatetruecolor(140, 60);
imagealphablending($stamp, true);
//transparent logo
$transparent = imagecolorallocatealpha($stamp,255, 255, 255, 50);
imagefill($stamp, 0, 0, $transparent);
imagecopyresized($stamp, $stamp1, 0, 0, 0,   0,  $w2, $h2,$w1, $h1);
//imagecopyresized($stamp, $stamp1, 0, 0, 0,   0,  ($h/20), ($h/20),$w1, $h1);


   // imagealphablending($stamp, true);
     


  $text_color = imagecolorallocate($new, $textcolorR,$textcolorG,$textcolorB);
//  $bg_color = imagecolorallocate($image_p, 255, 255, 255);
 
 
   	//  $upbar = imagecreatefrompng('upbar.png');
      	$upbarh=$h/8;
        echo $h;
        $upbarh1=60;
	//	echo "upbar". $upbarh;
	  	$upbar=@imagecreate($w,$upbarh1) or die("Cannot Initialize new GD im age stream");
		 $upbar2 = imagecolorallocatealpha($upbar, 174,200,189, 55);
		  imagefill($upbar, 0, 0, $upbar2);


  $facebookicon1 = imagecreatefrompng($facebookicon);
 	   list($w2, $h2) = getimagesize($facebookicon);
   	   $facebookicon = imagecreatetruecolor(180, 180);
	   imagealphablending($facebookicon, true);    			
	 	 $transparent = imagecolorallocatealpha($facebookicon, 0, 0, 0, 127);
		 imagefill($facebookicon, 0, 0, $transparent);
		 imagecopyresized($facebookicon, $facebookicon1, 0, 0, 0, 0, ($h/20), ($h/20),$w2, $h2);

		 
  $twittericon1 = imagecreatefrompng($twittericon);
 	   list($w2, $h2) = getimagesize($twittericon);
   	   $twittericon = imagecreatetruecolor(180, 180);
	   imagealphablending($twittericon, true);   			
	 	 $transparent = imagecolorallocatealpha($twittericon, 0, 0, 0, 127);
		 imagefill($twittericon, 0, 0, $transparent);
		 imagecopyresized($twittericon, $twittericon1, 0, 0, 0, 0, ($h/20), ($h/20),$w2, $h2);

$webicon1 = imagecreatefrompng($webicon);
 	   list($w2, $h2) = getimagesize($webicon);
   	   $webicon = imagecreatetruecolor(180, 180);
	   imagealphablending($webicon, true);    			
	 	 $transparent = imagecolorallocatealpha($webicon, 0, 0, 0, 127);
		 imagefill($webicon, 0, 0, $transparent);
		 imagecopyresized($webicon, $webicon1, 0, 0, 0, 0, ($h/20), ($h/20),$w2, $h2);


    $a=($w/22);

echo $h;
//	 imagecopy($image_p, $new,0 ,-66, 0, 0, imagesx($image_p), imagesy($image_p));
	   imagecopy($new,$stamp, 1,$h-(($h/9)+$upbarh), 0, 0, imagesx($stamp), imagesy($stamp));      
       imagecopy($new, $upbar, 0, $h-($h/6), 0, 0, imagesx($upbar), imagesy($upbar));



	   //imagecopy($new, $upbar, 0, 0, 80, 80, imagesx($upbar), imagesy($upbar));
	//   imagecopy($new, $facebookicon, 30,$h-39, 0, 0, imagesx($facebookicon), imagesy($facebookicon));
	//   imagecopy($new, $twittericon, 205,$h-39, 0, 0, imagesx($twittericon), imagesy($twittericon));
  //	   imagecopy($new, $facebookicon, 380, $h-39, 0, 0, imagesx($facebookicon), imagesy($facebookicon));

 //echo $h-(($h/9)+$upbarh);
  //echo  imagesx($stamp);
//echo   $h-(($h/11)+$upbarh );
//echo $upbarh;

  //facebook icon width position $a=($w/22)
      

$text_color1=imagecolorallocate($new, 0,0,0);
   $texth=$upbarh/3;
   echo $texth;
  //echo (14*$h)/15;
     //facebook url height formula (Height-(Height/34))
	   imagettftext($new, 25, 0, ($a+($h/20)+5), ($h-($h/20)), $text_color1, $font2,"MONDAY MORNING");
	   imagettftext($new, 25, 0, ($a+($h/20)+395), ($h-($h/20)), $text_color1, $font2,"ORAGNIC BUFFET");
    
	   imagettftext($new, $texth-7, 0, (($a*7)+($h/20)+5),($h-($h/34)), $text_color, $font2,$twitterurl); 
//imageline ( resource $image , int $x1 , int $y1 , int $x2 , int $y2 , int $color );


	  $textEdit = substr($text, 0, 58);
        if (count(explode('.', $textEdit)) > 1) {
            $dot = strrpos($textEdit, ".");
            $textEdit1 = substr($text, 0, $dot + 1);
        } else {
            $textEdit1 = $textEdit;
        }

        $textFinal = wordwrap($textEdit1, 58);
	$text2= strtoupper($textFinal);

//echo "height".$h.'<br/>';
  
 // echo "textheight".$texth;
 //echo ($h-($h/12));
 //echo (($h-($h/12))+(($h/12)/6));
 // echo (($h-($h/12))-(($h-($h/12))/6));
//  echo (($h-($h/12))-($h/72.5));
 
   imagettftext($new, $texth-2, 0, 20, ($texth*2), $text_color, $font2,$text2);

//imageline ($new , 10, 10, 250, 300, $text_color );
   $black = ImageColorAllocate($new, 255, 255, 255);
$blue = ImageColorAllocate($new, 0, 0, 255);
 
// define the dimensions of our rectangle
$r_width = 500;
$r_height = 350;
$r_x = 500;
$r_y = 350;
 
ImageRectangle($new, $r_x, $r_y, $r_x+$r_width, $r_y+$r_height, $black);

    // Save the picture
 
 
    
		
        imagejpeg($new, $public_file_path . '/design1.jpg', 100); 
    imagedestroy($new); 
 }
 ?>