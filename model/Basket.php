<?php
  class Basket {
    private $basketID;
    private $customerID;
    private $items[];

    function __get($name) {
      return $this->$name;
    }

    function __set($name,$value) {
      $this->$name = $value;
    }

  }
?>
