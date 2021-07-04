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
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
require "../controllers/includes/header.php";
require "../controllers/includes/link.php";
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<h2 style="text-align: center; color:aquamarine; background-color:blueviolet">Add order</h2>
    <fieldset>
        <legend> Add Order</legend>
       
   
        <img style="width: 300px;height:200px"; src="./Images/chicken.jpg" alt="">
        <h3>For 1 person</h3>
         <p>Chicken briyani</p>
        <hr>
        <h2>Best Price* <span>200tk</span></h2>
        <button class="add-cart">ADD TO CART</button>
        <hr>
    
    
        <img style="width: 300px;height:200px"; src="./Images/grill.jpg" alt="">
        <h3>For 1 person</h3>
         <p>Chicken grill</p>
        <hr>
        <h2>Best Price* <span>150tk</span></h2>
        <button class="add-cart">ADD TO CART</button>
    
  
        
    </fieldset>
    <input type="submit" name="submit" value="Add"> <br> <br>
   
   

</form>

<?php require "../controllers/includes/footer.php";?>

</body>
</html>