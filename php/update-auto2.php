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
$autokenteken = $_POST['autokentekenvak'];
require_once "connect.php";

$autos = $conn->prepare("SELECT * FROM auto WHERE autokenteken = :autokenteken");
$autos->bindParam(":autokenteken",$autokenteken);
$autos->execute();

echo "<form action='update-klant3.php' method='post'>";
foreach($autos as $auto){
    echo "autokenteken: <input type='text' ";
    echo "name = 'autokentekenvak' ";
    echo "value = '" . $auto['autokenteken']. "' ";
    echo " > <br />";

    echo "automerk: <input type='text' ";
    echo "name = 'automerk' ";
    echo "value = '" . $auto['automerk']. "' ";
    echo " > <br />";

    echo "autotype: <input type='text' ";
    echo "name = 'autotype' ";
    echo "value = '" . $auto['autotype']. "' ";
    echo " > <br />";

    echo "autokmstand: <input type='text' ";
    echo "name = 'autokmstand' ";
    echo "value = '" . $auto['autokmstand']. "' ";
    echo " > <br />";

    echo "klantid: <input type='text' ";
    echo "name = 'klantid' ";
    echo "value = '" . $auto['klantid']. "' ";
    echo " > <br />";
}
echo "<input type='submit'";
echo "</form>"


?>
</body>
</html>
