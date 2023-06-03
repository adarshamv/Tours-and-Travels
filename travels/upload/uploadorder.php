<?php

include('../connection/config.php');
$min=10000;
$max=99999;
$order_id=rand($min,$max);

$locid =$_POST['locid'];
$number = $_POST['number'];
$book = $_POST['book'];
$noOfdays =$_POST['noOfdays'];

//cheking user is register or not
$temp="select * from addcust where phone='$number'";
$res=mysqli_query($conn,$temp);
$count=mysqli_num_rows($res);

//getting cust_id using number
$temp1="select cust_id from addcust where phone='$number'";
$res1=mysqli_query($conn,$temp1);

$total=mysqli_num_rows($res1); 
$result=mysqli_fetch_assoc($res1);

$cust_id=$result['cust_id'];

$curdate=date("Y/m/d");//currecnt time


if($count>0){

    $insertquery = " insert into ord(order_id,cust_id,loc_id,orderd_at,book_at,noOfdays)
  values('$order_id','$cust_id','$locid','$curdate','$book','$noOfdays')";

 $query = mysqli_query($conn,$insertquery);

 if($query){
   //echo "Inserted";
   echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('Succesfully added')
 window.location.href='../vieworders.php';
</SCRIPT>");

 }else{
      //echo "not Inserted";
 echo ("<SCRIPT LANGUAGE='JavaScript'>
   window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
   </SCRIPT>");
 }
  
}else{
      //echo "Inserted";
   echo ("<SCRIPT LANGUAGE='JavaScript'>
   window.alert('user Not registered. Please, Register!')
   window.location.href='../addcust.php';
  </SCRIPT>");
}
