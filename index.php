<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  //include connection file
error_reporting(0);  // using to hide undefine undex errors
session_start(); //start temp session until logout/browser closed

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>BonnyID | Online Food </title>
    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/parallax-slider.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">    

    	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

      <!-- start: CSS --> 
     

</head>

<body class="home">
    
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-light">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/logo3.png" height="40px alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="produk.php">Produk Kami<span class="sr-only"></span></a> </li>
                
                            
                           
							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">signup</a> </li>
                              <li class="nav-item"><a href="admin/index.php" class="nav-link active">admin</a> </li>';
							}
						else
							{
									//if user is login
									
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">Orderan Kamu</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">logout</a> </li>';
							}

						?>
							 
                        </ul>
						 
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- banner part starts -->

        <div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>3 Varian Rasa</h2>
				<p>Kami memiliki banyak Menu Produk Coklat Dan Keju, mulai dari Rasa Coklat Keju, Keju Susu Dan Keju Susu Untuk Menemani Cemilan Anda Sehari Hari.</p>
				<a href="#" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="images/produk0.png" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2>Coklat & Keju</h2>
				<p>Kami memiliki banyak Menu Produk Coklat Dan Keju, mulai dari Rasa Coklat Keju, Keju Susu Dan Keju Susu Untuk Menemani Cemilan Anda Sehari Hari.</p>
				<a href="#" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="images/produk 1.png" alt="image02" /></div>
			</div>
			<div class="da-slide">
				<h2>Toping Coklat</h2>
				<p>Kami memiliki banyak Menu Produk Coklat Dan Keju, mulai dari Rasa Coklat Keju, Keju Susu Dan Keju Susu Untuk Menemani Cemilan Anda Sehari Hari..</p>
				<a href="#" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="images/produk2.png" alt="image03" /></div>
			</div>
			<div class="da-slide">
				<h2>Coklat & Susu</h2>
				<p>Kami memiliki banyak Menu Produk Coklat Dan Keju, mulai dari Rasa Coklat Keju, Keju Susu Dan Keju Susu Untuk Menemani Cemilan Anda Sehari Hari.</p>
				<a href="#" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="images/produk3.png" alt="image03" /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>
		
	</div>
            <!--end:Hero inner -->

      
	  
	
        <!-- Popular block starts -->
        <section class="popular">
            <div class="container">
                <div class="title text-xs-center m-b-30">
                    <h2>Produk Kami</h2>
                    <p class="lead">Bonny Adalah Kue Brownise Dgn 3 Varian Rasa, Mulai Dari Toping Coklat, Keju susu dan coklat strowberi </p>
                </div>
                <div class="row">
				
				
				
						<?php 
						// fetch records from database to display popular first 3 dishes from table
						$query_res= mysqli_query($db,"select * from dishes LIMIT 3"); 
									      while($r=mysqli_fetch_array($query_res))
										  {
													
						                       echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
														<div class="food-item-wrap">
															<div class="figure-wrap bg-image" data-image-src="admin/Res_img/dishes/'.$r['img'].'">
																<div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
																<div class="review pull-right"><a href="#">198 reviews</a> </div>
															</div>
															<div class="content">
																<h5><a href="menu.php?res_id='.$r['rs_id'].'">'.$r['title'].'</a></h5>
																<div class="product-name">'.$r['slogan'].'</div>
																<div class="price-btn-block"> <span class="price">Rp.'.$r['price'].'</span> <a href="menu.php?res_id='.$r['rs_id'].'" class="btn theme-btn-dash pull-right">Belanja Sekarang</a> </div>
															</div>
															
														</div>
												</div>';
													
										  }
						
						
						?>
				
			 
                </div>
            </div>
        </section>
        <!-- Popular block ends -->
  
        <!-- Featured produk starts -->
          
      
     <!-- start: FOOTER -->
     <footer class="footer">
            <div class="container">
                <!-- top footer statrs -->
                <div class="row top-footer">
                    
                </div>
                <!-- top footer ends -->
                <!-- bottom footer statrs -->
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 payment-options color-gray">
                            <h5>Payment Options</h5>
                            <ul>
                                <li>
                                    <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/stripe.png" alt="Stripe"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 address color-gray">
                            <h5>Alamat</h5>
                            <p>Depan Kampus UIN Alauddin 2 samata Jalan Sultan Alauddin No.36 kec Sombaopu, </p>
                            <h5>Phone: <a href="tel:+08134575838">080 000012 222</a></h5> </div>
                        <div class="col-xs-12 col-sm-5 additional-info color-gray">
                            <h5>Informasi</h5>
                            <p>Nikmati Menu Produk Kami Dan Bisa Di pesan Melalui Online cash atau Pengantaran Ke rumah</p>
                        </div>
                    </div>
                </div>
                <!-- bottom footer ends -->
            </div>
        </footer>
        <!-- end:Footer -->
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
 <script src="js/jquery-1.8.2.js"></script> 
 <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>


<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script defer="defer" src="js/custom.js"></script>
<!-- end: Java Script -->
 
</body>

</html>