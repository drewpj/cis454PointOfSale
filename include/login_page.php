<?php
session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <title> login </title>
    </head>
    <body>
    <form action="login.php" method="GET">
        <h3> email </h3>
        <input type="text" name="email" placeholder="email">
        <h3>Password </h3>
        <input type="password" name="pwd" placeholder="password">
        <button type="submit" name="submit"> login </button>
    </form>
    
    </body>
</html>
