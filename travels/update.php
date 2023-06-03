<?php
include('connection/config.php');

$id=$_GET['id'];

$query ="select * from addcust where cust_id='$id'";
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
    <title>Update Customer</title>
    <link rel="icon" href="images/abt.png" type="image/icon type">
    <link rel="stylesheet" href="css/updatecust.css">


</head>
<body>
<div class="home_navigator">
  	<div class="link">
          <a href="viewcust.php">🡨 Go Back</a>
          
    </div>
  </div>
  
<form action="#" method="POST">
  

  <div class="container">
  <center><h1>Update Customer</h3></center>
  
  <label for="custId"><b>CustomerId</b></label>
    <input type="text"  value="<?php echo $result['cust_id']; ?>" name="custid" readonly>
    <br><br>
    <label for="fname"><b>Firstname</b></label>
    <input type="text" placeholder="Enter firstname"  value="<?php echo $result['Firstname']; ?>" name="fname" required>
    <br><br>
     <label for="lname"><b>Lastname</b></label>
    <input type="text" placeholder="Enter Lastname" name="lname" value="<?php echo $result['Lastname']; ?>" required>
    <br><br>
     <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" value="<?php echo $result['email']; ?>" required>
    <br><br>
    <label for="gender"><b>Select Gender</b></label>  
    <select name="gender" id="" value="<?php echo $result['gender']; ?>">

    <option value="male">Male</option>
    <option value="female">Female</option>
</select>
<br><br>
     <label for="phone"><b>Phone</b></label>
    <input type="text" placeholder="Enter phone" name="phone" value="<?php echo $result['phone']; ?>" required>
    <br><br>
     <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" value="<?php echo $result['address']; ?>" required>
    <br><br>
    
    <input type="submit" value="update Details" class="btn" id="button" name="update">
    
  </div>
</form>

</body>
</html>

<?php
error_reporting(0);
if($_POST['update']){
    $cust_id=$_POST['custid'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    $query="update addcust set Firstname='$fname', Lastname='$lname', email='$email', gender='$gender', 
    phone='$phone',address='$address' where cust_id='$cust_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo ("<SCRIPT LANGUAGE='JavaScript'>
     window.alert('Succesfully Updated')
    window.location.href='viewcust.php';
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