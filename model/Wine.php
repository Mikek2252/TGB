<?php
  class Wine {
    private $wineID;
    private $name;
    private $img;
    private $colour;
    private $flavour;
    private $description;
    private $bottleSize;
    private $costPerBottle;
    private $quantity;
    private $countryOfOrgin;
    private $dateAdded;
    private $offer;

    function __get($name) {
      return $this->$name;
    }

    function __set($name,$value) {
      $this->$name = $value;
    }
    
    function getImgURL() {
      return "img/product/".$this->img;
    }
    
    function inStock() {
      return ($this->quantity > 0) ? true : false;
    }
    
    function FlavourType() {
      if (strtolower($this->colour) == 'white') {
        return 'Sweetness';
      } else if (strtolower($this->colour) == "red") {
        return 'Body';
      }
    }
  }
?>
