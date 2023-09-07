<?php

	function conexion(){

	$host = "containers-us-west-162.railway.app";
	$port = "port=7001";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "3aSGidfJsw5TDkUL2Lp3";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>