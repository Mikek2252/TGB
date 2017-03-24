<?php
require_once ("controllers/wine-manage-controller.php");
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
        <?php if ($wines["wines"]) {?>
        <table>
          <tr>
            <td>Name</td>
            <td>Colour</td>
            <td>Flavour</td>
            <td>Description</td>
            <td>Bottle Size</td>
            <td>Cost</td>
            <td>Country</td>
            <td>Options</td>
          </tr>
          <?php foreach($wines as $wine) { ?>
          <tr>
            <td><?= $wine->name ?></td>
            <td><?= $wine->colour ?></td>
            <td><?= $wine->flavour ?></td>
            <td><?= $wine->description ?></td>
            <td><?= $wine->bottleSize ?></td>
            <td><?= $wine->costPerBottle ?></td>
            <td><?= $wine->countryOfOrigin ?></td>
            <td>
              <a href="editWine.php?wineID=<?= $wine->wineID ?>" class="fa pencil"></a>
              <a class="fa trash"></a>
            </td>
          </tr>
          <?php } ?>
        </table>
        
        <?php if ($page > 1) { ?>
        <a href="wine-manage.php?page=<?= $page -1 ?>">Previous Page</a>
        <?php } ?>
        
        <?php if ($wines["hasNext"]) { ?>
        <a href="wine-manage.php?page=<?= $page +1 ?>">Next Page</a>
        <?php } ?>
        
        <?php } else { ?>
          <h1>No Wines in the database.</h1>
        <?php } ?>
      </div>
    </section>
    
    <!-- Show Manager -->
    
    
    
  </body>
</html>