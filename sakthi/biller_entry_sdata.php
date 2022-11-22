<?php

include 'dbconnect.php';

$object = new db_conn();

$link=$object-> connection();


$fname = $_GET["bfname"];
$lname = $_GET["blname"];
$gender = $_GET["bgender"];
$company = $_GET["bcompany"];
$phone = $_GET["bphone"];
$email = $_GET["bemail"];
$uname = $_GET["buname"];
$pwd = $_GET["bpwd"];
$status = $_GET["bstatus"];
$group = $_GET["bgroup"];


$sql="insert into tblbiller(bfname,blname,bgender,bcompany,bphone,bemail,buname,bpwd,bstatus,bgroup)values('$fname','$lname','$gender','$company','$phone','$email','$uname','$pwd','$status','$group')";

$result=mysqli_query($link,$sql);

?>