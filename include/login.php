<?php 
session_start();
include_once 'db.php';

$uid = mysqli_real_escape_string($conn,$_POST['email']);
$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

$sql = "SELECT * FROM dbo.User454 WHERE user_email='$uid' AND PWDCOMPARE('$pwd', user_password) = 1";
$result = mssql_query($conn, $sql);

if (mssql_num_rows($result) == 1) {
    $_SESSION['username'] = $uid;
    header('location: index.php?login=success');
} else {
    header('location: index.php?login=error');
}




