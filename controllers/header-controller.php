<?php

if (isset($_SESSION["loggedInUser"])) {
  $wishlist = $_SESSION["loggedInUser"]->wishlist;
  $basket = $_SESSION["loggedInUser"]->basket;
} else if (isset($_SESSION["wishlist"])) {
  $wishlist = $_SESSION["wishlist"];
  $basket = $_SESSION["basket"];
} else {
  $wishlist = [];
  $basket = [];
}
?>