<?php
  class ShoppingListItem {
    private $wineID;
    private $customerID;
    private $dateAdded;

    function __get($name) {
      return $this->$name;
    }

    function __set($name,$value) {
      $this->$name = $value;
    }
  }
?>
