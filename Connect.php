<?php
//Setting Variables for Login
$servername="localhost";
$username="aricans1_User123";
$password="zxczxczxc1";
$dbName = "aricans1_Jamocha";

//Connect to database
$conn= mysqli_connect($servername, $username, $password, $dbName);
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//Confirmation of onnection
//echo "Connected to Database";

// Display All Products on Index Page

$sql_select = "SELECT * FROM products";
$result = mysqli_query($conn, $sql_select);
$resultCheck = mysqli_num_rows($result);

$sql_addtocart = "INSERT INTO cart" ;
$carttot = mysqli_query($conn, $sql_addtocart);

?>

