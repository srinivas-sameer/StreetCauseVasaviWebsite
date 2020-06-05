<?php
// Include the database configuration file
include 'db.php';

// Get images from the database
$query = $db->query("SELECT * FROM files ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img width="50%" src="<?php echo $imageURL; ?>" alt="" />
<?php
 }
}
else
{
     ?>
    <p>No image(s) found...</p>
    <?php
}
  ?>