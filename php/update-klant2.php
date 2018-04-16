<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
<h1>Update Klant</h1>
<?php
$klantid = $_POST['klantidvak'];
require_once "connect.php";

$klanten = $conn->prepare("SELECT * FROM klant WHERE klantid = :klantid");
$klanten->bindParam(":klantid",$klantid);
$klanten->execute();

echo "<form action='update-klant3.php' method='post'>";
foreach($klanten as $klant){
    echo "klantid:" . $klant['klantid'];
    echo "<input type='hidden' name='klantidvak' ";
    echo " value=' " . $klant['klantid'] . " '> <br />";

    echo "klantnaam: <input type='text' ";
    echo "name = 'klantnaamvak' ";
    echo "value = '" . $klant['klantnaam']. "' ";
    echo " > <br />";

    echo "klantadres: <input type='text' ";
    echo "name = 'klantadresvak' ";
    echo "value = '" . $klant['klantadres']. "' ";
    echo " > <br />";

    echo "klantpostcode: <input type='text' ";
    echo "name = 'klantpostcodevak' ";
    echo "value = '" . $klant['klantpostcode']. "' ";
    echo " > <br />";

    echo "klantplaats: <input type='text' ";
    echo "name = 'klantplaatsvak' ";
    echo "value = '" . $klant['klantplaats']. "' ";
    echo " > <br />";
}
echo "<input type='submit'";
echo "</form>";



//er moet nog gecontroleerd worden op een bestaand klantID.

?>
</body>
</html>
