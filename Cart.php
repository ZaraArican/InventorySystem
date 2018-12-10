<?php
require_once "connect.php";
?>
<!DOCTYPE html>
<html>
<link href="style.css" rel="stylesheet" type="text/css">  
    <head>
        <meta charset-"utf-8">
        <title>Cart</title>
        <style>
   article,nav,body{
background-image: url("https://i1.wp.com/sparklelightstudios.com/wp-content/uploads/2016/01/cotton-candy-background-copy.png")
    }
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color: #fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
            
            </style>
    </head>
    <div class="container">
    <header><img src="logo.PNG"></header>
<div class="topnav">
<a  href="indexcust.php" style="text-decoration: none">Home</a>
<a href="search.html" style="text-decoration: none">Search</a>
<a class="active" href="cart.php" style="text-decoration: none">Cart</a>
<a href="logout.php" style="text-decoration: none">Logout</a>
</div>
<nav>
<ul>
<li><a href="indexcust.php"style="text-decoration: none">Home</a></li>
<li><a href="search.html" style="text-decoration: none">Search</a></li>
<li><a class="active" href="cart.php" style="text-decoration: none">Cart</a></li>
 <li><a href="logout.php" style="text-decoration: none">Logout</a></li>

<li>Contact Us:</li>
<li>Phone:123-234-1234</li>
<li>Fax:555-555-5555</li>
</ul>
<a href="mailto:hackspc@gmail.com"><img src="http://hackspc.com/wp-content/uploads/2009/04/contact-us1.jpg"
alt="Cool Html Codes" title="contact-us" width="100" height="102"
class="alignnone size-full wp-image-2686" /></a>
    </nav>

    <body>
        <h1>Cart</h1>
        <table id="t01">
            <tr>
                <td>
                    NAME
                </td>

                <td>
                    PRICE
                </td>
                <td>
                    CATEGORY
                </td>
                <td>
                    QUANTITY
                </td>
                <td>
                    Total Price
                </td>
               <td>Delete
               </td>
            </tr>
            <?php
                session_start();
                $user_id = $_SESSION['user_id'];
                if($user_id)
                {
                    $cart_products = "SELECT * FROM cart WHERE user_id = ".$user_id;
                    $resultCart = $conn->query($cart_products);
                    //$p =  $resultCart->fetch_assoc();
                    if ($resultCart->num_rows > 0) {
                        // output data of each row
                        while($row = $resultCart->fetch_assoc())  {
                            $product =  $conn->query("SELECT * FROM Products WHERE PRODID =".$row["PRODID"]);
                            $product_obj = $product->fetch_assoc();
                            echo '<tr><td>'. 
                            $product_obj["PNAME"]. '</td>'.'<td>'. 
                            $product_obj["PRICE"]. '</td>'.'<td>'.
                         $product_obj["CATEGORY"]  . '</td>'.'<td>'.
                             $row["QUANTITY"]. '</td>'.'<td>'. 
                            ($product_obj["PRICE"]*$row["QUANTITY"]). 
                          "<td><a href=\"deletefromcart.php?PRODID=".
                        $row["PRODID"]."\">DELETE</a></td></tr>";
                        }
                    }                    
                }
                else
                    echo "No Session";
            ?>
           
        </table>
    </body>
    <footer><i>Copyright &#169 2018 Montclair Red Hawk<i>
<a href="mailto:aricans1@montclair.edu"><br>
contact@montclair.edu</a></footer>

</html>

