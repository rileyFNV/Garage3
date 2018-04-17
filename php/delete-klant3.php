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
        $verwijderen = $_POST['verwijdervak'];

        if($verwijderen){
            require_once "connect.php";

            $delete = $conn->prepare("DELETE FROM klant WHERE klantid = :klantid");
            $delete->bindParam(":klantid",$klantid);
            $delete->execute();
            echo "De gegevens zijn verwijderd. <br />";
        }else {
            echo "De gegevens zijn niet verwijderd. <br />";
        }

        echo "<a href='menu.php'>Terug naar het menu. </a>"
        ?>

    </div>
</main>

</body>
</html>
