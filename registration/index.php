<?php

session_start();

if (isset($_SESSION['username'])) {
	
$_SESSION['msg']="you must login first to view this page";


echo $_SESSION['msg'];

header('location: login.php');


}

if (isset($_GET['logout'])) {
	
session_destroy();
unset($_SESSION['username']);
header('location:login.php');

}




?>
<?php enduf?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>home</h1>

<?php 

session_start();


if (isset($_SESSION['success'])) {
	echo $_SESSION['success'];
}



?>




</body>
</html>



<?php enduf?>