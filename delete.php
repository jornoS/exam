<?php
include 'connectieA.php';

error_reporting(0); 
$id = $_GET['id']; 

try { 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    $sql = "DELETE FROM acteurs WHERE NR=$id"; 
    $delete_statement = $conn->prepare($sql);
    $delete_statement->bindParam('id', $id);
    $delete_statement->execute();

    $conn->exec($sql); 
    echo "Record deleted successfully"; 
    header('Location: acteur.php'); 
    } 
catch(PDOException $e) 
    { 
    } 

$conn = null; 
