<?php 
require_once ("model/db-connection.php");
require_once ("model/Wine.php");

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

//if (isset($_SESSION["admin"]))
if (isset($_REQUEST["page"])) {
  $page = $_REQUEST["page"];
} else {
  $page = 1;
}
$postPer = 20;
$wines = getPageOfWine($page, $postPer);


?>