<?php
require_once('class_database.php');

class employees extends Database {


	static public $table_name="employee";
	static protected $db_columns = ['id', 'name','email', 'username','mobile_number'];
		
	

	public $id;
	public $name;
	public $email;
	public $username;
	public $mobilenumber;
}


?>
