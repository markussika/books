<?php

require "Database.php";
$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $query = "INSERT INTO catalog (name, author, release_year, availability)
            VALUES (:name, :author, :release_year, : availability);";
$params = [
 ":name" => $_POST["name"],
 ":autor" => $_POST["author"],
 ":release_year" => $_POST["release_year"],
 ":availibality" => $_POST["availability"]
];
$db->execute($query, $params);
header("Location: /");
die();
}


$title = "add a book";
require "views/add-books.view.php";