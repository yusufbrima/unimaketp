<?php
$link['func'] =  "lib/function.php";
if(file_exists($link['func'])){
  include_once('lib/function.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Create an account on our Online Application System</title>
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
			<h1 id="appTitle"><a href="#">Create an account on our Portal</a></h1>
				<form method="post" id="frmRegister" onsubmit="return trap();">
					  <fieldset>
					  		<legend>Register(*Required fields)</legend>
					  		<div id="result"></div>
							  		<input type="text" class="long" Placeholder="First Name(s)*" name="firstName"  id="firstName" autofocus="true" autocomplete="on"/>
							 		<input type="text" class="long" Placeholder="Last Name*" name="lastName" id="lastName" autocomplete="on"/>
							 		<select name="maritalStatus" class="long" id="maritalStatus">
							 			<option value="">--Select Marital Status*--</option>
							 			<?php 
							 				$query =  "SELECT id,title FROM marital ORDER BY title";
										$result =  $conn->query($query);
										if($result){
											while($row = $result->fetch_assoc()){
												echo "<option value='".$row['id']."'>".  $row['title'] ."</option>";
											}
										}

							 			?>
							 		</select>
							 		<select name="cob" class="long" id="cob">
							 			<option value="">--Select Country of Birth*--</option>
							 			<?php 
							 				$query =  "SELECT id,nicename FROM country ORDER BY nicename";
										$result =  $conn->query($query);
										if($result){
											while($row = $result->fetch_assoc()){
												echo "\t\t\t\t\t\t<option value='".$row['id']."'>".  $row['nicename'] ."</option>\n";
											}
										}

							 			?>
							 		</select>
							 		<select name="gender" class="long" id="gender">
							 			<option value="">--Select your gender*--</option>
							 			<?php 
							 				$query =  "SELECT id,type FROM gender ORDER BY type";
										$result =  $conn->query($query);
										if($result){
											while($row = $result->fetch_assoc()){
												echo "<option value='".$row['id']."'>".  $row['type'] ."</option>";
											}
										}

							 			?>
							 		</select>
							  <input type="date" class="long" Placeholder="" name="dob" id="dob"  title="Date of Birth"/>
							  <input type="email" class="long" Placeholder="Email" name="email" id="email" autocomplete="on"/>
							  <input type="tel" class="long" Placeholder="Phone Number(s)*" name="phone"  id="phone" autocomplete="on"  />
							 <input type="text" class="long" Placeholder="Address*" name="address" id="address" autocomplete="on" />
							  <input type="text" class="long" Placeholder="Username*" name="registerUsername" id="Username" autofocus="true" autocomplete="on" onkeyup="reigsterCheckUsername();"/>
					 		<input type="password" class="long" Placeholder="********" name="password" id="password"  />
					 		<input type="password" class="long" Placeholder="********" name="confirmPassword" id= "confirmPassword"  />
					 		<p><a href="login.php">Already have an existing account</a></p>
				    <label for="terms"><input type="checkbox"  id="terms"  onClick="toggle(this)"/> I have read and agreed to the terms and conditions of service</label>
					<br />
					<input type="submit" value="Register" id="submit" name="register" disabled  onclick="registerUser();"/>
		     </form>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--contact end here-->
<?php include_once("lib/_footer.php");?>
</body>
<script type="text/javascript">
 function toggle(terms){
	var btn =  document.getElementById("submit");
	if(terms.checked==true){
		btn.disabled=false;
		
	}else{
		
		btn.disabled=true;
	}
}
</script>
</html>
