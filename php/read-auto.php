<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read</title>
</head>
<body>
<h1>Read Car</h1>
<p>Dit is de data van alle autos uit de autodatabase.</p>
<?php
require_once "connect.php";

$read = $conn->prepare("SELECT * FROM auto");
$read->execute();

echo "<table>";
foreach($read as $rij){
    echo "<tr>";
    echo "<td>" . $rij['autokenteken'] . "</td>";
    echo "<td>" . $rij['automerk'] . "</td>";
    echo "<td>" . $rij['autotype'] . "</td>";
    echo "<td>" . $rij['autokmstand'] . "</td>";
    echo "<td>" . $rij['klantid'] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='menu.php'> Terug naar het menu </a>";


?>
</body>
</html>
