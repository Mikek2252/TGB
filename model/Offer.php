<?php
  class Offer {
    private $offerID;
    private $offerDescription;

    function __get($name) {
      return $this->$name;
    }

    function __set($name,$value) {
      $this->$name = $value;
    }
  }
?>
