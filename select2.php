<?php
 include 'connect.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>order total</title>
   <style>
   table,th,tr,td {
      border:1px solid black;
  border-collapse: collapse;
  width:40%;
}
th{
   width: 15%;
}
tr{
   width: 15%;
}
td{
   width: 15%;
}
#bek {
   color: black;
}
   </style>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="form.css">

   
</head>
<body>
   
<section class="">

  <center> <h1 class="heading"> Total Order </h1> </center> 


      <?php
      $total=0;
      $result = mysqli_query($conn, "SELECT * FROM `stop` where bus_name=2");
      
   echo "
<center>
<table >
<tr>
<th>bus_name</th>
<th>FirstName</th>
<th>stage</th>
<th>price</th>
<th>Date</th>
</tr>";
while($fetch_order = mysqli_fetch_assoc($result))
   {
   $total+=$fetch_order["price"];
  echo "<tr>";
  echo "<td>" . $fetch_order["bus_name"] . "</td>";
  echo "<td>" .$fetch_order["FirstName"]. "</td>";
  echo "<td>" .$fetch_order["stage"]. "</td>";
  echo "<td>" . $fetch_order["price"]. "</td>";
  echo "<td>" . $fetch_order["Date"]. "</td>";
   }
echo "</table><center>";
echo "<h1> Total:".$total."</h1>";
?>
</table>

<button class="btn"> <a href="home.html">  <b>BACK</b> </a></button>
</body>
</html>