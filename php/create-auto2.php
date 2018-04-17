<?php
require_once "connect.php"
?>

<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link href="../style/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<main>
    <div class="container">
        <h1>Create Car</h1>
        <?php
        //En toen kregen we ineens maar anderhalve week om het hele project te maken, bonuspunten en al. Zucht.
        $autokenteken = $_POST['autokenteken'];
        $automerk = $_POST['automerk'];
        $autotype = $_POST['autotype'];
        $autokmstand = $_POST['autokmstand'];
        $klantid = $_POST['klantid'];

        $addCar = $conn->prepare("INSERT INTO auto (autokenteken, automerk,autotype,autokmstand,klantid) VALUES (:autokenteken, :automerk, :autotype, :autokmstand, :klantid)");
        $addCar->bindParam(":autokenteken", $autokenteken);
        $addCar->bindParam(":automerk", $automerk);
        $addCar->bindParam(":autotype", $autotype);
        $addCar->bindParam(":autokmstand", $autokmstand);
        $addCar->bindParam(":klantid", $klantid);
        $addCar->execute();

        echo "De auto is toegevoegd. <br />";
        echo "<a href='menu.php'> terug naar het menu </a>";

        ?>
    </div>
</main>

</body>
</html>
