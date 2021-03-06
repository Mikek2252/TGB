<?php
  class Customer {
    private $customerID;
    private $forename;
    private $lastname;
    private $email;
    private $phoneNumber;
    private $orders;
    private $addresses;
    private $basket;
    private $wishlist;

    function __get($name) {
      return $this->$name;
    }

    function __set($name,$value) {
      $this->$name = $value;
    }
    
    function getFullName() {
      return "$forename $lastname";
    }
  }
?>
