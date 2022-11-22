<?php

$servername = 'localhost';
$username = 'root';
$password = "";
$db="trial_db";


$conn = mysqli_connect($servername,$username,$password,$db);

if ($conn==false) {
	Die('Error'.mysqli_connect_error());
}

$status = $statusmsg="";
 $status="error";

 if(empty($_FILES['img']['name'])){

 	$filename = $_FILES['img']['name'];
 	$temp_filename = $_FILES['img']['tmpname'];

 	$folder ="./image/".$filename;
 }else{
 	$statusmsg="please select image";
 }

$sql="insert into imgtable (image) values ('$filename')";

$res = mysqli_query($conn,$sql);


if(move_uploaded_file($temp_filename, $folder)){
	echo "<script>alert('image uploaded');</script>";
}else{
	echo "Error".mysqli_connect_error();
}


?>