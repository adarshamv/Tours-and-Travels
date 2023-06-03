<html>
<head>
    <title>View Orders </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="icon" href="images/abt.png" type="image/icon type">

    <style>
        *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}
body{
    font-family: montserrat;
    background-color: powderblue;
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
<table>
    <tr>

        <th align = "center">Sl No</th>
        <th align = "center">Order_id</th>
        <th align = "center">CustomerName</th>
        <th align = "center">Address,City,State</th>
        <th align = "center">Book_At</th>
        <th align = "center">NoOfDays</th>
        <th align = "center">Update</th>
        <th align = "center">Delete</th>
    </tr>
    

  

    <?php 
    $db = new mysqli('localhost', 'root', '', 'droame') 
       or die("Error connecting to database!");
      
    $sql = "SELECT * from ord";
    $results = $db->query($sql);


    $i = 1;
    while($row = $results->fetch_assoc()) {
        
       ?>
        <tr>
            <td><?php echo $i;?> </td>
            <td><?php echo $row['order_id']; ?></td>
            <td><?php 
                    $custid = $row['cust_id'];
                    include('connection/config.php');
      
                    $rcid= " select * from addcust where cust_id='$custid' ";
                    $data=mysqli_query($conn,$rcid); 
                    $result=mysqli_fetch_assoc($data);
                    echo $result['Firstname'] . ' ' . $result['Lastname'];
            ?></td>
            <td><?php 
                    $locid = $row['loc_id'];
                    include('connection/config.php');
      
                    $rlid= " select * from addloc where loc_id='$locid' ";
                    $data1=mysqli_query($conn,$rlid); 
                    $result1=mysqli_fetch_assoc($data1);
                    echo $result1['loc_name'].','.$result1['city'].','.$result1['state'];
            ?></td>
             <td><?php echo $row['book_at']; ?></td>
             <td><?php echo $row['noOfdays']; ?></td>
        <?php echo "
            <td><button> <a href='updateorder.php?id=$row[order_id]'>Update
         </a></button></td>
         
         <td><button> <a href='deleteorder.php?id=$row[order_id]'>Delete
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