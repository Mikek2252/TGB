<?php
  class OrderItem {
    private $orderID;
    private $wineID;
    private $wine;
    private $quantity;
    private $deliveryDate;

    function __get($name) {
      return $this->$name;
    }

    function __set($name,$value) {
      $this->$name = $value;
    }

  }
?>
