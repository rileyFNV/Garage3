<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link href="../style/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<main>
    <div class="container">
        <h1>Create Car</h1>
        <p> Dit formulier wordt gebruikt om autogegevens in te voeren.</p>
        <form action="create-auto2.php" method="post">
            Autokenteken: <input type="text" name="autokenteken"> <br/>
            Automerk: <input type="text" name="automerk"> <br/>
            Autotype: <input type="text" name="autotype"> <br/>
            Autokmstand: <input type="text" name="autokmstand"> <br/>
            Klantid: <input type="text" name="klantid"> <br/>
            <input class="submit" type="submit">
        </form>
    </div>
</main>

</body>
</html>

