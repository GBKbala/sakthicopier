<html>

<head>
	<title>Image Upload</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div id="content">
		<form method="POST" action="upload.php" enctype="multipart/form-data">
			<div class="form-group">
				<input class="form-control" type="file" name="uploadfile" value="" />
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
			</div>
		</form>
	</div>
	<div id="display-image">
		<?php
		include 'dbconfig.php';
		$query = " select * from images ";
		$result = mysqli_query($db, $query);

		while ($data = mysqli_fetch_assoc($result)) {
		?>
			 <!-- <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> -->
			<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data['image']); ?>">

		<?php
		}
		?>
	</div>
</body>

</html>