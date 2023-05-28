<?php

// connection details
error_reporting(E_ALL ^ E_DEPRECATED);
$head_hostname = "localhost:3306";
$head_user = "root";
$head_password = "";
$head_database = "healthcare_db";

// create connection
$conn = mysqli_connect($head_hostname, $head_user, $head_password, $head_database);

// check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to database: " . mysqli_connect_error();
} else {
    // echo "Database connection successful!";
}

?>
