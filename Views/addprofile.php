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
<body>
<?php
include "../controllers/Addprofile-action.php";
require "../controllers/includes/header.php";
require "../controllers/includes/link.php";
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<h2 style="text-align: center; color:aquamarine; background-color:yellow">Add Information</h2>

<fieldset>
        <legend>Information</legend>
    <label for="gender">Gender <span style="color: red;">*</span></label>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label>
        <span style="color: red;"><?php echo $gendererror?></span>
        <br>

        <label for="dob">Date of Birth:<span style="color: red;">*</span> </label>
        <input type="date" id="dob" name="dob">
        <span style="color: red;"><?php echo $doberror ?> </span>
        <br>

        <label for="religion">Enter your Religion: <span style="color: red;"> *</span> </label>
        <select name="religion">
           <option value="islam">Islam</option>
           <option value="hindu">Hindu</option>
           <option value="buddha">Buddha</option>
           <option value="chritian">Christian</option>
        </select>
        <span style="color: red;"><? php echo $religionerror?></span>
      </fieldset>
        <br>

      <fieldset>
        <legend>Contact Information</legend>
        <label for="present">Present Address:<span style="color: red;">*</span> </label>
        <textarea id="present" name="present" rows="3" cols="20"> </textarea> 
        <span style="color: red;"><?php echo $presenterror?></span>
        <br>

        <label for="permanent">Permanent Address:<span style="color: red;">*</span> </label>
        <textarea id="permanent" name="permanent" rows="3" cols="20"> </textarea> 
        <span style="color: red;"><?php echo $permanenterror?></span>
        <br>

        <label for="tel">Telephone:<span style="color: red;">*</span> </label>
        <input type="tel" id="tel" name="tel">
        <span style="color: red;"><? php echo $telerror?></span>
        <br>

        <label for="email">Email: <span style="color: red;">*</span></label>
        <input type="email" id="email" name="email">
        <span style="color: red;"><?php echo $emailerror?></span>
        <br>

            </fieldset>
             <input type="submit" value= "submit">
      <br><br>

    
   

</form>
<?php require "../controllers/includes/footer.php" ?>
</body>
</html>