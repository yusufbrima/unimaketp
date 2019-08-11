<?php
$link['func'] =  "lib/function.php";
if(file_exists($link['func'])){
  include_once('lib/function.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login to our Online Application System</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/additional-methods.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
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
	                  <li class=""><a href="index.php">Home</a></li>
					  <li class=""><a href="about.php">About</a></li>
					  <li class=""><a href="download.php">Downloads</a></li>
					  <li class=""><a href="gallery.php">Gallery</a></li>
					  <li class=""><a id="" href="contact.php">Contact</a></li>
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
			<h1 id="appTitle"><a href="#">Login to your account</a></h1>
				<form method="post" action="#" id="frmLogin" onsubmit="return trap();">
					  <fieldset>
					  		<legend>Login(*Required fields)</legend>
					  		<?php  
					  			if(isset($_REQUEST['errorStatus']) AND !empty($_REQUEST['errorStatus'])){
					  				$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
								    $error .= "<strong>Authorization failure<br /></strong>You must login first before accessing application</div>";
								    echo $error;
					  			}

					  		?>
					  		<div id="result"></div>
					  		<input type="text" class="long" Placeholder="Username*" name="Username" id="Username"  autofocus="true" autocomplete="on"/>
					 		<input type="password" class="long" Placeholder="********" name="password" id="password"  />
					 		<p><a href="register.php">Register as a new member</a></p>
					 	</fieldset>
                    <input type="submit" value="Login" id="submit" name="login"  onclick="userLogin();"/>
		     </form>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--contact end here-->
<?php include_once("lib/_footer.php");?>
</body>
</html>
