<?php
include("conexion.php");
$con = conexion();

$doc = $_POST["nom"];
$nom = $_POST["ape"];
$ape = $_POST["core"];
$dir = $_POST["con"];
$cel = $_POST["rep"];

$sql = "insert into persona values(default,'$nom','$ape','$core','$con','$rep')";
pg_query($con, $sql);

header("location:index.php");
?>