<?php
include('conn.php');

$sql = "SELECT * FROM users WHERE username = '". $_POST['user_name']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        if( $_POST['password'] == $row['password'] && $_POST['user_name']==$row['username'] )
        {
            $_SESSION['username']   = $row['username'];
            $_SESSION['email']      = $row['email_address'];
            $_SESSION['name']       = $row['name'];
            
            header('location: home.php');
        }
        
    }
} else 
{
    header('location: index.php');
}
?>