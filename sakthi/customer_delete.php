<?php

include 'crud.php';		//class file

$obj = new crud();		//object create

				
$id=$_GET["id"]; //value get
// $dis=$_GET["dis"];

// $obj->hello_insert("crud","qparticular","qamount",$x,$amt); //function call

$obj->deleteid("tblcustomer","idno",$id);

header("location:customer_display.php");


?>