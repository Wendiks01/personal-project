<?php
// (A) PROCESS RESULT
$result = "";

// (B) CONNECT TO DATABASE - CHANGE SETTINGS TO YOUR OWN!
$dbhost = "localhost";
$dbname = "order";
$dbchar = "utf8mb4";
$dbuser = "root";
$dbpass = "";
try{
$pdo = new PDO(
  "mysql:host=$dbhost;dbname=$dbname;charset=$dbchar",
  $dbuser, $dbpass, [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]
);
} catch (Exception $ex) { $result = $ex->getMessage(); }

// (C) SAVE ORDER TO DATABASE
if ($result=="") { try {
  $stmt = $pdo->prepare("INSERT INTO `nespaper` (`name`, `email`, `qty`) VALUES (?,?,?)");
  $stmt->execute([$_POST["name"], $_POST["email"], $_POST["qty"]]);
} catch (Exception $ex) { $result = $ex->getMessage(); }
}