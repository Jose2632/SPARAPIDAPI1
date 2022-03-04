<?php 
$mysqli = new mysqli("localhost", "root", "", "countries");
if (mysqli_connect_errno()) {
	printf("Fall¨® la conexi¨®n: %s\n", mysqli_connect_error());
	exit();
}  
 ?>