<?php

include_once "connect.php";
//get data drom PRODID list 
//adds new item to whole row, proadd defined as the total row 
$servername="localhost";
$username="aricans1_User123";
$password="zxczxczxc1";
$dbName = "aricans1_Jamocha";
session_start();

//Connect to database
$conn= new mysqli($servername, $username, $password, $dbName) or die ("Unable to Connect to Database");
$prodadd="";
foreach ($_POST['product_id'] as $key => $value) {
    $quantity=$_POST['QUANTITY'][$key];
    $user_id = $_SESSION['user_id'];
    $prodadd .= "INSERT INTO cart (user_id,PRODID,QUANTITY) VALUES (\"$user_id\",\"$value\",\"$quantity\") ;";  
    //after adding item to cart, redirects to cart.php

        header("Location: cart.php");
  }
if ($conn->multi_query($prodadd) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $prodadd . "<br>" . $conn->error;
}

$conn->close();

//Connecting to database and performing prodadd func
?>
