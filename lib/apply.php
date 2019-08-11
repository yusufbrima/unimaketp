<?php 
session_start();
  if(isset($_REQUEST['apply'])){
 //    	$link['func'] =  "function.php";
	// if(file_exists($link['func'])){
	//   include_once('function.php');
	// }
  if(validate_field($_REQUEST['instituton'])){
	  if(validate_field($_REQUEST['certificate'])){
	  	if(validate_field($_REQUEST['program'])){
	  		if(validate_field($_REQUEST['provider'])){
	  			if(validate_field($_REQUEST['transactionCode'])){
	  				$userid = $_SESSION['userid'];
	  				$programID =mysql_fix_string(trim($_REQUEST['program']));
	  				if(!user::checkApplication($userid,$programID,$conn)){
		  					if(isset($_FILES)){ //start of file upload
						 	 $result = (upload::uploadImage($_FILES));
						 	 if(is_array($result)){
							 	 $photoSignature = $result[1];
								 $institutionName=mysql_fix_string(trim($_REQUEST['instituton']));
								 $certificate = mysql_fix_string(trim($_REQUEST['certificate']));
								 $url =mysql_fix_string(trim($_REQUEST['url']));
								 $pFirstName=isset($_REQUEST['pFirstName'])?mysql_fix_string(trim($_REQUEST['pFirstName'])):NULL;
								 $pLastName=isset($_REQUEST['pLastName'])?mysql_fix_string(trim($_REQUEST['pLastName'])):NULL;
								 $pEmail=isset($_REQUEST['pEmail'])?mysql_fix_string(trim($_REQUEST['pEmail'])):NULL;
								 $pAddress=isset($_REQUEST['pAddress'])?mysql_fix_string(trim($_REQUEST['pAddress'])):NULL;
								 $pPhoneNumber=isset($_REQUEST['pPhone'])?mysql_fix_string(trim($_REQUEST['pPhone'])):NULL;
								 $relationshipID=isset($_REQUEST['guradianType'])?mysql_fix_string(trim($_REQUEST['guradianType'])):NULL;
								 $paymentReceipt=mysql_fix_string(trim($_REQUEST['transactionCode']));
								 $applicationToken = appToken::generateAppToken();
								 $providerID=mysql_fix_string(trim($_REQUEST['provider']));
								 if (user::apply($photoSignature,$institutionName,$certificate,$url,$pFirstName,$pLastName,$pEmail,$pAddress,$pPhoneNumber,$relationshipID,$programID,$paymentReceipt,$applicationToken,$providerID,$userid,$conn)){
								 	$success = "<div class='alert alert-success noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
							        $success .= "<strong>Thanks for your interest in our course!<br /></strong>Application successfully sent<br /> You'll be contact shortly</div>";
							        echo $success;
							        $_SESSION['applicationToken']= $applicationToken;
							        location("receipt.php");
								 }else{
								 	$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
									$error .= "<strong>Error Message<br />oops!, record not inserted</strong></div>";
									echo $error;
								 }
							 }else{
							 echo $result;
							 $error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
							$error .= "<strong>Error Message<br />{$result}</strong></div>";
							echo $error;
						 }
						} //End of file upload 
	  				}else{
	  					 $error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
						 $error .= "<strong>Error Message<br /></strong>Sorry, you have already applied for this course<br /><a href=\"apply.php\">Back to Application Form</a></div>";
						  echo $error; 
	  				}
				  }else{
				  	$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
					$error .= "<strong>Error Message<br /></strong>Transcation receipt field is required</div>";
					echo $error;
				  }
			  }else{
			  	$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
				$error .= "<strong>Error Message<br /></strong>Please select payment provider</div>";
				echo $error;
			  }
		  }else{
		  	$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
			$error .= "<strong>Error Message<br /></strong>Please select programme of study</div>";
			echo $error;
		  }
	  }else{
	  	$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
		$error .= "<strong>Error Message<br /></strong>Highest qualification field is required</div>";
		echo $error;
	  }
  }else{
  	$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
	$error .= "<strong>Error Message<br /></strong>Institution name is required</div>";
	echo $error;
  }
 }else{
 	location("apply.php");
 }
?>