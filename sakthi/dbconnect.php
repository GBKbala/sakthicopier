<?php

class db_conn{

	public function connection()
	{
		$servername  ="localhost";
	 	$username = "root";
	 	$password = "";
	 	$db ="sakthi";
		$connect= mysqli_connect($servername,$username,$password,$db);
		if($connect == false){
			die("ERROR : Couldn't connrct".mysqli_connect_error());
		}
		return $connect;
	}
}
// $obj =  new db_conn;
// $obj-> connection($db="insert");
?>