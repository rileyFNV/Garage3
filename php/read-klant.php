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
    <link href="../style/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<main>
    <div class="container">
        <h1>Read Customer</h1>
        <p>Dit is de data van alle gebruikers uit de klantendatabase.</p>
        <?php
        require_once "connect.php";

        $read = $conn->prepare("SELECT * FROM klant");
        $read->execute();

        echo "<table>";
        foreach($read as $rij){
            echo "<tr>";
            echo "<td>" . $rij['klantid'] . "</td>";
            echo "<td>" . $rij['klantnaam'] . "</td>";
            echo "<td>" . $rij['klantadres'] . "</td>";
            echo "<td>" . $rij['klantpostcode'] . "</td>";
            echo "<td>" . $rij['klantplaats'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<a href='menu.php'> Terug naar het menu </a>";


        ?>
    </div>
</main>

</body>
</html>
