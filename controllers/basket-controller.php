<?php 
require_once ("model/db-connection.php");
require_once ("model/Wine.php");
require_once ("model/Customer.php");
require_once ("model/BasketItem.php");
require_once ("model/Basket.php");


if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_REQUEST["addToBasket"])) {
  $wineID = $_REQUEST["wineID"];
  $quantity = $_REQUEST["quantity"];
    
    
    //Check if already in basket
    
    
  $item = new BasketItem();
  $item->wineID = $wineID;
  $item->quantity = $quantity;
  $item->wine = getWineByID($wineID);
  
  if (isset($_SESSION["loggedInUser"])) {
    $currentuser = $_SESSION["loggedInUser"];
    //addToBasket($item, $currentuser->customerID);
    
    //$basket = getBasket($currentuser->customerID);
  }
    if (!isset($_SESSION["basket"])) {
      $_SESSION["basket"] = [];
    }
    
      array_push($_SESSION["basket"], $item);
    //$_SESSION["basket"][] = $item;
    
}

if (isset($_REQUEST["deleteWine"])) {
    $removeWine = $_REQUEST["deleteWine"];
    for($i=0; $i< count($_SESSION["basket"]); $i++ ) {
        echo $i;
        if($removeWine === $_SESSION["basket"][$i]->wineID ) {
            unset($_SESSION["basket"][$i]);
        }
    }
}

$basket = $_SESSION["basket"];

?>