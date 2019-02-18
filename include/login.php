<?php 
session_start();
include_once 'db.php';

$uid = mysqli_real_escape_string($conn,$_POST['uid']);
$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

$sql = "select * from users where user_uid='$uid' and user_pwd='$pwd'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $uid;
    header('location: index.php?login=success');
} else {
    header('location: index.php?login=error');
}


