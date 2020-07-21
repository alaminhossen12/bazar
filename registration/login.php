
<!DOCTYPE html>
<html>
<head>
	<title>login page </title>
	<link rel="stylesheet" type="text/css" href="../style.css">

</head>
<body style="background:#032;">

<section class="logo">
<h1 class="h1">sohoj-bazar</h1>

</section>
<div class="empty3"></div>



<?php
session_start();



include('../userconnect.php');


	if (isset($_POST['login'])) {
		
$username=mysqli_real_escape_string($conn2,$_POST['username']);
$password=mysqli_real_escape_string($conn2,$_POST['password1']);



$query="SELECT * FROM sohoj22 WHERE username='$username' and password='$password'";





$results=mysqli_query($conn2,$query);




if ($results==true)



 {
	

while ($mydata=mysqli_fetch_array($results)) {

$dbuserid=$mydata['id'];

$dbusername=$mydata['username'];
$dbpassword=$mydata['password'];

if ($dbusername=$username&&$dbpassword=$password) {
	
$_SESSION['loggerid']=$dbuserid;


$_SESSION['loggername']=$username;

$_SESSION['loggerpassword']=$password;



$_SESSION['success']="aj";




$cookie_value=$_POST['email'];
$cookie_expire=time()+60;
setcookie("aj", "aj alamin", $cookie_expire);

header('location:../index.php');


	}	
}
}
}
?>




<div class="container">
	
   <div class="header">
   </div>

<form class="form" action="login.php" method="post">
	
<div>
   <label style="color: white;"for="username">username</label><br/>
    <input type="text" name="username" required="">
</div>


<div>
  <label style="color: white;"for="password1">password</label><br/>
 <input type="password" name="password1" required="">
</div>


<button type="submit" name="login">log in</button>

<p style="color: white;">not a user?<a href="registration.php"><b  style="color: black;">register here </b></a></p>
</form>




</div>



</body>
</html>