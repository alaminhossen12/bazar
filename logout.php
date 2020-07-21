<?php
session_start();

	
session_destroy();
unset($_SESSION['logout']);

if (isset($_POST['log'])) {


$_SESSION['logout']="logout success";


header('location:index.php');
}


?>