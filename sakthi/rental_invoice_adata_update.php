<?php

include 'dbconnect.php';
$object = new db_conn();
$link=$object-> connection();

$a1=$_GET["rblno"];
$a2=$_GET["ar1"];
$a3=$_GET["ar2"];
$a4=$_GET["ar3"];
for($i=0;$i<count($a3);$i=$i+1){
	// echo$a2[$i];
	// echo$a3[$i];

// $sql="update tblrent_invoice_details set description='$a2[$i]',meter_read='$a3[$i]',doread='$a4[$i]' where billno='$a1'";


$result=mysqli_query($link,$sql);

// echo$sql;
}



?>