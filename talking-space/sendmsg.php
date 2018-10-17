<?php
include('conn.php');
var_dump($_POST);

#create time
$date = date("Y-m-d");
$time = date("h:i:sa");
$id   = rand(40,10000);
#create sql string
$sql = "INSERT INTO messages VALUES ('".$id."', '".$_POST['msg']."', '".$_SESSION['username']."', '".$_POST['user']."', '".$date."', '".$time."')";

#conditional rendering
if ($conn->query($sql) === TRUE) 
{
    header('location: posts.php');
} 
else 
{
    header('location: home.php');
}

?>

