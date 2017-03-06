<?php
  class OnOffer {
    private $wineID;
    private $offerID;
    private $startDate;
    private $endDate;

    function __get($name) {
      return $this->$name;
    }

    function __set($name,$value) {
      $this->$name = $value;
    }
  }
?>
