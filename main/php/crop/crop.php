<?php

$crop=$_GET['crop'];
include '../db_con.php';
echo $crop;
$image = mysqli_query($con, "SELECT IMAGE FROM crop_images WHERE CROP='$crop'");
while($rowimage = mysqli_fetch_array($image))
{
?>

<div><img src ="<?php echo $rowimage['IMAGE'];?>" width="120px" height="120px" alt="not available"></a></div>
<?php
}

?>
