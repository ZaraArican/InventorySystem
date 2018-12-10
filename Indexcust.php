<?php
include_once "connect.php"; 
//session_start();
?>
 
<!DOCTYPE html>
<html>
<link href="style.css" rel="stylesheet" type="text/css">  

    <head        
        <meta charset-"utf-8">
        <title>Products Page</title>
    </head>
    <body>
    <div class="container">

<header><img src="logo.PNG"></header>
<style>
    article,body{
        background-image: url("https://i1.wp.com/sparklelightstudios.com/wp-content/uploads/2016/01/cotton-candy-background-copy.png")
    }
    </style>

<div class="topnav">
<a class="active" href="indexcust.html" style="text-decoration: none">Home</a>
<a href="search.html" style="text-decoration: none">Search</a>
<a href="cart.php" style="text-decoration: none">Cart</a>
<a href="logout.php" style="text-decoration: none">Logout</a>
</div>
<nav>
<ul>
<li><a class="active" href="indexcust.html"style="text-decoration: none">Home</a></li>
<li><a href="search.html" style="text-decoration: none">Search</a></li>

   <li><a href="cart.php" style="text-decoration: none">Cart</a></li>
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
    
    <h1>Products Page</h1>
        <form action="addtocart.php" method="post">
        <div class="main">
      Select Product and Please Enter Quantity
            <div>
                <select name="product_id[]">
                    <?php 
                        if ($resultCheck > 0){
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<option value="'. $row["PRODID"]. '">'. $row["PNAME"]. '</option>';
                            }
                        }
                    ?>
                </select> 
                <input type="text" name="QUANTITY[]"></input>
            </div>
        </div>
        
        <button type="button" class="plus_product" options-attr="<?php echo $options?>">Add Another product</button>
        <button type="submit">Save</button>
   </form>    
   <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

     <script type="text/javascript">
        $('.plus_product').on('click',function(){
           $.ajax({url: "selecthtml.php", success: function(result){
               $('.main').append('<div>'+result 
                +'  <input type="text" name="QUANTITY[]"></input>'
            +'</div>');
            }});
            });
     </script>
    
    
        
        <footer><i>Copyright &#169 2018 Montclair Red Hawk<i>
    <a href="mailto:aricans1@montclair.edu"><br>
    contact@montclair.edu</a></footer>
    </article>

    </div>
    </body>
</html>

