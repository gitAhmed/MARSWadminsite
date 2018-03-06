<?php

require_once ("config.php");


function randHash($len=32)
{
	return substr(md5(openssl_random_pseudo_bytes(20)),-$len);
}


$place = $_POST['place'];
$key = randHash(10);


$sql = "INSERT INTO `QRCode`(`place_id`, `randomKey`) VALUES ('$place','$key') ";
mysqli_query($con, $sql) or die('Error, query failed');

header("Location: ../qrcodesPage.php?succ= <b>QRCode for $place<b> successfully generated. ");


mysqli_close();


?>
