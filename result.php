<?php
	session_start();
	;
?>
<html>
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<!--BOOTSTRAP-->
	
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">



	<title>RESULT</title>

<body>


<div class="container">

  <form method = "POST" autocomplete="off"  name="submit-to-google-sheet" id="submit-to-google-sheet">
    <!--Heading><p>One-Captcha</p>
    <input type="email" placeholder="Email"><br>
    <input type="password" placeholder="Password"><br> -->
	
	
		
		<div>
			<div>
				<label>Name</label>
				<textarea class="form-control form-control-sm mb-0" rows="1"  name="name" readonly ><?php echo $_SESSION['cname'];?></textarea>	
			
			</div>
			<div>
				<label>E-mail</label>
				<textarea class="form-control form-control-sm mb-0" rows="1"  name="email" readonly ><?php echo $_SESSION['cemail'];?></textarea>	
			</div>
			<div>
				<label>Current Score</label>
				<textarea  class="form-control form-control-sm mb-0" rows="1"  name="score" readonly ><?php echo $_SESSION['score'];?></textarea>
			</div>
			<div>
				<label>Negative  Score</label>
				<textarea  class="form-control form-control-sm mb-0" rows="1"  name="n-score" readonly ><?php echo $_SESSION['n-score'];?></textarea>
			</div>
			
			<button class="btn btn-outline-primarytype=" submit">Send</button>
			
		</div>	
	<div>		
      </form>
		<div class="drops">
			<div class="drop drop-1"></div>
			<div class="drop drop-2"></div>    
			<div class="drop drop-4"></div>  
		</div>
	</div>
	
<script>



$("#submit-to-google-sheet").submit((e)=>{
            e.preventDefault()
            $.ajax({
                url:"https://script.google.com/macros/s/AKfycbw-7WN4mS1Z-JxwqQ8fBSi7EFtRReuYeDbXGMXc4Nq6JfPTzmB3/exec",
                data:$("#submit-to-google-sheet").serialize(),
                method:"post",
                success:function (response){
                    alert("Form submitted successfully");
					window.location.href = 'login.php'; 
                    
                    
                },
                error:function (err){
                    alert("Something Error")
    
                }
            })
        })
		
		</script>

</body>
</html>