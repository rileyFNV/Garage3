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
    <link href="../style/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<main>
    <div class="container">
        <h1>Update Auto</h1>
        <?php
        $autokenteken = $_POST['autokentekenvak'];
        require_once "connect.php";

        $exist = $conn->prepare("SELECT autokenteken FROM auto");
        $exist->execute();

        foreach ($exist as $kenteken) {

            if ($kenteken['autokenteken'] === $autokenteken) {

                $autos = $conn->prepare("SELECT * FROM auto WHERE autokenteken = :autokenteken");
                $autos->bindParam(":autokenteken", $autokenteken);
                $autos->execute();

                echo "<form action='update-auto3.php' method='post'>";
                foreach ($autos as $auto){
                    echo "klant:" . "<input type='text'";
                    echo "name='klantid'";
                    echo "value='" .$auto["klantid"] ."' ";
                    echo "> <br>";
                    echo "klant:" . "<input type='text'";
                    echo "name='autokenteken'";
                    echo "value='" .$auto["autokenteken"] ."' ";
                    echo "> <br>";
                    echo "klant:" . "<input type='text'";
                    echo "name='automerk'";
                    echo "value='" .$auto["automerk"] ."' ";
                    echo "> <br>";
                    echo "klant:" . "<input type='text'";
                    echo "name='autotype'";
                    echo "value='" .$auto["autotype"] ."' ";
                    echo "> <br>";
                    echo "klant:" . "<input type='text'";
                    echo "name='autokmstand'";
                    echo "value='" .$auto["autokmstand"] ."' ";
                    echo "> <br>";
                }
                echo "<input class='submit' type='submit'>";
                echo "</form>";
            }
        }


        ?>
    </div>
</main>

</body>
</html>
