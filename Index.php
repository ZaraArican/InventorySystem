<!DOCTYPE html> 
<html> 
<link href="style.css" rel="stylesheet" type="text/css"> 

<center><img src="logo.PNG"></center> 

<style> 
article,nav,body{ 
background-image: url("https://i1.wp.com/sparklelightstudios.com/wp-content/uploads/2016/01/cotton-candy-background-copy.png") 
} 
.button { 
display: inline-block; 
padding: 15px 25px; 
font-size: 24px; 
cursor: pointer; 
text-align: center; 
text-decoration: none; 
outline: none; 
color: #fff; 
background-color: #e04e81; 
border: none; 
border-radius: 15px; 
box-shadow: 0 9px #999; 
padding: 14px 40px; 
} 
.button:hover {background-color: #bc4a38} 
.button:active { 
background-color: #bc4a38; 
box-shadow: 0 5px #666; 
transform: translateY(4px); 
} 
</style> 


<center> 
<h1>Welcome, please select one to get started.</h1><br><br> 
<h3> 
<form method="get" action="loginadmin.php"><button class="button" type="submit"> Admin</button></form> &nbsp; 
&nbsp; <form method="get" action="login.php"><button class="button" type="submit"> User</button></form> 
&nbsp; <form method="get" action="loginman.php"><button class="button" type="submit"> Manager</button></form> 
&nbsp; <form method="get" action="loginemp.php"><button class="button" type="submit"> Employee</button></form> 

</center> 

</html>
