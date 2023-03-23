<?php

class Skill{

	private $con;


	public function __construct($con){
	$this->con=$con;
	}



	public function getSkills(){

	$skilw="";

	$skills=mysqli_query($this->con,"SELECT * FROM skills");

	while ($row=mysqli_fetch_array($skills)) {
		$id=$row['id'];
		$skil=$row['skill'];

		$skilw .="
							

								
									
										<option value='$skil'>$skil</option>

								
								
								
							
		";
		// code...
	}

	return $skilw;
	}

}








?>