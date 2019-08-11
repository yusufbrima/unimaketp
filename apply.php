<?php
session_start();
if(!isset($_SESSION['currentUser'] ) AND empty($_SESSION['currentUser'] )){
	header("Location: login.php?errorStatus=0x00f1");
}else{
	$username = $_SESSION['currentUser'] ;
}
$link['func'] =  "lib/function.php";
if(file_exists($link['func'])){
  include_once('lib/function.php');
}
$_SESSION['userid'] = user::getUserId($username,$conn);
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
		<?php include_once("lib/_app_header.php");?>
		<!--End of header-->
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
			    <h3 class="panel-title" id="panel-title"><span id="msg">Application Now</span><span class="pull-right"><span class="closePane" id="showWindow" onclick="showWindow();">--</span><span class="closePane" id="closeWindow" onclick="closeWindow();">×</span></span></h3>
			    </div>
			    <div class="panel-body" id="panel-body">
			    		<div id="result"></div>
						<form method="post" enctype="multipart/form-data" id="apply" action="process.php">
							 <label for="passport">Upload a passport sized photo</label><input type="file" id="passport" class="long"  name="passport"  />
							  <fieldset>
							  		<legend>Highest educational level(* Required fields)</legend>
							  		<input type="text" class="long" Placeholder="Name of the Institution*" name="instituton"  id="instituton" autocomplete="on" />
							  		<input type="text" class="long" Placeholder="Certificate/Diploma/Degree awarded*" name="certificate"  id="certificate" autocomplete="on" />
							  		<input type="url" class="long" Placeholder="Website URL of institution" name="website"  autocomplete="on"/>
							  </fieldset>
							  <label for="payment"><input type="checkbox"  id="payment"  onClick="paymentToggle(this)"/>Self payment</label>
							  <fieldset id="financial">
							  		<legend>Financial Situation(* Required fields)</legend>
							  		<p>Please give details about the person that will be paying your fees.</p>
							  		<input type="text" class="long" Placeholder="First Name(s)" name="pFirstName"  autofocus="true" autocomplete="on"/>
							 		<input type="text" class="long" Placeholder="Last Name" name="pLastName"  autocomplete="on"/>
							 		<input type="email" class="long" Placeholder="Email" name="pEmail" id="pEmail"  autocomplete="on"/>
									<input type="tel" class="long" Placeholder="Phone Number(s)" name="pPhone"  id="pPhone" autocomplete="on" />
									<input type="text" class="long" Placeholder="Address" name="pAddress" autocomplete="on" />
									<select name="guradianType"  id="guradianType" class="long" id="program">
							 			<option value="">--Relationship Type--</option>
							 			<?php 
							 				$query =  "SELECT id,type FROM guradianType ORDER BY type";
										$result =  $conn->query($query);
										if($result){
											while($row = $result->fetch_assoc()){
												echo "<option value='".$row['id']."'>".  $row['type'] ."</option>";
											}
										}

							 			?>
							 		</select>
							  </fieldset>
							   <fieldset>
							  		<legend>Program Selection(* Required fields)</legend>
							  		<select name="program" id="program" class="long" id="program">
							 			<option value="">--Select program you want to study*--</option>
							 			<?php 
							 				$query =  "SELECT id,title FROM course ORDER BY title";
										$result =  $conn->query($query);
										if($result){
											while($row = $result->fetch_assoc()){
												echo "<option value='".$row['id']."'>".  $row['title'] ."</option>";
											}
										}

							 			?>
							 		</select>
							   </fieldset>
							   <fieldset>
							  		<legend>Payment Process(* Required fields)</legend>
							  		<select name="provider" id="provider" class="long" id="program">
							 			<option value="">--Select Payment Provider*--</option>
							 			<?php 
							 				$query =  "SELECT id,name FROM provider ORDER BY name";
										$result =  $conn->query($query);
										if($result){
											while($row = $result->fetch_assoc()){
												echo "<option value='".$row['id']."'>".  $row['name'] ."</option>";
											}
										}

							 			?>
							 		</select>
							 		<p><h4><b>NB</b></h4>All Service provision fee are handled by you and MUST not reflect on the Application Fee in question</p>
							 		<input type="text" class="long" Placeholder="Mobile Money Transaction Receipt ID" name="transactionCode" id="transactionCode" />
							   </fieldset>
						   <!--  <textarea Placeholder="Please give reasons for choosing the course" name="feedback"></textarea>
						    -->
						    <label for="terms"><input type="checkbox"  id="terms"  onClick="toggle(this)"/> I have read and agreed to the terms and conditions of service</label>
		                    <br />
		                    <input type="submit" value="Submit Application" id="submit" name="apply" disabled />
				     </form>
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
 function toggle(terms){
	var btn =  document.getElementById("submit");
	if(terms.checked==true){
		btn.disabled=false;
		
	}else{
		
		btn.disabled=true;
	}
}
function paymentToggle(p){
	var financial =  document.getElementById("financial");
	if(p.checked==true){
		financial.style.display="none";
		
	}else{
		
		financial.style.display="block";
	}
}
function closeWindow(){
  	document.getElementById('panel-body').style.display="none";
  	document.getElementById("msg").innerText="Application currently minimized";
  }
  function showWindow(){
  	document.getElementById('panel-body').style.display="block";
  	document.getElementById("msg").innerText="Continue application process";
  }
/*function activateAnimation(){
  try{
  /*Animation effect for document title bar*/
  /*var ad =  document.getElementById('ad');
  var titleList = ["Navigate through our Click-Once Application System","Start making money from writing codes",
    "Learn the arts and techniques of Next-Generation Applcation Development","Master the craft of Server Administration","Augment your business intelligence with Statistical Packages for Decision Support"
  ];
  var len =  titleList.length;
  var randSeed =  Math.floor(Math.random()*len);
   ad.innerText =titleList[randSeed];
   if(randSeed%2==0){
   	  ad.style.transform = "scale(1,2)";
   }else{
   		ad.style.transform = "scale(2,1)";
   }
  }catch(e){
    console.log("problem running code "+ e.description);
  }
}
setInterval(activateAnimation,10000);*/
</script>
</html>
