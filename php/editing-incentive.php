<?php
session_start();
require_once ("config.php");


$id = $_GET['id'];
$title = $_POST['title'];
$points = $_POST['points'];
$instructor = $_POST['instructor'];
$description = $_POST['description'];

$query = "UPDATE incentive SET title='$title', points='$points', instructor='$instructor', description='$description' WHERE `id`='$id' ";
  mysqli_query($con, $query) or die('Error, asdasddquery failed');


header("Location: ../incentives.php?succ= <b>You<b> successfully updated incentive information. ");




?>
