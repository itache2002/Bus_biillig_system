<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
.card {
    display:inline-block    ;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 50%;
    padding-left:13px;
    background-color: white;
    color:black;
    margin: 50px 250px;

  }
  body{
        background-image:url("https://cdn4.vectorstock.com/i/1000x1000/45/63/school-bus-with-kids-vector-26264563.jpg");
  }
    </style>

</head>
<body>
<?php
$bus=1;
$price=0;
// $parts = explode('/', $_REQUEST['Date']);
// $date  = "$parts[2]-$parts[0]-$parts[1]";
$name=$_REQUEST["firstname"];
$stage=$_REQUEST["stage"];

if($stage=='stage1')
{
    $price=7+(0);
}
elseif($stage=='stage2')
{
    $price=7+(4*1);
}
elseif($stage=='stage3')
{
    $price=7+(4*2);
}elseif($stage=='stage4')
{
    $price=7+(4*3);
}elseif($stage=='stage5')
{
    $price=7+(4*4)  ;
}
$sql="INSERT INTO stop VALUES('$bus','$name','$stage','$price',CURDATE())";
if(mysqli_query($conn,$sql))
{

}
else{
    echo"no".mysqli_error($conn);
}

?>  
<Center> 
<div class=card>
 <Center> <h1>YOUR BILL</h1></Center> 
 Time:  <h2 id="time"></h2>
   bus_name:
   <h3><?php
     echo"$bus";
     ?></h3>
     Stage:
     <h3><?php
     echo"$stage";
     ?></h3>
     cost:
     <h3><?php
     echo"$price";
     ?></h3>
     Date:
     <h3 id="date" ></h3>
</div> </Center> 

<script>    
    window.onload = displayClock();
 
     function displayClock(){
       var time = new Date().toLocaleTimeString();
       document.getElementById("time").innerHTML = time;
        setTimeout(displayClock, 1000); 
        }
        var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;
document.getElementById("date").innerHTML = today;
</script>

</body>
</html>
