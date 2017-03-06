<?php
  class Order {
    private $orderID;
    private $customerID;
    private $orderDate;
    private $addressID;
    private $paymentTaken;

    function __get($name) {
      return $this->$name;
    }

    function __set($name,$value) {
      $this->$name = $value;
    }

  }
?>
