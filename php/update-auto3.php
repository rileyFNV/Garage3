<?php ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../style/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<main>
    <div class="container">
        <h1>Update</h1>

        <?php
        $klantid = $_POST["klantid"];
        $autokenteken = $_POST["autokenteken"];
        $automerk = $_POST["automerk"];
        $autotype = $_POST["autotype"];
        $autokmstand = $_POST["autokmstand"];
        require("connect.php");
        $sql = $conn->prepare("UPDATE auto set 
klantid = :klantid, autokenteken = :autokenteken, automerk = :automerk , automerk = :automerk , autokmstand = :autokmstand
WHERE klantid = :klantid
");
        $sql->execute([
            "klantid" => $klantid,
            "autokenteken" => $autokenteken,
            "automerk" => $automerk,
            "autotype" => $autotype,
            "autokmstand" => $autokmstand,
        ]);
        echo "de auto is gewijzigd! <br>";
        echo "<a href='index.html'>terug naar het menu</a><br>";
        ?>
    </div>
</main>

</body>
</html>
