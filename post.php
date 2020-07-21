<!DOCTYPE html>
<html>
<head>
	<title>main</title>


	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="pbody">



<?php


include("logo.w_p.php");


?>
<div class="postblank"></div>
<form  class="form" method="post" action="server.php" enctype="multipart/form-data">






	    <input class="inp" type="text" name="addr" placeholder="address"><br><br>





    <input class="inp" type="number" name="phone" placeholder="number" ><br><br>


<select name="cetagory" class="inp" >

		  <option  value="none">select cetagory</option>


	  <option  value="computer assessories">computer assessories</option>


	  <option  value="mobile assessories">mobile assessories</option>
	  <option  value="others">others</option>
      


</select><br><br>


    <input class="inp" type="text" name="title" placeholder="title"><br><br>




    <input class="inp" type="text" name="details" placeholder="for details"><br><br>



    <input class="inp" type="number" name="amount" placeholder="price"><br><br>


    <input class="inp" type="file" name="avatar" /><br><br>






    
    <input class="ppbtn"type="submit" name="submit" value="post">

</form>






</body>
</html>