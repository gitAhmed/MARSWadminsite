<?php

define("DBHOST","localhost");
define("DBUSER","root");
define("DBPWD","a1423");
define("DBNAME","marsw");
$con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);

if(mysqli_connect_errno($con)){
	die("Fail to connect to database :".mysqli_connect_error());
}