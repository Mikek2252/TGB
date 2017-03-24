<?php 

//  $host = "kunet.kingston.ac.uk";
//  $db_name = "db_k1301029";
//  $user = "k1301029";
//  $pass = "Golddigger";

  $host = "localhost";
  $db_name = "db_k1301029";
  $user = "root";
  $pass = "mysql";

  $pdo = new PDO("mysql:host=$host;dbname=$db_name" ,$user ,$pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  function getCustomer($username, $password) {
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Customer WHERE email = ? AND password = ?");
    $statement->execute([$username, $password]);
    $statement->setFetchMode(PDO::FETCH_CLASS, "Customer");
    $customer = $statement->fetch();
    return $customer;
  }

  function getBasket($customerID) {
    global $pdo;
    $statement = $pdo->prepare('SELECT * FROM BasketItem WHERE customerID = ?');
    $statement->execute([$customerID]);
    $statement->setFetchMode(PDO::FETCH_CLASS, "BasketItem");
    $basket = $statement->fetchAll();
    return $basket;
  }

  function getWishlist($customerID) {
    global $pdo;
    $statement = $pdo->prepare('SELECT * FROM SListItem WHERE customerID = ?');
    $statement->execute([$customerID]);
    $statement->setFetchMode(PDO::FETCH_CLASS, "ShoppingListItem");
    $wishlist = $statement->fetchAll();
    return $wishlist;
  }

  function getWineByID($wineID) {
    global $pdo;
    $statement = $pdo->prepare('SELECT * FROM Wine WHERE wineID = ?');
    $statement->execute([$wineID]);
    $statement->setFetchMode(PDO::FETCH_CLASS, "Wine");
    $wine = $statement->fetch();
    return $wine;
  }

  function getAllWines() {
    global $pdo;
    $statement = $pdo->prepare('SELECT * FROM Wine');
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_CLASS, "Wine");
    $wines = $statement->fetchAll();
    return $wines;
  }

  function getWinesOnOffer() {
    global $pdo;
    $date  = date('Y-m-d');
    $statement = $pdo->prepare('SELECT * FROM OnOffer WHERE startDate < ? AND endDate > ? ');
    $statement->execute([$date,$date]);
    $statement->setFetchMode(PDO::FETCH_CLASS, "OnOffer");
    $offers = $statement->fetch();
    $wines;
    foreach ($Offers as &$offer) {
      $wine = getWineByID($offer->wineID);
      $wine->Offer = $offer;
      array_push($wines, $wine);
    }
    return $wines;
  }

/* ADDING TO DB */

  function addWine($wine) {
    global $pdo;
    $statement = $pdo->prepare('INSERT INTO Wine (name, colour, flavour, description, bottleSize, costPerBottle, countryOfOrigin) VALUES (?,?,?,?,?,?,?)');
    $statement->execute([$wine->name,
                         $wine->color,
                         $wine->flavour,
                         $wine->description,
                         $wine->bottleSize,
                         $wine->costPerBottle,
                         $wine->countryOfOrigin]);
    $statement->fetch();
	
  }
  
    function updateWine($wine) {
    global $pdo;
    $statement = $pdo->prepare('UPDATE Wine SET name = ? WHERE wineID = ?');
    $statement->execute([$wine->name,
                         $wine->color,
                         $wine->flavour,
                         $wine->description,
                         $wine->bottleSize,
                         $wine->costPerBottle,
                         $wine->countryOfOrigin]);
    $statement->fetch();
	
  }
  
  /* SEARCHING DATABASE */
  function getSearchResults($wine){
  global $pdo;
    $statement = $pdo->prepare('SELECT 20 as relevance, * FROM Wine WHERE name LIKE ? OR description LIKE ?');
    $statement->execute([$wine->name,
                         $wine->color,
                         $wine->flavour,
                         $wine->description,
                         $wine->bottleSize,
                         $wine->costPerBottle,
                         $wine->countryOfOrigin]);
    $statement->setFetchMode(PDO::FETCH_CLASS, "Wine");
    $statement->fetch();
  }
  
  /* UPDATE CUSTOMER ORDER TABLE */
  function addOrder($CustomerOrder){
    global $pdo;
    $statement = $pdo->prepare('INSERT INTO CustomerOrder (orderID,customerID,orderDate,addressID,paymentTaken) VALUES (?,?,?,?,?)');
    $statement->execute([$CustomerOrder->orderID,
                         $CustomerOrder->customerID,
                         $CustomerOrder->orderDate,
                         $CustomerOrder->addressID,
                         $CustomerOrder->paymentTaken]);
    $statement->fetch();
	
  }
  
  /* ADD Customer Order*/
  function addOrderItem($CustomerOrderItem){
    global $pdo;
    $statement = $pdo->prepare('INSERT INTO CustomerOrderItem (orderID,wineID,quantity,deliveryDate) VALUES (?,?,?,?)');
    $statement->execute([$CustomerOrderItem->orderID,
                         $CustomerOrderItem->wineID,
                         $CustomerOrderItem->quantity,
                         $CustomerOrderItem->deliveryDate]);
    $statement->fetch();
	
  }
  
  /* search orders*/
  function searchOrder($CustomerOrder){
    $statement = $pdo->prepare('SELECT 10 as relevance, * FROM CustomerOrder WHERE orderID LIKE ? ');
    
    global $pdo;
    $statement->execute([$CustomerOrder->orderID,
                         $CustomerOrder->customerID]);
    $statement->setFetchMode(PDO::FETCH_CLASS, "CustomerOrder");
    $orders = $statement->fetchAll();
    return $orders;
  }
  
?> 