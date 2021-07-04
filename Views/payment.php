<?php
session_start();
if(!isset($_SESSION["UserName"]))
{
    header("Location: ./Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:pink; color: black">

<?php 
require "../controllers/includes/header.php";
require "../controllers/includes/Link.php";
?>

<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST">
    <fieldset>
        <legend>Payment</legend>

         <label for="payment">payment <span style="color: red;">*</span></label>
        <input type="radio" id="Cash" name="payment" value="cash">
        <label for="cash">Cash of delivery</label>
        <input type="radio" id="online" name="payment" value="online">
        <label for="online">Online payment</label>
        
        <br>
        

        <br> <br>
        <input type="submit" name="submit" value="Submit"> <br> <br>


</form>

</fieldset>

<?php
include "../controllers/Payment-action.php";
require "../controllers/includes/footer.php";

?>

</body>
</html>