<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Agriculture Information System</title>
		
    <!--meta data-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<!--meta data-->
		
    <!-- Styles -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link rel='stylesheet' id='prettyphoto-css'  href="css/prettyPhoto.css" type='text/css' media='all'>
		<link href="css/fontello.css" type="text/css" rel="stylesheet">
		<!--[if lt IE 7]>
		<link href="css/fontello-ie7.css" type="text/css" rel="stylesheet">  
		<![endif]-->
		<!-- Google Web fonts -->
		<link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		
		<style>body {padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */}</style>

		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		    
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon1.ico">
    <!-- share location -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeLzjWfDaqBze8j7qKJL17XH4ZsMjsTx0&sensor=true"></script>
		<script type="text/javascript" src="js/script.js"></script>
    <!-- share location -->
    <!-- JQuery -->
    
    <!-- JQuery-->
		    
		<!-- Load ScrollTo -->
		<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
		 
    <!-- Load ScrollTo -->
    <script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
    <!-- Load LocalScroll -->
    <script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
    <!-- prettyPhoto Initialization -->
    <script type="text/javascript" charset="utf-8">
          $(document).ready(function(){
            $("a[rel^='prettyPhoto']").prettyPhoto();
          });
        </script>

	</head>
	
<!-- head section of the template ends here-->

<!-- body section of the template starts here-->

  <body>

	<!--******************** NAVBAR ********************-->
	  <div class="navbar-wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
            <h1 class="brand"><a href="#top">Crop Information System!</a></h1>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <nav class="pull-right nav-collapse collapse">
              <ul id="menu-main" class="nav">
                <li><a title="portfolio" href="#portfolio">Crops</a></li>
                <!-- iframe -->
                  <!-- Add mousewheel plugin (this is optional) -->
                  <script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
                  <!-- Add fancyBox main JS and CSS files -->
                  <script type="text/javascript" src="fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
                  <link rel="stylesheet" type="text/css" href="fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
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
                <li><a class="fancybox fancybox.iframe" href="../jvmaps/india-nic.html" title="click to see map">Map</a></li>
                <!-- iframe --> 
                <li><a title="graph" href="#graph" title="click to see graph">Graphs</a></li>
                <!-- iframe --> 
                <!--link rel="stylesheet" href="colorbox/example3/colorbox.css" />
                <script src="colorbox/jquery.min.js"></script>
                <script src="colorbox/jquery.colorbox.js"></script>
                <script>
                $(document).ready(function(){
                //Examples of how to assign the Colorbox event to elements
                $(".iframe").colorbox({iframe:true, width:"80%", height:"95%"});});
                </script-->
                <!--li><a class='iframe' title="today's price" href="price/price.php">Prices</a></li-->
                <!-- iframe --> 
                <li><a title="team" href="#team" title="meet the team">Team</a></li>
                <li><a title="contact" href="#contact" title="contact us">Contact</a></li>
              </ul>
            </nav>
          </div>
          <!-- /.container -->
        </div>
        <!-- /.navbar-inner -->
      </div>
      <!-- /.navbar -->
    </div>
    <!-- /.navbar-wrapper -->
    <div id="top">
      
    </div>
    <!-- ******************** HeaderWrap ********************-->
    <div id="headerwrap">
      <!--header class="clearfix"-->
       <h1><span>CROP</span> Information System</h1>
        <div class="container">
          <div class="row">
            <div class="span12">
              <!--h2>Signup for our Newsletter to be updated</h2-->
              <!--input type="text" name="your-email" placeholder="you@yourmail.com" class="cform-text" size="40" title="your email"-->
              <a href="#contact"><input type="submit" value="Subscibe" class="cform-submit" width="80%"></a>
            </div>
          </div>
          <div class="row">
            <div class="span12">
              <!--<ul class="icon">
                <li><a href="#" target="_blank"><i class="icon-pinterest-circled"></i></a></li>
                <li><a href="#" target="_blank"><i class="icon-facebook-circled"></i></a></li>
                <li><a href="#" target="_blank"><i class="icon-twitter-circled"></i></a></li>
                <li><a href="#" target="_blank"><i class="icon-gplus-circled"></i></a></li>
                <li><a href="#" target="_blank"><i class="icon-skype-circled"></i></a></li>
              </ul> -->
            </div>
          </div>
        </div>
      <!--/header-->
    </div>
	
 <!--******************** crop images here ********************-->
    <section id="feature">
    <!-- form >
 
      <div id="loc">
      <form name="myform" action="php/test_basic.php" method="post">
      <div><input type="text" id="state" name="state" placeholder="your state" title="your_state" /> <input type="text" id="city" name="city" placeholder="your city" title="your_city" /> <input type="text" id="pincode" name="pincode" placeholder="pincode" title="pincode" /> <input id="loc-submit" type="submit" value="Notify me" class="cform-submit" /></div>
      </form>
      </div>  

    <sform -->
    </section>
   
  
    <!--******************** Portfolio Section/crop-images & Details ********************-->
    <section id="portfolio" class="single-page scrollblock">
      <div class="container">
        <!--div class="align"><i class="icon-desktop-circled"></i></div-->
        <h1 id="folio-headline">Crops...</h1>
        <div class="row" id="crop_image"><!-- crop images come here --></div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <hr>
  
  <!--******************** map section ********************-->
        <!--Map starts here-->
        
        <!--******************** Services Section ********************-->
    <section id="services" class="single-page scrollblock">
      <div class="container">
        <!--div class="align"><i class="icon-cog-circled"></i></div-->
        <h1>Services</h1>
        <!-- Four columns -->
        <div class="row">
          <div class="span12">
            <!--div class="align"> <i class="icon-desktop sev_icon"></i> </div-->
            
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <hr>

        <!--END OF MAP-->

          
    <!--******************** Testimonials Section/price section ********************-->
    <section id="price" class="single-page hidden-phone">
      <div class="container">
        <div class="row">
          <div class="blockquote-wrapper">
            <blockquote class="mega">
              <div> </div>
            </blockquote>
          </div>
          <!-- /.blockquote-wrapper -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <hr>
    
    <!--******************** News Section ********************-->
          <section id="visualize" class="single-page scrollblock">
      
	 <!-- Graph -->
          </section>
       <!--******************** Team Section ********************-->
          <section id="team" class="single-page scrollblock">
          <div class="container">
          <div class="align"><i class="icon-group-circled"></i></div>
          <h1>Meet the team</h1>
          <!-- Five columns -->
          <div class="row">
          <div class="span2 offset1">
          <div class="teamalign"> <img class="team-thumb img-circle" src="img/portrait-5.jpg" alt=""> </div>
          <h3>Anil</h3>
          <div class="job-position">Analyst</div>
          </div>
          <!-- ./span2 -->
          <div class="span2">
          <div class="teamalign"> <img class="team-thumb img-circle" src="img/portrait-2.jpg" alt=""> </div>
          <h3>Sharad</h3>
          <div class="job-position">Web Architect</div>
          </div>
          <!-- ./span2 -->
          <div class="span2">
          <div class="teamalign"> <img class="team-thumb img-circle" src="img/portrait-3.jpg" alt=""> </div>
          <h3>Ojasvi</h3>
          <div class="job-position">Graphic Designer</div>
          </div>
          <!-- ./span2 -->
          <div class="span2">
          <div class="teamalign"> <img class="team-thumb img-circle" src="img/portrait-4.jpg" alt=""> </div>
          <h3>Prashant</h3>
          <div class="job-position">Data Management</div>
          </div>
          <!-- ./span2 -->
          <div class="span2">
          <div class="teamalign"> <img class="team-thumb img-circle" src="img/portrait-1.jpg" alt=""> </div>
          <h3>Mac Rawat</h3>
          <div class="job-position">Web developer</div>
          </div>
          <!-- ./span2 -->
          </div>
          <!-- /.row -->
          <div class="row">
          <div class="span10 offset1">
          <hr class="featurette-divider">
          <div class="featurette">
          <h2 class="featurette-heading">Idea Persons & Mentors <span class="muted"></span></h2>
          <div>
            Credits: 
          </div>
          </div>
          <!-- /.featurette -->
          <hr class="featurette-divider">
          </div>
          <!-- .span10 -->
          </div>
          <!-- /.row -->
          </div>
      <!-- /.container -->
          </section>
   
 <!--******************** Contact Section ********************-->
   <script type="text/javascript" src="../feedback/validate.js"></script>
    <section id="contact" class="single-page scrollblock">
      <div class="container">
        <div class="align"><i class="icon-mail-2"></i></div>
        <h1>Contact us now!</h1>
        <div class="row">
          <div class="span12">
            <div class="cform" id="theme-form">
              <form action="feedback/email.php" method="post" class="cform-form" onsubmit ="return validateForm()">
                <div class="row">
                  <div class="span6"> <span class="your-name">
                    <input type="text" name="your-name" id="your-name" placeholder="Your Name" class="cform-text" size="40" title="your name" required>
                    </span> </div>
                  <div class="span6"> <span class="your-email">
                    <input type="text" name="your-email" id="your-email" placeholder="Your Email" class="cform-text" size="40" title="your email" required>
                    </span> </div>
                </div>
                <div class="row">
                  <div class="span6"> <span class="institution">
                    <input type="text" name="company" id="company" placeholder="Your Institution" class="cform-text" size="40" title="company" >
                    </span> </div>
                  <div class="span6"> <span class="website">
                    <input type="text" name="website" id="website" placeholder="Your Website" class="cform-text" size="40" title="website">
                    </span> </div>
                </div>
                <div class="row">
                  <div class="span12"> <span class="message">
                    <textarea name="message" id="message" placeholder="Drop us a comment" class="cform-textarea" cols="40" rows="10" title="drop us a line." required></textarea>
                    </span> </div>
                </div>
                <div>
                  <input type="submit" value="Send message" class="cform-submit pull-left">
                </div>
                <div class="cform-response-output"></div>
              </form>
            </div>
          </div>
          <!-- ./span12 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <hr>
    <div class="footer-wrapper">
      <div class="container">
        <footer>
          <small>&copy; .</small>
        </footer>
      </div>
      <!-- ./container -->
    </div>
    <!-- Loading the javaScript at the end of the page -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <!--script type="text/javascript" src="js/site.js"></script-->
    </body>
    </html>
