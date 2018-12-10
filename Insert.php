	<!DOCTYPE html> 
	<html> 
	<head> 
	<title>Insert</title> 
	<link href="style.css" rel="stylesheet" type="text/css"> 

	</head> 
	<style> 
	label{ 
	width: 4em; 
	float: left; 
	text-align: right; 
	margin-right: 4 em; 
	display: block 
	} 
	article,body{ 
	background-image: url("http://www.onlygfx.com/wp-content/uploads/2016/10/pink-watercolor-3.jpg") 
	} 
	</style> 
	<body> 
	<div class="container"> 
	<header><h1>Insert</h1></header> 
	<div class="topnav"> 
	<a href="indexman.php"style="text-decoration: none">Home</a> 

	<a class="active" href="insert.php"style="text-decoration: none">Insert</a> 

	<a href="deletep.php"style="text-decoration: none">Delete</a> 

	<a href="search.html" style="text-decoration: none">Search</a> 

	<a href="logout.php" style="text-decoration: none">Logout</a> 

	</div> 
	<nav> 
	<ul> 
	<li><a href="indexman.php"style="text-decoration: none">Home</a></li> 

	<li><a class="active" href="insert.php"style="text-decoration: none">Insert</a></li> 

	<li><a href="deletep.php"style="text-decoration: none">Delete</a></li> 

	<li><a href="search.html" style="text-decoration: none">Search</a></li> 

	<li><a href="logout.php" style="text-decoration: none">Logout</a></li> 

	
	<li>Contact Us:</li> 
	<li>Phone:123-234-1234</li> 
	<li>Fax:555-555-5555</li><br> 
	</ul> 
	
	<a href="mailto:hackspc@gmail.com"><img src="http://hackspc.com/wp-content/uploads/2009/04/contact-us1.jpg" 

	alt="Cool Html Codes" title="contact-us" width="100" height="102" 
	class="alignnone size-full wp-image-2686" /></a> 
	</nav> 
	<article> 
	
	<form action = "addtodb.php" method = "post"> 
	<br> <label for "PRODID">Product&nbsp;ID </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	<input type = "text" name = "PRODID"/><br> 
	<label for "PRICE">PRICE </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	<input type = "text" name = "PRICE"/><br> 
	<label for "CATEGORY">CATEGORY </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	<input type = "text" name = "CATEGORY"/><br> 
	<label for "PNAME">NAME </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	<input type = "text" name = "PNAME"/><br><br> 
	
	
	<div id = "buttons"> 
	<input type = "submit" value = "Insert to Database"> 
	</div> 
	</form> 
	</article> 
	<footer><i>Copyright &#169 2018 Montclair Red Hawk<i> 
	<a href="mailto:aricans1@montclair.edu"><br> 

	contact@montclair.edu</a></footer> 
	</div> 
	</body> 
	</html> 
	

