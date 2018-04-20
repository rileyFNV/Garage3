<?php
session_start();

require_once ("connect.php");

if (isset($_SESSION["loginValue"])){
    print "You are already logged in";
    header("location:menu.php");
}else{
    //-------------------Haal de gebruiker op die probeert in te loggen.

    $gebruiker = $_POST['name'];
    $wachtwoord = $_POST['password'];

    $users = $conn->prepare("SELECT password FROM user WHERE username = :name");
    $users->bindParam(':name',$gebruiker);
    $users->execute();

    //-------------------Nu heb je een wachtwoord uit de database beschikbaar van de gebruiker die wilt inloggen

    $user = $users->fetch(PDO::FETCH_ASSOC);

    //-------------------Controleer de hash de gebruiker uit de database tegenover de $_POST['pass'] met password_verify

    if (password_verify($wachtwoord, $user['password'])){
        print "You are logged in";
        header("location:menu.php");

        $_SESSION['loginValue'] = true;
    }else{
        print "Your username or password was incorrect, try again";
    }
}