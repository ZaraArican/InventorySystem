<?php
include_once "connect.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset-"utf-8">
        <title>Products Page</title>
        <link href="style.css" rel="stylesheet" type="text/css">  

    </head>
    <div class="container">
<header>
<h1>List of Products</h1>
</header>
<div class="topnav">
<a class="active" href="indexman.php" style="text-decoration: none">Home</a>
<a href="search.html" style="text-decoration: none">Search</a>
<a href="logout.php" style="text-decoration: none">Logout</a>


</div>
<nav>
<ul>
<li><a class="active" href="indexman.php"style="text-decoration: none">Home</a></li>
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
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
    <body>
        
        <h1>List of Coffee Products</h1>
        <table>
            <tr>
                <td>
                    PRODID
                </td>
                <td>
                    PRICE
                </td>
                <td>
                    CATEGORY
                </td>
                <td>
                    NAME
                </td>
            </tr>

            <?php
                if ($resultCheck > 0){
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>". $row["PRODID"]. "</td>";
                        echo "<td>". $row["PRICE"]. "</td>";
                        echo "<td>". $row["CATEGORY"]. "</td>";
                        echo "<td>". $row["PNAME"]. "</td>";
                        echo"</tr>";
                    }
                }
            ?>
        </table>
    </body>
    </article>
    <footer><i>Copyright &#169 2018 Montclair Red Hawk<i>
<a href="mailto:aricans1@montclair.edu"><br>
contact@montclair.edu</a></footer>
</html>

