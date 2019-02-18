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

$user_email = $_GET['email'];
$user_password = $_GET['pwd'];

echo($user_password);
echo($user_password);
//hellothere
$sql = "SELECT user_firstname, user_lastname FROM dbo.User454 WHERE user_email='$user_email' AND PWDCOMPARE('$user_password', user_password) = 1"; //AND PWDCOMPARE(N'$pwd', user_password) = 1";
//SELECT * FROM User454 WHERE user_email='janedoe@gmail.com' and PWDCOMPARE('hellothere', user_password) = 1
$result = sqlsrv_query($conn, $sql);
echo ("Reading data from table" . PHP_EOL);
if (sqlsrv_num_rows($result) == 1) {
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









