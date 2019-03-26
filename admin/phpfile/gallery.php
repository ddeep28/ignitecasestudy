<?php

include ("../../conn.php");

	if(!empty($_FILES['filesToUpload2014[]']))
  {

    $img =  basename($_FILES['filesToUpload2014[]']['name']);
	$newname = dirname( '_FILES_').'/../images/2014'.$img;
	move_uploaded_file($_FILES['filesToUpload2014[]']['tmp_name'],$newname);
  }
elseif(!empty($_FILES['filesToUpload2014[]']))
  {

    $img =  basename($_FILES['filesToUpload2015[]']['name']);
	$newname = dirname( '_FILES_').'/../images/2015'.$img;
	move_uploaded_file($_FILES['filesToUpload2015[]']['tmp_name'],$newname);
  }
elseif(!empty($_FILES['filesToUpload2016[]']))
  {

    $img =  basename($_FILES['filesToUpload2016[]']['name']);
	$newname = dirname( '_FILES_').'/../images/2016'.$img;
	move_uploaded_file($_FILES['filesToUpload2016[]']['tmp_name'],$newname);
  }
elseif(!empty($_FILES['filesToUpload2017[]']))
  {

    $img =  basename($_FILES['filesToUpload2017[]']['name']);
	$newname = dirname( '_FILES_').'/../images/2017'.$img;
	move_uploaded_file($_FILES['filesToUpload2017[]']['tmp_name'],$newname);
  }
elseif(!empty($_FILES['filesToUpload2018[]']))
  {

    $img =  basename($_FILES['filesToUpload2018[]']['name']);
	$newname = dirname( '_FILES_').'/../images/2018'.$img;
	move_uploaded_file($_FILES['filesToUpload2018[]']['tmp_name'],$newname);
  }
  else
  {
	$newname = "./Images/No_Image.jpg";
  }
if (isset($_GET['submit']))
{
	$qry="insert into gallery (pic14,pic15,pic16,pic17,pic18,cc) values (:pic14,:pic15,:pic16,:pic17,:pic18,:cc)";
	$stmt=$con->prepare($qry);
	$stmt->bindparam(':pic14',$_GET['filesToUpload2014[]']);
	$stmt->bindparam(':pic15',$_GET['filesToUpload2015[]']);
	$stmt->bindparam(':pic16',$_GET['filesToUpload2016[]']);
	$stmt->bindparam(':pic17',$_GET['filesToUpload2017[]']);
	$stmt->bindparam(':pic18',$_GET['filesToUpload2018[]']);
	$stmt->bindparam(':cc',$_GET['filesToUploadcc[]']);
	$stmt->execute();
	
	header('Location: ../addgallery.php');
}


?>