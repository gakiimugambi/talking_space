<?php
include('conn.php');
var_dump($_POST);


// sql to delete a record
$sqld = "DELETE FROM bio WHERE user ='".$_SESSION['username']."'";

if ($conn->query($sqld) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

#create time
$date = date("Y-m-d");
$time = date("h:i:sa");
$id   = $_POST['user'];
#create sql string
$sql = "INSERT INTO bio VALUES ('".$id."', '".$_POST['course']."', '".$_POST['faculty']."', '".$_POST['year']."', '".$_POST['current_workplace']."', '".$_POST['bio']."')";

#conditional rendering
if ($conn->query($sql) === TRUE) 
{
    header('location: me.php');
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

