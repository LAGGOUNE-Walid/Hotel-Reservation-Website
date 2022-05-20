<?php 
session_start();
if (
	empty($_POST["name"]) OR
	empty($_POST["email"]) OR
	empty($_POST["hotel"]) OR
	empty($_POST["chambre"]) OR
	empty($_POST["arrival"]) OR
	empty($_POST["depart"])
) {
	$_SESSION["errors"] = true;
	return header('Location: ' . $_SERVER['HTTP_REFERER']);
}
require "Models/Reservation.php";

$_SESSION["success"] = true;
Reservation::save($_POST);

return header('Location: ' . $_SERVER['HTTP_REFERER']);
