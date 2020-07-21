<?php

session_start();


if (isset($_SESSION['loggerid'])) {
$userid=$_SESSION['loggerid'];
}




if (isset($_SESSION['loggername'])) {
$username=$_SESSION['loggername'];
}

if (isset($_SESSION['loggerpassword'])) {
$password=$_SESSION['loggerpassword'];
}

//connect

include("connect.php");

//data_store



$addr=$_POST['addr'];

$contact=$_POST['phone'];

$title=$_POST['title'];


$details=$_POST['details'];


$amount=$_POST['amount'];


$cetagory=$_POST['cetagory'];





$image=$_FILES["avatar"]["name"];



$tmp=$_FILES["avatar"]["tmp_name"];

$uniqid=uniqid();

//file data store


$INSERT="INSERT INTO sohoj11 (username,name,addresss,phone,title,amount,image,details,cetagory)VALUES('$userid','$username','$addr','$contact','$title','$amount','$uniqid.jpg','$details','$cetagory')";

$runquery=mysqli_query($conn,$INSERT);



move_uploaded_file($tmp, "image/$uniqid.jpg");



header("location:index.php");

?>