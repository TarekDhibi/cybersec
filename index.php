<?php
    include 'functions/main-functions.php';

    $pages = scandir('pages/');
    if(isset($_GET['page']) && !empty($_GET['page'])){
        if(in_array($_GET['page'].'.php',$pages)){
            $page = $_GET['page'];
        }else{
            $page = "error";
        }
    }else{
        $page = "home";
    }

    $pages_functions = scandir('functions/');
    if(in_array($page.'.func.php',$pages_functions)){
        include 'functions/'.$page.'.func.php';
    }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ESIP | CyberSec Club</title>
<link rel="shortcut icon" type="image/png" href="images/favicon.png" />

<meta name="description" content="CyberSec est un club de sécurité informatique crée au sein de l’école supérieure d'ingénieurs privée de gafsa, par des étudiants bénévoles. Ses membres ont pour but de concevoir, réaliser et lancer des activités embarquant des expériences qui rendent la vie estudiantine dynamique.
">
<meta name="keywords" content="cybersec, esip, club" />
<meta name="robots" content="index, follow" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- Mobile Specific Metas================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS ================================================== -->
<link rel="stylesheet" href="css/skeleton.css">
<link rel="stylesheet" href="css/layout.css">

<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/menusm.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/menusm.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<!-- slides START -->
<!--start slider script DC iOS Slider JS -->
<link rel="stylesheet" type="text/css" href="css/dc_ios.css" />
<!-- requires jquery library -->
<script type="text/javascript" src="js/jquery.easing.js"></script>
<script type="text/javascript" src="js/ios/jquery.iosslider.js"></script>
<!-- DC iOS Slider Settings -->
<script type="text/javascript">
$(document).ready(function() {	
$('.iosSlider').iosSlider({
desktopClickDrag: true,
snapToChildren: true,
navSlideSelector: '.iossliderContainer .slideSelectors .item',
onSlideComplete: slideComplete,
onSliderLoaded: sliderLoaded,
onSlideChange: slideChange,
autoSlide: true, // auto slide on load
scrollbar: true, // show thin scrollbars
scrollbarContainer: '.iossliderContainer .scrollbarContainer',
scrollbarMargin: '0',
scrollbarBorderRadius: '0'
});
});
function slideChange(args) {
$('.iossliderContainer .slideSelectors .item').removeClass('selected');
var curr = args.currentSlideNumber -1;
$('.iossliderContainer .slideSelectors .item:eq(' +curr + ')').addClass('selected');
}
function slideComplete(args) {
$(args.sliderObject).find('.text1, .text2').attr('style', '');
$(args.currentSlideObject).find('.text1').animate({
right: '150px',
opacity: '0.8'
}, 400, 'easeOutQuint');
$(args.currentSlideObject).find('.text2').delay(200).animate({
right: '100px',
opacity: '0.8'
}, 400, 'easeOutQuint');
}
function sliderLoaded(args) {
slideComplete(args);
slideChange(args);
}
</script>
<!--end slider script DC iOS Slider JS -->
<!-- Config Slider : SLIDER END -->
<!-- START slider1 -->
<link rel="stylesheet" href="css/website.css" type="text/css" media="screen"/>
<script type="text/javascript" src="js/jquery.tinycarousel.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#slider1').tinycarousel();
$('#slider2').tinycarousel();	
});
</script>
<!-- END slider1 --><!-- Config Slider : SLIDER END -->
<!-- START slider1 -->
<link rel="stylesheet" href="css/website.css" type="text/css" media="screen"/>
<script type="text/javascript" src="js/jquery.tinycarousel.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#slider1').tinycarousel();
$('#slider2').tinycarousel();	
});
</script>
<!-- END slider1 -->
<!-- slides END -->
<!-- PrettyPhoto Starts -->
<link rel="stylesheet" type="text/css" href="prettyPhoto/css/prettyPhoto.css" />
<script type="text/javascript" src="prettyPhoto/js/jquery.prettyPhoto.js"></script>
<!-- PrettyPhoto Ends -->
<!-- Preloader Starts -->
<link href="preloader/css/preloader.css" rel="stylesheet" />
<script src="preloader/js/jquery.preloader.js" charset="utf-8"></script>
<!-- Preloader Ends -->
<!-- Ui To Top Starts -->
<link href="ui_totop/css/ui.totop.css" rel="stylesheet" />
<script src="ui_totop/js/jquery.ui.totop.js" charset="utf-8"></script>
<!-- Ui To Top Ends -->
<!-- DC Twitter Starts -->
<link href="twitter_tweet/jquery.tweet.css" rel="stylesheet" />
<script src="twitter_tweet/jquery.tweet.js" charset="utf-8"></script>
<!-- DC Twitter End -->

<!-- Config User Intarface Box Import START -->
<script type="text/javascript" src="js/head_html_default_block.js"></script>
<script type="text/javascript" src="js/head_html_block.js"></script>
<!-- Config User Intarface Box Import END -->

<!-- ANIMATE AND EASING LIBRARIES -->
<script type="text/javascript" src="sliders/showbiz/services-plugin/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="sliders/showbiz/services-plugin/js/jquery.cssAnimate.mini.js"></script>

<!-- TOUCH AND MOUSE WHEEL SETTINGS -->
<script type="text/javascript" src="sliders/showbiz/services-plugin/js/jquery.touchwipe.min.js"></script>
<script type="text/javascript" src="sliders/showbiz/services-plugin/js/jquery.mousewheel.min.js"></script>

<!-- jQuery SERVICES Slider  -->
<script type="text/javascript" src="sliders/showbiz/services-plugin/js/jquery.themepunch.services.mini.js"></script>
<link rel="stylesheet" type="text/css" href="sliders/showbiz/services-plugin/css/settings.css" media="screen" />
<script type="text/javascript">
    $(document).ready(function() {
        jQuery('#services-example-1').services(
            {										
                width:880,
                height:290,							
                slideAmount:5,
                slideSpacing:20,							
                touchenabled:"on",
                mouseWheel:"on"
                
            });
        
            
});
</script>
<!-- start select navigation -->
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <?php
            $pages_js = scandir('js/');
            if(in_array($page.'.func.js',$pages_js)){
                ?>
                    <script type="text/javascript" src="js/<?= $page ?>.func.js"></script>
                <?php
            }

        ?>
<script>
	$(function () {
		$('#menu-top-menu').tinyNav({
			active: 'selected',
			header: 'Navigation' 
		});
	});
</script>
<script type="text/javascript" src="js/tinynav.min.js"></script>


</head>
<body>
<div class="body_pattern">
  <div class="index_page">
    <div class="main">
      <div class="header">
		<div class="logo_cyber"><a href="index.php"> <img src="images/favicon.png" /></div>
        <div class="container">
          <div class="header_resize"> 
            <div class="logo">
              <div><a href="index.php"><span>CyberSec</span></a></div>
              <p>Club de sécurité informatique</p>
            </div>
            <!-- logo 	  <img class="logo-img" src="logo.png" /> --> 
            <!-- menu edit in file "js/menu_html_block.js" -->
            <div class="menu"> 
              <script type="text/javascript" src="js/menu_html_block.js"></script> 
            </div>
            <!-- /menu -->
            <div class="clr"></div>
          </div>
        </div>
        <div class="clr"></div>
        <div class="now_slider">
          <div id="now_slider" style="width:100%; padding:0; min-height:100px; ">
            <div class="slider_box"> 
              <!--Start DC iOS Slider Start -->
              <div style="width:100%; margin:0 auto; padding:0px; position:relative;"> <!-- define slider container width (strict enforce) -->
                <div class="fluidHeight">
                  <div class="iossliderContainer">
                    <div class="iosSlider">
                      <div class="slider"> 
                        
                        <!-- Slide 1 -->
                        <div class="item item1">
                          <div class="inner">
                            <div class="selectorShadow"></div>
                                                      </div>
                        </div>
                        
                        <!-- Slide 2 -->
                        <div class="item item2">
                          <div class="inner">
                            <div class="selectorShadow"></div>
                           
                          </div>
                        </div>
                        
                        <!-- Slide 3 -->
                        <div class="item item3">
                          <div class="inner">
                            <div class="selectorShadow"></div>
                            
                          </div>
                        </div>
                        
                        <!-- Slide 4 -->
                        <div class="item item4">
                          <div class="inner">
                            <div class="selectorShadow"></div>
                            
                          </div>
                        </div>
                        
                        <!-- Slide 5 -->
                        <div class="item item5">
                          <div class="inner">
                            <div class="selectorShadow"></div>
                         
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /iosSlider --> 
                    
                    <!-- bullet selectors -->
                    <div class="slideSelectors">
                      <div class="item selected"></div>
                      <div class="item"></div>
                      <div class="item"></div>
                      <div class="item"></div>
                      <div class="item"></div>
                    </div>
                    
                    <!-- horizontal scrollbars -->
                    <div class="scrollbarContainer"></div>
                  </div>
                  <!-- /iossliderContainer --> 
                </div>
                <!-- /fluidHeight --> 
              </div>
              <!--End DC iOS Slider End --> 
            </div>
          </div>
          <div class="clr"></div>
        </div>
        <div class="clr"></div>
        <!-- now_page -->
        <div class="container">
          <div class="now_page">
            <div class="now_page_resize">
             
              <h1>CyberSec est un club de sécurité informatique crée au sein de l’école supérieure d'ingénieurs privée de gafsa, par des étudiants bénévoles. Ses membres ont pour but de concevoir, réaliser et lancer des activités embarquant des expériences qui rendent la vie estudiantine dynamique. 
				<span> La plateforme actuelle est structurée autour des plusieurs thématiques 
				regroupant les travaux de recherche et de valorisation du programme CyberSécurité. </span></h1> <div class="clr"></div>
            </div>
          </div>
        </div>
        <!-- /now_page -->
       
      </div>
     
     
        <div class="clr"></div>
      </div>

      <div class="clr"></div>
	   <div class="now_page_resize">
              <h1 class="acturecente" >Actualités les plus récentes</h1>
            </div>
 <div class="now_page">
           
          </div>
					 
	  <div class="container2">
            <?php
                include 'pages/'.$page.'.php';
            ?>
   </div>  
		</div>
  <div class="clr"></div>

      <!-- prefooter -->
      <div class="prefooter">
        <div class="prefooter_bg">
          <div class="container">
            <div class="prefooter_resize">
              <div class="fcol">
                <div class="dark small">
                  <h2><span class="h2_small"><em class="dark">Contactez nous</em></span></h2>
                </div>
               <p>
			   Ecole supérieure d'ingénieurs privée<br />
			   Campus universitaire Zarroug <br />

                  2112 Gafsa <br />
                  Tunisie <br />
                  
                  Phone: +(216) 25 075 512 <br />
						
                  contact: contact_cybersec@mail.com <br />
                </p>
                <!-- DC Facebook Likes Start -->
				<iframe src="http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/Esip.Cyber&send=false&layout=standard&width=200&show_faces=false&action=like&colorscheme=dark&font&height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:45px;" allowTransparency="true"></iframe>

                <!-- DC Facebook Likes End -->
              
              </div>
              <div class="fcol">
                <div class="dark small">
                  <h2><span class="h2_small"><em class="dark">Qui sommes-nous ?</em></span></h2>
                </div>
                <p>CyberSec est un club de sécurité informatique créé au sein de l’école supérieure d'ingénieurs privée de Gafsa, par des étudiants bénévoles. Ses membres ont pour but de concevoir, réaliser et lancer des activités embarquant des expériences qui rendent la vie estudiantine dynamique. <br />
                  <br />
              </div>
              <div class="fcol">
                <div class="dark small">
                  <h2><span class="h2_small"><em class="dark">Nos Sponseurs</em></span></h2>
				  <div class="esip_sp"><a target="_blank"  href="http://esip.tn/"><img src="images/esip.png"/></a></div>
                </div>
                <div class="clr"></div>
              </div>
                <div class="fcol last">
                <div class="dark small">
                  <h2><span class="h2_small"><em class="dark">Réseaux sociaux</em></span></h2>
                </div>
                <div class="social"> <a  target="_blank" href="https://www.facebook.com/Esip.CyberSec"><img src="images/spacer.gif" class="social1" /></a> <a target="_blank" href="https://www.youtube.com/channel/UCkfT-QG3-9xLfrH7cYCa1rA"><img src="images/spacer.gif" class="social3" /></a> <a target="_blank" href="https://twitter.com/EsipCybersec"><img src="images/spacer.gif" class="social4" /></a></div>

              </div>
               
            </div>
          </div>
          <div class="clr"></div>
          <div class="prefooter_resize_bottom"></div>
          <div class="clr"></div>
        </div>
        <div class="clr"></div>
      </div>
      <!-- /prefooter --> 
      <!-- footer -->
      <div class="footer">
        <div class="container">
          <div class="footer_resize">
            <p>Copyright &copy; 2016. All Rights Reserved <a href="index.html">CyberSec</a></p>
          </div>
        </div>
        <div class="clr"></div>
      </div>
      <!-- footer -->
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
