<?php

include("../conn.php");

$id=$_GET['id'];
//echo $id;

$qry="delete from contact where id = :id ";
$stmt=$con->prepare($qry);
$stmt->bindparam(':id',$id);
$stmt->execute();

header('Location: contactuslist.php');



?>