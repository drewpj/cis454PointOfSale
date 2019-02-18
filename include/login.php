<?php 
session_start();
$serverName = "samp454.database.windows.net"; // update me
$connectionOptions = array(
        "Database" => "CIS454", // update me
        "Uid" => "JGPrish", // update me
        "PWD" => "password!9" // update me
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

// $uid = mysqli_real_escape_string($conn,$_POST['email']);
// $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

$uid = $_POST['email'];
$pwd = $_POST['pwd'];


$sql = "SELECT * FROM dbo.User454 WHERE user_email='$uid' and PWDCOMPARE('$pwd', user_password) = 1";
//SELECT * FROM dbo.User454 WHERE user_email='janedoe@gmail.com' and PWDCOMPARE('hellothere', user_password) = 1
$result = sqlsrv_query($conn, $sql);

if (sqlsrv_num_rows($result) == 1) {
    $_SESSION['username'] = $uid;
    header('location: index.php?login=success');
} else {
    header('location: index.php?login=error');
}





