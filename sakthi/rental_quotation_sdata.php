<?php

include 'crud.php';		//class file

$obj = new crud();		//object create

$rqdate=$_GET["rqdate"];		//value get
$rqto = $_GET["rqto"];
$rqsub = $_GET["rqsub"];
$rqdet = $_GET["rqdet"];



$obj->insert4("tblrent_quotation","rqdate","rqto","rqsubject","rqdetails",$rqdate,$rqto,$rqsub,$rqdet); //function calling....

 mysqli_close($link);
?>