<?php
				require_once '../private/initialize.php';	//initialize the web site
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Display Products</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel=stylesheet type=text/css href=style.css>
</head>

<body>
<div class="header">
	Organic Snacks <br>
	
</div>

<div class="row">
  	<div class="column side">
   			<?php include 'navigation.html';?> 
	</div>
  	<div class="column middle">
		
		<?php 
				include '/C:/xampp/htdocs/BIS D CWK/private/initialize.php';		//initialize the web site
		?>
		

<?php 
			echo "<h2> Products </h2>";
				
			$products_array = products::find_all();	//call the find_all() function

			if(!$products_array)
			 echo "not found values";

	echo "<table border = 1 width=100%>";
		echo "<tr bgcolor=#ADD8E6>";
			echo "<th> ID </th>";
			echo "<th> Name </th>";
			echo "<th> Description </th>";
			echo "<th> Price </th>";
		echo "</tr>";
	  

	foreach ($products_array as $products) {
		echo "<tr>";
			echo "<td>" . $products->id . "</td>";
			echo "<td>" . $products->name . "</td>";
			echo "<td>" . $products->description . "</td>";	
			echo "<td>" . $products->price . "</td>";
			echo "<td> <a href=view_Products.php?id=" . $products->id . "> View </td>";
			echo "<td> <a href=update.php?id=" . $products->id . "> Update </td>";
			echo "<td> <a href=delete.php?id=" . $products->id . "> Delete </td>";			
	echo "</tr>";
}

	echo "</table>";

?>


  	 </div>
  	 
  	 


</body>


</html>
