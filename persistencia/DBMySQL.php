<?php

class DBMySQL {
	protected static $connection;	
	
	public function connect(){
	
		if(!isset(self::$connection)){
		
			$hostname = "localhost";	
			$username = "einfonc";
			$password = "5syUf6gmye8qNx";
			$database = "einfonc";
			
			self::$connection = mysqli_connect($hostname, $username, $password, $database);
			
		}
		
		if(self::$connection === false){
			return false;
		}
		
		return self::$connection;
	}
	
	public function query($query){
		$connection = $this->connect();
		$result = $connection->query($query);
		
		if(!$result){
			$this->printError();
		}
		
		return $result;		
	}
	
	public function select($query){
		$rows = array();
		$result = $this->query($query);
		if($result === false) {
			return false;
		}
		
		$indice = 1;
		while ($row = $result->fetch_assoc()){
			$rows[$indice] = $row;
			$indice = $indice + 1;
		}
		
		return $rows;
	}
	
	public function printError(){
		echo "Error" . self::$connection->error;
	}
}

?>