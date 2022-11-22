<?php

include 'dbconnect.php';

$object = new db_conn();

$link=$object-> connection();


// $status = $statusMsg = ''; 
// if(isset($_POST["submit"])){
// 	echo "ok"; 
//     $status = 'error'; 
//     if(!empty($_FILES["image"]["name"])) { 
// 			echo "ok";
//         // Get file info 
//         $fileName = basename($_FILES["image"]["name"]); 
//         $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
//         // Allow certain file formats 
//         $allowTypes = array('jpg','png','jpeg','gif'); 
//         if(in_array($fileType, $allowTypes)){ 
//             $image = $_FILES['image']['tmp_name']; 
//             $imgContent = addslashes(file_get_contents($image));
//              $name=$_POST["name"];
// 			 $mail=$_POST["mail"]; 
         
//             // Insert image content into database 
//             $insert =("INSERT into images (name, mail, image) VALUES ('1','1',
//             	'1')");
//             $result=mysqli_query($link,$insert);
            
             
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

 // if(isset($_POST['name'])){

// var_dump($_POST);
// pre_r($_POST);
if(isset($_POST['submit'])){

$name=$_POST["name"];
echo "name".$name;
// echo$mail=$_POST["mail"]; 

// echo "working".$name;	
}

// $img=$_POST["image"];
 // echo$mail;
 // }
// $sql="insert into images (name,mail,image)values ('$name', '$mail','s')";

 // $result=mysqli_query($link,$sql);



// }
 
?>