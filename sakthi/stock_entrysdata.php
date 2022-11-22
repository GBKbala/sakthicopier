<?php

include 'dbconnect.php';

$object = new db_conn();

$link=$object-> connection();


// $status = $statusMsg = ''; 
// if(isset($_POST["submit"])){ 
//     $status = 'error'; 
//     if(!empty($_FILES["image"]["name"])) { 
//         // Get file info 
//         $fileName = basename($_FILES["image"]["name"]); 
//         $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
//         // Allow certain file formats 
//         $allowTypes = array('jpg','png','jpeg','gif'); 
//         if(in_array($fileType, $allowTypes)){ 
//             $image = $_FILES['image']['tmp_name']; 
//             $imgContent = addslashes(file_get_contents($image)); 
         
//             // Insert image content into database 
//             $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', NOW())"); 
             
//             if($insert){ 
//                 $status = 'success'; 
//                 $statusMsg = "File uploaded successfully."; 
//             }else{ 
//                 $statusMsg = "File upload failed, please try again."; 
//             }  
//         }else{ 
//             $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
//         } 
//     }else{ 
//         $statusMsg = 'Please select an image file to upload.'; 
//     } 
// } 
 
// // Display status message 
// echo $statusMsg; 


 $pname = $_POST["pname"];
 $ptype = $_POST["ptype"];
 $pcode = $_POST["pcode"];
 $weight = $_POST["weight"];
 $brand = $_POST["brand"];
 $category = $_POST["category"];
 $punit = $_POST["punit"];
 $mrp = $_POST["mrp"];
 $sprice = $_POST["sprice"];
 $promotion = $_POST["promotion"];
 $hsn = $_POST["hsn"];
 $tax = $_POST["tax"];
 $palert = $_POST["palert"];
 $pimg = $_POST["pimage"];
 $invdet = $_POST["invdetail"];
 $supname = $_POST["supname"];
 $partno = $_POST["partno"];
 $sup_price = $_POST["sup_price"];
 // echo"working"."<br>".$sup_price; 

 $sql="insert into tblstock(pname,ptype,pcode,weight,brand,category,punit,mrp,sprice,promotion,hsn,tax,alert,pimage,invdetail,supply_name,partno,supply_price)values('$pname','$ptype','$pcode','$weight','$brand','$category','$punit','$mrp','$sprice','$promotion','$hsn','$tax','$palert','$pimg','$invdet','$supname','$partno','$sup_price')";
 

 // echo$sql;

 $result=mysqli_query($link,$sql);



// echo$sql;
// mysql_close($link);
?>