<?php
#include conn
include('conn.php');

#create sql string
$sql = "INSERT INTO users VALUES ('".$_POST['user_name']."', '".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."')";

#conditional rendering
if ($conn->query($sql) === TRUE) 
{
    #render to session
    $_SESSION['name']       = $_POST['name'];
    $_SESSION['username']   = $_POST['user_name'];
    $_SESSION['email']      = $_POST['email'];
    $_SESSION['msg']        = "New record created successfully";
    header("location: login.php");
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>