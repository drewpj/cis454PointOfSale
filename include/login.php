<?php 
session_start();
include_once 'db.php';

$uid = mysqli_real_escape_string($conn,$_POST['email']);
$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

$sql = "SELECT * FROM dbo.User454 WHERE user_email='$uid' and PWDCOMPARE('$pwd', user_password) = 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $uid;
    header('location: index.php?login=success');
} else {
    header('location: index.php?login=error');
}




