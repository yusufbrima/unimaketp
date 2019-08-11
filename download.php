<!DOCTYPE HTML>
<html>
<head>
<title>Download Programe Documents</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="images/favicon.png" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Kreon:400,700,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!--header start here-->
<div class="banner1" id="banner">
	<div class="container">
		<!--Start of header-->
		<?php include_once("lib/_header.php");?>
		<!--End of header-->
		<div class="top-nav">
			<div class="navbar-header">
	   			 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
                </button>
              </div>
	   			<div id="navbar" class="navbar-collapse collapse">
	              <ul class="nav navbar-nav">
	                  <li class="home"><a href="index.php">Home</a></li>
									   <li class=""><a href="about.php">About</a></li>
									  <li class=""><a  id="active" href="download.php">Downloads</a></li>
									  <li class=""><a href="gallery.php">Gallery</a></li>
									  <li class=""><a href="contact.php">Contact</a></li>
	              </ul>
	            </div>
			</div>
	</div>
</div>
<!--header strat here-->

<div class="about">
  <div class="container">
  	<div class="about-main">
		   <div class="about-top">
			<h2>Downloads Page</h2>
			<div class="col-md-4 abouttop-left">
				<a href="#"><img src="images/a1.jpg" alt="" class="img-responsive"></a>
			</div>
			<div class="col-md-8 abouttop-right">
			<p id="download">
				<h4><a href="#">Website Development and Administration Training Application Form</a></h4>
				<h5><a href="download/2017ApplicationForm.pdf" target="_blank">Download Website Development and Administration Training Application Form</a></h5>
			</p>
			<p id="download">
					<h4><a href="#">Development Tools</a></h4>
					<h5><a href="https://www.apachefriends.org/download.html" target="_blank">Download XAMPP&trade;</a></h5>
					<h5><a href="http://www.wampserver.com/en/#wampserver-64-bits-php-5-6-25-php-7" target="_blank">Download WAMP&trade;</a></h5>
					<h5><a href="https://atom.io/download/" target="_blank">Download ATOM&trade;</a></h5>
					<h5><a href="https://www.sublimetext.com/download" target="_blank">Download SublimeText&trade;</a></h5>
			 </p>
			  <div class="clearfix"> </div>
		  </div>
	</div>
	</div>
</div>
<!--about end here-->
<?php include_once("lib/_footer.php");?>
</body>
</html>
