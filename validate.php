<?php 
	session_start();
	if($_SESSION['secure'] == $_POST['user_input'])
	{	  
	  ++$_SESSION['score'] ; 
	}
	else
	{	 	 
	  ++$_SESSION['n-score'];		
	}
	header("location: ./example.php");
?>