<!DOCTYPE HTML>
<html>
<head>
<title>View our gallery of photos</title>
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
<!--light-box-files -->
		<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.gallery-grid a').Chocolat();
		});
		</script>

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
									  <li class=""><a href="download.php">Downloads</a></li>
									  <li class=""><a id="active" href="gallery.php">Gallery</a></li>
									  <li class=""><a href="contact.php">Contact</a></li>
	              </ul>
	            </div>
			</div>
	</div>
</div>
<!--header strat here-->
<!--gallery start here-->
<div class="gallery" id="gallery">
	<div class="container">
	  <div class="gallery-main">
	  	<div class="gallery-top">
	  		<h2>Gallery</h2>
	  	</div>
		<div class="gallery-bott">
			<div class="col-md-4 col1 gallery-grid">
				<a href="images/g1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">

						<figure class="effect-bubba">
							<img class="img-responsive" src="images/g1.jpg" alt="">
							<figcaption>
								<h4 class="gal">Cross-section of Our Course Participants</h4>
								<p class="gal1">photograph of the Program Coordinators and course participants during the first training</p>
							</figcaption>
						</figure>
					</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/g2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/g2.jpg" alt="">
							<figcaption>
								<h4 class="gal">Development and Research Software Laboratory</h4>
								<p class="gal1">Information Technology Departmental Software Laboratory for Academic Research and Development of new solutions to societal challenges</p>
							</figcaption>
						</figure>
						</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/g3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/g3.jpg" alt="">
							<figcaption>
								<h4 class="gal">A Session of the training programme</h4>
								<p class="gal1">Exploring the potentials of Server-side programming with PHP</p>
							</figcaption>
						</figure>
						</a>
					</div>
			     <div class="col-md-4 col1 gallery-grid">
				  <a href="images/g4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/g4.jpg" alt="">
							<figcaption>
								<h4 class="gal">Cross-section of Our Course Participants</h4>
								<p class="gal1">The welcoming of the Minister of Defense at the UniMak forth Annual Graduation Ceremony</p>
							</figcaption>
						</figure>
					</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/g5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/g5.jpg" alt="">
							<figcaption>
								<h4 class="gal">Final Project revision execise</h4>
								<p class="gal1">Final project revision process where participants showcase their codebase and project progress timeline(s)</p>
							</figcaption>
						</figure>
						</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/g6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/g6.jpg" alt="">
							<figcaption>
								<h4 class="gal">Course Tutor expounding on the requisites of RDBMS (Case in point: MySQL)</h4>
								<p class="gal1">A session invloving theory and lab RDBMS concepts and practces amongst which include :DDL,DML,TCL,DRL; Database Optimization techniques, Normalization and Denormalization,Indexes amongst other concepts</p>
							</figcaption>
						</figure>
						</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/g7.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/g7.jpg" alt="">
							<figcaption>
								<h4 class="gal">OCIP Interns creating a network infrastructure</h4>
								<p class="gal1">Interns engaging in hands-on exercises (Cable crimping, testing and network setup for the Software laboratory Sylvanus Koroma Campus -- Yoni)</p>
							</figcaption>
						</figure>
						</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/g8.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/g8.jpg" alt="">
							<figcaption>
								<h4 class="gal">Live coding exercise to show the tips and tricks in handling computational problems</h4>
								<p class="gal1">Deep JavaScript Coding exercise: Form Validation and DOM manipulation in view of solving real-world computational problems</p>
							</figcaption>
						</figure>
						</a>
					</div>
					<div class="col-md-4 col1 gallery-grid">
						<a href="images/g9.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<figure class="effect-bubba">
							<img class="img-responsive" src="images/g9.jpg" alt="">
							<figcaption>
								<h4 class="gal">Cross-section of Our Course Participants</h4>
								<p class="gal1">photograph of course participants during the first training PHP Programming Drill</p>
							</figcaption>
						</figure>
						</a>
					</div>
			     <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--gallery end here-->
<?php include_once("lib/_footer.php");?>
</body>
</html>
