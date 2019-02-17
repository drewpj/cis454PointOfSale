<?php 
    session_start();
    include_once 'db.php';
    if (isset($_SESSION['username'])) {
        $user = $_SESSION['username']; 
        echo(" <h1> hi $user </h1> <br>");
    }
?>

<!DOCTYLE html>
<html>
    <link rel="stylesheet" type="text/css" href="createuser.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <head>
            <meta charset="UTF-8">
            <title> yeetus maximus </title>
        </head>
</html>

<body>

    <form action="signup.php" method="POST">
        <h3>Full Name </h3>
        <input type="text" name="first" placeholder="first name"> 
        <input type="text" name="last" placeholder="last name">
        <h3>Email </h3>
        <input type="text" name="email" placeholder="e-mail">
        <h3>Username </h3>
        <input type="text" name="uid" placeholder="Username">
        <h3>Password </h3>
        <input type="password" name="pwd" placeholder="password">
        <h3>Confirm Password</h3>
        <input type="password" name="pwd_confirm" placeholder="confirm assword">
        <br>
        <button type="submit" name="submit"> sign up </button>
    </form>

        

</body>