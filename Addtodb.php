<?php
//this code connects to the database, performs function for insert.php. 
//Information entered by admin, gets inserted to table 'products'
include_once "connect.php";
//get data drom PRODID list 
$prodid = $_POST["PRODID"];
$prodpri = $_POST["PRICE"];
$prodcat = $_POST["CATEGORY"];
$prodname = $_POST["PNAME"];
//adds new item to whole row, proadd defined as the total row 
$prodadd = "INSERT INTO products (PRODID, PRICE, CATEGORY, PNAME) 
VALUES (\"$prodid\",\"$prodpri\",\"$prodcat\",\"$prodname\");";
//Connecting to database and performing prodadd func
mysqli_query($conn,$prodadd);

?>
<!DOCTYPE html>
<html>
    <body>
        Item added to database. 
               <form method="get" action="insert.php"><button class="button" type="submit"> Go Back</button></form> &nbsp;

</body>
</html>
