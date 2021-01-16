<?php

include("msg-func.php");

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
<!-- Map Settings Start -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
/*
var gmap;
function initialize() {
    var myOptions = {
   	 zoom: 15,
   	 center: new google.maps.LatLng(34.431202, 8.775698), // google map location to show
   	 mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    gmap = new google.maps.Map(document.getElementById('gmap_contact'),myOptions);
}
google.maps.event.addDomListener(window, 'load', initialize); */

//--> Configuration de l'icône personnalisée



function initMap() {
  var myLatLng = {lat: 34.429517, lng: 8.760330}; 

  var map = new google.maps.Map(document.getElementById('gmap_contact'), {
    zoom: 16,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'EsipCyberSec',
  });
}

    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxohrHVGlFlVR4qSacFjdpqwrEsCdo5LM&signed_in=true&callback=initMap">
		</script>
		

</script>
<!-- Map Settings End -->
<!-- start select navigation -->
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

        <div class="container">
          <div class="header_resize"> 
            <!-- logo -->
            <div class="logo">
              <div><a href="index.php"><span>CyberSec</span></a></div>
              <p>Club de sécurité informatique</p>
            </div>
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
          <div class="now_page">
            <div class="now_page_resize">
              <h1>Contactez nous<span></span></h1>
              <div class="clr"></div>
            </div>
          </div>
        </div>
        <!-- /now_page -->
        
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
      <div class="content">
        <div class="container">
          <div class="content_resize" id="gallery">
            <div class="content_page">
              <div class="columns1">
                <div class="two-thirds column">
                  <div class="centercol">
                    <div class="clr"></div>
                    <div class="content_full_size">
                      <div class="maps_view" style="width:100%; height:350px; float:left; position:relative;padding: 3px;
              	background: #151515; <!--F4F4F4-->
              	border: 1px solid white; margin-bottom: 15px;">
                        <div id="gmap_contact" style="width:100%; height:350px;"></div>
                        <div class="clr"></div>
                      </div>
                      <div class="sep_clear small"></div>
                      <br />
                      <p>Les membres du club se réunissent chaque samedi de 08h30 à 13h00 dans notre local.<br>N’hésitez pas à nous contacter pour toute information complémentaire.</p>
                    </div>
                    <div class="sep_clear"></div>
                    <div class="h2_background">
                      <h2><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Veuillez remplir le formulaire ci-dessous pour nous contacter :</span></h2>
                    </div>
 				  <?php
                if(isset($_POST['submit'])){
                    $name = htmlspecialchars(trim($_POST['name']));
                    $email = htmlspecialchars(trim($_POST['email']));
                    $subject = htmlspecialchars(trim($_POST['subject']));
                    $message = htmlspecialchars(trim($_POST['message']));
                    $errors = [];

                    if(empty($name) || empty($email) || empty($subject)|| empty($message)){
                        $errors['empty'] = "Tous les champs n'ont pas été remplis";
                    }else{
                        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                            $errors['email'] = "L'adresse email n'est pas valide";
                        }
                    }


                    if(!empty($errors)){
                        ?>
                            <div class="msgerreur">
                                <div class="card-content white-text">
                                    <?php
                                        foreach($errors as $error){
                                            echo $error."<br/>";
                                        }
                                    ?>
                                </div>
                            </div>
                        <?php
                    }else{
                        messages($name,$email,$subject,$message);
                            ?>
                            <div class="msgvalide">
                                <div class="card-content white-text">
                                    <?php
                                       
                                            echo "Merci ! Votre message a été envoyé. Nous y répondrons dès que possible.";
                                        
                                    ?>
                                </div>
                            </div>
                        <?php
                    
                    }

                }

            ?>

                    <div class="two-thirds column">
                  <div class="centercol">
                    <div  class="clr"></div>
                    <form class="contact-area"   method="post">
                      <ol>
                        <li>
                          <label for="name">Nom:</label>
                          <input id="name" name="name" class="text"/>
                        </li>
                        <li>
                          <label for="email">Email:</label>
                          <input id="email" name="email" class="text" />
                        </li>
                        <li>
                          <label for="subject">Sujet:</label>
                          <input id="subject" name="subject" class="text"/>
                        </li>
                        <li>
                          <label for="message">Message:</label>
                          <textarea id="message" name="message" rows="6" cols="50" ></textarea>
                        </li>
                        <li class="buttons">
                          <input type="submit" name="submit" value="Envoyer" class="submit-button" />
                          <!--<input type="image" name="imageField" id="imageField" src="images/sub.png" class="send" />-->
                          <div class="clr"></div>
                        </li>
                      </ol>
                    </form>
                    <div class="clr"></div>
                  </div>
                </div>
                    </div>
                </div>  
                <div class="one-third column">
                  <div class="sidebar last">
                    <div class="sidebar_content">
                      <div class="sidebar_pop_posts">
                        <div class="sidebar_bg">                       
                          <div class="clr"></div>
                          <div class="sidebar_bg_small">
						 
					Ecole supérieure d'ingénieurs privée<br />
					Campus universitaire Zarroug <br />

					2112 Gafsa <br />
					Tunisie <br />
					<br />
					Phone: +(216) 25 075 512 <br />
					contact: contact_cybersec@mail.com <br />
					</p>
                            <!-- Define your facebook page url: likebox.php?href=http://www.facebook.com/page-or-username -->
                            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http://www.facebook.com/Esip.CyberSec&width=240&height=258&colorscheme=light&show_faces=true&border_color&stream=false&header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:95%; height:220px;" allowTransparency="true"></iframe>
                            <!-- DC Facebook Likes Box End --> 
                            
                             </div>
                         
                           
                         
                        </div>
                      </div>
					  
                      <div class="sep_clear"></div>
<!--               
					 <div class="sidebar_text">
                        <div class="sidebar_bg">
                          <div class="h2_background">
                            <h2><span>Text Widget</span></h2>
                          </div>
						  
                          <div class="clr"></div>
                          <div class="sidebar_bg_small">
                            <div class="pic img_hover_box 1_ico"><a href="#" class="prettyPhoto" rel="prettyPhoto[sb]"> <img src="http://cdn.pimg.co/p/300x154/e3352/fff/img.png"  alt="Image" />
                              <div class="img_hover_overlay">
                                <div class="r_plus"></div>
                              </div>
                              </a></div>
                            <div class="sep_clear small"></div>
                            <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                            <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                          </div>
						 
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
                <div class="clr"></div>
              </div>
              <div class="clr"></div>
            </div>
            <div class="clr"></div>
          </div>
        </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
      <!-- /content -->
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
