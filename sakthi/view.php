<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// Get image data from database 
$result = $db->query("SELECT image FROM images ORDER BY id DESC"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>

<!-- 
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` longblob NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; -->