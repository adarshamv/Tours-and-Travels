<?php
include('connection/config.php');

$id=$_GET['id'];

$query="delete from ord where order_id='$id' ";
$data=mysqli_query($conn,$query);

if($data){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted')
   window.location.href='vieworders.php';
   </SCRIPT>");
}else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Failed to Delete')
         window.location.href='javascript:history.go(-1)';
        </SCRIPT>");
        
}
?>