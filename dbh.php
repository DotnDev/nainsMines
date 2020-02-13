	<?php

	Class Dbh {



	private $dbServername;
	private $dbUsername;
	private $dbPassword;
	private $dbName;
	private $charset;

	public function connect(){

		$this -> dbServername ="localhost";
		$this -> dbUsername ="root";
		$this -> dbPassword ="root";
		$this -> dbName ="nainsMines";
		$this -> charset ="utf8mb4";


	try{

       //data source name
		$dsn = "mysql:host=".$this -> dbServername.";dbname=".$this -> dbName.";charset=".$this -> charset;
		$pdo = new PDO($dsn,$this -> dbUsername,$this -> dbPassword);

		//Get error to be retrieved in catch
		$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return $pdo;

	}catch(PDOException $e){

		//Display error message
		echo "Connection failed:".$e -> getMessage();

	}

		

	}

	}
	?>