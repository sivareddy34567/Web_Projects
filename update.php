<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
// Create 

$phonenumber=$_GET['phonenumber'];
$fathername=$_GET['fathername'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE mytable3 SET fathername='".$fathername."' where  phone_number=".$phonenumber;

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>