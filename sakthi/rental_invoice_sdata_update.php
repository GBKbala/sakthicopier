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
$desc = $_GET["desc"];
$mread = $_GET["mread"];
$doread = $_GET["doread"];

// echo"working".$doread;

$sql="update  tblrent_invoice set rdate='$date',cname='$cname',rcode='$code',modelno='$mdno',serialno='$seno',description='$desc',meter_read='$mread',doread='$doread' where billno='$rblno'";


$result=mysqli_query($link,$sql);

echo$sql;

?>