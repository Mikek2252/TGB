<?php
require_once ("controllers/basket-controller.php");
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
           
      <section class="checkout-sum">
        <div class="container">
            <div class="row">
                <div class="three-column">
                    <div class="column">
                        <h1>Items</h1>
                        <ul>
                            <?php foreach($basket as $item) { 
                                $wine = $item->wine;
                            ?>
                            <li>Name :<?= $wine->name ?> Quantity: <?= $item->quantity ?></li>
                            <?php } ?>
                        </ul>
                        <h4>Total Cost: <?= $basketTotal ?></h4>
                    </div>
                    <div class="column">
                        <h1>Address</h1>
                        <label>Building Name/No: <?= $address->nameNo ?></label>
                        <label>Line 1: <?= $address->line1 ?></label>
                        <label>Line 2: <?= $address->line2 ?></label>
                        <label>City: <?= $address->city ?></label>
                        <label>County: <?= $address->county ?></label>
                        <label>Postcode:  <?= $address->postcode ?></label>
                    </div>
                    <div class="column">
                        <h1>Card</h1>
                        <label>Card Number: **** **** **** <?= $card->lastfour() ?></label>
                        <label>Expiry Date: <?= $card->expiry ?></label>
                        <label>Name on Card: <?= $card->name ?></label>
                    </div>
                </div>
            </div>    
          </div>
      </section>
    
    <!-- Show products -->
    

    
    
  </body>
</html>