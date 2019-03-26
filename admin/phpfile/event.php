<?php

include ("../../conn.php");


if (isset($_GET['submit']))
{
	$qry="insert into event (ename,erules) values (:enm,:erules)";
	$stmt=$con->prepare($qry);
	$stmt->bindparam(':enm',$_GET['ename']);
	$stmt->bindparam(':erules',$_GET['erules']);
	$stmt->execute();
	
	header('Location: ../addevents.php');
}


?>