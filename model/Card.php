<?php
  class Card {
    private $cardNo;
    private $name;
    private $expiry;

    function __get($name) {
      return $this->$name;
    }

    function __set($name,$value) {
      $this->$name = $value;
    }
      function lastFour() {
          return substr($cardNo, -4);
      }
  }
?>
