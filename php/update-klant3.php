<?php ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Update</h1>

<?php
$klantid = $_POST['klantidvak'];
$klantnaam = $_POST['klantnaamvak'];
$klantadres = $_POST['klantadresvak'];
$klantpostcode = $_POST['klantpostcodevak'];
$klantplaats = $_POST['klantplaatsvak'];

require_once "connect.php";

$update = $conn->prepare("UPDATE klant SET klantnaam = :klantnaam, klantadres = :klantadres, klantpostcode = :klantpostcode, klantplaats = :klantplaats WHERE klantid = :klantid");
$update->bindParam(":klantid", $klantid);
$update->bindParam(":klantnaam", $klantnaam);
$update->bindParam(":klantadres", $klantadres);
$update->bindParam(":klantpostcode", $klantpostcode);
$update->bindParam(":klantplaats", $klantplaats);

$update->execute();


echo "De klant is gewijzigd. <br />";
echo "<a href='menu.php'> terug naar het menu </a>";
?>
</body>
</html>
