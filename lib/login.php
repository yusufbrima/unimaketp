<?php 
  session_start();
  $link['func'] =  "function.php";
if(file_exists($link['func'])){
  include_once('function.php');
}
 if(validate_field($_REQUEST['username'])AND validate_field($_REQUEST['password'])){
 	$username =  mysql_fix_string(trim($_REQUEST['username']));
 	$password = mysql_fix_string(trim($_REQUEST['password']));
 	$password = user::hashPassord($password);
 	if(user::login($username,$password,$conn)){
 		$_SESSION['currentUser'] = $username;
 		$success = "<div class='alert alert-success noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
		$success .= "<strong>Login Feedback<br /></strong>Logged in successfully</div>";
		echo $success;
		/*echo  "<meta content='3,apply.php' http-equiv='refresh' >";*/
		location('apply.php');
 	}else{
 		$error = "<div class='alert alert-danger noprint'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
	    $error .= "<strong>Login Failed<br /></strong>Username and/or password is incorrect</div>";
	    echo $error;
 	}
 }
?>

