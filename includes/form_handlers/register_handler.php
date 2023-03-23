<?php


//Declaring variables to prevent errors
$fname="";//first name
$lname="";//last name
$em="";//email
$em2="";//email2
$pass="";//password
$pass2="";///password2
$date="";//sign up date
$error_array=array();//holds all errors



if(isset($_POST['reg_but'])){


	//registration of form values

	//first name
	$fname=strip_tags($_POST['reg_fname']);//remove html tags
	$fname=str_replace(' ','', $fname);//remove spaces
	$fname=ucfirst(strtolower($fname));//capitalize the first letter
	$_SESSION['reg_fname']=$fname;//stores firstname  into session



	//last name
	$lname=strip_tags($_POST['reg_lname']);//remove html tags
	$lname=str_replace(' ','', $lname);//remove spaces
	$lname=ucfirst(strtolower($lname));//capitalize the first letter
	$_SESSION['reg_lname']=$lname;//stores lastname  into session



	//Email
	$em=strip_tags($_POST['reg_email']);//remove html tags
	$em=str_replace(' ','', $em);//remove spaces
	$em=ucfirst(strtolower($em));//capitalize the first letter
	$_SESSION['reg_email']=$em;//stores email  into session



	//Email 2
	$em2=strip_tags($_POST['reg_email2']);//remove html tags
	$em2=str_replace(' ','', $em2);//remove spaces
	$em2=ucfirst(strtolower($em2));//capitalize the first letter
	$_SESSION['reg_email2']=$em2;//stores email2  into session




	//password
	$pass=strip_tags($_POST['reg_pass']);//remove html tags
	$pass2=strip_tags($_POST['reg_pass2']);//remove html tags


	//date
	$date=date("Y-m-d"); //current date


	if($em==$em2){

		//check if email is in valid format
		if(filter_var($em,FILTER_VALIDATE_EMAIL)){

			$em=filter_var($em,FILTER_VALIDATE_EMAIL);

			//check if the email already exists
			$e_check=mysqli_query($con,"SELECT email FROM user WHERE email='$em'");


			//count the number of rows returned
			$num_rows=mysqli_num_rows($e_check);

			if($num_rows>0){
				array_push($error_array, "Email already in use<br>");
			}


		}else{

			array_push($error_array, "invalide format<br>");

			//echo "invalide format";
		}


	}else{

		array_push($error_array,  "Emails dont match<br>");

	}




if(strlen($fname) > 25 ||strlen($fname) <2){

	array_push($error_array, "Your first name must be between 2 to 25 characters<br>");
}

if(strlen($lname) > 25 ||strlen($lname) <2){

	array_push($error_array, "Your last name must be between 2 to 25 characters<br>");
}


if($pass != $pass2){

	array_push($error_array, "Your passwords donot match<br>");

}else{

	if(preg_match('/[^A-Za-z0-9]/',$pass)){

		array_push($error_array, "Your password can only contain English charcters or numbers<br>");
	}


}


if (strlen($pass ) > 30 || strlen($pass) < 5) {

	array_push($error_array, "Your password must be Between 5 to 30 charcters<br>");
	// code...
}




if(empty($error_array)){


	$pass=hash('sha256',$pass);//encypt password


	///generate username by
	 //concatenating first and last name
	$username=strtolower($fname .'_'.$lname);
	$check_username_query=mysqli_query($con,"SELECT username FROM user WHERE username='$username'");

	$i=0;

	//if username exists add number to username
	while (mysqli_num_rows($check_username_query) !=0) {

		$i++;//add a number to the username
		$username=$username ."_".$i;
		$check_username_query=mysqli_query($con,"SELECT username FROM user WHERE username='$username'");
		// code...
	}





	//profile pic assignment
	$rand=rand(1,2);

	if($rand==1)
	$profile_pic="assets/images/profile_pics/defaults/head_deep_blue.png";

else if($rand=2)
	$profile_pic="assets/images/profile_pics/defaults/head_green_see.png";



$query=mysqli_query($con,"INSERT INTO user VALUES('','$fname','$lname','$username','$em','$pass','$date','$profile_pic','0','0','0','Developer','no',',')");


array_push($error_array,"<span style='color:#14C800;'>You are all set! go ahead ad Login!</span><br>");


//clear all session variables

$_SESSION['reg_fname']="";
$_SESSION['reg_lname']="";
$_SESSION['reg_email']="";
$_SESSION['reg_email2']="";

}



}



?>