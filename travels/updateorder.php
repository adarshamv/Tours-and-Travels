<?php
include('connection/config.php');

$id=$_GET['id'];

$query ="select * from ord where order_id='$id'";
$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data); 
$result=mysqli_fetch_assoc($data);

//getting name 
$custid = $result['cust_id'];
$rcid= " select * from addcust where cust_id='$custid' ";
$data=mysqli_query($conn,$rcid); 
$res=mysqli_fetch_assoc($data);

//getting loc

//getting name 
$locid = $result['loc_id'];
$lid= " select * from addloc where loc_id='$locid' ";
$data1=mysqli_query($conn,$lid); 
$res1=mysqli_fetch_assoc($data1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Customer</title>
    <link rel="icon" href="images/abt.png" type="image/icon type">
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
          <a href="vieworders.php">🡨 Go Back</a>
          
    </div>
  </div>
<form action="#" method="POST">
  

  <div class="container">
  <center><h1>Update Order</h3></center>
  
  <label for="custId"><b>Order_id</b></label>
    <input type="text"  value="<?php echo $result['order_id']; ?>" name="order_id" readonly>
    <br><br>
   
    <label for="custId"><b>CustomerId</b></label>
    <?php 
   
    ?>
    <input type="text"  value="<?php 
                        echo $res['Firstname'] . ' ' . $res['Lastname'];
                
                ?>" 
                
                name="cust_name" readonly>
    <br><br>

    <label for="custId"><b>Place</b></label>
    <input type="text"  value="<?php 
          echo $res1['loc_name'] . ',' . $res1['city'].',' . $res1['state'];
    ?>" name="place" readonly>
    <br><br>
    <label for="custId"><b>Book_At</b></label>
    <input type="date"  value="<?php echo $result['book_at']; ?>" name="book_at" >
    <br><br>
    
    <label for="custId"><b>NoOfDays</b></label>
    <input type="text"  value="<?php echo $result['noOfdays']; ?>" name="noOfdays" >
    <br><br>
    <input type="submit" value="update Order" class="btn" id="button" name="update">
    
  </div>
</form>

</body>
</html>

<?php
error_reporting(0);
if($_POST['update']){
    $ordid=$_POST['order_id'];
    $book_at=$_POST['book_at'];
    $days=$_POST['noOfdays'];

    $query="update ord set book_at='$book_at', noOfdays='$days'  where order_id='$ordid'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo ("<SCRIPT LANGUAGE='JavaScript'>
     window.alert('Succesfully Updated')
    window.location.href='vieworders.php';
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