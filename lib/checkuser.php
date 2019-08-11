<?php 
  $link['func'] =  "function.php";
if(file_exists($link['func'])){
  include_once('function.php');
}
 if(validate_field($_REQUEST['username'])){
 	$username =  mysql_fix_string(trim($_REQUEST['username']));
 	if(strlen($username)>=4){
 		if(user::checkUser($username,$conn)){
		$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
        $error .= "<strong>Error Message<br /></strong>Username {$username}  already registered</div>";
        echo $error;
	 	}else{
	 		$success = "<div class='alert alert-success noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
	        $success .= "<strong>Registration Feedback<br /></strong>Username {$username} is available</div>";
	        echo $success;
	 	}
 	}
 }
?>