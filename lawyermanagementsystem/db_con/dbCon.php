<?php
// Database connection using environment variables for Vercel deployment
// For local development, you can set these in a .env file or fallback to localhost

function connect($setup = FALSE){
    $servername = getenv("DB_HOST")   ?: "localhost";
    $username   = getenv("DB_USER")   ?: "root";
    $password   = getenv("DB_PASS")   ?: "";
    $database   = getenv("DB_NAME")   ?: "lawyermanagement";
    $port       = (int)(getenv("DB_PORT") ?: 3306);

    // Create connection
    if($setup)
        $con = new mysqli($servername, $username, $password, "", $port);
    else
        $con = new mysqli($servername, $username, $password, $database, $port);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    return $con;
}