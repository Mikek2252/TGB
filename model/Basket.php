<?php
  class Basket {
    private $basketID;
    private $customerID;
    private $bItems = [];

    function __get($name) {
      return $this->$name;
    }

    function __set($name,$value) {
      $this->$name = $value;
    }
    
    function length() {
      return sizeOf($items);
    }
    function getTotal() {
      $total = 0;
      foreach($items as $item) {
        $total += ($item->wine->costPerBottle * $item->quantity );
      }
      return $total;
    }
    function getItems(){
      return $items;
    }
  }
?>
