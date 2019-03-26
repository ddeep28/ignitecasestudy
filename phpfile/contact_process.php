<?php

include ("../conn.php");


if (isset($_GET['submit']))
{
	$qry="insert into contact (name,email,sub,msg) values (:name,:email,:sub,:msg)";
	$stmt=$con->prepare($qry);
	$stmt->bindparam(':name',$_GET['Name']);
	$stmt->bindparam(':email',$_GET['Email']);
	$stmt->bindparam(':sub',$_GET['Subject']);
	$stmt->bindparam(':msg',$_GET['Message']);
	$stmt->execute();
	
	header('Location: ../contact.php');
}


?>