<!--เชื่อมต่อ DB-->
<?php

$host = "localhost";
$username = "cjlinfoc";
$password = "333cjChowjung";
$dbname = "cjlinfoc_pricelist";
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	error_reporting(E_ALL ^ E_NOTICE);
	error_reporting( error_reporting() & ~E_NOTICE );
}
error_reporting(E_ALL ^ E_NOTICE);
	error_reporting( error_reporting() & ~E_NOTICE );
?>