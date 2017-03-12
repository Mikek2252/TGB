<?php
  class Wine {
    private $wineID;
    private $name;
    private $colour;
    private $flavour;
    private $description;
    private $bottleSize;
    private $costPerBottle;
    private $countryOfOrgin;
    private $dateAdded;
    private $offer;

    function __get($name) {
      return $this->$name;
    }

    function __set($name,$value) {
      $this->$name = $value;
    }
  }
?>
