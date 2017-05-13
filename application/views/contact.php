<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Architect - Contact</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://dndgroup.kr/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://dndgroup.kr/assets/css/main.css" rel="stylesheet">
    
    <!-- Responsive CSS -->
    <link href="http://dndgroup.kr/assets/css/responsive.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="http://dndgroup.kr/assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
     <!-- Google Map -->
     <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://dndgroup.kr/controlls"><img src="http://dndgroup.kr/assets/img/logo.png" alt="" style="width: 150px;"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="http://dndgroup.kr/controlls">Home</a>
                    </li>
                    <li>
                        <a href="http://dndgroup.kr/controlls/career">Career</a>
                    </li>
                    <li>
                        <a href="http://dndgroup.kr/controlls/about_us">Work list</a>
                    </li>
                    <li>
                        <a href="http://dndgroup.kr/controlls/portfolio">Portfolio</a>
                    </li>
<!--                    <li>-->
<!--                        <a href="http://dndgroup.kr/controlls/news">News</a>-->
<!--                    </li>-->
                    <li>
                        <a href="http://dndgroup.kr/controlls/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /navbar-collapse -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /navigation -->
    
      <!-- Contact Banner -->
    <header class="contact-banner">
           <div class="container">
               <div class="row">
                   <div class="col-md-12">
                       <h2 class="main-text">Cont<span class="part">act</span></h2>
                          <div class="intro-text">get in touch</div>
                   </div>
               </div>    
           </div>
    </header>
    <!-- /contact banner -->


    <!-- Page Content -->
    <div class="container">
            
        <div class="row margin-top">
             <!-- Map Column -->
            <div class="col-md-4 col-sm-12">
                <!-- Embedded Google Map -->
                <!-- Google Map (adress on map can be changed in app.js file) -->
            <div id="map-canvas"></div>
        <!-- End Google Map -->
            </div>

            <!-- Contact Details Column -->
            <div class="col-md-3">
                <div class="contact-header">Contact Details</div>
                <p>
                    서울특별시 강남구 논현동 177-12 1층
                </p>
                <p><i class="fa fa-phone"></i>
                    02-6207-9908</p>
                <p> <i class="fa fa-envelope-o"> </i> 
                    <a href="mailto:dndgroup@daum.net">dndgroup@daum.net</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                     Monday - Friday: 9:00 AM to 6:00 PM</p>
<!--                <p><i class="fa fa-clock-o"></i> -->
<!--                     Saturday: 11:00 AM to 3:00 PM</p>-->
            </div>

            <!-- Contact Form -->
            <div class="col-md-5">
                <div class="contact-header">Send us a Message</div>
               <form method="post" action="http://dndgroup.kr/controlls/send/">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Name:</label>
                            <input type="text" name="Name" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email:</label>
                            <input type="email" name="Email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" name="Message" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="contact-btn btn">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /row -->
        <div class="margin-bottom"></div>
       
        
    </div>
    <!-- /container -->


     <!-- Footer -->
	 <div id="footer">
         <div class="footerTop">
             <div class="container">
                 <div class="row">
                     <!-- Footer Box1 -->
                     <div class="col-md-4 col-sm-3"><div class="logoBottom"><i class="fa fa-cubes"></i> architect</div></div>
                     <!-- Footer Box2 -->
                     <div class="col-md-4 col-sm-3">
                         <h5>Contact info</h5>
                         <p>서울특별시 강남구 논현동 177-12 1층 <br>
                             (177-12, Nonhyeon-Dong, Gangnam-Gu, Seoul, Korea)<br>
                             Tel: 02-6207-9908<br>
                             Fax: 070-4712-4831<br>
                             대표이사: 박남규</p>
                     </div>


                 </div><!-- /row -->
             </div><!-- /container -->
         </div><!-- /footerTop -->
		 <div class="footerBottom">
			 <div class="container">
				 <div class="row">
					 <div class="col-md-6 col-sm-6 col-xs-6">
						 <div class="footerMenu">
							 <ul>
								<li><a href="http://dndgroup.kr/controlls/about_us">Work list</a></li>
<!--								<li><a href="http://dndgroup.kr/controlls/news">News</a></li>-->
<!--								<li><a href="services1.html">Services</a></li>-->
								<li class="last"><a href="http://dndgroup.kr/controlls/portfolio">Portfolio</a></li>
							  </ul>
						 </div><!-- /footerMenu -->
					  </div>
					  <div class="col-md-6 col-sm-6 col-xs-6">
						  <div class="copy">Copyright © 2016. Designed by <span><a href="http://www.marijazaric.com/" target="_blank">creative simplicity</a></span>
                          </div>
					  </div>
				 </div><!-- /row -->
			 </div><!-- /container -->
		 </div><!-- /footerBottom -->
	 </div><!-- /footer -->


     <!-- jQuery Version 1.11.0 -->
     <script src="http://dndgroup.kr/assets/js/jquery-1.11.0.js"></script>

     <!-- Bootstrap Core JavaScript -->
     <script src="http://dndgroup.kr/assets/js/bootstrap.min.js"></script>
     
     <!-- Google map JS -->
     <script src="http://dndgroup.kr/assets/js/app.js"></script>
     
     <!-- Smooth scroll JS -->
     <script src="http://dndgroup.kr/assets/js/smoothscroll.js"></script>


</body>

</html>
