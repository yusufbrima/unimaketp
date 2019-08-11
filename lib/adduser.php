-<?php 
  $link['func'] =  "function.php";
if(file_exists($link['func'])){
  include_once('function.php');
}//print_r($_REQUEST);
 if(validate_field($_REQUEST['firstName'])){
 	 if(validate_field($_REQUEST['lastName'])){
 	 	if(validate_field($_REQUEST['maritalStatus'])){
 	 		 if(validate_field($_REQUEST['cob'])){
 	 		 	if(validate_field($_REQUEST['cob'])){
	 	 		 	if(validate_field($_REQUEST['dob'])){
	 	 		 		if(validate_field($_REQUEST['phone'])){
	 	 		 			if(validate_field($_REQUEST['address'])){
	 	 		 				if(validate_field($_REQUEST['username'])AND validate_field($_REQUEST['password']) AND validate_field($_REQUEST['confirmPassword'])){
								 	$username =  mysql_fix_string(trim($_REQUEST['username']));
								 	$password = mysql_fix_string(trim($_REQUEST['password']));
								 	$confirmPassword = mysql_fix_string(trim($_REQUEST['confirmPassword']));
								 	$firstName = mysql_fix_string(trim($_REQUEST['firstName']));
									$lastName= mysql_fix_string(trim($_REQUEST['lastName']));
									$maritalStatus= mysql_fix_string(trim($_REQUEST['maritalStatus']));
									$cob= mysql_fix_string(trim($_REQUEST['cob']));
									$gender= mysql_fix_string(trim($_REQUEST['gender']));
									$dob= mysql_fix_string(trim($_REQUEST['dob']));
									$email= mysql_fix_string(trim($_REQUEST['email']));
									$phone= mysql_fix_string(trim($_REQUEST['phone']));
									$address= mysql_fix_string(trim($_REQUEST['address']));
								 	if(strlen($username)>=4){
								 		if(user::comparePassword($password,$confirmPassword)){
								 			if(user::checkUser($username,$conn)){
											$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
									        $error .= "<strong>Error Message<br /></strong>Username {$username}  already registered</div>";
									        echo $error;
										 	}else{
										 		if($username!==$password){
 													$password = user::hashPassord($password);
											 		if(user::addUser($username,$password,$firstName,$lastName,$maritalStatus,$cob,$gender,$dob,$phone,$address,$email,$conn)){
											 			$success = "<div class='alert alert-success noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
														$success .= "<strong>Registration Feedback<br /></strong>Account created successfully</div>";
														 echo $success;
														 echo  "<meta content='3,login.php' http-equiv='refresh' >";
											 		}else{
											 			$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
													     $error .= "<strong>Error Message<br /></strong>Problem registering user, please check later</div>";
													     echo $error;

											 		}
										 		}else{
										 			$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
													$error .= "<strong>Error Message<br /></strong>Username and Password must not be the same</div>";
													 echo $error;
										 		}
										 	}
								 	  }else{
								 	  	 $error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
									      $error .= "<strong>Error Message<br /></strong>Passwords must match</div>";
									        echo $error;
								 	  }
								 		
								 	}
								 } else{
								 	$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
									$error .= "<strong>Error Message<br /></strong>Username and password fields required</div>";
									echo $error;
								 }
							 }else{
							 	$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
								$error .= "<strong>Error Message<br /></strong>Address is required</div>";
								echo $error;
							 }
						 }else{
						 	$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
							$error .= "<strong>Error Message<br /></strong>Phone number is required</div>";
							echo $error;
						 }
					 }else{
					 	$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
						$error .= "<strong>Error Message<br /></strong>Please select your date of birth</div>";
						echo $error;
					}
			   }else{
			 	$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
				$error .= "<strong>Error Message<br /></strong>Please select your gender";
				echo $error;
			    }
			 }else{
			 	$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
				$error .= "<strong>Error Message<br /></strong>Please select your country of birth</div>";
				echo $error;
			 }
		 }else{
		 	$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
			$error .= "<strong>Error Message<br /></strong>Please select your marital status</div>";
			echo $error;
		 }
	 }else{
	 	$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
		$error .= "<strong>Error Message<br /></strong>Lastname is required</div>";
		echo $error;
	 }
 }else{
 	$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
	$error .= "<strong>Error Message<br /></strong>Firstname is required</div>";
	echo $error;
 }
?>