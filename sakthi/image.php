<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="plugins\jquery\jquery.min.js"></script>
</head>
<body>

	<form method="POST" enctype="multipart/form-data">
	<label>Name:</label>
    <input type="text" name="name" id="name"><br>
    <label>email:</label>
    <input type="text" name="email" id="mail"><br>	
    <label>Select Image File:</label>
    <input type="file" name="image" id="img"><br>
    <input type="button" id="submit" value="Upload" name="submit">
    <!-- <button id="submit">Upload</button> -->
	</form>
	

</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		// alert("hello");
		$("#submit").click(function(){
			// alert("hello");
			var name = $("#name").val();
			var mail = $("#mail").val();
			// var image = $("#img").val();
			// alert(image);

			$.ajax({
				url:"image1.php",
				method:"GET",
				data:{name:name, mail:mail},

				success:function(response){
					alert("ajax ok");
				}

			});

		});
	});
</script>