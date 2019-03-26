<?php 
include ("conn.php");
 $qry="select * from event";
	  $stmt=$con->query($qry);
	  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ignite | Events </title> 

<!--==========================================================    -->
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For-Mobile-Apps-and-Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Clinical Care Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, SmartPhone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps-and-Meta-Tags -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href='css/simplelightbox.css' rel='stylesheet' type='text/css'>   
<link rel="stylesheet" type="text/css" href="css/style11.css" /><!-- menu style sheet -->
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->

<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images3/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor3/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts3/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor3/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor3/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor3/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css3/util.css">
	<link rel="stylesheet" type="text/css" href="css3/main.css">
<!--===============================================================================================-->

<!--==========================================================    -->
<!-- For-Mobile-Apps-and-Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Clinical Care Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, SmartPhone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps-and-Meta-Tags -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" type="text/css" href="css/style11.css" /><!-- menu style sheet -->
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->

<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
</head>
<body class="bg">
	<?php
		include("header.php");
	?>
	
<!-- banner -->
<!--<div class="inner-banner-agileits-w3layouts">
</div>-->
<!-- //banner -->
<!-- breadcrumbs -->
<div class="w3l_agileits_breadcrumbs">
   <div class="container">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="index1.php">Home</a><span>«</span></li>
									
				<li>Event</li>
				</ul>
		</div>
	</div>
</div>		
<!-- //breadcrumbs -->
<!-- Team -->
<div class="table">

						<div class="row header">
							<div class="cell">
								EventID
							</div>
							<div class="cell">
								EventName
							</div>
							<div class="cell">
								EventRules
							</div>
							
						</div>
						
						<?php 
				  while($row=$stmt->fetch())
				  {

						echo "<div class=row>";
						echo "<div class=cell data-title=EventID>";
								echo $row['id'] ;
						echo "</div>";
						
						echo "<div class=cell data-title=EventName>";
								echo $row['ename'] ;
						echo "</div>";
						
						echo "<div class=cell data-title=EventRules>";
								echo $row['erules']; 
						echo "</div>";
					  
					  
							
						echo "</div>";

				  }	?>


					</div>

<!-- //Team --> 
<!--social-icons-->
<div>
	&nbsp;
</div>

<div>
	&nbsp;
</div>

<div>
	&nbsp;
</div>

<div>
	&nbsp;
</div>

<div>
	&nbsp;
</div>

<div>
	&nbsp;
</div>

<div>
	&nbsp;
</div>

<div>
	&nbsp;
</div>

<div>
	&nbsp;
</div>

<div>
	&nbsp;
</div>

<div>
	&nbsp;
</div>

<div>
	&nbsp;
</div>

<div>
	&nbsp;
</div>

<div>
	&nbsp;
</div>
<!--//social-icons-->
<!-- footer -->
	<?php
		include("footer.php");
	?>
<!-- //footer -->

<!-- js -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- //js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

				<script type="text/javascript" src="js/simple-lightbox.min.js"></script>
				<script>
					$(function(){
						var gallery = $('.agileinfo-gallery-row a').simpleLightbox({navText:		['&lsaquo;','&rsaquo;']});
					});
				</script>  
<!--jarallax -->
	<script src="js/SmoothScroll.min.js"></script>
<!-- //jarallax -->
<!--menu script-->
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/demo1.js"></script>
<!--//menu script-->
<!-- banner -->
<script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
<!-- //banner -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

<!--===============================================================================================-->	
	<script src="vendor3/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor3/bootstrap/js/popper.js"></script>
	<script src="vendor3/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor3/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js3/main.js"></script>

<!-- js -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- //js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!--jarallax -->
	<script src="js/SmoothScroll.min.js"></script>
<!-- //jarallax -->
<!--menu script-->
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/demo1.js"></script>
<!--//menu script-->
<!-- banner -->
<script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
<!-- //banner -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>