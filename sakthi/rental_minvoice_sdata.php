<?php

include 'crud.php';		//class file

$obj = new crud();	

$date=$_GET["mrdate"];
$ref=$_GET["ref"];
$biller=$_GET["biller"];
$customer=$_GET["customer"];
$cgst=$_GET["cgst"];
$sgst=$_GET["sgst"];
$search=$_GET["search"];
$scharge=$_GET["scharge"];
$pack=$_GET["pack"];

$obj->insert9("tblrent_minvoice","mrdate","reference","biller","customer","cgst","sgst","search","scharge","packing",$date,$ref,$biller,$customer,$cgst,$sgst,$search,$scharge,$pack); //function calling....

?>