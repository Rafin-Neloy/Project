
<?php
session_start();
if(!isset($_SESSION["UserName"]))
{
    header("Location: ./Login.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
</head>
<!--<label for="logout">LogOut</label>-->

<body style="background-color:white ">

<?php
include "../controllers/includes/header.php";
?>

<a style="float: right" href="Logout.php">LOG OUT</a>


<?php
echo "Welcome " .$_SESSION["UserName"];
?>

<?php
include "../controllers/includes/link.php";
?>


<?php require "../controllers/includes/footer.php"; ?>

</body>
</html>