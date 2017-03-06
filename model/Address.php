<?php
  class Address {
    private $addressID;
    private $buildingNameNo;
    private $line1;
    private $line2;
    private $city;
    private $postcode;
    private $country;

    function __get($name) {
      return $this->$name;
    }

    function __set($name,$value) {
      $this->$name = $value;
    }

  }
?>
