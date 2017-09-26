<?php
 header( 'Content-Type: text/html; charset=utf-8' ); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$myarray=array();


$siva=$_GET['phonenumber'];
// echo $siva;

$connection = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($connection, 'utf8');
// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
//$rows = array();
$sql = "SELECT  * FROM mytable3 where phone_number=".$siva."  OR phonenumber=".$siva."";
$result = mysqli_query($connection, $sql); 
$l=mysqli_num_rows($result);
if ($l>0) {
    
  $i=0;
    while($row = mysqli_fetch_assoc($result)) {
    	$myarray[$i]['farmerid']=$row['farmername'];
    	$myarray[$i]['email']=$row['fathername'];
    	//print_r($myarray);
       $i++;
    }
   	
    	

} else { 
    echo "0 results";
}
echo json_encode($myarray);


mysqli_close($connection);
?>
