<?php
$host="localhost";
$user="root";
$password="";
$db="trx_iwana";

$conexion= new PDO("mysql:host=".$host.";dbname=".$db,$user,$password); 
$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$conexion->exec("SET CHARACTER SET utf8");
