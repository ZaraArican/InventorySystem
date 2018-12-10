<?php
include_once "connect.php";
?>
<?php
	//gets data
	$quantity = $_POST['quantity'];
	$price=25;
	//calculate
	$total = ($quantity * $price) ;
	
	//apply dollar and percent ammounts
	$total_format = "$".number_format($total, 2);
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Calculations</title>
		<link rel = "stylesheet" type = "text/css" href = "main.css"/>
	</head>
	<body>
		<div id = "content">
			
			<?php echo "The total cost is"; ?>
			<span><?php echo $total_format; ?></span>
			
		</div>
	</body>
</html>
