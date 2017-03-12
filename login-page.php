<?php

require_once ("controllers/login-controller.php");
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
  
    <section class="login">
      <div class="container">
        <div class="four-column">
          <div class="column"></div>
          <div class="two-span-column">
            <form action="login-page.php" method="post" class="login">
              <input type="text" name="username" placeholder="username"/>
              <input type="password" name="password" placeholder="password"/>
              <input type="submit" name="loginbutton" value="submit"/>
            </form>
          </div>
          <div class="column"></div>
        </div>
      </div>
    </section>  
    
  </body>
</html>