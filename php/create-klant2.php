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
        <h1>Create Customer</h1>
        <?php
        $klantid = NULL;
        $klantnaam = $_POST['klantnaam'];
        $klantadres = $_POST['klantadres'];
        $klantpostcode = $_POST['klantpostcode'];
        $klantplaats = $_POST['klantplaats'];

        $addCustomer = $conn->prepare("INSERT INTO klant (klantid, klantnaam,klantadres,klantpostcode,klantplaats) VALUES (:klantid, :klantnaam, :klantadres, :klantpostcode, :klantplaats)");
        $addCustomer->bindParam(":klantid", $klantid);
        $addCustomer->bindParam(":klantnaam", $klantnaam);
        $addCustomer->bindParam(":klantadres", $klantadres);
        $addCustomer->bindParam(":klantpostcode", $klantpostcode);
        $addCustomer->bindParam(":klantplaats", $klantplaats);
        $addCustomer->execute();

        echo "De klant is toegevoegd. <br />";
        echo "<a href='menu.php'> terug naar het menu </a>";

        ?>
    </div>
</main>


</body>
</html>
