<?php
include('conn.php');
var_dump($_POST);

#create time
$date = date("Y-m-d");
$time = date("h:i:sa");
$id   = rand(40,10000);
#create sql string
$sql = "INSERT INTO posts VALUES ('".$_SESSION['username']."', '".$_POST['msg']."', '".$_POST['title']."', '".$date."', '".$time."', '".$id."')";

#conditional rendering
if ($conn->query($sql) === TRUE) 
{
    header('location: home.php');
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

