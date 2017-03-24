<?php 
require_once ("model/db-connection.php");
require_once ("model/Wine.php");

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_REQUEST["editWine"])) {
  $wineID = $_REQUEST["wineID"];
  $name = $_REQUEST["name"];
  $colour = $_REQUEST["colour"];
  $flavour = $_REQUEST["flavour"];
  $description = $_REQUEST["description"];
  $bottleSize = $_REQUEST["bottleSize"];
  $costPerBottle = $_REQUEST["costPerBottle"];
  $country = $_REQUEST["country"];
  
  $changedWine = array(
    "wineID" => $_REQUEST["wineID"],
    "name" => $_REQUEST["name"],
    "colour" => $_REQUEST["colour"],
    "flavour" => $_REQUEST["flavour"],
    "description" => $_REQUEST["description"],
    "bottleSize" => $_REQUEST["bottleSize"],
    "costPerBottle" => $_REQUEST["costPerBottle"],
    "countryOfOrigin" => $_REQUEST["country"]
  );
  
  updateWine($changedWine);
}



if (isset($_REQUEST["wineID"])) {
  $wine = getWineByID($_REQUEST["wineID"]);
} else {
  header('Location: ../wine-manage.php');
}


?>