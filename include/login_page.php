<?php
session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <title> login </title>
    </head>
    <body>
    <form action="login.php" method="POST">
        <h3>Username </h3>
        <input type="text" name="uid" placeholder="Username">
        <h3>Password </h3>
        <input type="password" name="pwd" placeholder="password">
        <button type="submit" name="submit"> login </button>
    </form>
    
    </body>
</html>