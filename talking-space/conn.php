<?php
session_start();

// Declaring database constants
$servername = "localhost";
$serveruser = "root";
$serverpass = "";
$dbname = "talking-space";

//Create the database connection
$conn = new mysqli($servername, $serveruser, $serverpass,$dbname );

if(isset($_SESSION['username']))
{
	
}
else
{
   header('location: index.php');
}


?>