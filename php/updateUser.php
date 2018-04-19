<?php
session_start();
require('connect.php');

$gebruikersnaam = htmlspecialchars($_POST['username']);
$wachtwoord = htmlspecialchars($_POST['password']);
$wachtwoord = password_hash($wachtwoord, PASSWORD_BCRYPT);

$updateUser = $conn->prepare("UPDATE user SET username = :username, password = :password WHERE userid = :id");
$updateUser->bindParam(":username", $gebruikersnaam);
$updateUser->bindParam(":password", $wachtwoord);
$updateUser->bindParam(":id", $userID);
$updateUser->execute();

print ("Uw veranderingen zijn toegepast.");




