<?php
$link['func'] =  "lib/function.php";
if(file_exists($link['func'])){
  include_once('lib/function.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Contact us today!</title>
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
									  <li class=""><a href="download.php">Downloads</a></li>
									  <li class=""><a href="gallery.php">Gallery</a></li>
									  <li class=""><a id="active" href="contact.php">Contact</a></li>
	              </ul>
	            </div>
			</div>
	</div>
</div>
<!--header strat here-->
<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<div class="col-md-6 contact-left">
				<div class="contact-top">
					<h2>Contact Info</h2>
					<p>Uiversity of Makeni Department of Information Technology Extension Training Programme</p>
			    </div>
				<div class="conta-1">
					<div class="con-phone">
						<span class="con-ph"> </span>
						<div class="con-para">
							<h6>Phone</h6>
							<p>+232-30-198-359/+232-79-364-675 <br />
								+232-99-821-748/+232-78-042-108
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="conta-2">
					<div class="con-address">
						<span class="con-location"> </span>
						<div class="con-para">
							<h6>Yoni Village,Kamakwei Highway</h6>
							<p>IT Department Computer Programming Laboratory</p>
						</div>
					</div>
				</div>
			 </div>
			<div class="col-md-6 contact-right">
				<div class="contact-top">
					<h3>Send a Message</h3>
					<p>Send your feedback to Programme Coordinator</p>
				</div>
					<?php
	          if(isset($_REQUEST['flag'])){
	            if(validate_field($_REQUEST['flag']) && $_REQUEST['flag']=='0X001'){
	              $result = "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
	              $result .= "<strong>Success!<br /></strong>Message sent successfully</div>";
	              echo $result;
	              //unset($_GET['flag']);
	            }elseif(validate_field($_REQUEST['flag']) && $_REQUEST['flag']=='0X002'){
	              $result = "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
	              $result .= "<strong>Failed !<br /></strong>Message not sent</div>";
	              echo $result;
	            }
	          }

	      ?>
				<form method="post" action="contact-form.php">
						<input type="text" class="shart" Placeholder="Name" name="name" required autofocus="true" autocomplete="on"/>
					 	<input type="email" class="shart" Placeholder="Email" name="email" required autocomplete="on"/>
					 	<input type="text" class="long" Placeholder="Subject" name="subject" autocomplete="on" />
				    <textarea Placeholder="Message" name="feedback"></textarea>
            <input type="submit" value="Submit" name="submit" />
				</form>
				</div>
		  <div class="clearfix"> </div>
		</div>
		<div class="map">
		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978">
		 </iframe> -->
		 <iframe width="600" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJzUh0I--pBg8RNMtx7S-eE5Q&key=AIzaSyC3mujSOmMwkds7v27cDk8-ZMzYUpp_6sk" allowfullscreen></iframe>


		</div>
	</div>
</div>
<!--contact end here-->
<?php include_once("lib/_footer.php");?>
</body>
</html>
