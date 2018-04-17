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
        <h1>Create Customer</h1>
        <p> Dit formulier wordt gebruikt om klantgegevens in te voeren.</p>
        <form action="create-klant2.php" method="post">
            klantnaam: <input type="text" name="klantnaam"> <br/>
            klantadres: <input type="text" name="klantadres"> <br/>
            klantpostcode: <input type="text" name="klantpostcode"> <br/>
            klantplaats: <input type="text" name="klantplaats"> <br/>
            <input class="submit" type="submit">
        </form>
    </div>
</main>

</body>
</html>

