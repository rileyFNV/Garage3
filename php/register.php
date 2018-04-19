<?php
session_start();
require ('connect.php');


$gebruikersnaam = htmlspecialchars($_POST['username']);
$wachtwoord = htmlspecialchars($_POST['password']);
$wachtwoord = password_hash($wachtwoord, PASSWORD_BCRYPT);
//Versleutelt het wachtwoord.

$insertUser = $conn->prepare("INSERT INTO user (username,password) VALUES (:username, :password)");
$insertUser->bindParam(":username",$gebruikersnaam);
$insertUser->bindParam(":password",$wachtwoord);
$insertUser->execute();

$lookUp = $conn->prepare("SELECT username FROM user WHERE username = :username");
$lookUp->bindParam(":username",$gebruikersnaam);
$lookUp->execute();


if ($lookUp->rowCount() < 1){
    $insertUser = $conn->prepare("INSERT INTO user (username,password) VALUES (:username, :password)");
    $insertUser->bindParam(":username",$gebruikersnaam);
    $insertUser->bindParam(":password",$wachtwoord);
    $insertUser->execute();
}else{
    echo("Deze gebruikersnaam is al bezet.");
}

//Het versleutelde wachtwoord en de gebruikersnaam worden ingegeven. Het account is nu gecreëerd!

