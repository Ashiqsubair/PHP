<?php
$host = 'localhost:3306';  

$user = 'root';  

$pass = '';  

$dbname = 'ashwin';  

$conn = mysqli_connect($host, $user, $pass,$dbname);  

if(!$conn){  

  die('Could not connect: '.mysqli_connect_error());  

}  

echo 'Connected successfully<br/>'; 



$sql= "DROP TABLE student";

if(mysqli_query($conn, $sql)) 
{
   echo("This table has been deleted.");
}else{
   echo("This table has not been deleted.");
}

?>
