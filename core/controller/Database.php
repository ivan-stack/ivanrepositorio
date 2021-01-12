<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b9afe326376bc4";$this->pass="6125fbd9";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_9adff73df8f91f8";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
