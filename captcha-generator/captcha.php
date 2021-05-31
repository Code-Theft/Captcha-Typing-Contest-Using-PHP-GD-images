<?php
//GENERATING RANDOM 4 CHARACTER FOR CAPTCHA
  $string='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefhijklmnopqrstuvwxyz1234567890';
  $string_shuff=str_shuffle($string);
  $text=substr($string_shuff,0,4);

//STARTING AND CREATING SESSION
  session_start();
  $_SESSION['secure']=$text;
?>
<div style="width: 220px;height: 120px;">
  <img src="./captcha-generator/img_gen.php"  style='width:100%;height:100px;padding-bottom:10px'>
</div>
