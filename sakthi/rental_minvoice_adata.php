<?php

include 'crud.php';		//class file

$obj = new crud();	

$customer = $_GET["customer"];
$a = $_GET["ar1"];
$b = $_GET["ar2"];
$c = $_GET["ar3"];


for($i=0;$i<count($c);$i=$i+1)
{
	$obj->insert4("tblrent_minvoice_details","customer","details","rate","quantity",$customer,
	$a[$i],$b[$i],$c[$i]); //function calling....

}

header("location:rental_minvoice_display.php");

mysqli_close($link);
?>