<?php
      $payment="";
      $paymenterror="";

      $flag=false;

       if($_SERVER['REQUEST_METHOD'] === "POST") {
   
       $payment=$_POST['payment'];
      

      

       if(empty($payment)) {
       $paymenterror= "select payment method!";
       $flag = true;}

    
    


       if( $flag=false)
           {

            echo " successfull";
           }

         }
             
          function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
           $data = htmlspecialchars($data);
          } 
      ?>

