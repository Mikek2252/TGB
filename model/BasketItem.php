<?php
  class BasketItem {
    private $wineID;
    private $wine;
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
