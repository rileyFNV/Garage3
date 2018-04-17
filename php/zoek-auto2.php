<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
    <link href="../style/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<main>
    <div class="container">
        <h1>Search by License Plate</h1>
        <?php
        $autokenteken = $_POST['kentekenvak'];

        require_once "connect.php";

        $search = $conn->prepare("SELECT * FROM auto WHERE autokenteken = :autokenteken");
        $search->bindParam(":autokenteken", $autokenteken);
        $search->execute();


        echo "<table>";
        foreach ($search as $rij) {
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
    </div>
</main>

</body>
</html>
