<?php

$host         = "localhost";
$username     = "root";
$password     = "";
$dbname       = "student";

try {
  $dbconn = new PDO('mysql:host=localhost;dbname=student', $username, $password);
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
}