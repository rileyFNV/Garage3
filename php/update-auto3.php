<?php ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../style/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<main>
    <div class="container">
        <h1>Update</h1>

        <?php
        $autokenteken = $_POST['autokenteken'];
        $automerk = $_POST['automerk'];
        $autotype = $_POST['autotype'];
        $autokmstand = $_POST['autokmstand'];
        $klantid = $_POST['klantid'];

        require_once "connect.php";

        $update = $conn->prepare("UPDATE auto SET autokenteken = :autokenteken, automerk = :klantadres, autotype = :klantpostcode, autokmstand = :klantplaats, klantid = :klantid");
        $update->bindParam(":autokenteken", $autokenteken);
        $update->bindParam(":automerk", $automerk);
        $update->bindParam(":autotype", $autotype);
        $update->bindParam(":autokmstand", $autokmstand);
        $update->bindParam(":klantid", $klantid);

        $update->execute();


        echo "De auto is gewijzigd. <br />";
        echo "<a href='menu.php'> terug naar het menu </a>";
        ?>
    </div>
</main>

</body>
</html>
