<?php

class User {

	private $user;
	private $con;


	public function __construct($con,$user){
		$this->con=$con;
		$user_query_details=mysqli_query($con,"SELECT * FROM user where username='$user'");
		$this->user=mysqli_fetch_array($user_query_details);
	}



	public function getUserName(){
		return $this->user['username'];
	}


public function getNumJobs(){

	$username=$this->user['username'];
	$query=mysqli_query($this->con,"SELECT num_jobs FROM user  WHERE  username='$username'");
	$row=mysqli_fetch_array($query);
	return $row['num_jobs'];
}


public function getNumProjects(){

	$username=$this->user['username'];
	$query=mysqli_query($this->con,"SELECT num_projects FROM user  WHERE  username='$username'");
	$row=mysqli_fetch_array($query);
	return $row['num_projects'];
}

	public function getFisrtLastName(){
		$username=$this->user['username'];
		$query=mysqli_query($this->con,"SELECT first_name,last_name FROM user WHERE username='$username'");
		$row=mysqli_fetch_array($query);

		return $row['first_name']." ".$row['last_name'];
	}







































}








?>