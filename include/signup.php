<?php 
session_start();
//include config file for db connection.
include_once 'db.php';

#Store inputs from the form in php variables.
//$user_type = "customer";
//$user_card = 123456789;
//$user_firstname = mysqli_real_escape_string($conn,$_POST['first']);
//$user_lastname = mysqli_real_escape_string($conn,$_POST['last']);
//$user_email = mysqli_real_escape_string($conn,$_POST['email']);
//$user_password = mysqli_real_escape_string($conn,$_POST['pwd']);
$user_type = "customer";
$user_card = 123456789;
$user_firstname = $_POST['first'];
$user_lastname = $_POST['last'];
$user_email = $_POST['email'];
$user_password = $_POST['pwd'];

// $sql = "INSERT INTO dbo.User454 (user_type, user_card, user_firstname, user_lastname, user_email, user_password) VALUES ('$user_type', '$user_card', '$user_firstname', '$user_lastname', '$user_email', '$user_password')";
//$sql = "INSERT INTO dbo.User454 VALUES ('$user_type', '$user_card', '$user_firstname', '$user_lastname', '$user_email', '$user_password')";
$sql = "INSERT INTO dbo.User454 (user_type, user_card, user_firstname, user_lastname, user_email, user_password) VALUES ('$user_type', $user_card, '$user_firstname', '$user_lastname', '$user_email', PWDENCRYPT('$user_password'))";
$result = sqlsrv_query($conn, $sql);

if ($result) {
    echo("Success");
    header("Location: index.php?signup=success");
} else {
    echo("error");
    header("Location: index.php?signup=error");
}
