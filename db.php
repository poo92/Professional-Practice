<?php
class db {

	private static $conn;

	private function __construct(){}

	public static function getInstance(){
		if(!self::$conn) {
			self::$conn = new mysqli("localhost", "root", "", "pp");
			if (self::$conn->connect_error) {
			    die("Connection failed: " . self::$conn->connect_error);
			} 
		}
		return self::$conn;
	}
}
?> 