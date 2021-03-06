<?php 
include ("../conn.php");
 $qry="select * from team";
	  $stmt=$con->query($qry);
	  
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Add Team</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 <?php
	include ("header.php");
 
 ?>
  <!-- Left side column. contains the logo and sidebar -->
   <?php
	include ("sidebar.php");
 
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Team
        <small>Preview</small>
      </h1>
      
    </section>

    <!-- Main content -->
                <div class="box-body">
				<form role="form" method="get" action="phpfile/team.php" enctype="multipart/form-data">
				
				<!-- text input -->
                <div class="form-group">
                  <label>Student Name</label>
                  <input type="text" class="form-control" name="sname"  placeholder="Enter ..." required>
				  <span class="note">Format: Only Characters..</span>
                </div>
				
				<!-- text Phone -->
                <div class="form-group">
                  <label>Student Mobile</label>
                  <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter ..."
							 pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
									required>

						<span class="note">Format: 123-456-7890</span>
                </div>
				
				
				 <!-- Image of Student -->
			  <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" name="pic" >

                  <p class="help-block">Select the image of the Student.</p>
                </div>
				
				
				 <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
			  
			 
				
				
				</form>
				
				
				</div>
           
           
           
           
           
           <div class="box-body table-responsive no-padding">
              <table class="table table-hover" >
                <tr>
                  <th>ID</th>
                  <th>Student Name</th>
                  <th>Mobile No.</th>
                  <th>Student Pic</th>
                  <th>Delete</th>
                  <th>Update</th>
                  
                </tr> 
                
                <?php
				  
				  while($row=$stmt->fetch())
				  {
              echo " <tr>"; 
                 echo "<td>  $row[id] </td>";
                 echo "<td>  $row[name] </td>";
                echo "<td>  $row[phno] </td>";
				 echo "<td>  $row[photo] </td>";
                 
                 echo "<td> <a href=deleteteam.php?id= $row[id] >  Delete </a></br></td> ";
				 echo "<td> <a href=updateteam.php?id= $row[id] >  Update </a></br></td> ";
                echo " <tr>"; 
                 }  ?>
               
              </table>  
            </div>
            
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php
	include ("footer.php");
 
 ?>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
