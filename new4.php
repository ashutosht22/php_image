 <?php
 	 
   //$stamp = imagecreatefrompng('logo1.png');
 $color="";
 $public_file_path = '.';
 $bgimage = './3.jpg';			  
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
 $font1 = $public_file_path . '/leaguespartan.ttf';
 $font2 = $public_file_path . '/leaguespartan.ttf';
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

  $text_color = imagecolorallocate($new, $textcolorR,$textcolorG,$textcolorB);


echo $h;

   $black = ImageColorAllocate($new, 255, 255, 255);
$blue = ImageColorAllocate($new, 0, 0, 255);
  $text_color = imagecolorallocate($new, $textcolorR,$textcolorG,$textcolorB);
// define the dimensions of our rectangle
$r_width = 600;
$r_height = 500;
$r_x = 250;
$r_y = 300;
ImageRectangle($new, $r_x, $r_y, $r_x+$r_width, $r_y+$r_height, $black);
$text="One of the best digital marketing software in the market.One of the best digital marketing software in the market.";
 $text="I LOVE OUR STORY. SURE IT'S MESSY, BUT IT'S THE STORY THAT GOT US HERE.I LOVE OUR STORY. SURE IT'S MESSY, BUT IT'S THE STORY THAT GOT US HERE.I LOVE OUR STORY. SURE IT'S MESSY, BUT IT'S THE STORY THAT GOT US HERE.";

  $text1 = substr($text, 0, 250);
   $dot =strrpos($text1,".");
   $text2 = substr($text, 0, $dot+1);
   if(strlen($text2)< 120){
    $newtext = wordwrap($text2, 26, " \n");  
 imagettftext($new, 28, 0, 282, 422, $text_color, $font2, $newtext);
 }else{
	 $newtext = wordwrap($text2, 30, " \n");  
 imagettftext($new, 22, 0, 282, 422, $text_color, $font2, $newtext);
 }
  imagettftext($new, 28, 0, 350, 900, $text_color, $font1, "Ashutosh Tiwari");
echo  $newtext;
    // Save the picture
 
        imagejpeg($new, $public_file_path . '/design3.jpg', 100); 
    imagedestroy($new); 
 }
 ?>