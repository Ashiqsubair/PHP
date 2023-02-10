<?php
// database configurations

//HOST Specifies the host name of the DB server.
define('HOST', 'localhost');

//USER Specifies the user name to connect to the data base.
define('USER', 'root');

//Defines the password to connect to the database.
define('PASS', '');

//Defines the password to connect to the database.
define('DB', 'studentashiq');


//in the configuration setting above, we used the define() PHP function which is used to create a constant in php that cannot be changed or undefined.


//database connection
$con = mysqli_connect(HOST, USER, PASS, DB);

// Check connection
if (mysqli_connect_error()) {
    echo "Connection establishing failed!";
} else {
    echo "Connection established successfully.";
}