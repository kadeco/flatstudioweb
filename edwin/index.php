<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Jasa Pembuatan Aplikasi Dan Website di Kendal">
    <meta name="author" content="Flat Studio Web">
    <link rel="shortcut icon" href="../img/logos.png">

    <title> Flat Studio Web -Studio Programming</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/main.css" rel="stylesheet">
    <link href="../assets/css/icomoon.css" rel="stylesheet" >
    <link href="../assets/css/animate-custom.css" rel="stylesheet">


    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    
    <script src="../assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/js/modernizr.custom.js"></script>
	<script>
	$(function () { 
  $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');
});  

$( window ).scroll(function() {   
  // if($( window ).scrollTop() > 10){   scroll down abit and get the action   
  $(".progress-bar").each(function(){
    each_bar_width = $(this).attr('aria-valuenow');
    $(this).width(each_bar_width + '%');
  });
       
 //  }  
});
	
	$(".option").click(function(){
	$( this ).find( 'span' ).toggleClass( 'inactive' );
	$( this ).toggleClass('active');
	
});

$( "#btn-modal" ).click(function(){
	$( "#summary-list" ).empty();
	
	$( ".option" ).each(function() {
	  if( ! $( this ).children().hasClass( 'inactive' ))
	  	$( "#summary-list" ).append( "<li>" + $( this ).text() + "</li>" );

	});
	
	if( $( "#summary-list" ).children().length == 0 )
		$( "#summary-list" ).append( "<li>No options selected</li>" );
	
});

$( "#btn-reset" ).click( function(){
	$( ".option" ).each( function(){
		$( this ).children().addClass( 'inactive' );
		$( this ).removeClass( 'active' );

	});
});</script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
      <script src="../assets/js/respond.min.js"></script>
    <![endif]-->
<style>
.inactive { visibility: hidden; }
.active { background-color: #F7F7F9; }
.col-list .col-head { color: white; border-bottom: thick solid rgba(0, 0, 0, 0.2); border-radius: 5px 5px 0 0; margin-top: 45px; }
.col-list .col-head span { color: white; font-size: 3em; padding: 15px; border: thick solid white; border-radius: 50%; margin-top: -45px; background-color: #BE1E2D; }
.col-list .col-head h2 { margin-top: 7px; margin-bottom: 5px; font-size: 2em; font-weight: 700; }
.col-list .t1 .col-head { background-color: #FFB748; }
.col-list .t2 .col-head { background-color: #16CAC8; }
.col-list .t3 .col-head { background-color: #F87152; }
.col-list .t1 li { border-bottom: 1px solid rgba(255, 183, 72, .4); }
.col-list .t2 li { border-bottom: 1px solid rgba(22, 202, 200, .4); }
.col-list .t3 li { border-bottom: 1px solid rgba(248, 113, 82, .4) }
.col-list .t1 li:last-child,
.col-list .t2 li:last-child,
.col-list .t3 li:last-child { border-bottom: 0; }
.col-list li p { font-size: 1.2em; padding: 7px; margin: 0; }
.col-list li:hover { background-color: #F7F7F9; }
.option span { color: rgba(162, 213, 0, 1); margin-left: 7px; margin-right: 7px;} 
/*
Fade content bs-carousel with hero headers
Code snippet by maridlcrmn (Follow me on Twitter @maridlcrmn) for Bootsnipp.com
Image credits: unsplash.com
*/

/********************************/
/*       Fade Bs-carousel       */
/********************************/
.fade-carousel {
    position: relative;
    height: 100vh;
}
.fade-carousel .carousel-inner .item {
    height: 100vh;
}
.fade-carousel .carousel-indicators > li {
    margin: 0 2px;
    background-color: #f39c12;
    border-color: #f39c12;
    opacity: .7;
}
.fade-carousel .carousel-indicators > li.active {
  width: 10px;
  height: 10px;
  opacity: 1;
}

/********************************/
/*          Hero Headers        */
/********************************/
.hero {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 3;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);
}
.hero h1 {
    font-size: 6em;    
    font-weight: bold;
    margin: 0;
    padding: 0;
}

.ekstra-big-font {
    font-size: 230%;
}

.fade-carousel .carousel-inner .item .hero {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s; 
}
.fade-carousel .carousel-inner .item.active .hero {
    opacity: 1;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s;    
}

/********************************/
/*            Overlay           */
/********************************/
.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 2;
    background-color: #080d15;
    opacity: .7;
}

/********************************/
/*          Custom Buttons      */
/********************************/
.btn.btn-lg {padding: 10px 40px;}
.btn.btn-hero,
.btn.btn-hero:hover,
.btn.btn-hero:focus {
    color: #f5f5f5;
    background-color: #1abc9c;
    border-color: #1abc9c;
    outline: none;
    margin: 20px auto;
}

/********************************/
/*       Slides backgrounds     */
/********************************/
.fade-carousel .slides .slide-1, 
.fade-carousel .slides .slide-2,
.fade-carousel .slides .slide-3 {
  height: 100vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
.fade-carousel .slides .slide-1 {
  background-image: url(../img/background-img-3.jpg); 
}
.fade-carousel .slides .slide-2 {
  background-image: url(../img/background-img-3.jpg);
}
.fade-carousel .slides .slide-3 {
  background-image: url(../img/background-img-3.jpg);
}

/********************************/
/*          Media Queries       */
/********************************/
@media screen and (min-width: 980px){
    .hero { width: 980px; }    
}
@media screen and (max-width: 640px){
    .hero h1 { font-size: 4em; }    
}







<!--flag-->
.flag {
	width: 32px;
	height: 32px;
	background:url(img/flags.png) no-repeat
}
.flag.flag-id {background-position: 0 -192px}
.flag.flag-us {background-position: -416px -416px}



<!--polling-->
.tooltip{ 
  position:relative;
  float:right;
}
.tooltip > .tooltip-inner {background-color: #eebf3f; padding:5px 15px; color:rgb(23,44,66); font-weight:bold; font-size:13px;}
.popOver + .tooltip > .tooltip-arrow {    border-left: 5px solid transparent; border-right: 5px solid transparent; border-top: 5px solid #eebf3f;}

section{
  margin:140px auto; 
  height:1000px;
}
.progress{
  border-radius:0;
  overflow:visible;
}
.progress-bar{
   background:rgb(23,44,60); 
  -webkit-transition: width 1.5s ease-in-out;
  transition: width 1.5s ease-in-out;
}

</style>

  </head>
  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
  
  	<div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm" href="#home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#home" class="smoothScroll">Home</a></li>
			<li> <a href="#about" class="smoothScroll"> About</a></li>
			<li> <a href="#services" class="smoothScroll"> Services</a></li>
			<li> <a href="#team" class="smoothScroll"> Team</a></li>
			<li> <a href="#portfolio" class="smoothScroll">Portofolio</a></li>
			<li> <a href="#contact" class="smoothScroll"> Contact</a></li>
	  </ul>
	  <ul class="nav navbar-nav navbar-right">
	     <li> <a href="http://www.gudangsoft.net/"  class="smoothScroll"><b>Flat Studio Hosting <span class="glyphicon glyphicon-shopping-cart"></span></b></a></li>
              		        <li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			      <li class="flag flag-id" title="Bahasa Indonesia"></li>
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						   <a href="http://flatstudioweb.com/"><li class="flag flag-id" title="Bahasa Indonesia"></li></a>
						   <a href="http://flatstudioweb.com/"><li class="flag flag-us" title="English(US)"></li></a>
					</ul>
			      </li>   
			        </li>          
            

        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>

  
 
		
		
		
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
	  		<h1><font color="#428bca"><span class="icon icon-shield"></span></font></h1>
            <h1><font color="white">Hello I am Edwin </font></h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <a href="#team"><button class="btn btn-primary btn-lg" role="button">Let's Join Us</button></a>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
		    <h1><font color="#428bca"><span class="icon icon-shield"></span></font></h1>
            <h1><font color="white">I am Programmer</font></h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>       
        <a href="#portfolio"><button class="btn btn-primary btn-lg" role="button">See all portfolio</button></a>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
	  		<h1><font color="#428bca"><span class="icon icon-shield"></span></font></h1>
            <h1><font color="white">I am Consultant</font></h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <a href="#contact"><button class="btn btn-primary btn-lg" role="button">See all contact</button></a>
      </div>
    </div>
  </div> 
</div>
		


<!-- section -->
			<!-- ================ -->
			<div id="about" name="about">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
							<center>
							<img src="../admin/images/team01_1_1.jpg" class="img-responsive img-circle"	></center>
							</div>
							<div class="col-md-6">
								<h2>About Me</h2>
								<p>Hello, I am Edwin Setiawan, A freelance Web And Mobile Developer. Let's see my poftofolio below to get know what i do and what my job.</p>
													
													<div class="barWrapper">
													 <span class="progressText"><B>JAVA (Android Studio)</B></span>
													<div class="progress">
													  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
														 <span  class="popOver" data-toggle="tooltip" data-placement="top" title="80%"> </span>  
													  </div>
													</div>
													</div>
													<div class="barWrapper">
													 <span class="progressText"><B>JAVASCRIPT (React)</B></span>
													<div class="progress">
													  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
															 <span  class="popOver" data-toggle="tooltip" data-placement="top" title="55%"> </span>  
													  </div>
													</div>
													</div>
													<div class="barWrapper">
													 <span class="progressText"><B>MYSQL</B></span>
													<div class="progress">
													  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
														  <span  class="popOver" data-toggle="tooltip" data-placement="top" title="85%"> </span>  
													  </div>
													</div>
													</div>
													  <div class="barWrapper">
													 <span class="progressText"><B>PHP (Laravel / Native)</B></span>
													<div class="progress">
													  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
														  <span  class="popOver" data-toggle="tooltip" data-placement="top" title="90%"> </span> 
													  </div>
													</div>
													</div>
								</div>
							</div>
						</div>
						
								<!--what i do-->
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<h2>What I do?</h2>
											<p>I like joined a community developer grup, my experience in programming at least 4 years. I live my client and will keeping that be like relation brother. Call me i stand <b>24/7 Hours</b>. My support is <strong>free.</strong> hope you enjoy with my work. 
											I have done hundred project from my client, and they say i good for this job, i develop project like </p>
											<i class="glyphicon glyphicon-saved"></i> Website Development</li><br>
											<i class="glyphicon glyphicon-saved"></i> Mobile Application</li><br>
											<i class="glyphicon glyphicon-saved"></i> Fix Bug in your website</li><br><br><br>
											<p>Let's see about my portofolio below. Thankyou for looking my CV, hope you on the bless.</p>
											
										</div>
									</div>
								</div>
								<!--what i do-->
						
					</div>
			</div>
			<!-- section end -->
									
							
							
						
			<!-- section start -->
			<!-- ================ -->
			<div id="services" name="services">
				<div id="greywrap">
					<div class="pv-40">
						<div class="container">
							<div class="row">
								<div class="col-md-4">
									<div class="feature-box-2">
										<div class="body">
										   
											<h2 class="title">EXPERIENCE</h2>
											<div class="ekstra-big-font">
													<h1 class="ekstra-big-font">6</h1>
											</div>
											<p>YEARS </p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="feature-box-2">
										<div class="body">
										   
											<h2 class="title">RATE</h2>
											<div class="ekstra-big-font">
													<h1 class="ekstra-big-font">18</h1>
											</div>
											<p> <sup>.$/</sup>PER HOUR </p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="feature-box-2">
										<div class="body">
										   
											<h2 class="title">WORK</h2>
												<div class="ekstra-big-font">
													<h1 class="ekstra-big-font">189</h1>
												</div>
											<p>PROJECTS DONE </p>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- section end -->
				

				
				
				
				
				
				
				
				
				
				
				
				
				
		

		<!-- ==== PORTFOLIO ==== -->
		<div class="container" id="portfolio" name="portfolio">
		<br>
			<div class="row">
				<br>
				<h1 class="centered"><span class="img-responsive"><img src="../img/portofolio-baru.png"></span><br>MY PORTOFOLIO</h1>
				<hr>
				<br>
				<br>
			</div><!-- /row -->
			<div class="container">
			<div class="row">	
						

														<?php

														include"../admin/koneksi.php";
														$sqlAmbilPortotfolioAtas="SELECT * FROM portofolio";
														$queryAmbilPortotfolioAtas = mysqli_query($con, $sqlAmbilPortotfolioAtas);
														
														while($data=mysqli_fetch_array($queryAmbilPortotfolioAtas))
														{
															?>
																<!-- PORTFOLIO IMAGE 1 -->
				<div class="col-md-4 ">
			    	<div class="grid mask">
						<figure>
							<img class="img-responsive" src="../admin/images/<?php echo"$data[gambar]";?>" alt="">
							<figcaption>
								<h5><?php echo"$data[nama]";?> </h5>
								<a data-toggle="modal" href="#myModal<?php echo"$data[kode]";?>" class="btn btn-primary btn-lg" target="_blank">Lihat</a>
							</figcaption><!-- /figcaption -->
						</figure><!-- /figure -->
			    	</div><!-- /grid-mask -->
				</div><!-- /col -->
				
				
						 <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
						      a modal for each of your projects. -->
						      
						  <div class="modal fade" id="myModal<?php echo"$data[kode]";?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title"><?php echo"$data[nama]";?></h4>
						        </div>
						        <div class="modal-body">
						          <p><img class="img-responsive" src="../admin/images/<?php echo"$data[gambar]";?>" alt=""></p>
						          <p><?php //echo"$data[keterangan]";?></p>
						          <p><b><a href="<?php echo"$data[alamat]";?>" target="_blank">Visit Site</a></b></p>
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        </div>
						      </div><!-- /.modal-content -->
						    </div><!-- /.modal-dialog -->
						  </div><!-- /.modal -->
														<?php
														}
														?>
									
					
									
									
									
									
									
									

          </div>
          </div>
          </div>
          <!-- section -->

		<div id="greywrap">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 centered">
						<img class="img-responsive" src="../assets/img/macbook.png" align="">
					</div>
					<div class="col-lg-4">
						<h2>Hire me!</h2>
						<p>Do you want to be one of use? Sure you want, because we are an awesome team!. Here we work hard every day to craft pixel perfect sites.</p>
						<p><a href="#contact" class="btn btn-primary" >Contact Me</a></p>
					</div>					
				</div><!-- row -->
			</div>
			<br>
			<br>
		</div><!-- greywrap -->

		<div class="container" id="contact" name="contact">
			<div class="row">
			<br>
				<h1 class="centered">THANKS FOR VISITING ME</h1>
				<hr>
				<br>
				<br>
				<div class="col-lg-4">
					<h3>Contact Information</h3>
					<p><span class="icon icon-home"></span> Lokasi Jl. KH Ahmad Dahlan 46 Weleri<br/>
						<span class="icon icon-phone"></span> Galih Yuriko (Marketing) (+62)898223232312 <br/>
						<span class="icon icon-mobile"></span> Edwin Setiawan (For GSM/WA) (+62)89613913468 <br/>
						<span class="icon icon-envelop"></span> <a href="#"> ask@flatstudioweb.com</a> <br/>
						<span class="icon icon-twitter"></span> <a href="#"> @FlatStudioWeb </a> <br/>
						<span class="icon icon-facebook"></span> <a href="#"> Flat Studio Web </a> <br/>
					</p>
				</div><!-- col -->
				
				
				<div class="col-lg-4">
					<h3>Call Me</h3>
					<img src="../img/card-name-edwin.jpg" height="200dp" width="400dp" >
					
				</div><!-- col -->

			</div><!-- row -->
	
		</div><!-- container -->

				
		<div class="section-divider divider2">
            <h1></h1>
				<p><br><br><br></p>
		</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		

	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/retina.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="../assets/js/jquery-func.js"></script>
  </body>
</html>
