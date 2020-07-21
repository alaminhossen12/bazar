<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>


<div class="empty1"></div>



<?php



include("logo.w_p.php");



$server_name="localhost";

$user_name="sohoj11";

$user_pass="sohoj11";

$db_name="sohoj";


$conn=mysqli_connect("localhost","sohoj11","sohoj11","sohoj");

$GLOBALS['connect']=$conn;

if ($conn==false) {
	echo "not connected";
}




$getid=$_REQUEST['id'];

$showdetails="SELECT * FROM sohoj11 WHERE id=$getid";

$runq=mysqli_query($conn,$showdetails);

if ($runq==true) {
	
while ($mydata=mysqli_fetch_array($runq)) {
	
$GLOBALS['ss']=$mydata['addresss'];


$sr=$mydata['image'];

$num=$mydata['phone'];

?>
	


<img class="imgd" src="image/<?php echo  $mydata['image']; ?>">

<p class="titled"><?php echo $mydata['title']; ?></p>


<p class="priced"><?php echo $mydata['amount']; ?>tk</p>

<p class="named">name:<?php echo $mydata['name']; ?></p>



<p class="addr">address:<?php echo $mydata['addresss']; ?></p>

<a class="numd" href="tel:<?php echo$num;?>"><?php echo $num; ?></a>



<p class="timed"><?php echo $mydata['time']; ?></p>

<p class="detailsd"><u>details:</u><br><?php echo $mydata['details']; ?></p>


<?php
}}


?>


</body>
</html>







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



$server_name="localhost";

$user_name="sohoj11";

$user_pass="sohoj11";

$db_name="sohoj";


$conn=mysqli_connect("localhost","sohoj11","sohoj11","sohoj");

if ($conn==false) {
	echo "not connected";
}







$data="SELECT * FROM sohoj11 WHERE addresss='$ss'";


$runq=mysqli_query($conn,$data);















echo "<div class='blank'>"."</div>";





while ($mydata=mysqli_fetch_array($runq)) {


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

<div class="titleall">
<div class="titleleft">

<p class="title"><?php echo $mydata['title']; ?></p>


<p class="price"><?php echo $mydata['amount']; ?>tk</p>

<p class="name">name:<?php echo $mydata['name']; ?></p>
</div>
<div class="titleright">

<p class="name">
<?php echo $mydata['addresss']; ?></p>



<a class="num" href="tel:<?php echo $num;?>">:<?php echo $num;?> </a>

<p class="time"><?php echo $mydata['time']; ?></p>
</div>
</div>

<a class="a" href="details_show.php?id=<?php echo  $id;?>">

	
<img class="img" src="image/<?php echo  $mydata['image']; ?>">

</a>

<p class="details"><?php echo $mydata['details']; ?></p>


</section>

</a>







 <?php   }


?>






</body>
</html>