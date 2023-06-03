<?php

include('../connection/config.php');
$min=1000;
$max=9999;
$cust_id=rand($min,$max);
    
    $firstname =$_POST['fname'];
    $lastname = $_POST['lname'];
    $email =$_POST['email'];
    $gender = $_POST['gender'];
    $phone =$_POST['phone'];
    $address = $_POST['address'];
    


  $insertquery = " insert into addcust(cust_id,Firstname,Lastname,email,gender,phone,address)
  values('$cust_id','$firstname','$lastname','$email','$gender','$phone','$address')";

 $query = mysqli_query($conn,$insertquery);

 if($query){
   //echo "Inserted";
   echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('Succesfully added')
 window.location.href='../viewcust.php';
</SCRIPT>");

 }else{
      //echo "not Inserted";
 echo ("<SCRIPT LANGUAGE='JavaScript'>
   window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
   </SCRIPT>");
 }
?>