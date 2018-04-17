<?php ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete</title>
    <link href="../style/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<main>
    <div class="container">
        <h1>Delete Customer</h1>

        <?php
        $klantid = $_POST['klantidvak'];
        require_once "connect.php";

        $klanten = $conn->prepare("SELECT * FROM klant WHERE klantid = :klantid");
        $klanten->bindParam(":klantid",$klantid);
        $klanten->execute();


        echo "<table>";
        foreach($klanten as $rij){
            echo "<tr>";
            echo "<td>" . $rij['klantid'] . "</td>";
            echo "<td>" . $rij['klantnaam'] . "</td>";
            echo "<td>" . $rij['klantadres'] . "</td>";
            echo "<td>" . $rij['klantpostcode'] . "</td>";
            echo "<td>" . $rij['klantplaats'] . "</td>";
            echo "</tr>";
        }
        echo "</table><br />";

        echo "<form action='delete-klant3.php' method='post'>";
        echo "<input type='hidden' name='klantidvak' value=$klantid>";
        echo "<input type='hidden' name='verwijdervak' value='0'>";
        echo "<input type='checkbox' name='verwijdervak' value='1'>";
        echo "Verwijder deze klant. <br />";
        echo "<input class=\"submit\" type='submit'>";

        echo "</form>";
        ?>
    </div>
</main>



</body>
</html>
