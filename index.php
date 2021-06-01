<?php
session_start();
		$name="";
	  $_SESSION['score'] = 0;	  
	  $_SESSION['n-score'] = 0;	    
	  $name = $email  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);  
  header("location: ./example.php");
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<body>
<div class="container">

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    <p>LOGIN HERE</p>
    <div><input type="name"  name="name"  placeholder="Name" required></div>
	<div><input type="email" name="email" placeholder="Email" required></div>  	  	
	<div><input type="submit" name="submit" value="Submit"  >  </div>
   </form>	
			
<div>
  <div class="drops">
    <div class="drop drop-1"></div>
    <div class="drop drop-2"></div>
    <div class="drop drop-3"></div>
    <div class="drop drop-4"></div>    
  </div>
</div>

<?php

$_SESSION['cname'] = $name;
$_SESSION['cemail'] = $email;

?>
</body>