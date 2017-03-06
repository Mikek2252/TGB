<?php
  class BasketItem {
    private $basketID;
    private $wineID;
    private $quantity;
    private $dateAdded;

    function __get($name) {
      return $this->$name;
    }

    function __set($name,$value) {
      $this->$name = $value;
    }
  }
?>
