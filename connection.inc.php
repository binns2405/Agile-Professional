<?php

$host = "localhost";
$user = "Agile";
$pass = "Professional";
$db = "agileProfessional";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>