<?php


include 'crud.php';		//class file

$obj = new crud();	

$a=$_GET['rqto'];
$b=$_GET['ar1'];
$c=$_GET['ar2'];
$d=$_GET['ar3'];
$e=$_GET['ar4'];
$f=$_GET['ar5'];

for($i=0;$i<count($b);$i=$i+1)
{
	$obj->insert6("tblrent_quotation_details","rqto","description","ramount","fcopy","addition","agree",$a,$b[$i],$c[$i],$d[$i],$e[$i],$f[$i]); //function calling....

}



 // mysqli_close($link);




?>