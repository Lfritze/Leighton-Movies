<?php
ob_start(); //turns on output buffering
session_start();

date_default_timezone_set("America/Indiana/Indianapolis");

try {
  $con = new PDO("mysql:dbname=leightonflix;host=localhost", "root", "");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

}

catch (PDOException $e) {
  exit("Connection failed: " . $e->getMessage());

}

?>