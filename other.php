<!DOCTYPE html>
<html>
<head>
	<title></title>


<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>

<div class="empty">
	


</div>


<?php

include("logo.php");


$server_name="localhost";

$user_name="sohoj11";

$user_pass="sohoj11";

$db_name="sohoj";


$conn=mysqli_connect("localhost","sohoj11","sohoj11","sohoj");

if ($conn==false) {
	echo "not connected";
}



$data="SELECT * FROM sohoj11 WHERE addresss='banani'";


$runq=mysqli_query($conn,$data);




while ($mydata=mysqli_fetch_array($runq)) {
	
//echo $id=$mydata['id'];









/*
 $sr=$mydata['image'];


echo "<a class='a' href=''>".  "<section class='section' >". "<img class='img'  src='image/$sr'/>"."</a>"."<p class='details' >".$mydata['details']."</p>"."<p class='title' >".$mydata['title']."</p>"."<p class='price' > "."price: ".$mydata['amount']." tk"."<p class='name' >"."sell by: "."<i>".$mydata['name']."</p>   "."</i>"."<p class='time' >".$mydata['time']."</p>"."</section>"."<br>";
*/

 ?>
<?php
 $id= $mydata['id'];
 $num= $mydata['phone'];


?>


<a class="a" href="details_show.php?id=<?php echo  $id;?>">


<section class="section">
	
<img class="img" src="image/<?php echo  $mydata['image']; ?>">

<p class="details"><?php echo $mydata['details']; ?></p>

<p class="title"><?php echo $mydata['title']; ?></p>


<p class="price"><?php echo $mydata['amount']; ?>tk</p>

<p class="name">name:<?php echo $mydata['name']; ?></p>
<p class="name"><?php echo $mydata['addresss']; ?></p>




<a class="num" href="tel:<?php echo $num;?>">:<?php echo $num;?> </a>

<p class="time"><?php echo $mydata['time']; ?></p>


</section>

</a>







 <?php   }


?>







</body>
</html>