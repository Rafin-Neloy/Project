<?php

$gender= $religion =$present = $permanent = $tel =$email=$dob="";
$doberror=$gendererror=$emailerror=$religionerror=$presenterror=$permanenterror=$telerror="";

$flag=false;

       if($_SERVER['REQUEST_METHOD'] === "POST") {
       $gender=$_POST['gender'];
       $dob = $_POST['dob'];
       $email = $_POST['email'];
       $religion = $_POST['religion'];
       $tel = $_POST['tel'];
       $present = $_POST['present'];
       $permanent = $_POST['permanent'];
      



       if(empty($gender)) {
       $gendererror = "select gender, cannot be empty!";
       $flag = true;}

       if(empty($dob)) {
       $doberror = "death of birth cannot be empty!";
       $flag = true;}

       if(empty($religion)) {
       $religionerror = "choose religion";
       $flag = true;}

       if(empty($present)) {
       $presenterror = "field can not be empty";
       $flag = true;}

       if(empty($permanent)) {
       $permanenterror = "field can not be empty!";
       $flag = true;}

       if(empty($tel)) {
       $telerror = "provide Telephone!";
       $flag = true;}

       if(empty($email)) {
       $emailerror = "email can not be empty!";
       $flag = true;}



    if (!$flag) {

        $file = "adddata.json";
        if (file_exists($file)) {
            $existing_data = read();
            if (empty($existing_data)) {
                $arr1[] = array("Gender"=> $gender,"Date of Birth"=>$dob,"Enter your Religion"=>$religion,"Present Address"=>$present,"Permanenet Address"=>$permanent,"Telephone"=>$tel,"Email"=>$email);
                $result = write(json_encode($arr1));

            } else {

                $existing_data_decode = json_decode($existing_data);
                array_push($existing_data_decode, array("Gender"=> $gender,"Date of Birth"=>$dob,"Enter your Religion"=>$religion,"Present Address"=>$present,"Permanenet Address"=>$permanent,"Telephone"=>$tel,"Email"=>$email));

                write("");
                $json = json_encode($existing_data_decode);
                $result = write(($json)."\n");
            }
        }
        if ($result) {
            $successMesg = " Succesfully Saved";
        } else {
            $errorMesg = "Error While saving";
        }
    }
}


function input($v)
{
    $v = htmlspecialchars($v);
    $v = trim($v);
    $v = stripslashes($v);
    return $v;
}
function write($value)
{
    $fileName = "adddata.json";
    $resors = fopen($fileName, "w");
    $fileWrite = fwrite($resors, $value);
    fclose($resors);
    return $fileWrite;
}
function read()
{
    $fileName = "adddata.json";
    $fileSize = filesize($fileName);
    $fr = "";
    if ($fileSize > 0) {
        $resource = fopen($fileName, "r");
        $fr = fread($resource, $fileSize);
        fclose($resource);
        return $fr;
    }
}

?>