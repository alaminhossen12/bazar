<?php

session_start();

//variable
$username="";
$email="";

$errors=array();

//connect db
$db=mysqli_connect('localhost','root','','practice') OR die("could not connect to database");

if ($db==true) {

//check	
//register user



}


if (isset($_POST['registration'])) {
	
$username=mysqli_real_escape_string($db,$_POST['username']);


$email=mysqli_real_escape_string($db,$_POST['email']);


$password1=mysqli_real_escape_string($db,$_POST['password1']);



$password2=mysqli_real_escape_string($db,$_POST['password2']);

//check
echo "<br/>".$username;





//form validation
/*
if (empty($username)) {
  array_push($errors, "username is required");
}


if (empty($email)) {
	array_push($errors, "email is required");
}


if (empty($password1)) {
	array_push($errors, "password is required");
}




if ($password1!==$password2) {
	array_push($errors, "password do not match");
}
*/

//existing
$user_check="SELECT * FROM user WHERE email='$email'";


if (mysqli_num_rows($user_check)>0) {
	echo "invalid email";
	header('location:server.php');
}
else{
		$query="INSERT INTO user(username,email,password) VALUES('$username','$email','$password1')";

   mysqli_query($db,$query);

$_SESSION['username']='$username';
$_SESSION['success']="you are logged in";

header('location: index.php');

	}


}



//login user 
	if (isset($_POST['login'])) {
		
$username=mysqli_real_escape_string($db,$_POST['username']);
$password=mysqli_real_escape_string($db,$_POST['password1']);

/*
if (empty($username)) {
array_push($errors, "username is required");}

if (empty($password)) {
array_push($errors, "password is required");}

if (count($errors)===0) {
*/

//$password=md5($password);




$query="SELECT * FROM user WHERE username='$username' and password='$password'";





$results=mysqli_query($db,$query);




if ($results==true)



 {
	

while ($mydata=mysqli_fetch_array($results)) {


$dbusername=$mydata['username'];
$dbpassword=$mydata['password'];

if ($dbusername=$username&&$dbpassword=$password) {
		
$_SESSION['succes']=$mydata['username'];

header('location:../index.php');


	}	


else{

$_SESSION['succes']=$mydata['username'];


header('location:login.php');


}


}


}

/*

if (($results)) {
	
$_SESSION['username']=$username;
$_SESSION['success']="logged in success";

header('location:index.php');

}

*/
//if(mysqli_num_results('$results'))
//$_SESSION['username']=$username;
//$_SESSION['success']="logged in success";



}
?>

