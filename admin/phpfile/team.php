<?php

include ("../../conn.php");

	if(!empty($_FILES['pic']))
  {

    $img =  basename($_FILES['pic']['name']);
	$newname = dirname( '_FILES_').'/../teampic/'.$img;
	move_uploaded_file($_FILES['pic']['tmp_name'],$newname);
  }
  else
  {
	$newname = "./Images/No_Image.jpg";
  }
if (isset($_GET['submit']))
{
	$qry="insert into team (name,phno,photo) values (:name,:phno,:photo)";
	$stmt=$con->prepare($qry);
	$stmt->bindparam(':name',$_GET['sname']);
	$stmt->bindparam(':phno',$_GET['phone']);
	$stmt->bindparam(':photo',$_GET['pic']);
	$stmt->execute();
	
	header('Location: ../addteam.php');
}


?>