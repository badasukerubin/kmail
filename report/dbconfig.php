<?php
$hostname_index = "localhost";
$database_index = "kely_local";
$username_index = "kely_local";
$password_index = "mylocal101";

$connection = mysqli_connect($hostname_index, $username_index, $password_index, $database_index);	
if(!$connection)
{
	print("Connection failed: " . mysqli_connect_error());
}
?>