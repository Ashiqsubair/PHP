<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Create database
// try{
//     $dbCreate = "CREATE DATABASE ashiqDB2";
//     if ($conn->query($dbCreate) === TRUE) {
//     echo "Database created successfully";
//     } 
//     else {
//     echo "Error creating database: " . $conn->error;
//     }
// }
// catch(Exception $e){
//     echo "error" .$conn->error;
// }
try{
    $dbname = "ashiqDB2";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $tableCreate = "CREATE TABLE MyTable(id int, name2 varchar(30), age int)";
    // if($conn->query($tableCreate)==true){
    //     echo "Table created";
    // }
    // else{
    //     echo "Table creation has error" . $conn->error;
    // }
}
catch(Exception $e){
    echo "error" .$conn->error;
}
//$tableInsert = "INSERT INTO mytable(id,name,age) VALUES(1,'Ashiq',24)";
// $tableInsert = "INSERT INTO mytable(id,name,age) VALUES(2,'Fatima',22)";



// $tableInsert = "INSERT INTO mytable(id,name,age) VALUES(3,'Ahmed',22);";
// $tableInsert .= "INSERT INTO mytable(id,name,age) VALUES(4,'Aromal',22);";
// $tableInsert .= "INSERT INTO mytable(id,name,age) VALUES(5,'Ahmz',22);";
// $tableInsert .= "INSERT INTO mytable(id,name,age) VALUES(6,'Ashin',22);";
// $tableInsert .= "INSERT INTO mytable(id,name,age) VALUES(7,'Reyvanth',22)";

// if($conn->multi_query($tableInsert)==true){
//     echo "Insertion table successfull".$conn->insert_id;
// }
// else{
//     echo "Insertion into table not successfull";
// }
$selectQuery = "SELECT * FROM mytable";
$result = $conn->query($selectQuery);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "id: " . $row['id'] . " name: " . $row['name'] . " age:" . $row['age']."<br>";
    }
}//connection
else{
    echo "No data on table";
}

echo "After deletion<br>";
//deletion  from table 

$deletequery = "delete from mytable where id=3";
if($conn->query($deletequery)==true){
    $selectQuery = "SELECT * FROM mytable";
    $result = $conn->query($selectQuery);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo "id: " . $row['id'] . " name: " . $row['name'] . " age:" . $row['age']."<br>";
    }
    }
}
$conn->close();//connection closing
?>