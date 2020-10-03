<?php

if(isset($_COOKIE['name'])){
	echo $_COOKIE['name']."<br>";
}

if(isset($_COOKIE['email'])){
	echo $_COOKIE['email']."<br>";
}

if(isset($_COOKIE['about'])){
	echo $_COOKIE['about']."<br>";
}

if(isset($_COOKIE['number'])){
	echo $_COOKIE['number']."<br>";
}
else{
	echo "EXPIRED";
}



?>
