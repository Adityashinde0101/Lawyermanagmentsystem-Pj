<?php
//Connect to database

function connect($setup = FALSE){
    $servername = "localhost";
    $username = "root";
    $password = ""; // Update this line with the correct password
    $database = "lawyermanagement";
    include_once 'db_con/dbCon.php';


    // Create connection
    if($setup)
        $con = new mysqli($servername, $username, $password);
    else
        $con = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    return $con;
}

