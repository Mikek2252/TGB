<?php
$host = "kunet.kingston.ac.uk";
$dbname = "db_ku46587";
$user = "ku26587";
$pass = "poo";

$pdo = new PDO ('mysql:host='.$host.'; dbname='.$dbname, $user, $pass);

$statement = $pdo->query("SELECT * FROM customers WHERE firstname = ? AND surname = ?");

$statement->prepare(["paul","neve"]);
// $results = $statement->fetchAll(PDO::FETCH_OBJ);
$results = $statement->fetchAll(PDO::FETCH_CLASS, "Customer");

 ?>
