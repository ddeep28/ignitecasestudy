<?php

include ("../../conn.php");

	
if (isset($_GET['submit']))
{
	$qry="insert into schedule (event,etime,etimeend) values (:event,:etime,:etimeend)";
	$stmt=$con->prepare($qry);
	$stmt->bindparam(':event',$_GET['event']);
	$stmt->bindparam(':etime',$_GET['etime']);
	$stmt->bindparam(':etimeend',$_GET['etimeend']);

	$stmt->execute();
	
	header('Location: ../addschedule.php');
}



?>