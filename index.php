<?php 
    include_once 'db.php';
?>

<!DOCSTYLE html>
<html>
        <head>
            <meta charset="UTF-8">
            <title> yeetus maximus </title>
        </head>
</html>

<body>

    <form action="signup.php" method="POST">
        <input type="text" name="first" placeholder="firstname"> 
        <br>
        <input type="text" name="last" placeholder="lastname">
        <br>
        <input type="text" name="email" placeholder="e-mail">
        <br>
        <input type="text" name="uid" placeholder="Username">
        <br>
        <input type="text" name="pwd" placeholder="password">
        <br>
        <button type="submit" name="submit"> sign up </button>
    </form>

        

</body>


