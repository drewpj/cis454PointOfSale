<?php 
//start session
session_start();
//Include config file for db connection.
include_once 'db.php';

#Store inputs from the form in php variables.
$user_type = "customer";
$user_card = 123456789;
$user_firstname = $_POST['first'];
$user_lastname = $_POST['last'];
$user_email = $_POST['email'];
$user_password = $_POST['pwd'];

//SQL statement that will be queried.
$sql = "INSERT INTO dbo.User454 (user_type, user_card, user_firstname, user_lastname, user_email, user_password) VALUES ('$user_type', $user_card, '$user_firstname', '$user_lastname', '$user_email', PWDENCRYPT('$user_password'))";
#Run a query to the connection.
$result = sqlsrv_query($conn, $sql);

#If query is successful, redirect to login page with signup code success
if ($result) {
    echo("Success");
    header("Location: ../login.html?signup=success");
//otherwise, signup code error. **modify later**
} else {
    echo("error");
    header("Location: ../login.html?signup=error");
}
