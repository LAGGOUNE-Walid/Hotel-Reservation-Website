<?php 

final class Connection {

	public static function createConnection() : object {
		require "config.php";
		try {
		    return new PDO(
		    	"mysql:host=".$config["databaseHostName"].";dbname=".$config["databaseName"].";charset=utf8mb4"
		    	, $config["databaseUserName"], 
		    	$config["databasePassword"]
		    );
		} catch (\PDOException $e) {
		    throw new \PDOException($e->getMessage(), (int)$e->getCode());
		}
	}

}