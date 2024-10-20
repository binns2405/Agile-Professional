<?php

$host = "binns2405.duckdns.org:3300";
$user = "Agile";
$pass = "Professional";
$db = "agileProfessional";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>