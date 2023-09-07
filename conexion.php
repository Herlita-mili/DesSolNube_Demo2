<?php

	function conexion(){

	$host = "containers-us-west-125.railway.app";
	$port = "port=5884";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=TWPeux89wkkInvHruzr7";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>