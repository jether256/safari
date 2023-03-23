<?php

class Job{

	private $con;
	private $user_obj;




	public function __construct($con,$user){
		$this->con=$con;
		$this->user_obj= new User($con,$user);
	}


	public function submitJob($title,$skills,$price,$time,$desc,$user_to){

		$title;

		$skills=strip_tags($skills);//removes html tags
		$skills=mysqli_real_escape_string($this->con,$skills);//prevents sql injections
		$check_empty1=preg_replace('/\s+/','',$skills);//Deletes all spac

		$price=strip_tags($price);//removes html tags
		$price=mysqli_real_escape_string($this->con,$price);//prevents sql injections
		$check_empty2=preg_replace('/\s+/','',$price);//Deletes all spac

		$time=strip_tags($time);//removes html tags
		$time=mysqli_real_escape_string($this->con,$time);//prevents sql injections
		$check_empty3=preg_replace('/\s+/','',$time);//Deletes all spac

		$desc=strip_tags($desc);//removes html tags
		$desc=mysqli_real_escape_string($this->con,$desc);//prevents sql injetions
		$desc=str_replace('\r\n','\n',$desc);
		$check_empty4=preg_replace('/\s+/','',$desc);//Deletes all spac




		if(($check_empty1 != " ") && ($check_empty2 != " ") && ($check_empty3 != " ") && ($check_empty4 != " ") &&
			($user_to != " ") && ($title != " ")

	){



			//get current time.
			$date_added=date("Y-m-d H:i:s");

			//Get username
			$added_by=$this->user_obj->getUserName();

			//if user posting from won profile
			if($user_to== $added_by){

				$user_obj="none";
			}


			//insert job
			$query=mysqli_query($this->con,"INSERT INTO jobs VALUES('','$desc','$title','$skills','$price','$time','$added_by','$user_to','$date_added','no','no','0')");
			$returned_id=mysqli_insert_id($this->con);


			//Insert notification


			//update job count for user
			$num_jobs=$this->user_obj->getNumJobs();
			$num_jobs++;
			$update_query=mysqli_query($this->con,"UPDATE user SET num_jobs='$num_jobs' WHERE username='$added_by'");

			$returned_id=mysqli_insert_id($this->con);///returns the id of the inserted post





		}else{


			echo "Form is empty";
		}


	}




	
}



?>