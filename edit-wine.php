<?php
require_once ("controllers/edit-wine-controller.php");
?><!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>wine page</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Montserrat" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/structure.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
</head>
  <body>
  
    <?php require_once ("header.php") ?>
    
    <!-- Show Wine Manager -->
    
    <section class="wine-manager">
      <div class="container">
        <div class="two-column">
          <div class="column">
            
          <form action="edit-wine.php" method="post">
            <label>Wine ID:</label>
          <input type="text" name="wineID" readonly value="<?= $wine->wineID ?>" >
          <label>Wine Name:</label>
          <input type="text" name="name" value="<?= $wine->name ?>" >
          <label>Wine Colour:</label>
          <select name="colour" value="<?= $wine->colour ?>">
            <option name="red">Red</option>
            <option name="white">White</option>
            <option name="rose">Rose</option>
          </select>
          <label>Flavour:</label> 
          <select name="flavour" value="<?= $wine->flavour ?>">
            <option name="dry">Dry</option>
            <option name="sweet">Sweet</option>
            <option name="light">Light</option>
            <option name="fullbody">Full bodied</option>
          </select>
          <label>Description:</label>
          <textarea name="description"><?= $wine->description ?></textarea>
          <label>Bottle Size:</label>
          <input type="text" name="bottleSize" value="<?= $wine->bottleSize ?>">
          <label>Cost:</label>
          <input type="number" name="cost" value="<?= $wine->costPerBottle ?>" >
          <label>Country Of Origin:</label>
          <select name="country" value="<?= $wine->countryOfOrigin ?>">
            <?php foreach($countries as $country) { ?>
              <option value="<?= $country[0] ?>"><?= $country[0] ?></option>
            <?php } ?>
            <option name="other">Other</option>
          </select>
          <label>Add new country.</label>
          <input type="text" name="newCountry" >
          <label>Image:</label>
          <input type="file" name="image" value="<?= $wine->getImgURL(); ?>">
          <img src="<?= $wine->getImgURL() ?>" >
          <label>Quantity:</label>
          <input type="number" name="quantity" value="<?= $wine->quantity ?>">
          <input type="submit" name="editWine">
        </form>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Show Manager -->
    
    
    
  </body>
</html>