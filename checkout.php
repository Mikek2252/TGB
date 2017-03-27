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

    <section class="basket">
      <div class="container">
        <div class="row">
          <div class="one-column">
            <div class="column">
              <h1>Your Basket</h1>
            </div>
          </div>
        </div>
        <div class="row">
          <table>
            <tr>
              <td>Image</td>
              <td>Product Name</td>
              <td>Price</td>
              <td>Quantity</td>
            </tr>
          <?php foreach($_SESSION["basket"] as $item) { ?>
          <?php $wine = $item->wine ?>
            <tr>
              <td>
                <a href="product-page.php?wineID=<?= $wine->wineID ?>"><img src="<?= $wine->getImgURL() ?>" /></a>
              </td>
              <td>
                <a href="product-page.php?wineID=<?= $wine->wineID ?>"><h2><?= $wine->name ?></h2></a>
              </td>
              <td>
                <h5>£ <?= $wine->costPerBottle ?></h5>
              </td>
              <td>
                  <?= $item->quantity ?>
              </td>
            </tr>
            <?php } ?>
          </table>
        </div>
        <div class="row">
          <div class="one-column">
            <div class="column">
              <h1>Total Cost : </h1>
            </div>
          </div>
        </div>
      </div>
    </section>
      
    <section>
        <div class="container">
            <div class="row">
                <div class="one-column">
                    <div class="column">
                        <h1>Address</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <form action="checkout.php" method="post">
                    <label>Building Name/No:</label>
                    <input type="text" name="No" required>
                    <label>Line 1:</label>
                    <input type="text" name="line1" required>
                    <label>Line 2:</label>
                    <input type="text" name="line2" >
                    <label>City:</label>
                    <input type="text" name="city" required>
                    <label>County:</label>
                    <input type="text" name="county" required>
                    <label>Postcode:</label>
                    <input type="text" name="postcode" required>
                    <input type="submit" value="Next">
                </form>
            </div>
        </div>
      </section>
      
      <section>
        <div class="container">
            <div class="row">
                <div class="one-column">
                    <div class="column">
                        <h1>Payment Details</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <form action="checkout.php" method="post">
                    <label>Card Number:</label>
                    <input type="text" name="cardNo" required>
                    <label>Expiry Date:</label>
                    <input type="text" name="expDate" required>
                    <label>CVV:</label>
                    <input type="text" name="cvv" required>
                    <label>Name on card:</label>
                    <input type="text" name="nameOnCard" required>
                    <input type="submit" value="Next">
                </form>
            </div>
        </div>
      </section>
    
    <!-- Show products -->
    

    
    
  </body>
</html>