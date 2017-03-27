<?php
require_once ("controllers/product-controller.php");
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
    <!-- Product -->
    
    <section class="product-page">
      <div class="container">
        <div class="four-column">
          <div class="column">
            <div class="product">
              <img src="<?= $wine->getImgURL() ?>" />
            </div>
          </div>
          <div class="three-col-span">
            <h1><?= $wine->name ?></h1>
            <?php if($wine->inStock()) { ?>
            <h3 class="green"><?= $wine->quantity ?> bottles available</h3>
            <?php } else {?>
            <h3 class="red">Out of Stock</h3>
            <?php } ?>
            <h4>Price : £<?= $wine->costPerBottle ?></h4>
            <h5>Information</h5>
            <ul>
              <li>Color : <?= $wine->colour ?></li>
              <li>Origin : <?= $wine->countryOfOrigin ?></li>
              <li><?= $wine->FlavourType(); ?> : <?= $wine->flavour ?></li>
              <li>Size : <?= $wine->bottleSize ?> </li>
            </ul>
            <p><?= $wine->description ?></p>
            <form action="basket.php" method="post">
              <input type="hidden" name="wineID" value="<?= $wine->wineID ?>">
              <select name="quantity">
                <?php for($i=1; $i< 6; $i++) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
                <?php } ?>
              </select>
              <input class="basket" type="submit" value="Add to Basket" name="addToBasket">
            </form>
            <button class="wishlist">Add to Wishlist</button>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Product -->
    
    
  </body>
</html>