<?php 
require_once ("model/db-connection.php");
require_once ("model/Wine.php");

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

//if (isset($_SESSION["admin"]))

if (isset($_REQUEST["addWine"])) {
  $wine = new Wine();

  $wine->name = $_REQUEST["name"];
  $wine->colour = $_REQUEST["colour"];
  $wine->flavour = $_REQUEST["flavour"];
  $wine->description = $_REQUEST["description"];
  $wine->bottleSize = $_REQUEST["bottleSize"];
  $wine->costPerBottle = $_REQUEST["costPerBottle"];
  $wine->countryOfOrigin = $_REQUEST["country"];
  $wine->quantity = $_REQUEST["quantity"];
  $wine->img = $_FILES['image']['name'];
  $uploaddir = __DIR__.'/../img/product/';
  $uploadfile = $uploaddir . basename($_FILES['image']['name']);
  move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
  addWine($wine);
}

if (isset($_REQUEST["deleteWine"])) {
  $wineID = $_REQUEST["wineID"];
  deleteWine($wineID);
}
  
  if (isset($_REQUEST["page"])) {
  $page = $_REQUEST["page"];
} else {
  $page = 1;
}
$postPer = 10;
$wines = getPageOfWine($page, $postPer);
$countries = getWineCountries();

?>