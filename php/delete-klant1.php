<?php
?>

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

        <form action="delete-klant2.php" method="post">
            Welk klantID wilt u verwijderen?
            <input type="text" name="klantidvak"> <br />
            <input class="submit" type="submit">
        </form>
    </div>
</main>

</body>
</html>
