<?php
session_start();

?>						
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<body>

<style>
#clockdiv{
	font-family: sans-serif;
	color: #fff;
	display: inline-block;
	font-weight: 100;
	text-align: center;
	font-size: 30px;
}

#clockdiv > div{
	padding: 10px;
	border-radius: 3px;
	background: #cda7d9;
	display: inline-block;
}

#clockdiv div > span{
	padding: 15px;
	border-radius: 3px;
	background: #de0da3;
	display: inline-block;
}

.smalltext{
	padding-top: 5px;
	font-size: 16px;
}
</style>


<div id="clockdiv" >  
  <div>
    <span class="countdown"></span>
    <div class="smalltext">Time Left</div>
	<div class="smalltext"></div>
  </div>
</div>



<div class="container">

  <form method = "POST" autocomplete="off" >
    
	<div >
		<div id="ae_captcha_api"></div>
	</div>	
	
		<div><input type="text" placeholder = "Enter Captcha" name="user_input"/></div>
		<div><input type="submit" formaction="./validate.php" value = "SUBMIT"/></div>
		<div><input type="submit" onclick="newcaptcha()" value = "SKIP"/></div>
		<div>
			<label>Current Score</label>
			<?php
					
			echo "<div>".$_SESSION['score'];
				
			?>
		</div>
		<div>
			<label>Negative  Score</label>
			<?php			
			echo $_SESSION['n-score'];			
						
						
			?>
			
			
		</div>
		
		
			
      </form>
	  <div>
		<div class="drops">
			<div class="drop drop-1"></div>
			<div class="drop drop-2"></div>    
			<div class="drop drop-4"></div>  
		</div>
	</div>
<script src="./captcha-generator/asset/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	
    $(document).ready(function() {
        var timer2 = localStorage.getItem('timer');
        if(timer2 === null) timer2 = "1:10";
        $('.countdown').html(timer2);

        var interval = setInterval(function() {
            var timer = timer2.split(':');
            var minutes = parseInt(timer[0], 10);
            var seconds = parseInt(timer[1], 10);
            --seconds;
            minutes = (seconds < 0) ? --minutes : minutes;
            if (minutes < 0){
                clearInterval(interval);
                localStorage.removeItem('timer');
                window.location.href = "result.php";
            }else{
                seconds = (seconds < 0) ? 59 : seconds;
                seconds = (seconds < 10) ? '0' + seconds : seconds;
                $('.countdown').html(minutes + ':' + seconds);
                timer2 = minutes + ':' + seconds;
                localStorage.setItem('timer',timer2);
            }
        }, 1000);
    });

</script>
</body>