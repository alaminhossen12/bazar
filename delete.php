<?php
	include("connect.php");

$getid=$_REQUEST['id'];

echo "not deleted ";

$del="DELETE  FROM sohoj11 WHERE id='$getid'";

$run=mysqli_query($conn,$del);

if ($run==true) {
	echo "deleted";

	header('location:my_account.php');
}


?>