<?php

	function conexion(){

	$host = "containers-us-west-81.railway.app";
	$port = "port=7484";
	$dbname = "dbname=railway";
	$user = "user=root";
	$password = "VzJe12oKTjjNY3K99Ib7";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>