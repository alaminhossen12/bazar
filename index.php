

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
session_start();









if (isset($_SESSION['loggerid'])) {



	
include("logo.php");




	include("connect.php");








$data="SELECT * FROM sohoj11 order by id desc";


$runq=mysqli_query($conn,$data);





 $location="none";

 $cetagory="none";



if (isset($_REQUEST['oksubmit'])) {
	



$cetagory=$_POST['cetagory'];



$location=$_POST['location'];



}








if ($location=='none'&&$cetagory=='none') {



$data="SELECT * FROM sohoj11 order by id desc";


$runq=mysqli_query($conn,$data);


}



if ($location!=='none'&&$cetagory=='none') {



$data="SELECT * FROM sohoj11 WHERE addresss='$location'";


$runq=mysqli_query($conn,$data);

}



if ($location=='none'&&$cetagory!=='none') {
	

$data="SELECT * FROM sohoj11 WHERE cetagory='$cetagory'";


$runq=mysqli_query($conn,$data);

}





if ($location!=='none'&&$cetagory!=='none') {
	

$data="SELECT * FROM sohoj11 WHERE cetagory='$cetagory'";  


 $data1="SELECT * FROM sohoj11 WHERE addresss='$location' ";



$runq=mysqli_query($conn,$data);




}











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


<p  class="price"><?php echo $mydata['amount']; ?>tk</p>

<p class="name">name:<?php echo $mydata['name']; ?></p>
</div>
<div class="titleright">
<p  class="name"><?php echo $mydata['addresss']; ?></p>




<a class="num" href="tel:<?php echo $num;?>">:<?php echo $num;?> </a>

<p class="time"><?php echo $mydata['time']; ?></p>
</div>
</div>
 
<a class="a" href="details_show.php?id=<?php echo  $id;?>">

	
<img alt="empty" class="img" src="image/<?php echo  $mydata['image']; ?>">

</a>

<p class="details"><?php echo $mydata['details']; ?></p>


</section>

</a>







 <?php   }


}




else{


include("logo1.php");


	include("connect.php");



$data="SELECT * FROM sohoj11 order by id desc";


$runq=mysqli_query($conn,$data);





 $location="none";

 $cetagory="none";



if (isset($_REQUEST['oksubmit'])) {
	



$cetagory=$_POST['cetagory'];



$location=$_POST['location'];



}








if ($location=='none'&&$cetagory=='none') {



$data="SELECT * FROM sohoj11 order by id desc";


$runq=mysqli_query($conn,$data);


}



if ($location!=='none'&&$cetagory=='none') {



$data="SELECT * FROM sohoj11 WHERE addresss='$location'";


$runq=mysqli_query($conn,$data);

}



if ($location=='none'&&$cetagory!=='none') {
	

$data="SELECT * FROM sohoj11 WHERE cetagory='$cetagory'";


$runq=mysqli_query($conn,$data);

}





if ($location!=='none'&&$cetagory!=='none') {
	

$data="SELECT * FROM sohoj11 WHERE cetagory='$cetagory'";  


 $data1="SELECT * FROM sohoj11 WHERE addresss='$location' ";



$runq=mysqli_query($conn,$data);




}











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
<p class="name"><?php echo $mydata['addresss']; ?></p>




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


 




}

if (isset($_SESSION['logout'])) {
	
session_destroy();
unset($_SESSION['success']);
header('location:index.php');

}



?>



<script> 
function myfunction(a,b){

return a*b;

}

document.getElementById("demo").innerHTML=myfunction(4 )




</script>

</body>
</html>