<?php
require_once '../private/initialize.php'; //initialize the web site
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Organic Snacks</title>
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
    

            $deleted_employees = employees::find_by_id($id); 
            $deleted_employees->delete();
                
                
            echo "<p> The following entry is deleted </p>";
                
            echo "<table>";
            echo "<tr> <td><b> id </b> </td> <td>" . $deleted_employees->id . "</td> </tr>";
            echo "<tr> <td> <b> Name </b> </td> <td>" . $deleted_employees->name . "</td> </tr>";
            echo "<tr> <td> <b> Email </b> </td> <td>" . $deleted_employees->email . "</td> </tr>";
            echo "<tr> <td> <b> Username </b> </td> <td>" . $deleted_employees->username . "</td> </tr>";
            echo "<tr> <td> <b> Mobile Number </b> </td> <td>" . $deleted_employees->mobilenumber . "</td> </tr>";
            echo "</table>";

?>

     </div>
     

</body>


</html>
