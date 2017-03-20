<?php 
require_once ("model/db-connection.php");
require_once ("model/Wine.php");

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_REQUEST["wineID"])) {
  $wine = getWineByID($_REQUEST["wineID"]);
} else {
  header('Location: ../404.php');
}

?>