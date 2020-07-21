

<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="stylesheet" type="text/css" href="style.css">



</head>
<body>


<div id="test">
	<ul>
		<li><a href="my_account.php">my account</a></li>


<form method="post" action="logout.php">
        <li><button name="log" >logout</button></li>
</form>


	</ul>



</div>





<section class="logo">

<button class="test" onclick="toggle()"><p class="rotate">+</p></button>
<script>
	var toggled=true;
	function toggle(){
     if (!toggled) {
     	toggled=true;
     	document.getElementById("test").style.display="none";
     	return;
     }
if (toggled) {
toggled=false;
document.getElementById("test").style.display="block";
return;


}



	}


</script>


<h1>sohoj-bazar</h1>

<form action="post.php" method="post" >
<button id="pbtn" class="pbtn">post</button></form>

</form>





</section>
<section class="logo2">
	

<form class="sel" method="post" action="index.php">
	<select class="location" name="location">

	         <option value="none">location</option>

		     <option value="banani">banani</option>
		     <option value="nandina">nandina</option>
		     <option value="jamalpur">jamalpur</option>
		     <option value="gulshan">gulshan</option>
   </select>


	<select class="item" name="cetagory">
		  <option  value="none">cetagory</option>


	  <option  value="computer assessories">computer assessories</option>


	  <option  value="mobile assessories">mobile assessories</option>
	  <option  value="others">others</option>
      
   </select>
<input class="ok" type="submit" name="oksubmit" value="ok">


</form>

<form  method="post" action="index.php">

<input class="search" type="search" name="search" placeholder="search">

<input class="go" type="submit" name="ssubmit" value="go">

</form>
</section>




</body>
</html>