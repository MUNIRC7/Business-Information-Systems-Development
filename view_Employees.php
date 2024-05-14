<?php
				require_once '../private/initialize.php';	//initialize the web site
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>View Employees</title>
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
				

				$specific_employees = employees::find_by_id($id);	//call the find_by_id() function
				
			echo " <p> Details of the selected item </p> ";
				
			echo "<table>";
			echo "<tr> <td><b> ID </b> </td> <td>" . $specific_employees->id . "</td> </tr>";
			echo "<tr> <td> <b> Name </b> </td> <td>" . $specific_employees->name . "</td> </tr>";
			echo "<tr> <td> <b> Email </b> </td> <td>" . $specific_employees->email . "</td> </tr>";
			echo "<tr> <td> <b> Username </b> </td> <td>" . $specific_employees->username . "</td> </tr>";
            echo "<tr> <td> <b> MobileNumber </b> </td> <td>" . $specific_employees->mobilenumber. "</td> </tr>";
            

			echo "</table>";

?>

  	 </div>
  	 
  	 


</body>


</html>
