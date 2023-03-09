
<?php

include("includes/header.php");
include("includes/classes/User.php");
include("includes/classes/Post.php");



if(isset($_POST['post'])){

	$post= new Post($con,$userLoggedIn);

	$post->submitPost($_POST['post_text'],'none');
	header("Location:index.php");
}

?>


<div class="user_details column">

	<a href="<?php echo $userLoggedIn;?>">  <img src="<?php echo $user['pic'];?>">  </a>


	<div class="user_details_left_right">

				<a href="<?php echo $userLoggedIn;?>">
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
	<textarea name="post_text" id="post_text" placeholder="Whats on your mind?"></textarea>

	<button class="btn" name="post"><img src='assets/images/header/send.png'>Post</i></button>

		<!-- 
		<input type="submit" name="post" id="post_btn" value= "<img src='assets/images/header/project.png'>"> -->
	<!-- <button class="btn"><img src='assets/images/header/video.png'>Video</i></button>
	<button class="btn"><img src='assets/images/header/image.png'>Image</i></button>
	<button class="btn"><img src='assets/images/header/placard.png'>Event</i></button>
	<button class="btn"><img src='assets/images/header/send.png'>Post</i></button> -->
	<!-- <input type="submit" name="post" id="post_btn" value="Image">
	<input type="submit" name="post" id="post_btn" value="Event">
	<input type="submit" name="post" id="post_btn" value="Post"> -->
	<hr>
	
</form>

<?php
$user_obj= new User($con,$userLoggedIn);

echo $user_obj->getFisrtLastName();


?>
	
</div>

</div>

</body>
</html>