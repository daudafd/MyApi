<?php
class Database{
	
	private $host  = 'localhost';
    private $user  = 'osynelec_rest_api';
    private $password   = "@Amafemolar.1";
    private $database  = "osynelec_rest_api"; 
    
    public function getConnection(){		
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}
?>