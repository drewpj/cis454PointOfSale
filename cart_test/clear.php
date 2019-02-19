<?php
//Start session. Important!
session_start();
//Remove the array from the session. Don't do sesson_destroy() as it'll mess with the login system.
unset($_SESSION['cart']);
//Send user back to the main page.
header("Location: index.html");