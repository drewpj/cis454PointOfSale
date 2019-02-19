<?php 
//start session
session_start();
$serverName = "samp454.database.windows.net"; // update me
$connectionOptions = array(
        "Database" => "CIS454", // update me
        "Uid" => "JGPrish", // update me
        "PWD" => "password!9" // update me
);
//Establishes the connection. If succesful, show success message.
$conn = sqlsrv_connect($serverName, $connectionOptions);
 if($conn) {
    echo "Connected!";
 }

 #Store email and password in php variables.
$user_email = $_POST['email'];
$user_password = $_POST['pwd'];

//SQL statement to be queried.
$sql = "SELECT user_firstname, user_lastname, user_type FROM dbo.User454 WHERE user_email='$user_email' AND PWDCOMPARE('$user_password', user_password) = 1"; //AND PWDCOMPARE(N'$pwd', user_password) = 1";

//Get result from query.
$result = sqlsrv_query($conn, $sql);

//If returns anything, then login is succesful.
if (sqlsrv_has_rows($result)) {
    $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
    echo("Logged in successfully!");
    $_SESSION['email'] = $user_email;
    // $value = sqlsrv_fetch_object($result);
    $type = $row[0];
    echo($type);
    //header("Location: ../HomePage.php?login=success");
//Otherwise, say password or username error.
} else {
    $message = "Wrong password or username!";
    echo("<script type='text/javascript> alert($message); </script>");
}












