
<?php

class Database{
	
	private $host = 'localhost';
	private $user = 'root';
	private $password = 'aditya';
	private $dbname = 'myblog';
	
	private $dbh;
	private $error;
	private $stmt;
	
	public function __construct(){
		
		//set DSN
		$dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
		//set options
		$options = array(
			PDO::ATTR_PERSISTENT => 'true',
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		);
		// Create a new PDO
		try{
			$this->dbh = new PDO($dsn, $this->user, $this->password, $options);
			echo "Connected!";
		}
		catch(PDOException $e){
			$this->error = $e->getMessage();
			
		}
		
	}
	
}



?>