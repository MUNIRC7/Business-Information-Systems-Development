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
    echo "my id is: " . $id. "<br>";
    $specific_employees = employees::find_by_id($id); //call the find_by_id() function; we identify the record to be updated; get all its values
                
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        //if there is a post action create the array $args and use the function merge_attributes($args)
                $args=[];                                    //in $args array we collect all the new values 
                $args['id']=$_POST['id'];
                $args['name']=$_POST['name'];
                $args['description']=$_POST['description'];
                $args['price']=$_POST['price'];
                    

            $specific_Employees->merge_attributes($args);
            $results = $specific_Employees->update();
            
                if($results) {
                    echo "Successful updating";
                    }
            
                echo " <p> Details of the updated item </p> ";
                
                echo "<table>";
                echo "<tr> <td><b> id </b> </td> <td>" . $specific_employees->id . "</td> </tr>";
                echo "<tr> <td> <b> Name </b> </td> <td>" . $specific_employees->name . "</td> </tr>";
                echo "<tr> <td> <b> Email </b> </td> <td>" . $specific_employees->email . "</td> </tr>";
                echo "<tr> <td> <b> Username </b> </td> <td>" . $specific_employees->username . "</td> </tr>";
								echo "<tr> <td> <b> mobilenumber </b> </td> <td>" . $specific_employees->mobilenumber . "</td> </tr>";
                echo "</table>";

            
            } else {    
        //if there is no post action present the values of the record in a form to be updated
                echo " <p> Use the following form to update the selected item <br> ";
                echo "ATTENTION: all *** fields must be numbers </p>";
            
                
                echo  "<form action=update.php?id=" . $id . " method='post'>";
                    echo "<table>";
                        echo "<tr> <td> id </td> <td> <input type='text' name ='id' value='" . $specific_employees->id . "' > </td> </tr>";
                        echo "<tr> <td> Name </td> <td> <input type='text' name ='name' value='" . $specific_employees->name . "' > </td> </tr>";
                        echo "<tr> <td> email </td> <td> <textarea name='description' rows='5' cols='30'>" . $specific_employees->email . "</textarea> </td> </tr>";
                        echo "<tr> <td> username </td> <td> <input type='text' name ='price' value='" . $specific_employees->username . "'> </td> </tr>";
												echo "<tr> <td> mobilenumber </td> <td> <input type='text' name ='price' value='" . $specific_employees->mobilenumber . "'> </td> </tr>";

                    echo "</table>";    
                        echo " <input type='submit' value='Update Record' />";
                echo "</form>";
        

        }

?>

     </div>
     
     

</body>


</html>
