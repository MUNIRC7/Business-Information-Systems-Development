<?php
				require_once '../private/initialize.php';	//initialize the web site
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Add New Employee</title>
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
		
		//<?php 
		//		include '/Applications/XAMPP/xamppfiles/htdocs/BISDCWK/private/initialize.php';	//initialize the web site
		//?>
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {

$args = [];									//in $args array we collect all the new values 
  $args['id']=$_POST['id'];
  $args['name']=$_POST['name'];
  $args['email']=$_POST['email'];
  $args['username']=$_POST['username'];
  $args['mobilenumber']=$_POST['mobilenumber'];



  $employees = new employees;						// we create a new object with the values we just entered
  $employees->id = $args["id"];
  $employees->name = $args["name"];
  $employees->email = $args["email"];
  $employees->username = $args["username"];
  $employees->mobilenumber = $args["mobilenumber"];

	  
	  
  $results = $employees->create();		// we call the function 'create' that is a method of Vehicle class

if($results){
	echo "New Record added successfuly";
	}




} else {

echo " <p> Use the following form to enter details for the new item (record / object) <br> ";
echo "ATTENTION: all *** fields must be numbers </p>";

	
echo  "<form action=add.php method='post'>";
echo "<table>";
	echo "<tr> <td> ID </td> <td> <input type='text' id ='id'> </td> </tr>";
	echo "<tr> <td> Name </td> <td> <input type='text' name ='name'> </td> </tr>";
	echo "<tr> <td> Email </td> <td> <input type='text' email ='email'> </td> </tr>";
	echo "<tr> <td> Username </td> <td> <input type='text' username ='username'> </td> </tr>";
	echo "<tr> <td> MobileNumber </td> <td> <textarea name='mobilenumber' rows='5' cols='30'> </textarea> </td> </tr>"; 
echo "</table>";    
	echo " <br> <br> <input type='submit' value='Add New' />";
echo "</form>";

}
?>
  	 </div>
  	 
  	 


</body>


</html>
