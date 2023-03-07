<?php
if(isset($_POST['sub_log'])){


	$email=filter_var($_POST['log_mail'],FILTER_SANITIZE_EMAIL);//sanitize email

	$_SESSION['log_mail']=$email;//store email in a session
	$password=$_POST['log_pass'];
	$password=hash('sha256',$password);//hash password


	$check_db_query=mysqli_query($con,"SELECT * FROM user WHERE email='$email' AND password='$password'");
	$check_login_query=mysqli_num_rows($check_db_query);

	if ($check_login_query==1) {

		$row=mysqli_fetch_array($check_db_query);
		$username=$row['username'];


		$user_closed_query=mysqli_query($con,"SELECT * FROM user WHERE email='$email' AND user_closed='yes'");
		if(mysqli_num_rows($user_closed_query)==1){

			$reopen_acc=mysqli_query($con,"UPDATE user SET user_closed='no' WHERE email='$email'");
		}

		$_SESSION['username']=$username;
		header("Location:index.php");
		exit();
	}else{

		array_push($error_array,"Email or password was incorrect<br>");
	}


}






?>