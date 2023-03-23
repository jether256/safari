<?php

class Title{

	private $con;


	public function __construct($con){
		$this->con=$con;
	}


	public function getTitlee(){

		$tito="";

		$query=mysqli_query($this->con,"SELECT * FROM title");
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['id'];
			$tit=$row['title'];


			$tito .="

	<option value='$tit'>$tit</option>
			";


			// code...
		}

		return $tito;
	}
}








?>