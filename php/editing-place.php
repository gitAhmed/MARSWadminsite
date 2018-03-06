<?php
session_start();
require_once ("config.php");


$id = $_GET['id'];
$name = $_POST['name'];
$weight = $_POST['weight'];


$query = "UPDATE place SET name='$name', weight='$weight' WHERE `id`='$id' ";
  mysqli_query($con, $query) or die('Error, asdasddquery failed');


header("Location: ../places.php?succ= <b>You<b> successfully updated place information. ");




?>
