<!DOCTYPE html>
<?php
				require_once '../private/initialize.php';	//initialize the web site
?>
<html lang="en">
<head>
<title>Display Employees</title>
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
			include '/C:/xampp/htdocs/BIS D CWK/private/initialize.php';	
		?>

<?php 
			echo "<h2> Employees </h2>";
				
			$employees_array = employees::find_all();	//call the find_all() function
	
	
	
	echo "<table border = 1 width=100%>";
		echo "<tr bgcolor=#ADD8E6>";
			echo "<th> id </th>";
			echo "<th> Name </th>";
			echo "<th> Email </th>";
			echo "<th> Username </th>";
			echo "<th> Mobile Number </th>";
		echo "</tr>";
	  
	
	foreach ($employees_array as $employees) {
		echo "<tr>";
			echo "<td>" . $employees->id . "</td>";
			echo "<td>" . $employees->name . "</td>";
			echo "<td>" . $employees->email . "</td>";	
			echo "<td>" . $employees->username . "</td>";
			echo "<td>" . $employees->mobilenumber . "</td>";
			echo "<td> <a href=view_Employees.php?id=" . $employees->id . "> View </td>";
			echo "<td> <a href=update.php?id=" . $employees->id . "> Update </td>";
			echo "<td> <a href=delete.php?id=" . $employees->id . "> Delete </td>";			
	echo "</tr>";
	}

?>


  	 
</body>


</html>
