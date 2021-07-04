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
<fieldset>
    <legend>Profile Information</legend>
</fieldset>

<body style="background-color:yellow;">

<?php
$readData = read();
$arr1 = explode("\n", $readData);

echo "<ol>";
for($i = 0; $i < count($arr1) - 1; $i++) {
$arr2 = explode(",", $arr1[$i]);
echo "<li>" . "First Name:" .$arr2[0]." UserName:".$arr2[1]."/<li>";
}

echo "</ol>";


function read() {
$fileName = "data.json";
$resource = fopen($fileName, "r");
$fr = fread($resource, filesize($fileName));
fclose($resource);

return $fr;
}
?>
</body>
</html>