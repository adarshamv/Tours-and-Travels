<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Place</title>
    <link rel="stylesheet" href="css/addPlace.css">
    <link rel="icon" href="images/abt.png" type="image/icon type">
    <style>


body {font-family: Arial, Helvetica, sans-serif;
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
  
  
  .btn {
    background-color: #000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 4px;
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
  
  table {
      margin: 0px;
      margin-top: 20px;
      border-collapse: collapse;
      width: 80%;
      margin-left:auto;
      margin-right:auto;
      font-family: 'Montserrat', sans-serif;
  }
  
  th, td {
      text-align: center;
      padding: 8px;
  }
  
  tr:nth-child(even){background-color: #f2f2f2}
  tr:hover {background-color:#76D7C4;}
  
  th {
      background-color: black;
      color: white;
  }
  
  td button {
      background-color: #000;
      color: white;
      font-weight: bold; 
      padding: 5px;
      border-radius: 5px;
      border: 0px solid #1976d2;
      width:80px;
     
    }
    td button a{
      text-decoration: none;
      color:white;
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
          <a href="index.php">🡨 Go Back</a>
          
    </div>
  </div>  

<form action="upload\uploadplace.php" method="POST" enctype="multipart/form-data">
  

  <div class="container">
    <center><h1>Add Place</h3></center>
    <label>Location ID</label>
		        		<input type="text" name="locid" placeholder="Enter Location Id">
		        	
  <br>
                    <label>Location Name</label>
		        		<input type="text" name="locname" placeholder="Enter location name">
		        	<br>
                    <label>City</label>
		        		<input type="text" name="city" placeholder="Enter City name">
		        	<br>
                    <label>State</label>
                    <input type="text" name="state" placeholder="Enter State">
                    <br>
     
                    <label>Drone_shoot_id</label>
		        		<input type="text" name="shootId" placeholder="Enter Drone Shoot Id">
		        	
                        <br><br>
                        <label>location Image <small>(format: jpg, jpeg, png)</small></label>
		        		<input type="file" name="image" class="form-control">
                        
                        <br><br>
    
            <input type="submit" value="Add Place" class="btn"  name="submit">
   
    
  </div>
</form>





 <table>
    <tr>
    <th align = "center">Sl No</th>
         <th align = "center">Images</th>
        <th align = "center">LocId</th>
        <th align = "center">LocName</th>
        <th align = "center">City&State</th>
        <th align = "center">Shoot_id</th>
        <th align = "center">Update</th>
        <th align = "center">Delete</th>
    </tr>
    

  

    <?php 
    $db = new mysqli('localhost', 'root', '', 'droame') 
       or die("Error connecting to database!");
      //  include 'process/config.php';

    $sql = "SELECT * from addloc";

    $results = $db->query($sql);

    $i = 1;
    while($row = $results->fetch_assoc()) {
        
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td> <img src="uploadImg/<?php echo $row['image']?>" width="100px" height="80px"></td>
            <td><?php echo $row['loc_id']; ?></td>
            <td><?php echo $row['loc_name'];?></td>
            <td><?php echo $row['city'] .',' . $row['state'];?></td>
            <td><?php echo $row['droneShoot_id']; ?></td>
           <?php 
           
         echo  "<td><button> <a href='updateplace.php?id=$row[loc_id]'>Update
         </a></button></td>
         
         <td><button> <a href='deleteplace.php?id=$row[loc_id]'>Delete
         </a></button></td>
            ";?>
            
        </tr>
        
        <?php
        $i++;
    }
?>



</table>



</body>
</html>