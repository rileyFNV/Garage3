<?php
session_start();
require('connect.php');


if ($_SESSION['loggedin'] != true) {
    header("location:login.html");
}

$userID = $_SESSION['userid'];

$selectUser = $conn->prepare("SELECT * FROM user WHERE userid = :id");
$selectUser->bindParam(":id", $userID);
$selectUser->execute();
$user = $selectUser->fetch(PDO::FETCH_ASSOC);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Overzicht</title>
</head>
<body>
<?php if ($_SESSION['loggedin'] = true){ ?>
<p>Welkom, <?php print $_SESSION['username'];
    } ?>!</p>

<?php if ($_SESSION['role'] === 'admin') {?>
<form action="updateUser.php" method="post">
    <label for="username">Change Username:</label>
    <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>">
    <label for="password">Change Password:</label>
    <input type="password" id="password" name="password" value="">
    <button type="submit" value="submit">Submit Changes!</button>
</form>
<?php }?>


</body>
</html>
