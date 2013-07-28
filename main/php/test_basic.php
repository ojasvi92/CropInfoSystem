<?php
//define variables
$p_state="";
$p_city="";
//$pins=$_POST['pincode'];
$state=$_POST['state'];
$city=$_POST['city'];
//$district=$_POST['district'];
session_start();
// store session data
$_SESSION['state']=$state;
$_SESSION['city']=$city;

require 'check_season.php';
require 'db_con.php';

//query to get state using pincode : $p_state : db used <pincode>
//$val = mysqli_query($con, "SELECT STATE FROM pincode WHERE PIN='$pins'");//$pstate = mysqli_query($con,"SELECT STATE FROM pincode WHERE PIN='$pins'");
//$row = mysqli_fetch_array($val);
//$p_state = $row['STATE'];

//query to identify district using pincode : $p_city : db used <pincode>
//$valc = mysqli_query($con, "SELECT CITY FROM pincode WHERE PIN='$pins'");
//$rowc = mysqli_fetch_array($valc);
//$p_city = $rowc['CITY'];

//get location : yourcity and yourstate : db used <season>
$print = mysqli_query($con,"SELECT STATE,DISTRICT FROM season WHERE STATE='$state'"); //OR (STATE='$p_state' AND DISTRICT='$p_city')");
$rowyc = mysqli_fetch_array($print);
$yourcity= $rowyc['DISTRICT'];
$yourstate = $rowyc['STATE'];
//select Crop : $crop : db used <season>
$result = mysqli_query($con,"SELECT DISTINCT CROP FROM season WHERE STATE='$state' /*OR (STATE='$p_state' AND DISTRICT='$p_city')*/ AND SEASON='$season'");
?>

<!--colorbox-->

<!--colorbox-->	

<?php
while($rowcrop = mysqli_fetch_array($result))
{
$crop = $rowcrop['CROP'];
$image = mysqli_query($con, "SELECT DISTINCT IMAGE FROM crop_images WHERE CROP='$crop'");
while($rowimage = mysqli_fetch_array($image))
{
?>

<!--style>
	img
		{
		opacity:0.7;
		filter:alpha(opacity=40); /* For IE8 and earlier */
		}
		img:hover
		{
		opacity:1.0;
		filter:alpha(opacity=100); /* For IE8 and earlier */
		}
</style-->

<!--fetch images of crops in location-->

<div class="span2">
<div class="mask2"> 

				<!-- Add mousewheel plugin (this is optional) -->
                  <script type="text/javascript" src="../fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
                  <!-- Add fancyBox main JS and CSS files -->
                  <script type="text/javascript" src="../fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
                  <link rel="stylesheet" type="text/css" href="../fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
                  <script type="text/javascript">
                    $(document).ready(function() {
                      $('.fancybox').fancybox();
                    });
                  </script>
                  <style type="text/css">
                    .fancybox-custom .fancybox-skin {
                      box-shadow: 0 0 50px #222;
                    }
                  </style>
                <!-- iframe --> 
                <div><a rel="prettyPhoto" class="fancybox fancybox.iframe" href="test.php?crop=<?php echo $crop;?>" title="<?php echo $crop;?>"><img src ="<?php echo $rowimage['IMAGE'];?>" width="120px" height="120px" alt="not available"></a></div>
<div class="inside">
<p>
	<center><?php echo $crop;?></center><br />
</div>
</div>
</div>
<?php
}
}
?>