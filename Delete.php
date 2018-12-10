<?php
include_once "connect.php";


$prodid = $_POST["PRODID"];
$prodpri = $_POST["PRICE"];
$prodcat = $_POST["CATEGORY"];
$prodname = $_POST["PNAME"];

$proddel = "DELETE from products WHERE PRODID=\"$_GET[PRODID]\"";

//Connecting to database and performing proddel func
if (mysqli_query($conn, $proddel)) {
    header("Location: deletep.php");
    echo "Record Deleted";
}
else {
    echo "Record Not Deleted";
}

?>
