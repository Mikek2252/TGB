<?php
  class Address {
    private $addressID;
    private $NameNo;
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
    
    function getFullAddress() {
      return "$NameNo, $line1, $line2, $city, $country, $postcode";
    }

  }
?>
