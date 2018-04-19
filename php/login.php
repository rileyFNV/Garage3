<?php
session_start();
//begin altijd de sessie aan het begin.
require ('connect.php');

if(isset($_SESSION['loggedin'])){
    header("location:menu.php");
}

//Vraagt de waarde van het wachtwoord en de username die in het formulier is ingegeven.
$userinput1 = $_POST['password'];
$userinput2 = $_POST['username'];

//Vraagt de waarde van het wachtwoord dat verbonden is met de username die was ingegeven.
$userFetch = $conn->prepare("SELECT * FROM user WHERE username = :username;");
$userFetch->bindParam(":username",$userinput2);
$userFetch->execute();

//Dit is nu het account waarmee wordt vergeleken, in een array.
$user = $userFetch->fetch(PDO::FETCH_ASSOC);

//Vergelijkt het gehashte wachtwoord met de ongehashte gebruikersinput. Als het gelijk is, krijgt de gebruiker toegang.
if(password_verify($userinput1, $user["password"])){
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $user['username'];
    $_SESSION['userID'] = $user['userID'];
    header("location:overzicht.php");
}else{
    print("Piss off!");
    header("location:index.html");
//Anders mieteren ze maar op.
}

