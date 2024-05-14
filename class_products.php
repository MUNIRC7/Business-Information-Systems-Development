<?php
require_once('class_database.php');

class products extends Database {


	static public $table_name="product";
	static protected $db_columns = ['id', 'name','description', 'price'];
		
	public $id;
	public $name;
	public $description;
	public $price;



}




?>