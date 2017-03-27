<?php 
require_once ("model/db-connection.php");
require_once ("model/Wine.php");

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_REQUEST["editWine"])) {
  echo "time to edit";
  echo $_REQUEST["wineID"];
  $changedWine = new Wine();
  $changedWine->wineID = $_REQUEST["wineID"];
  $changedWine->name = $_REQUEST["name"];
  $changedWine->colour = $_REQUEST["colour"];
  $changedWine->flavour = $_REQUEST["flavour"];
  $changedWine->description = $_REQUEST["description"];
  $changedWine->bottleSize = $_REQUEST["bottleSize"];
  $changedWine->costPerBottle = $_REQUEST["cost"];
  $changedWine->countryOfOrigin = $_REQUEST["country"];
  $changedWine->quantity = $_REQUEST["quantity"];
  $wine->img = $_FILES['image']['name'];
  $uploaddir = __DIR__.'/../img/product/';
  $uploadfile = $uploaddir . basename($_FILES['image']['name']);
  move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
    
  updateWine($changedWine);
}

if (isset($_REQUEST["wineID"])) {
  $wine = getWineByID($_REQUEST["wineID"]);
} else {
  header('Location: ../wine-manage.php');
}
$countries = getWineCountries();

?>