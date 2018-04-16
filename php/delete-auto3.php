<?php ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete</title>
</head>
<body>
<h1>Delete Customer</h1>

<?php
$autokenteken = $_POST['kentekenvak'];
$verwijderen = $_POST['verwijdervak'];

if($verwijderen){
    require_once "connect.php";

    $delete = $conn->prepare("DELETE FROM auto WHERE autokenteken = :autokenteken");
    $delete->bindParam(":autokenteken",$autokenteken);
    $delete->execute();
    echo "De gegevens zijn verwijderd. <br />";
}else {
    echo "De gegevens zijn niet verwijderd. <br />";
}

echo "<a href='menu.php'>Terug naar het menu. </a>"
?>
</body>
</html>
