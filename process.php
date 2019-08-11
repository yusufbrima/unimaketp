<?php
session_start();
$username =NULL;
if(!isset($_SESSION['currentUser'] ) AND empty($_SESSION['currentUser'] )){
	header("Location: login.php?errorStatus=0x00f1");
}else{
	$username = $_SESSION['currentUser'] ;
}
$link['func'] =  "lib/function.php";
if(file_exists($link['func'])){
  include_once('lib/function.php');
}
if(!isset($_REQUEST['apply'])){
	header("Location: apply.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Submit your application through our online application system</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/additional-methods.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
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
		<?php include_once("lib/_app_header.php");?>
			
	</div>
</div>
<!--header strat here-->
<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<h1 title="<?php echo $app->showAppInfo();?>" id="appTitle"><a href="#"><?php echo $app::applicationTitle,$app::applicationVersion; ?></a></h1>
			<div class="panel panel-primary" id="panel-0">
			    <div class="panel-heading">
			    <h3 class="panel-title"><span id="msg">Application Summary</span><span class="pull-right"><span class="closePane" id="showWindow" onclick="showWindow();">--</span><span class="closePane" id="closeWindow" onclick="closeWindow();">×</span></span></h3>
			    </div>
			    <div class="panel-body" id="panel-body">
			      <?php 
			        include_once ("lib/apply.php");
			      ?>
			    </div>
 		   </div>
		   <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--contact end here-->
<?php include_once("lib/_footer.php");?>
</body>
<script type="text/javascript">
  function closeWindow(){
  	document.getElementById('panel-body').style.display="none";
  }
  function showWindow(){
  	document.getElementById('panel-body').style.display="block";
  }

</script>
</html>
