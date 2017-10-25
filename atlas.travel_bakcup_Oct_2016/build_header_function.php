<?php  function buildTitle($title){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta name="description" content="The Travel Booking Expert">
    <meta name="author" content="Kamran Arasteh, Kamy Web Services, http://www.kamy.ca">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">  
    <!-- Page Title -->
    <title>Atlas.travel / <?php echo $title;?></title>
    <!-- styles -->
    <link href="assets/styles/bootstrap.min.css" rel="stylesheet">
    <link href="assets/styles/bootstrap-theme.min.css" rel="stylesheet">
    <link href="assets/styles/layout.css" rel="stylesheet">
    <link href="assets/styles/responsive.css" rel="stylesheet">
    <link href="assets/styles/user_change.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <link rel="SHORTCUT ICON" href="images/favicon.ico" />
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]> <script src="assets/scripts/html5.js"></script> <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="/images/favicon.png">
    <script src="assets/scripts/modernizr.custom.js"></script>
    <script src="assets/scripts/jquery-1.8.2.min.js"></script>
    <script src="assets/scripts/bootstrap.min.js"></script>
    <script src="assets/scripts/respond.min.js"></script>
    <script src="assets/scripts/jquery.easing.1.3.js"></script>
    <script src="assets/scripts/jquery.touchSwipe.min.js"></script>
    <script src="assets/scripts/responsiveslides.min.js"></script>
    <script src="assets/scripts/jquery-tinyNav.js"></script>
    <script src="assets/scripts/easyResponsiveTabs.js"></script>
    <script src="assets/scripts/jquery-validation.js"></script>
    <script src="assets/scripts/jquery.datepick.min.js"></script>
    <script src="assets/scripts/jquery.customSelect.min.js"></script>
    <script src="assets/scripts/owl.carousel.min.js"></script>
    <script src="assets/scripts/jquery.simplemodal.js"></script>
    <script src="assets/scripts/jRating.jquery.js"></script>
    <script src="assets/scripts/jquery.screwdefaultbuttonsV2.min.js"></script>
    <script src="assets/scripts/jquery-hoverIntent.js"></script>
    <script src="assets/scripts/global.js"></script>
    <script src="assets/scripts/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/scripts/ie10-viewport-bug-workaround.js"></script>
    <!-- jssor slider scripts-->
    <script type="text/javascript" src="assets/scripts/jssor.slider.mini.js"></script>
    <link href="/css/responsive-slider.css" rel="stylesheet">

    <!-- bxSlider Javascript file -->
    <script src="plugins/jquery.easing.1.3.js"></script>
    <script src="plugins/jquery.fitvids.js"></script>
    <script src="assets/scripts/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="assets/styles/jquery.bxslider.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69189331-1', 'auto');
  ga('send', 'pageview');

</script>


</head>
<body>
    <!-- HEADER ================================================== -->
    <header>
        <div class="container">
        
            <div class="row">
                <div class="col-sm-6">
                            <div id="logo" class="col-sm-8"><a href="/" title="Travel Booking"><img src="assets/images/logo_white_lrg.png" alt="Travel Booking" /></a></div>
                </div><!-- /col -->
                
                <div class="col-sm-6">

                    <div class="callUsTop">
                            <a href="/contact.php" class="contact_us"> </a>
                            <h4>1.877.600.5454 </h4>
                            <h4>1.416.222.0717</h4>   
                            <span class="tag_line">Expert Advice, Exceptional Care, Unbeatable Price.</span>
                    </div><!-- /callUsTop -->
                </div><!-- /col -->
            </div><!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="left">
                                <a href="https://www.facebook.com/atlastravel1" title="Facebook" target="_blank"><img src="/assets/images/facebook.png" class="header_icon"></a>
                                <a href="https://www.youtube.com/user/AtlasTravel100/" title="Youtube" target="_blank"><img src="/assets/images/youtube.png" class="header_icon"></a>
                                </div>
                                <div class="txt_right right">
                    <a href="/"><img src="assets/images/icon_flag_canada.png" class="flags header_icon"></a>
                    <a href="/usa.php"><img src="assets/images/icon_flag_usa.png" class="flags header_icon"></a>
                    <a href="/uk.php"><img src="assets/images/icon_flag_uk.png" class="flags header_icon"></a>  
                    </div> 
                </div>
            </div>
        </div><!-- /container -->
    </header><!-- /header TOP-->
<?php include('build_menu_function.php') ;?>
<?php } ?>