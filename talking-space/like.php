<?php

include('conn.php');
var_dump($_GET);

#create date-time
$date = date("Y-m-d");
$time = date("h:i:sa");
#create sql string
$sql = "INSERT INTO likes VALUES (".$_GET['post-id'].",".$_GET['user-name'].",'".$date."','".$time."');";

#conditional rendering
if ($conn->query($sql) === TRUE) 
{
    header('location: posts.php');
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>