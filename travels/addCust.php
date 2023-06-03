<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
    <link rel="icon" href="images/abt.png" type="image/icon type">
     <!-- Bootstrap CDN -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/addCust.css">
<style>

</style>
</head>
<body>

<div class="home_navigator">
  	<div class="link">
          <a href="index.php">🡨 Go Back</a>
          
    </div>
  </div>
  


  
  
  <form action="upload\uplogin.php" method="POST">
  <div class="container">
  
    <center><h1><b>Add Customer</b></h3></center>
    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First name" name="fname" required>
    <br><br>
     <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last name" name="lname" required>
    <br><br>
     <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>
    <br><br>
    <label for="gender"><b>Select Gender</b></label>  
    <select name="gender" id="">
    <option value="male">Male</option>
    <option value="female">Female</option>
</select>
<br><br>
     <label for="phone"><b>Phone</b></label>
    <input type="text" placeholder="Enter phone" name="phone" required>
    <br><br>
     <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required>
    <br><br>
    
    <button type="submit" value="submit">Add_Customer</button>
    </div>
    
 
</form>

<center><a href="viewcust.php"><button class="view" value="submit" ">View_Customer</button></a></center>


</body>
</html>

