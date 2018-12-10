	<html> 
	<link href="style.css" rel="stylesheet" type="text/css"> 

	
	<head> 
	<title>Search Results</title> 
	</head> 
	<div class="container"> 
	<header> 
	<h1>Search Results</h1> 
	</header> 
	<div class="topnav"> 
	
	<a class="active" href="search.html" style="text-decoration: none">Search</a> 

	<a href="logout.php" style="text-decoration: none">Logout</a> 

	</div> 
	<nav> 
	<ul> 
	<li><a class="active" href="search.html"style="text-decoration: none">Search</a></li> 

	<li><a href="logout.php" style="text-decoration: none">Logout</a><li><br> 

	<li>Contact Us:</li> 
	<li>Phone:123-234-1234</li> 
	<li>Fax:555-555-5555</li><br> 
	</ul> 
	<div id = "buttons"> 
	
	</div><br> 
	<a href="mailto:hackspc@gmail.com"><img src="http://hackspc.com/wp-content/uploads/2009/04/contact-us1.jpg" 

	alt="Cool Html Codes" title="contact-us" width="100" height="102" 
	class="alignnone size-full wp-image-2686" /></a> 
	</nav> 
	<article> 
	<body> 
	<h1>Search Results</h1> 
	<?php 
	include_once "connect.php"; 
	// create short variable names 
	$searchtype=$_POST['searchtype']; 
	$searchterm=trim($_POST['searchterm']); 
	echo $searchtype." ".$searchterm; 
	if (!$searchtype || !$searchterm) { 
	echo 'You have not entered search details. Please go back and try again.'; 
	exit; 
	} 
	if (!get_magic_quotes_gpc()){ 
	$searchtype = addslashes($searchtype); 
	$searchterm = addslashes($searchterm); 
	} 
	// @ $db = new mysqli('localhost', 'root', '', 'jamocha'); 
	
	echo mysqli_connect_errno(); 
	if (mysqli_connect_errno()) { 
	echo 'Error: Could not connect to database. Please try again later.'; 
	exit; 
	} 
	$query = "select * from products where ".$searchtype." like '%".$searchterm."%'"; 
	//$query = "select * from products"; 
	$result = $conn->query($query); 
	$num_results = $result->num_rows; 
	echo "<p>Number of products found: ".$num_results."</p>"; 
	for ($i=0; $i <$num_results; $i++) { 
	$row = $result->fetch_assoc(); 
	echo "</strong><br />CATEGORY: "; 
	echo stripslashes($row['CATEGORY']); 
	echo "<br />PNAME: "; 
	echo stripslashes($row['PNAME']); 
	echo "<br />Price: "; 
	echo stripslashes($row['PRICE']); 
	echo "$"; 
	echo "</p>"; 
	} 
	$result->free(); 
	$conn->close(); 
	?> 
	</article> 
	</body> 
	</html> 
	

