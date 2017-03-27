<?php
require_once ("controllers/account-controller.php");
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
        <div class="one-column">
          <div class="column">
            <a href="x">View Orders</a>
            <a href="x">Manage Payments</a>
            <div class="row">
              <h1>Orders</h1>
              <a href="">Complete Orders</a>
              <a href="">Open Order</a>
              <a href="">Cancelled Order</a>
            </div>
            <div class="row">
              <h1>Account Details</h1>
              <ul>
                <li>Name : <?= $currentuser->getFullName()?> </li>
                <li>Email : <?= $currentuser->email?></li>
                <li>Phone number : <?= $currentuser->phoneNumber?></li>
                <li>Addresses : 
                  <?php if($currentuser->addresses) { ?>
                  <ul>
                  <?php foreach($address as $currentuser->addresses) { ?>
                    <li><?= $address->getFullAddress() ?></li>
                  <?php } ?>
                  </ul>
                  <?php } else { ?>
                    No Addresses Available.
                  <?php } ?>
                </li>
                <li></li>
              </ul>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Product -->
    
    
  </body>
</html>