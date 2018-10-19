<?php
class DBMySQL {
	
	protected static $connection;
	
	public function connect(){
	
		if(!isset($this->connection)){
		
			$hostname = "localhost";	
			$username = "root";
			$password = "";
			$database = "sitads";
			
			$this->connection = mysqli_connect($hostname, $username, $password, $database);
			
		}
		
		if($this->connection === false){
			return false;
		}
		
		return $this->connection;
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
		echo "Error" . $connection->error;
	}
}
 ?>