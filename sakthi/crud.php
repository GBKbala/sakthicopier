<?php

class crud{


	public function dbconnection()
	{
		$servername  ="localhost";
	 	$username = "root";
	 	$password = "";
	 	$db ="sakthi";
		$connect= mysqli_connect($servername,$username,$password,$db);
		if($connect == false){
			die("ERROR : Couldn't connect".mysqli_connect_error());
		}
		return $connect;
	}

	public function hello_insert($tn,$o,$tw,$oa,$twa)
	{
		$link=$this-> dbconnection();
		$res=$link->query("insert into ".$tn."(".$o.",".$tw.")values('".$oa."','".$twa."')");
		return $res;
	}

	public function hello_delete($tn,$o,$wha)
	{
		$link=$this-> dbconnection();
		echo"delete from ".$tn." where ".$o."='".$wha."' ";
		$res=$link->query("delete from ".$tn." where ".$o."='".$wha."' ");
		echo"deleted succesfully";

		return $res;
	}

	

	public function hello_display($tn,$wh,$wha)
	{
		$link=$this-> dbconnection();
		$res=$link->query("select * from ".$tn." where ".$wh."='".$wha."' ");
		$array=array();
		while($row=mysqli_fetch_assoc($res))
		{
			$array[]=$row;
			
		}


		// echo"select * from ".$tn." where ".$wh."='".$wha."' ";

		return $array;
	}

	public function hello_update($tn,$o,$oa,$wh,$wha)
	{
		$link=$this-> dbconnection();
		$res=$link->query("update ".$tn. "set".$o."='".$oa."'' where".$wh."='".$wha."' ");

		return $res;
	}

	public function insert4($tn,$o,$tw,$th,$fo,$oa,$twa,$tha,$foa)
	{
		$link=$this-> dbconnection();
		$res=$link->query("insert into ".$tn."(".$o.",".$tw.",".$th.",".$fo.")values('".$oa."','".$twa."','".$tha."','".$foa."')");
		
		return $res;	
	}

	public function displayall($tn,$wh)
	{
		$link=$this-> dbconnection();
		$res=$link->query("select * from ".$tn." where ".$wh."!=''");
		// echo"select * from ".$tn." where ".$wh."!=''";
		$array=array();
		while($row=mysqli_fetch_assoc($res))
		{
			$array[]=$row;
			
		}

		return $array;
	}

	public function displayid($tn,$wh,$wha)
	{
		$link=$this-> dbconnection();
		$res=$link->query("select * from ".$tn." where ".$wh."='".$wha."' ");
		// echo"select * from ".$tn." where ".$wh."='".$wha."' ";
		$array=array();
		while($row=mysqli_fetch_assoc($res))
		{
			$array[]=$row;
			
		}

		return $array;
	}

	public function insert6($tn,$o,$tw,$th,$fo,$fi,$si,$oa,$twa,$tha,$foa,$fia,$sia)
	{
		$link=$this-> dbconnection();
		$res=$link->query("insert into ".$tn."(".$o.",".$tw.",".$th.",".$fo.",".$fi.",".$si.")values('".$oa."','".$twa."','".$tha."','".$foa."','".$fia."','".$sia."')");
		
		return $res;	
	}

	public function displayall6($tn,$wh)
	{
		$link=$this-> dbconnection();
		$res=$link->query("select * from ".$tn." where ".$wh."!=''");
		// echo"select * from ".$tn." where ".$wh."!=''";
		$array=array();
		while($row=mysqli_fetch_assoc($res))
		{
			$array[]=$row;
			
		}

		return $array;
	}

	public function displayid6($tn,$wh,$wha)
	{
		$link=$this-> dbconnection();
		$res=$link->query("select * from ".$tn." where ".$wh."='".$wha."' ");
		// echo"select * from ".$tn." where ".$wh."='".$wha."' ";
		$array=array();
		while($row=mysqli_fetch_assoc($res))
		{
			$array[]=$row;
			
		}

		return $array;
	}

	public function insert7($tn,$o,$tw,$th,$fo,$fi,$si,$se,$oa,$twa,$tha,$foa,$fia,$sia,$sea)
	{
		$link=$this-> dbconnection();
		$res=$link->query("insert into ".$tn."(".$o.",".$tw.",".$th.",".$fo.",".$fi.",".$si.",".$se.")values('".$oa."','".$twa."','".$tha."','".$foa."','".$fia."','".$sia."','".$sea."')");
		return $res;	
	}



	public function insert9($tn,$o,$tw,$th,$fo,$fi,$si,$se,$ei,$ni,$oa,$twa,$tha,$foa,$fia,$sia,$sea,$eia,$nia)
	{
		$link=$this-> dbconnection();
		$res=$link->query("insert into ".$tn."(".$o.",".$tw.",".$th.",".$fo.",".$fi.",".$si.",".$se.",".$ei.",".$ni.")values('".$oa."','".$twa."','".$tha."','".$foa."','".$fia."','".$sia."','".$sea."','".$eia."','".$nia."')");
		return $res;	
	}

	public function displayall9($tn,$wh)
	{
		$link=$this-> dbconnection();
		$res=$link->query("select * from ".$tn." where ".$wh."!=''");
		// echo"select * from ".$tn." where ".$wh."!=''";
		$array=array();
		while($row=mysqli_fetch_assoc($res))
		{
			$array[]=$row;
			
		}

		return $array;
	}

	public function displayid9($tn,$wh,$wha)
	{
		$link=$this-> dbconnection();
		$res=$link->query("select * from ".$tn." where ".$wh."='".$wha."' ");
		// echo"select * from ".$tn." where ".$wh."='".$wha."' ";
		$array=array();
		while($row=mysqli_fetch_assoc($res))
		{
			$array[]=$row;
			
		}

		return $array;
	}

	public function deleteid($tn,$wh,$wha)
	{
		$link=$this-> dbconnection();
		// echo"delete from ".$tn." where ".$o."='".$wha."' ";
		$res=$link->query("delete from ".$tn." where ".$wh."='".$wha."' ");
		// echo"deleted succesfully";

		return $res;
	}


}

 
?>