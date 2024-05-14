<?php
				require_once '../private/initialize.php';	//initialize the web site
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>View Products</title>
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
			$id = $_GET['id'];
	
			if(!$id) {
						echo "problem - redirect";
				}	else {
						echo $id;
				}
				

				$specific_products = products::find_by_id($id);	//call the find_by_id() function
				
			echo " <p> Details of the selected item </p> ";
				
			echo "<table>";
			echo "<tr> <td><b> ID </b> </td> <td>" . $specific_products->id . "</td> </tr>";
			echo "<tr> <td> <b> Name </b> </td> <td>" . $specific_products->name . "</td> </tr>";
			echo "<tr> <td> <b> Description </b> </td> <td>" . $specific_products->description . "</td> </tr>";
			echo "<tr> <td> <b> Price </b> </td> <td>" . $specific_products->price . "</td> </tr>";
			echo "</table>";

?>

  	 </div>
  	 
  	 


</body>


</html>
