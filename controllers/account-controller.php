<?php
require_once ("model/db-connection.php");
require_once ("model/Customer.php");
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}


