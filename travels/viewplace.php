<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Place</title>
    <link rel="icon" href="images/abt.png" type="image/icon type">
     <!-- Bootstrap CDN -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

     <link rel="stylesheet" href="css/viewplace.css">
     
</head>

<body>

<div class="grid" style="margin-top:50px;">

    <?php 
    include('connection/config.php');


    $query="select * from addloc";
    $query_run=mysqli_query($conn,$query);
    
    $check_place=mysqli_num_rows($query_run)>0;
    
    if($check_place){

        while($row=mysqli_fetch_assoc($query_run))
        {
            ?>
            <div class="grid-item">
        <div class="card">
          <img class="card-img" src="uploadImg/<?php echo $row['image']; ?>" />
          <div class="card-content">
            <center><b><h1 class="card-header"><?php echo $row['loc_name']; ?></b></h1></center>
            <p class="card-text"><?php echo $row['city'] , ',' .$row['state']; ?> </p>
            <p class="card-text">Drone_shoot_id:<?php echo $row['droneShoot_id']; ?> </p>
            <p class="card-text">loc_id:#<?php echo $row['loc_id']; ?> </p>
            <?php
            echo "
             <a href='order.php?id=$row[loc_id]'><button class='card-btn'>Proceed</button></a>
          ";?>
            </div>
        </div>
      </div>

            <?php
            
        }

    }else{
        echo "No Place Found";
    }
    ?>
    
    
<div>
  </div>
</body>

</html>