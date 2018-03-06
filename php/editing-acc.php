<?php
session_start();
require_once ("config.php");


$id = $_GET['account'];
$type = $_GET['type'];
$f_name = $_POST['form-first-name'];
$l_name = $_POST['form-last-name'];
$email = $_POST['form-email'];
$password = $_POST['password'];


if($type=='student'){
$query = "UPDATE student SET f_name='$f_name', l_name='$l_name', email='$email', password='$password' WHERE `id`='$id' ";
}

else{
	$query = "UPDATE instructor SET f_name='$f_name', l_name='$l_name', email='$email', password='$password' WHERE `id`='$id' ";
} 

  mysqli_query($con, $query) or die('Error, asdasddquery failed');


header("Location: ../accounts.php?succ= <b>You<b> successfully updated account information. ");




?>
