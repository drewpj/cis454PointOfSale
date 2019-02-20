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
    echo("Logged in successfully!");
    //Set session variable email to $user_email
    $_SESSION['email'] = $user_email;
    //Get row results
    $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
    //Set user_type and user name variables.
    $type = $row['user_type'];
    $name = $row['user_firstname'] . " " . $row['user_lastname'];
    //Bind them to the session.
    $_SESSION['type'] = $type;
    $_SESSION['name'] = $name;
    header("Location: ../HomePage.php?login=success");
//Otherwise, say password or username error.
} else {
    //Error message if wrong password.
    $message = "Wrong password or username!";
    echo("<script type='text/javascript'> alert('$message'); </script>");
}












