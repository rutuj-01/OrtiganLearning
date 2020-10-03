<?php
session_start();
#var_dump($_SESSION);
if(isset($_SESSION['name'] ))
{
	echo $_SESSION['name']."<br>";

?>
 <a href="stat3_logout.php"><button>LOGOUT</button></a>

<?php
}
else 
{
	echo "please login ";

}


?>