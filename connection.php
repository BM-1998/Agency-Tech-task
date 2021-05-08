<?php 

$server = "localhost";
$username = "root";
$password = "";
$dbname = "movies";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(mysqli_connect_errno()){

	echo "failed to coonect";
	exit();
}
echo "connection succedfull";

 ?>