<?php
if(isset($_POST['Submit_Form']))
{
  if(!empty($_POST['subject']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['message']))
   {
        
		$to      = "info@prabhatresidency.com";
  		$subject = "Prabhat Residency - Enquiry";
		$message = "<html xmlns=\"http://www.w3.org/1999/xhtml\">
		<head>
		<title>Prabhat Residency</title>
		  </head>
		 <body>
			<h3>Enquiry Details:- </h3>
			<strong>Subject:- </strong>".trim($_POST['subject'])."<br>
			<strong>Name:- </strong>".trim($_POST['name'])."<br>
			<strong>Contact No:- </strong>".trim($_POST['phone'])."<br>
			<strong>Email Address:- </strong>".trim($_POST['email'])."<br>
			<strong>Message:- </strong>".addslashes(trim($_POST['message']))."<br><br>
		</body>
		</html>";
		
		//echo $message;
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: '.trim($_POST['name']).' <'.trim($_POST['email']).'>' . "\r\n";
  	   if(mail($to, $subject, $message, $headers))
         {
           $_SESSION['msg_action'] = "<div class='alert alert-success'><p><i class='fa fa-check' aria-hidden='true'></i>Thank you for posting your enquiry. We'll contact you as soon as possible.</div>";
         }
	  else { $_SESSION['msg_action'] = "<div class='alert alert-danger'>Error Sending Email..</div>"; }
		
	
   }
}
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Prabhat Residency</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Icofont CSS-->
    <link rel="stylesheet" href="css/icofont.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- bicon CSS-->
    <link rel="stylesheet" href="css/bicon.min.css">
    <!-- Flaticon CSS-->
    <link rel="stylesheet" href="css/font/flaticon.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="vendor/slider/css/nivo-slider.css" type="text/css">
    <link rel="stylesheet" href="vendor/slider/css/preview.css" type="text/css" media="screen">
    <!-- Magic popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernizr Js -->
    <script src="js/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
   
    <!-- Preloader End Here -->
    <!-- Main Body Area Start Here -->
    <div id="wrapper" class="wrapper">
    <?php $link=6; include("header.php");?>
    <!-- Banner Area Start Here -->
    <div class="bg-common-style banner-overlay section-space-banner" style="background-image: url(img/banner/layer-1412.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content-layout2 text-center">
                        <h1>contact us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End Here -->
    
    <!-- info Area End Here -->
    <div class="section-space-all">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-title-primary">
                        <h2>Send Us a Message</h2>
                    </div>
                    <div class="contact-form-layout4 text-center">
                    <p>For any information about our locations, Services, please feel free to fill out this convenient form. We'd love to hear from you on how we can improve ourselves to serve you better.</p>
                      <form method="post" action="" id="contact-form">
                        <div class="row">
                        <?php 
								  if(!empty($_SESSION['msg_action']))
								  echo $_SESSION['msg_action'];$_SESSION['msg_action']=NULL;
								 ?>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                <input type="text" class="form-control top-input" name="name" placeholder="Name" data-error="Name field is required" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                <input type="email" class="form-control top-input" name="email" placeholder="Email address" data-error="Email field is required" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                <input type="text" class="form-control top-input" name="subject" placeholder="Subject" data-error="Subject is required" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                <input type="text" class="form-control top-input" maxlength="10" name="phone" placeholder="Mobile No." data-error="Phone field is required" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                            </div>
                             <div class="col-lg-12">
                                <div class="form-group">
                                <textarea class="form-control message-box" name="message" placeholder="Message" data-error="Message field is required" required=""></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                <button class="btn-primary-fill-ghost" type="submit" name="Submit_Form">Submit</button>
                            </div>
                            </div>
                            <div class="col-lg-12">
                                <div class='form-response'></div>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info-layout3 shadow-equal">
                        <div class="title-box">
                            <h2>Contact details</h2>
                        </div>
                        <ul class="contact-address">
                            <li><i class="bi bi-location-pointer"></i><p>2-F-16, RAJASTHAN HOUSING BOARD COLONY, KUNHARI, KOTA, RAJASTHAN</p></li>
                            <li><i class="bi bi-phone"></i><p>+91 9214023385, +91 7023415753</p></li>
                            <li><i class="bi bi-envelop"></i><p>akhil18.mittal@gmail.com<br>info@prabhatresidency.com</p></li>
                        </ul>
                        <ul class="contact-social">
                            <li><a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- info Area End Here -->
    
    
    <!-- Map Area End Here -->
    <div class="">
        <div class="container">
            <div class="section-title-primary text-center">
                <h2>where to find us</h2>
              
            </div>
        </div>
        <div id="googleMap" style="width:100%; height:350px;"></div>
    </div>
    <!-- Map Area End Here -->
    
       
    <!-- Footer Area Start Here -->
    <?php include("footer.php");?>
    <!-- Footer Area End Here -->
    </div>
    <!-- Main Body Area End Here -->
    <!-- jquery-->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- WOW JS -->
    <script src="js/wow.min.js"></script>
    <!-- Nivo slider js -->
    <script src="vendor/slider/js/jquery.nivo.slider.js"></script>
    <script src="vendor/slider/home.js"></script>
    <!-- Owl Cauosel JS -->
    <script src="vendor/OwlCarousel/owl.carousel.min.js"></script>
    <!-- Meanmenu Js -->
    <script src="js/jquery.meanmenu.min.js"></script>
    <!-- Srollup js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- jquery.counterup js -->
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- Countdown js -->
    <script src="js/jquery.countdown.min.js"></script>
    <!-- Magic Popup js -->
    <script src="js/jquery.magnific-popup.min.js"></script> 
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0uuKeEkPfAo7EUINYPQs3bzXn7AabgJI"></script>
    <!-- Validator js -->
    <script src="js/validator.min.js" type="text/javascript"></script>   
    <!-- Custom Js -->
    <script src="js/main.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117157815-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117157815-1');
</script>

</body>

</html>