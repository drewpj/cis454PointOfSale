<?php

//credentials for database connection.
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "cis454";

//Establish connection to database.
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword,$dbName);

//If connection fails
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}