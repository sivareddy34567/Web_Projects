


<?php

 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
header('Content-Type: text/html; charset=utf-8');	
 
// Create connection
$Connection = new mysqli($servername, $username, $password, $dbname);



if ($Connection->connect_error) {
    die("Connection failed: " . $Connection->connect_error);
} 

mysqli_set_charset($Connection,'utf8');
$sql = "SELECT * FROM mytable3";
$result = $Connection->query($sql);
// print_r($result);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
    	echo $row['fathername'];
    	// print_r(json_encode($row['fathername'])."<br>");
    }
} else {
    echo "0 results";
}
$Connection->close();
?>
