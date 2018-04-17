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
        <h1>Delete Auto</h1>

        <?php
        $kenteken = $_POST['kentekenvak'];
        require_once "connect.php";

        $autos = $conn->prepare("SELECT * FROM auto WHERE autokenteken = :autokenteken");
        $autos->bindParam(":autokenteken",$kenteken);
        $autos->execute();


        echo "<table>";
        foreach($autos as $rij){
            echo "<tr>";
            echo "<td>" . $rij['autokenteken'] . "</td>";
            echo "<td>" . $rij['automerk'] . "</td>";
            echo "<td>" . $rij['autotype'] . "</td>";
            echo "<td>" . $rij['autokmstand'] . "</td>";
            echo "<td>" . $rij['klantid'] . "</td>";
            echo "</tr>";
        }
        echo "</table><br />";

        echo "<form action='delete-auto3.php' method='post'>";
        echo "<input type='hidden' name='kentekenvak' value=$kenteken>";
        echo "<input type='hidden' name='verwijdervak' value='0'>";
        echo "<input type='checkbox' name='verwijdervak' value='1'>";
        echo "Verwijder deze auto. <br />";
        echo "<input class=\"submit\" type='submit'>";

        echo "</form>";
        ?>
    </div>
</main>

</body>
</html>
