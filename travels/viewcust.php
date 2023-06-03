
<html>
<head>
    <title>View Customer </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="icon" href="images/abt.png" type="image/icon type">
    <link rel="stylesheet" href="css/viewcust.css">

        
</head>
<body>

<div class="home_navigator">
  	<div class="link">
          <a href="addCust.php">🡨 Go Back</a>
          
    </div>
  </div>
<table>
    <tr>

        <th align = "center">Sl No</th>
        <th align = "center">cust_id</th>
        <th align = "center">Name</th>
        <th align = "center">Email</th>
        <th align = "center">Gender</th>
        <th align = "center">Contact</th>
        <th align = "center">Address</th>
        <th align = "center">Update</th>
        <th align = "center">Delete</th>
    </tr>
    

  

    <?php 
    $db = new mysqli('localhost', 'root', '', 'droame') 
       or die("Error connecting to database!");
      //  include 'process/config.php';

    $sql = "SELECT * from addcust";

    $results = $db->query($sql);

    $i = 1;
    while($row = $results->fetch_assoc()) {
        
        echo "
        <tr>
            <td>".$i."</td>
            <td>".$row['cust_id']."</td>
            <td>".$row['Firstname'] , ' ' . $row['Lastname']."</td>
            <td>".$row['email']."</td>
             <td>".$row['gender']."</td>
                <td>".$row['phone']."</td>
                <td>".$row['address']."</td>
             
            <td><button> <a href='update.php?id=$row[cust_id]'>Update
         </a></button></td>
         
         <td><button> <a href='deleteCust.php?id=$row[cust_id]'>Delete
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