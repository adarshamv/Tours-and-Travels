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
    <title>Order</title>
    <link rel="icon" href="images/abt.png" type="image/icon type">
    <link rel="stylesheet" href="css/order.css">
<style>
  body {font-family: Arial, Helvetica, sans-serif;
background-color: powderblue;}

.container {border: 3px solid #000;
margin-left:35%;
margin-right:35%;

}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=date]{
  background-color:#fff;
 // padding: 15px;
  font-family: "Roboto Mono",monospace;
  //color: #ffffff;
  font-size: 18px;
  border: solid 1px;
  outline: none;
  border-radius: 5px;
  margin-left:15px;
  width:200px;
  height:40px;
}
select{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
option{

}

button {
  background-color: #000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
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
.view{
  width:28%;
  background-color: #000;
  border-radius: 4px;
  margin-top: 30px;
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
  </style>
</head>
<body>
<div class="home_navigator">
  	<div class="link">
          <a href="index.php">🡨 Go Back</a>
          
    </div>
  </div>
<form action="upload\uploadorder.php" method="POST">
  <div class="container">
    <center><h1>Order</h3></center>
    <label for="fname"><b>Location_ID</b></label>
    <input type="text" name="locid"  value="<?php echo $result['loc_id']; ?>" readonly>
     <label for="locname"><b>Location Name</b></label>
    <input type="text" name="locname"  value="<?php echo $result['loc_name']; ?>" readonly>
    
     <label for="city"><b>City</b></label>
    <input type="text" name="city"  value="<?php echo $result['city']; ?>" readonly>
  <label for="email"><b>State</b></label>
    <input type="text" name="city"  value="<?php echo $result['state']; ?>" readonly>
    
    <label for="number"><b>Enter Number</b></label>
    <input type="text" placeholder="enter customer phone Number" name="number" > 
    <br><br>

    <label for="date"><b>Book_At</b></label>
    <input type="date"  name="book" > <br><br>
        
    
    <label for="id"><b>NoOfDays</b></label>
    <input type="text" name="noOfdays" placeholder="enter customer phone Number" require> 
    <br>
    
    <button type="submit" value="submit">Order</button>
    
  </div>
</form>
<center><a href="vieworders.php"><button class="view" value="submit" ">View_Orders</button></a></center>
</body>
</html>