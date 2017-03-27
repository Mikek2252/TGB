<?php
require_once ("controllers/archive-product-controller.php");
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
    
    <!-- Show products -->
    
    <section class="filter">
      <div class="container">
        <ul>
          <li>
            <h1>Shop by</h1>
          </li><li>
            <div class="dropdown">
              <h4>Color</h4>
              <label>all</label>
              <span class="fa fa-chevron-circle-down"></span>
              <input id="colour" type="text" value="all" />
              <ul>
                <li name="Red">Red</li>
                <li name="White">White</li>
                <li name="Rose">Rose</li>
                <li name="all">All</li>
              </ul>
            </div>
          </li><li>
            <div class="dropdown">
              <h4>Type</h4>
              <label>all</label>
              <span class="fa fa-chevron-circle-down"></span>
              <input id="flavour" type="text" value="all" />
              <ul>
                <li name="Dry">Dry</li>
                <li name="Sweet">Sweet</li>
                <li name="Light">Light</li>
                <li name="Full bodied">Full bodied</li>
                <li name="all">All</li>
              </ul>
            </div>
          </li><li>
            <div class="dropdown">
              <h4>Country of Origin</h4>
              <label>all</label>
              <span class="fa fa-chevron-circle-down"></span>
              <input id="country" type="text" value="all" />
              <ul>
                <?php foreach($countries as $country) { ?>
                <li name="<?= $country[0] ?>"><?= $country[0] ?></li>
                <?php } ?>
                <li name="all">All</li>
              </ul>
            </div>

          </li><!--<li>
            <div class="dropdown">
              <h4>Price</h4>
              <label>all</label>
              <span class="fa fa-chevron-circle-down"></span>
              <input id="price" type="text" value="all" />
              <ul>
                <li name="1">&lt; £5</li>
                <li name="2">£5 - £10</li>
                <li name="3">£10 - £20</li>
                <li name="4">£20+</li>
                <li name="all">All</li>
              </ul>
            </div>
          </li>
-->
        </ul>
      </div>
    </section>

    <section class="products">
      <div class="container">
        <div class="row">
          <div class="one-column">
            <div class="column">
              <h1>All Products</h1>
            </div>
          </div>
        </div>
        <div class="three-column">
          <?php foreach($wines as $key => $wine) { ?>
          <?php if ($key == 0 || $key % 3 == 0 ) { ?>
          <div class="row">
          <?php } ?>
              <div class="column">
                <div class="product">
                  <a href="product-page.php?wineID=<?= $wine->wineID ?>"><img src="<?= $wine->getImgURL() ?>" /></a>
                  <a href="product-page.php?wineID=<?= $wine->wineID ?>"><h2><?= $wine->name ?></h2></a>
                  <h4>Colour : <?= $wine->colour ?></h4>
                  <h5>£ <?= $wine->costPerBottle ?></h5>
                </div>
              </div>
          <?php if ($key % 3 == 2) { ?>
          </div>
          <?php } } ?>
        </div>
      </div>
    </section>
    
    <!-- Show products -->
    

    <script src="js/product-filter.js"></script>
    
  </body>
</html>