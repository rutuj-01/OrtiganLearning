<?php
  #print_r($_GET);
  $errors=array();

if(isset($_GET['submit']))
{
$name=$_GET['name'];
$email=$_GET['email'];
$number=$_GET['number'];
$state=$_GET['state'];
$city=$_GET['city'];
$about=$_GET['about'];


	if(empty($name))
	{
		array_push($errors, 'name');
	}
	if(empty($email))
	{
		array_push($errors, 'email');
	}
	if(empty($number))
	{
		array_push($errors, 'number');
	}
	if(empty($state))
	{
		array_push($errors, 'satte');
	}
	if(empty($city))
	{
		array_push($errors, 'city');
	}
	if(empty($about))
	{
		array_push($errors, 'about');
	}
	if(strlen($about) >10)
	{
		array_push($errors, 'about');
	}

	if(count($errors)==0)
{	
	setcookie('name',$name,strtotime("+1 minute"));
	setcookie('email',$email,strtotime("+1 minute"));
	setcookie('number',$number,strtotime("+1 minute"));
	setcookie('state',$state,strtotime("+1 minute"));
	setcookie('about',$about,strtotime("+1 minute"));
}

}

if(!isset($_GET['submit']) || count($errors)>0)
{

?>


<!DOCTYPE html>
<html>
<head>
	<title>FORM FILLING</title>
</head>
<body>

	<form action="statement1.php"  method="get">
		<label>Name</label>
		<br>			
		<span style="color: red"><?php  if(in_array('name',$errors))  {echo "NAME IS REQUIRED";} ?>  </span>
		<input type="text" name="name" value="<?php if(isset($_GET['name'])){echo $_GET['name'] ;}?>" >
		<br>	
		<label >email</label>
		<br>
		<span style="color: red"> <?php if(in_array('email', $errors)){echo "EMAIL REQUIRED";} ?></span>
		<input type="email" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>">
		<br>
		<span style="color: red"> <?php if(in_array('number', $errors)){echo "contact REQUIRED";} ?></span>
		<label >number</label>
		<br>
		<input type="text" name="number" value="<?php if(isset($_GET['number'])){echo $_GET['number'];} ?>">
		<br>
		<label>city</label>
		<br>
		<input type="text" name="city">
		<br>
		<label >state</label>
		<br>
		<input type="text" name="state">
		<br>
		<span style="color: red"> <?php if(in_array('about', $errors)){echo "It should be less than 10";} ?></span>
		<label >aBOUT  Yourself</label>
		<br>
		<input type="text" name="about"  value="<?php if(isset($_GET['about'])){ echo $_GET['about']; }?>">
		<br>
		<input type="submit" value="submit" name="submit" >

	</form>
</body>
</html>
<?php

}
?>
