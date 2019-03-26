<?php

$dbhost="localhost";
$db="ignite";
$username="root";
$pwd="";

$dsn="mysql:host=$dbhost;dbname=$db";
try
{
$con=new pdo($dsn,$username,$pwd);	
}
catch(PDOException $e)
{
	echo $e->getMessage();
}



?>