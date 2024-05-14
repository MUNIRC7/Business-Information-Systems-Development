<?php

require_once('credentials.php');
require_once('database_functions.php');
require_once('class_database.php');
require_once('class_employees.php');
require_once('class_products.php');
//require_once('class_admin.php');
//require_once('class_session.php');

$database = db_connect(); // call the connection; 
Database::set_database($database);

?>