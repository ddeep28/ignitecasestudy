<?php

include ("../conn.php");


if (isset($_POST['register']))
{
	$qry="insert into registar (fname,lname,email,pass) values (:fname,:lname,:email,:pass)";
	$stmt=$con->prepare($qry);
	
	$stmt->bindparam(':fname',$_POST['first_name']);
	$stmt->bindparam(':lname',$_POST['last_name']);
	$stmt->bindparam(':email',$_POST['your_email']);
	$stmt->bindparam(':pass',$_POST['password']);
	$stmt->execute();
	
	header('Location: ../login.php');
}


?>