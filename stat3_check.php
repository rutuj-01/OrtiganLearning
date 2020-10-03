<?php

if(isset($_GET['submit']))
{	
	$email="rutuj";
	$password="12345";
	
	if($_GET['name']==$email && $_GET['pass']==$password )
	{	
		session_start();
		$_SESSION['name']=$email;
		#$_SESSION['password']=$password;
		header("location: stat3_home.php");
	}
	else
	{
		echo "invalid cred";
	}
	
}



?>
