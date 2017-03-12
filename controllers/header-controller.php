<?php

if (isset($_SESSION["loggedInUser"])) {
  $wishlist = $["loggedInUser"]->wishlist;
  $basket = $["loggedInUser"]->basket;
} else if (isset($_SESSION["wishlist"])) {
  $wishlist = $_SESSION["wishlist"];
  $basket = $_SESSION["basket"];
} else {
  $wishlist = [];
  $basket = [];
}
?>