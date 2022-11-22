<?php

include 'crud.php';		//class file

$obj = new crud();	

$id=$_GET["id"];

$obj->deleteid("tblrent_minvoice","customer",$id);

header("location:rental_minvoice_display.php");




?>