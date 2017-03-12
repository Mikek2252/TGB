<?php
require_once ("model/db-connection.php");
require_once ("model/Customer.php");
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (!isset($error)) {
  $error = "";
}

if (isset($_SESSION["loggedInUser"])) {
  header('Location: ../index.php');
} else if (isset($_REQUEST["loginbutton"])) {
  $username = $_REQUEST["username"];
  $password = $_REQUEST["password"];
  $currentuser = getCustomer($username, $password);
  if ($currentuser) {
    $_SESSION["loggedInUser"] = $currentuser;
    header('Location: ../index.php');
  }
  
}
?>