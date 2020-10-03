<?php 

	$errors= array();
	print_r($_GET);
	if(isset($_GET['submit']))
	{
		$languages = array();
		$name=$_GET['name'];
		$mail=$_GET['email'];
		$pass=$_GET['pass'];
		$gender=$_GET['gender'];


		if(empty($name))
		{
			array_push($errors, 'name');
			#echo "ENTER EMAIL";
		}

		if(empty($mail))
		{
			array_push($errors, 'email');
			#echo "ENTER EMAIL";
		}
		if(empty($pass))
		{
			array_push($errors, 'pass');
			#echo "ENTER PASS";
		}

		if(empty($gender))
		{
			array_push($errors, 'gender');
			#echo "ENTER PASS";
		}
		if(isset($_GET['html']))
		{
				array_push($languages,'html');
		}
		else
		{
			array_push($errors, 'html');
		}

		if(isset($_GET['css']))
		{
				array_push($languages,'css');
		}
		if(isset($_GET['java']))
		{
				array_push($languages,'java');
		}
		if(isset($_GET['php']))
		{
				array_push($languages,'php');
		}


		if(count($errors)==0)
		{
			echo "hi " . $name;
			foreach ($languages as $language) {
				echo $language ."<br>";
				# code...
			}
		}
	}
	if(!isset($_GET['submit']) || count($errors)>0)
	{

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		req
	</title>
</head>
<body>
	
	<form action="get.php" method="get">
		Name<br>
		<span style="color:red;"><?php if( in_array('name', $errors) ){ echo 'Name is required'; } ?></span>
		<input type="text" value="<?php if( isset( $_GET['name'] ) ){ echo $_GET['name'];}?>" name="name"><br>
		
		</input>
		Email<br>
		<span style="color:red"> <?php if(in_array('email',$errors)) {echo "Email is required";}?></span>
		<input type="text" value="<?php if(isset($_GET['email'])){echo $_GET['email'];}?>" name="email"><br></input>
		Password<br>
		<span style="color:red"> <?php if(in_array('pass',$errors)) {echo "Password is required";}?></span>
		<input type="password" value= "<?php if(isset($_GET['email'])){echo $_GET['email'];}?>" name="pass"><br></input>
		<br>
		
		<span style="color: red" ><?php if(in_array('gender', $errors)){echo " GEnder is req bro";}?></span>
		<select name ="gender">
			<option selected value="">select your Gender</option>
			<option  value="male" <?php if(isset($_GET['gender'])  && $_GET['gender']=="male" ) {echo "selected";}?>>MALE</option>
			<option value="female" <?php if(isset($_GET['gender'])  && $_GET['gender']=="female" ) {echo "selected";}?>>FEMALE</option>
		</select>
		<br>
		<br>
		<p>languages you know??</p>
		<div  >
			<span style="color:red;"><?php if( in_array('html', $errors) ){ echo 'HTML is required'; } ?> </span><br> 
			<input type="checkbox" name="html" value="html"  <?php  if( isset($_GET['html'])){echo "checked";}   ?> >HTML</input>
			<input type="checkbox" name="css" value="css" <?php  if( isset($_GET['css'])){echo "checked";}   ?>  >CSS</input>
			<input type="checkbox" name="java" value="java"<?php  if( isset($_GET['java'])){echo "checked";}   ?> >java</input>
			<input type="checkbox" name="php" value="php"<?php  if( isset($_GET['php'])){echo "checked";}   ?> >php</input>

		</div>
		<input type="submit" value="submit" name="submit">

	</form>



</body>
</html>

<?php
}
?>
