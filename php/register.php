<?php

session_start();

require_once('connect.php');

// Login value check
//if ($_SESSION["loginValue"] === true){
//
//    print "you are already logged in";
//}

$gebruikersnaam = htmlspecialchars($_POST['username']);
$wachtwoord = htmlspecialchars($_POST['password']);
$wachtwoord = password_hash($wachtwoord, PASSWORD_BCRYPT);



// Check voor een bestaande naam //

$checkUser = $conn->prepare("SELECT * FROM user WHERE username = :gebruikersnaam");
$checkUser->bindParam(":gebruikersnaam", $gebruikersnaam);
$checkUser->execute();

if ($checkUser->rowCount() < 1){

    // Zet de gegevens in het database //

    $insertUser = $conn->prepare('INSERT INTO user (username,password) VALUES (:username,:password)');
    $insertUser->bindParam(':username',$gebruikersnaam);
    $insertUser->bindParam(':password',$wachtwoord);
    $insertUser->execute();

    echo ('Congratulations, sign up complete!');

}else{
    echo "Username already in use.";
}