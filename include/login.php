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
 if($conn) {
    echo "Connected!";
 }



// $uid = mysqli_real_escape_string($conn,$_POST['email']);
// $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

$uid = $_POST['email'];
$pwd = $_POST['pwd'];

//hellothere
$sql = "SELECT user_firstname, user_lastname FROM dbo.User454 WHERE user_email='$uid' AND PWDCOMPARE('$pwd', user_password) = 1";
//SELECT * FROM dbo.User454 WHERE user_email='janedoe@gmail.com' and PWDCOMPARE('hellothere', user_password) = 1
$result = sqlsrv_query($conn, $sql);
echo ("Reading data from table" . PHP_EOL);
if ($result) {
	echo("queried succesfully");
} else {
	echo("yerr this boy no work");
}

if ($result == FALSE)
    die(FormatErrors(sqlsrv_errors()));
while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
    echo ($row['user_firstname'] . " " . $row['user_lastname'] . " " . $row['user_email'] . PHP_EOL);
}
$_SESSION['username'] = $uid;









