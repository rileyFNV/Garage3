<?php
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=localhost;dbname=garage", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $ConnE){
    echo "Connectie mislukt: " . $ConnE->getMessage();
}

