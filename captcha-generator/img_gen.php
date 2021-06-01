<?php

//STARTING  SESSION
  //GENERATING RANDOM 4 CHARACTER FOR CAPTCHA
    $string='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefhijklmnopqrstuvwxyz1234567890';
    $string_shuff=str_shuffle($string);
    $text=substr($string_shuff,0,4);

  //STARTING AND CREATING SESSION
    session_start();
    $_SESSION['secure']=$text;
	
	echo($text);

//GETTING SESSION VARIABLE
  $text=$_SESSION['secure'];
  
$im = imagecreate(200, 60);


imagecolorallocate($im, 255, 255, 255);
$white=imagecolorallocate($im, 255, 255, 255);



//FOR LOOP FOR CREATING RANDOM LINES
  for($i=1; $i<=30;$i++){
    //RANDOM STARTING AND ENDING POSITION
      $x1= rand(1,150);
      $y1= rand(1,150);
      $x2= rand(1,150);
      $y2= rand(1,150);
    //RANDOM COLOR
      $r=rand(0,255);
      $g=rand(0,255);
      $b=rand(0,255);
      $font_color = imagecolorallocate($im, $r ,$g, $b);
    //CREATING RANDOM LINES
      imageline($im,$x1,$y1,$x2,$y2,$font_color);


  }



//FOR LOOP FOR CREATING TEXT
  for ($i=1; $i<=4;$i++){
    //CREATING RANDOM FONT-SIZE
      $font_size=rand(35,45);
    //FOR RANDOM COLOUR
      $r=rand(0,255);
      $g=rand(0,255);
      $b=rand(0,255);
    //RANDOM INDEX FOR RANDOM TEXT FONT
      $index=rand(1,10);
	  $dir="https://captchatyping.herokuapp.com/captcha-generator/fonts/".$index.'.ttf';
	 
	   
	 

//	 $font='C:\xampp\htdocs\Captcha_Generator-master\captcha-generator\fonts/'.$index.'.ttf';
    //RANDOM POSITION AND ORIANTION
      $x=15+(30*($i-1));
      $x=rand($x-5,$x+5);
      $y=rand(35,40);
      $o=rand(-30,30);
    //RANDOM FONT COLOR
      $textcolor = imagecolorallocate($im, $r ,$g, $b);
    //CREATING IMAGE USING DIFFETENT FONTS
      
	 
	 imagettftext($im, $font_size, $o, $x, $y ,  $textcolor,$dir,$text[$i-1]); 
	  
  }











ob_clean();
// Output the image
header('Content-type:image/png');

imagepng($im);
imagedestroy($im);


?>
