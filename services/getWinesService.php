<?php
header('Content-Type: application/json');
require_once ("../model/db-connection.php");
require_once ("../model/wine.php");

$price;
$colour;
$flavour;
$country;

$price = $_REQUEST['price'];
$colour = $_REQUEST['colour'];
$flavour = $_REQUEST['flavour'];
$country = $_REQUEST['country'];

echo getWinesJSON($colour, $flavour, $country, $price);
?>
