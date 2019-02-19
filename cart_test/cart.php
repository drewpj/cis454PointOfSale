<?php
session_start();

$order =  $_POST['order'];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
    echo("Cart is empty! Initialized to empty cart and added $order! <br> <br>");
    $cart = &$_SESSION['cart']; 
    array_push($cart, $order);
} else {
    $cart = &$_SESSION['cart']; 
    array_push($cart, $order);
    echo("Added $order to cart! Here are the items in your cart so far: <br> ");
    foreach($cart as $item) {
        echo($item . "<br>");
    }
}

echo('<a href="index.html"> go back </a> <br>');
echo('<a href="clear.php"> clear cart </a>');
