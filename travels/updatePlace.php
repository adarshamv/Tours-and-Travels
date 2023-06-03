<?php
include('connection/config.php');

$id=$_GET['id'];

$query ="select * from addloc where loc_id='$id'";
$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data); 
$result=mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Place</title>
    <link rel="icon" href="images/abt.png" type="image/icon type">
    <link rel="stylesheet" href="css/updatePlace.css">
    <style>
  body {
  margin-top:50px;
  font-family: Arial, Helvetica, sans-serif;
background-color: powderblue;}

 form {border: 3px solid #000;
margin-left:35%;
margin-right:35%;

}



input[type=text], input[type=email],input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
select{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.btn {
  background-color: #000;
  color: white;
  padding: 14px 20px;
  border-radius: 4px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

.home_navigator {
  background-color: #000;
  width: 10%;
  color: white;
  height: 40px;
  margin-top: 10px;
  margin-left: 20px;
}

.home_navigator a {
  text-decoration: none;
  font-size: 20px;
  color: #fff;
  padding: 5px 10px 5px 10px;
}
        </style>
</head>
<body>
<div class="home_navigator">
  	<div class="link">
          <a href="addPlace.php">🡨 Go Back</a>    
    </div>
  </div>
<form action="#" method="POST">
<div class="container">
  <center><h1>Update Place</h3></center>
            <label>Location ID</label>
            <input type="text" name="locid" value="<?php echo $result['loc_id']; ?>">
        <br><br>
            <label>Location Name</label>
            <input type="text" name="locname" value="<?php echo $result['loc_name']; ?>">
        <br><br>

        <label>City</label>
            <input type="text" name="city" value="<?php echo $result['city']; ?>">
        <br><br>

      <label>State</label>
        <input type="text" name="state" value="<?php echo $result['state']; ?>">
        <br><br>
            <label>Drone_shoot_id</label>
            <input type="text" name="shootId" value="<?php echo $result['droneShoot_id'];?>">
        
            <br><br>
            
            <input type="submit" value="update Details" class="btn" id="button" name="update">

</div>

</form>
</body>
</html>


<?php
error_reporting(0);
if($_POST['update']){
    $loc_id=$_POST['locid'];
    $loc_name=$_POST['locname'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $droneShoot_id=$_POST['shootId'];
   

    $query="update addloc set loc_id='$loc_id', loc_name='$loc_name', city='$city', state='$state', 
    droneShoot_id='$droneShoot_id' where loc_id='$loc_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo ("<SCRIPT LANGUAGE='JavaScript'>
     window.alert('Succesfully Updated')
    window.location.href='addplace.php';
    </SCRIPT>");
    
    }

    else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Failed to Update')
         window.location.href='javascript:history.go(-1)';
        </SCRIPT>");
        }
}


?>