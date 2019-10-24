 <?php
session_start();

require('home.php');

?>
<DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <title>
    MattFlix
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'>
  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/style.css" rel="stylesheet">
    <link href="./assets/css/uikit.css" rel="stylesheet">
	<link href="./assets/css/vendor.css" rel="stylesheet">
	<link href="./assets/css/aos.css" rel="stylesheet"></head>

<body class="index-page sidebar-collapse">
	
	
   <nav class="navbar fixed-top navbar-expand-lg bg-danger"  id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
    
       

   <!--navbar logo start-->

   <!--navbar logo end-->
          
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            
             
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
               <i class="material-icons">apps</i>Catagories
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="./movies.php" class="dropdown-item">
                <i class="material-icons">videocam</i> Movies
              </a>
              <a href="./tvshows.php" class="dropdown-item">
                <i class="material-icons">desktop_windows</i>TV Shows
			</a>
       
              
            </div>
          </li>
               <li class="nav-item">
                   <a href="profile.php" class="nav-link" >
               <i class="material-icons">user</i>Profile
            </a>
                  </li> 
            
             <li class="nav-item">
                    <a href="logout.php" class="btn btn-default btn-raised btn-round">
                      LogOut
                    </a>
                  </li>
        </ul>
      </div>
    </div>
    
  </nav>
 
   
       <footer>    
         
  
  </footer>
 <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
    <script src="./assets/js/uikit.js" type="text/javascript"></script>
       <script src="./assets/js/uikit-icons.js" type="text/javascript"></script>
	   <script src="./assets/js/aos.js" type="text/javascript"></script>
	   <script src="./assets/js/main.js" type="text/javascript"></script>
  <script src="./assets/js/modernizr.js" type="text/javascript"></script>
  
 
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
  
  <script>
  AOS.init();
</script>

  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }

  </script>
</body>

</html>
