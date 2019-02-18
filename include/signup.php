<?php 
//include config file for db connection.
include_once 'db.php';

#Store inputs from the form in php variables.
$user_type = "customer";
$user_card = 123456789;
$user_firstname = mysqli_real_escape_string($conn,$_POST['first']);
$user_lastname = mysqli_real_escape_string($conn,$_POST['last']);
$user_email = mysqli_real_escape_string($conn,$_POST['email']);
$user_password = mysqli_real_escape_string($conn,$_POST['pwd']);

$sql = "INSERT INTO dbo.User454 (user_type, user_card, user_firstname, user_lastname, user_email, user_password) VALUES ('$user_type', '$user_card', '$user_firstname', '$user_lastname', '$user_email', '$user_password')";
$result = sqlsrv_query($conn, $sql);

if ($result) {
    header("Location: index.php?signup=success");
} else {
    header("Location: index.php?signup=error");
}
