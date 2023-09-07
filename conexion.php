<?php

	function conexion(){

	$host = "containers-us-west-206.railway.app";
	$port = "port=5548";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "mh0ALTOqRk7zZJfOd6KV";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>