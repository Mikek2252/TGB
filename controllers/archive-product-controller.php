<?php 
  require_once ("model/db-connection.php");
  require_once ("model/Wine.php");
if (session_status() == PHP_SESSION_NONE) {
  session_start();
    }

  $wines = getAllWines();
  $countries = getWineCountries();
?>
