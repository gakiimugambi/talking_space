<?php
include('conn.php');
var_dump($_POST);

#create time
$date = date("Y-m-d");
$time = date("h:i:sa");
$id   = rand(40,10000);
#create sql string
$sql = "INSERT INTO comments VALUES ('".$id."', '".$_POST['comment']."', '".$_SESSION['username']."', '".$_POST['postid']."', '".$date."', '".$time."')";

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

