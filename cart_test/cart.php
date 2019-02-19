<?php
session_start();
//This entire page is for processing the order and adding it to the cart. 
//We are sent to this page when the button "Add to cart" is clicked.

//Store the order sent in the variable $order.
$order =  $_POST['order'];

//Check if the session currenly has 'cart' declared.
if (!isset($_SESSION['cart'])) {
    //If not declared, set it to an array.
    $_SESSION['cart'] = array();
    //Print Message.
    echo("Cart is empty! Initialized to empty cart and added $order! <br> <br>");
    //Store the reference to the session cart array in $cart. THE & IS IMPORTANT!
    $cart = &$_SESSION['cart']; 
    //Add the order to the array.
    array_push($cart, $order);
} else {
    //If session is declared.
    //Store the reference to the session cart array in $cart. THE & IS IMPORTANT!
    $cart = &$_SESSION['cart']; 
    //Add the order to the array.
    array_push($cart, $order);
    //Print Message.
    echo("Added $order to cart! Here are the items in your cart so far: <br> ");
    //Use a loop to print out every item in the array.
    foreach($cart as $item) {
        echo($item . "<br>");
    }
}

//Helpful navigational links.
echo('<a href="index.html"> go back </a> <br>');
echo('<a href="clear.php"> clear cart </a>');
