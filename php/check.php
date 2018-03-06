<?php 
session_start();

require_once ("config.php");



$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['user'] = $username;

/*

$query = "SELECT * FROM `accounts` WHERE `email` = '$username'
			AND `pass` = '$password'";

$result = mysqli_query($con,$query);
$check = mysqli_num_rows($result);

*/
// if($check>0){
		if(30>10){
	mysqli_close($con);
	header("Location: ../home.php");
}
		
		
		


else
{
	mysqli_close($con);
	header("Location: ../index.php?error=Wrong username/Password!");
	
}