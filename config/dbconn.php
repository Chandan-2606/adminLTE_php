<?php
$username="root";
$host="localhost:3306";
$password="";
$database="users";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
} 
// else {
//     echo "connected";
// }
?>
