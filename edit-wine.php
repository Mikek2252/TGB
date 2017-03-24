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
            <form action="edit-wine.php" method="post" >
              <label for >Wine Name: </label>
              <input type="text" name="name" value="<?= $wine->name ?>" >
              <input type="text" name="colour" value="<?= $wine->colour ?>" >
              <input type="text" name="flavour" value="<?= $wine->flavour ?>" >
              <textarea rows="4" col="50" name="description"><?= $wine->description ?></textarea>
              <input type="text" name="bottleSize" value="<?= $wine->bottleSize ?>" >
              <input type="text" name="costPerBottle" value="<?= $wine->costPerBottle ?>" >
              <input type="text" name="country" value="<?= $wine->countryOfOrigin ?>" >
              <input type="submit" name="editWine" >
            </form>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Show Manager -->
    
    
    
  </body>
</html>