
<?php

require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to Code Safari</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>


	<div class="wrapper">

		<div class="box">

			<div class="login_header">
				<h1>Brandon AI</h1>

				Login and SignUp Below!
			</div>



			<div id="first">
				


						<form action="register.php" method="POST">
						<input type="email" name="log_mail" placeholder="Email Address" value="<?php
							if(isset($_SESSION['log_mail'])){

								echo $_SESSION['log_mail'];
							}
					?>" >
						<br>
						<input type="password" name="log_pass" placeholder="Password">
						<br>
						<input type="submit" name="sub_log" value="Login">
						<br>

						<?php if(in_array("Email or password was incorrect<br>",$error_array)) echo "Email or password was incorrect<br>";?>
						<br>

						<a href="#" id="signup" class="signup">Need and account? Register here!</a>
					</form>



			</div>
		

			<div id="second">
					<form action="register.php" method="POST">
						<input type="text" name="reg_fname" placeholder="First Name"  value="<?php
							if(isset($_SESSION['reg_fname'])){

								echo $_SESSION['reg_fname'];
							}
					?>"  required>
						<br>
						<?php if(in_array("Your last name must be between 2 to 25 characters<br>",$error_array)) echo "Your first name must be between 2 to 25 characters<br>";?>


						<input type="text" name="reg_lname" placeholder="Last Name" value="<?php
							if(isset($_SESSION['reg_lname'])){

								echo $_SESSION['reg_lname'];
							}
					?>"   required>
						<br>

				<?php if(in_array("Your last name must be between 2 to 25 characters<br>",$error_array)) echo "Your last name must be between 2 to 25 characters<br>";?>


						<input type="text" name="reg_email" placeholder="Email" value="<?php
							if(isset($_SESSION['reg_email'])){

								echo $_SESSION['reg_email'];
							}
					?>"  required>
						<br>

						

						<input type="text" name="reg_email2" placeholder="Confirm Email" value="<?php
							if(isset($_SESSION['reg_email2'])){

								echo $_SESSION['reg_email2'];
							}
					?>"   required>
						<br>
						

				<?php if(in_array("Email already in use<br>",$error_array)) echo "Email already in use<br>";
				 else if(in_array("invalide format<br>",$error_array)) echo "invalide format<br>";
				 else if(in_array("Emails dont match<br>",$error_array)) echo "Emails dont match<br>";?>



						<input type="password" name="reg_pass" placeholder="Password" required>
						<br>
						<input type="password" name="reg_pass2" placeholder="Confirm Password" required>
						<br>


					<?php if(in_array("Your passwords donot match<br>",$error_array)) echo "Your passwords donot match<br>";
				 else if(in_array("Your password can only contain English charcters or numbers<br>",$error_array)) echo "Your password can only contain English charcters or numbers<br>";
				 else if(in_array("Your password must be Between 5 to 30 charcters<br>",$error_array)) echo "Your password must be Between 5 to 30 charcters<br>";?>	
						
					
						<input type="submit" name="reg_but" value="Register">

						<br>


						<?php if(in_array("<span style='color:#ff0000;'>You are all set! go ahead ad Login!</span><br>",$error_array)) echo "<span style='color:#ff0000;'>You are all set! go ahead ad Login!</span><br>";?>

						<a href="#" id="signin" class="signin">Already have an account? Sign in here!</a>
					</form>
					</div>
			</div>


	</div>



</body>
</html>