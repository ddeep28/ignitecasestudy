<?php

include("conn.php");
$qry="select * from team";
	  $stmt=$con->query($qry);


	


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ignite | Team </title> 
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
									
				<li>Team</li>
				</ul>
		</div>
	</div>
</div>		
<!-- //breadcrumbs -->
<!-- Team -->
<div class="blog" id="blog">
	<div class="container">
	<h4 class="tittle-w3layouts">Our Student Co-ordinators</h4>
		<div class="blog-grid-w3-agileits">
			<div class="blog-img1-agileits-w3layouts">
			</div>
			<div class="blog-info-w3layouts">
				<h6>Dr. Max Turner</h6>
				<div class="inner-info">
					<h3>Pediatrist</h3>
					<p class="para-wthree">Aenean pulvinar diam vel felis volutpat dictum. Aenean ac tellus suscipit sapien scelerisque tempus non mollis massa.</p>
				</div>
				<a href="single.php"class="blog-more-agile" >Read More</a>
			
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="blog-grid-w3-agileits">
			<div class="blog-img2-agileits-w3layouts">
			</div>
			<div class="blog-info-w3layouts">
				<h6>Dr. Max Turner</h6>
				<div class="inner-info">
					<h3>Cardiologist</h3>
					<p class="para-wthree">Aenean pulvinar diam vel felis volutpat dictum. Aenean ac tellus suscipit sapien scelerisque tempus non mollis massa.</p>
				</div>
				<a href="single.php"class="blog-more-agile" >Read More</a>
			
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="blog-grid-w3-agileits">
			<div class="blog-info-w3layouts second-info">
				<h6>Dr. Amy Adams</h6>
				<div class="inner-info">
					<h3>Faculty Physician</h3>
					<p class="para-wthree">Aenean pulvinar diam vel felis volutpat dictum. Aenean ac tellus suscipit sapien scelerisque tempus non mollis massa.</p>
				</div>
				<a href="single.php"class="blog-more-agile" >Read More</a>
			
			</div>
			<div class="blog-img3-agileits-w3layouts">
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="blog-grid-w3-agileits">
			<div class="blog-info-w3layouts second-info">
				<h6>Dr. Lacy Smith</h6>
				<div class="inner-info">
					<h3> Anesthetist </h3>
					<p class="para-wthree">Aenean pulvinar diam vel felis volutpat dictum. Aenean ac tellus suscipit sapien scelerisque tempus non mollis massa.</p>
				</div>
				<a href="single.php"class="blog-more-agile" >Read More</a>
			
			</div>
			<div class="blog-img4-agileits-w3layouts">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<!-- //Team --> 
<!--social-icons-->

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