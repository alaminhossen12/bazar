
<?php include('../userconnect.php');
session_start();







if (isset($_POST['registration'])) {



  
$username=mysqli_real_escape_string($conn2,$_POST['username']);


$email=mysqli_real_escape_string($conn2,$_POST['email']);


$password1=mysqli_real_escape_string($conn2,$_POST['password1']);



$password2=mysqli_real_escape_string($conn2,$_POST['password2']);

//check

$exist="SELECT * FROM sohoj22 WHERE email='$email'";
$result=mysqli_query($conn2,$exist);
$count=mysqli_num_rows($result);

if ($count>0) {
header('location:registration.php');
$_SESSION['email']="email already used";

}
elseif ($password1!==$password2) {
header('location:registration.php');

$_SESSION['pwd']="password not match ";


}

else{

$iquery="INSERT INTO sohoj22(username,email,password) VALUES('$username','$email','$password1')" ;
$run=mysqli_query($conn2,$iquery);

header('location:login.php');
}



}






?>

<!DOCTYPE html>
<html>
<head>
	<title>registration page</title>
    <link rel="stylesheet" type="text/css" href="../style.css">

</head>
<body style="background:#032;">


<section class="logo">
<h1 class="h3">sohoj-bazar</h3>

</section>
<div class="empty3"></div>

<div class="container">
	
   <div class="header">
   </div>




<form class="form" action="registration.php" method="POST">
	


<div>
   <label style="color: white;"for="username">username</label><br/>
    <input class="" type="text" name="username" required="">
</div>


<div>
   <label style="color: white;"for="email">email</label><br/>
    <input class="" type="email" name="email" required="">
</div>

<div>
  <label style="color: white;"for="password1">password</label><br/>
 <input class="" type="password" name="password1" required="">
</div>

<div>
   <label style="color: white;"for="password2">confirm</label><br/>
 <input  class="" type="password" name="password2" required="">
</div>
</br>

<button class="" type="submit" name="registration">register</button>

<p style="color: white;">alreay a user?<a href="login.php"><b style="color: black;">log in</b></a></p>
</form>




</div>



</body>
</html>