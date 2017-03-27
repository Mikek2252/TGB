<?php
require_once ("model/Wine.php");
require_once ("model/Customer.php");
require_once ("model/BasketItem.php");
require_once ("model/Basket.php");

if (isset($_SESSION["loggedInUser"])) {
    $currentuser = $_SESSION["loggedInUser"];
  $wishlist = $_SESSION["loggedInUser"]->wishlist;
  //$basket = $_SESSION["loggedInUser"]->basket;
} else if (isset($_SESSION["wishlist"])) {
  $wishlist = $_SESSION["wishlist"];
}
if(!isset($_SESSION["basket"])) {
  $basket = [];
} else {
 // $basket = new Basket();
}

$basket = $_SESSION["basket"];

?>