<?php

include 'dbconnect.php';

$object = new db_conn();

$link=$object-> connection();



$rblno = $_GET["rblno"];
$date = $_GET["date"];
$cname = $_GET["cname"];
$code = $_GET["code"];
$mdno = $_GET["mdno"];
$seno = $_GET["seno"];


$sql="insert into tblrent_invoice(billno,rdate,cname,rcode,modelno,serialno)values('$rblno','$date','$cname','$code','$mdno','$seno')";


$result=mysqli_query($link,$sql);

echo$sql;

?>