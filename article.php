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

<script type="text/javascript" src="js/scripts.js"></script>
<!-- Config User Intarface Box Import START -->
<script type="text/javascript" src="js/head_html_default_block.js"></script>
<script type="text/javascript" src="js/head_html_block.js"></script>
<!-- Config User Intarface Box Import END -->
<!-- Gallery Starts -->
<script type="text/javascript" src="js/gallery-masonry/jquery.masonry.min.js"></script>
<script type="text/javascript" src="js/gallery-masonry/modernizr-transitions.js"></script>
<script type="text/javascript" src="js/gallery-masonry/gallery-masonry.js"></script>
<!-- Gallery Ends -->
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
<!-- end select navigation -->

</head>
<body>
<div class="body_pattern">
  <div class="index_page">
    <div class="main">
      <div class="header">
	  		<div class="logo_cyber"><a href="index.php"> <img src="images/favicon.png" /></div>
			<div class="logo">
              <div><a href="index.php"><span>CyberSec</span></a></div>
              <p>Club de sécurité informatique</p>
            </div>

        <div class="container">
          <div class="header_resize"> 
            <!-- logo -->
            
            <!-- logo --> 
            <!-- menu edit in file "js/menu_html_block.js" -->
            <div class="menu"> 
              <script type="text/javascript" src="js/menu_html_block.js"></script> 
            </div>
            <!-- /menu -->
            <div class="clr"></div>
          </div>
          <div class="clr"></div>
          <!-- now_page -->
         <div class="taille">
		 <br /> 
	  <div class="container">
            <?php
                include 'pages/post.php';
            ?>
   </div> </div>

         

        </div>
      
        


        <!--Import jQuery before materialize.js-->
    
      </div>
      <div class="clr"></div>
      <!-- /content -->
      <div class="clr"></div>
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
            <p>Copyright &copy; 2016. All Rights Reserved <a href="index.php">CyberSec</a></p>
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
