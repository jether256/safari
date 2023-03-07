
<?php

include("includes/header.php");


?>


<div class="user_details column">

	<a href="#">  <img src="<?php echo $user['pic'];?>">  </a>


	<div class="user_details_left_right">

				<a href="#">
				<?php echo $user['first_name'].'_'.$user['last_name'] ?>
			</a>

			<br>

			<?php echo "Posts:" .$user['num_posts']."<br>";
					echo "Likes:".$user['num_likes']."<br>";

			?>
		<?php echo "Projects Completed: ".$user['num_posts']."<br>";
					echo "Employer:".$user['num_likes']."<br>";

			?>

			<?php echo "Skills: ".$user['num_posts']."<br>";
					echo "Ratings:".$user['num_likes']."<br>";

			?>

				<?php echo "Years of Experience: ".$user['num_posts'];
					

			?>
	
		
	</div>

	
</div>





<div class="right_column column">
	
	Right Column<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	

</div>

<div class="main_column column">

<form class="post_form" action="index.php" method="POST">
	<textarea name="post_text" id="post_text" placeholder="Got Something to Say"></textarea>
	<input type="submit" name="post" id="post_btn" value="post">
	<hr>
	
</form>
	
</div>

</div>

</body>
</html>