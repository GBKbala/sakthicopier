<?php

include 'dbconnect.php';

$object = new db_conn();

$link=$object-> connection();

$fname = $_GET["fname"];
$lname = $_GET["lname"];
$gender = $_GET["gender"];
$company = $_GET["company"];
$phone = $_GET["phone"];
$email = $_GET["email"];
$uname = $_GET["uname"];
$pwd = $_GET["pwd"];
$status = $_GET["status"];
$group = $_GET["group"];
// echo"working".$group;

$sql="insert into tblcustomer(fname,lname,gender,company,phone,email,uname,pwd,cstatus,cgroup)values('$fname','$lname','$gender','$company','$phone','$email','$uname','$pwd','$status','$group')";


$result=mysqli_query($link,$sql);




?>