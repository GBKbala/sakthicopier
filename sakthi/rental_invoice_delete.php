<?php

include 'dbconnect.php';

$object = new db_conn();

$link=$object-> connection();

$rid=$_REQUEST["id"];

$sql="Delete from tblrent_invoice where billno='$rid'";
$res=mysqli_query($link,$sql) or die(mysqli_error());

header("location:rental_invoice_display.php");


?>