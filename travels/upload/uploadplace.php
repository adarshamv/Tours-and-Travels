<?php

include '../connection/config.php';

if(isset($_POST['submit'])){
    $locid = $_POST['locid'];
    $locname = $_POST['locname'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $shootId = $_POST['shootId'];
    $file = $_FILES['image'];

    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];
   
   

  

    if($fileerror == 0){
        $destfile = '../uploadImg/'.$filename;
       // echo "$destfile";
        move_uploaded_file($filepath, $destfile);

        $insertquery = " insert into addloc (loc_id, loc_name, city,state,droneShoot_id,image)
         values('$locid', '$locname','$city', '$state', '$shootId', '$destfile')";

        $query = mysqli_query($conn,$insertquery);

        if($query){
          //echo "Inserted";
          echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Succesfully Added')
        window.location.href='../addplace.php';
       </SCRIPT>");

        }else{
             //echo "not Inserted";
        echo ("<SCRIPT LANGUAGE='JavaScript'>
          window.alert('Failed to add Place')
           window.location.href='javascript:history.go(-1)';
          </SCRIPT>");
        }
    }

}else{
    echo "not data record";
}

?>