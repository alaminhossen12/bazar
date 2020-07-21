<!DOCTYPE html>
<html>
<head>
	<title>user info..</title>
	<link rel="stylesheet" type="text/css" href="tyle.css">

</head>
<body>
<div style="width: 100%;height: 40px;"></div>
	<h3 style="text-align: center;">your all post</h3>



<?php
include("logo.w_p.php");





session_start();
include('connect.php');


if (isset($_SESSION['loggerid'])) {

$userid=$_SESSION['loggerid'];

	



$query="SELECT * FROM sohoj11 WHERE username='$userid'";





$results=mysqli_query($conn,$query);




if ($results==true)



 {
	

while ($mydata=mysqli_fetch_array($results)) {
?>



<section style="max-height: 150px; border-top: 1px solid black;" class="usersection">

<a   onclick="alert('are you sure ?')"   href="delete.php?id=<?php echo  $mydata['id'];?>" style="margin-top:0px;">delete</a>


<p style="font-size: 13px;max-width:60%;"class="usertitle"><?php echo $mydata['title']; ?></p>


<p style="font-size: 13px;max-width:60%;"class="userprice"><?php echo $mydata['amount']; ?>tk</p>




<p style="font-size: 13px;max-width:60%;"class="usertime"><?php echo $mydata['time']; ?></p>


	
<img style="width: 30%;height:auto;margin-right:%;px;float: right;margin-top:-70px;" class="userimg" src="image/<?php echo  $mydata['image']; ?>">





</section>






<?php
}

}

}



?>






</body>
</html>