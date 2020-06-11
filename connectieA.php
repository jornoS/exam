<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "film";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $result = $conn->query("SELECT * FROM acteurs");
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
