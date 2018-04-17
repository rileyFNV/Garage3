<?php
require_once "connect.php"
?>

<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../style/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
</head>

<!--<header>-->
<!--    <ul>-->
<!--        <li><a href="#">Home</a></li>-->
<!--        <li><a href="#">Products</a></li>-->
<!--        <li><a href="#">Services</a></li>-->
<!--        <li><a href="#">Information</a></li>-->
<!--        <li><a href="#">Contact</a></li>-->
<!--    </ul>-->
<!--</header>-->

<body>

<main>
    <div class="container">
        <h1>Garage Menu</h1>
        <h2>Klant</h2>

        <ul>
            <li><a href="create-klant1.php">Create</a></li>
            <li><a href="read-klant.php">Read</a></li>
            <li><a href="zoek-klant1.php">Search by ID</a></li>
            <li><a href="update-klant1.php">Update</a></li>
            <li><a href="delete-klant1.php">Delete</a></li>
        </ul>

        <h2>Auto</h2>
        <ul>
            <li><a href="create-auto1.php">Create</a></li>
            <li><a href="read-auto.php">Read</a></li>
            <li><a href="zoek-auto1.php">Search by License Plate</a></li>
            <li><a href="update-auto1.php">Update</a></li>
            <li><a href="delete-auto1.php">Delete</a></li>
        </ul>
    </div>
</main>



</body>
</html>
