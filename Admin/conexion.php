<?php

$hostname="localhost";
$user="root";
$password="";
$database="usuario";
$conexion=mysql_connect($hostname,$user,$password);
$mibase=mysql_select_db($database,$conexion);

?>