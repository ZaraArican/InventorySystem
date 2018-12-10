<?php
    include_once "connect.php";
    ?>
    <select name="product_id[]">
        <?php 
            if ($resultCheck > 0){
                while ($row = mysqli_fetch_array($result)) {
                    echo '<option value="'. $row["PRODID"]. '">'. $row["PNAME"]. '</option>';
                }
            }
        ?>
    </select>
