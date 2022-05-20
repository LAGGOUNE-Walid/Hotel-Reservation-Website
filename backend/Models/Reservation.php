<?php 

class Reservation {
	protected static $table = "reservations";


	public static function save(array $data) : void {
		require "Database/Connection.php";
		$pdo = Connection::createConnection();
		$sql = "
			INSERT INTO ".self::$table." (id, name, email, hotel, chambre, arrival, depart) VALUES (null, ?, ?, ?, ?, ?, ?)
		";
		$stmt	= $pdo->prepare($sql);
		$stmt->execute([
			$data["name"],
			$data["email"],
			$data["hotel"],
			$data["chambre"],
			$data["arrival"],
			$data["depart"]
		]);
	}

}