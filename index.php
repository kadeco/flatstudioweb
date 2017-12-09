<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Jasa Pembuatan Aplikasi Dan Website di Kendal">
    <meta name="author" content="Flat Studio Web">
    <link rel="shortcut icon" href="img/logos.png">

    <title> Flat Studio Web -Studio Programming</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link href="assets/css/animate-custom.css" rel="stylesheet">


    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    
    <script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
	<script>$(".option").click(function(){
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
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
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
  background-image: url(img/background-img-3.jpg); 
}
.fade-carousel .slides .slide-2 {
  background-image: url(img/background-img-6.jpg);
}
.fade-carousel .slides .slide-3 {
  background-image: url(img/background-img-7.jpg);
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









.flag {
	width: 32px;
	height: 32px;
	background:url(img/flags.png) no-repeat
}

.flag.flag-ad {background-position: -32px 0}
.flag.flag-ae {background-position: -64px 0}
.flag.flag-af {background-position: -96px 0}
.flag.flag-ag {background-position: -128px 0}
.flag.flag-ai {background-position: -160px 0}
.flag.flag-al {background-position: -192px 0}
.flag.flag-am {background-position: -224px 0}
.flag.flag-an {background-position: -256px 0}
.flag.flag-ao {background-position: -288px 0}
.flag.flag-ar {background-position: -320px 0}
.flag.flag-as {background-position: -352px 0}
.flag.flag-at {background-position: -384px 0}
.flag.flag-au {background-position: -416px 0}
.flag.flag-aw {background-position: -448px 0}
.flag.flag-az {background-position: 0 -32px}
.flag.flag-ba {background-position: -32px -32px}
.flag.flag-bb {background-position: -64px -32px}
.flag.flag-bd {background-position: -96px -32px}
.flag.flag-be {background-position: -128px -32px}
.flag.flag-bf {background-position: -160px -32px}
.flag.flag-bg {background-position: -192px -32px}
.flag.flag-bh {background-position: -224px -32px}
.flag.flag-bi {background-position: -256px -32px}
.flag.flag-bj {background-position: -288px -32px}
.flag.flag-bm {background-position: -320px -32px}
.flag.flag-bn {background-position: -352px -32px}
.flag.flag-bo {background-position: -384px -32px}
.flag.flag-br {background-position: -416px -32px}
.flag.flag-bs {background-position: -448px -32px}
.flag.flag-bt {background-position: 0 -64px}
.flag.flag-bw {background-position: -32px -64px}
.flag.flag-by {background-position: -64px -64px}
.flag.flag-bz {background-position: -96px -64px}
.flag.flag-ca {background-position: -128px -64px}
.flag.flag-cd {background-position: -160px -64px}
.flag.flag-cf {background-position: -192px -64px}
.flag.flag-cg {background-position: -224px -64px}
.flag.flag-ch {background-position: -256px -64px}
.flag.flag-ci {background-position: -288px -64px}
.flag.flag-ck {background-position: -320px -64px}
.flag.flag-cl {background-position: -352px -64px}
.flag.flag-cm {background-position: -384px -64px}
.flag.flag-cn {background-position: -416px -64px}
.flag.flag-co {background-position: -448px -64px}
.flag.flag-cr {background-position: 0 -96px}
.flag.flag-cu {background-position: -32px -96px}
.flag.flag-cv {background-position: -64px -96px}
.flag.flag-cy {background-position: -96px -96px}
.flag.flag-cz {background-position: -128px -96px}
.flag.flag-de {background-position: -160px -96px}
.flag.flag-dj {background-position: -192px -96px}
.flag.flag-dk {background-position: -224px -96px}
.flag.flag-dm {background-position: -256px -96px}
.flag.flag-do {background-position: -288px -96px}
.flag.flag-dz {background-position: -320px -96px}
.flag.flag-ec {background-position: -352px -96px}
.flag.flag-ee {background-position: -384px -96px}
.flag.flag-eg {background-position: -416px -96px}
.flag.flag-eh {background-position: -448px -96px}
.flag.flag-er {background-position: 0 -128px}
.flag.flag-es {background-position: -32px -128px}
.flag.flag-et {background-position: -64px -128px}
.flag.flag-fi {background-position: -96px -128px}
.flag.flag-fj {background-position: -128px -128px}
.flag.flag-fm {background-position: -160px -128px}
.flag.flag-fo {background-position: -192px -128px}
.flag.flag-fr {background-position: -224px -128px}
.flag.flag-ga {background-position: -256px -128px}
.flag.flag-gb {background-position: -288px -128px}
.flag.flag-gd {background-position: -320px -128px}
.flag.flag-ge {background-position: -352px -128px}
.flag.flag-gg {background-position: -384px -128px}
.flag.flag-gh {background-position: -416px -128px}
.flag.flag-gi {background-position: -448px -128px}
.flag.flag-gl {background-position: 0 -160px}
.flag.flag-gm {background-position: -32px -160px}
.flag.flag-gn {background-position: -64px -160px}
.flag.flag-gp {background-position: -96px -160px}
.flag.flag-gq {background-position: -128px -160px}
.flag.flag-gr {background-position: -160px -160px}
.flag.flag-gt {background-position: -192px -160px}
.flag.flag-gu {background-position: -224px -160px}
.flag.flag-gw {background-position: -256px -160px}
.flag.flag-gy {background-position: -288px -160px}
.flag.flag-hk {background-position: -320px -160px}
.flag.flag-hn {background-position: -352px -160px}
.flag.flag-hr {background-position: -384px -160px}
.flag.flag-ht {background-position: -416px -160px}
.flag.flag-hu {background-position: -448px -160px}
.flag.flag-id {background-position: 0 -192px}
.flag.flag-ie {background-position: -32px -192px}
.flag.flag-il {background-position: -64px -192px}
.flag.flag-im {background-position: -96px -192px}
.flag.flag-in {background-position: -128px -192px}
.flag.flag-iq {background-position: -160px -192px}
.flag.flag-ir {background-position: -192px -192px}
.flag.flag-is {background-position: -224px -192px}
.flag.flag-it {background-position: -256px -192px}
.flag.flag-je {background-position: -288px -192px}
.flag.flag-jm {background-position: -320px -192px}
.flag.flag-jo {background-position: -352px -192px}
.flag.flag-jp {background-position: -384px -192px}
.flag.flag-ke {background-position: -416px -192px}
.flag.flag-kg {background-position: -448px -192px}
.flag.flag-kh {background-position: 0 -224px}
.flag.flag-ki {background-position: -32px -224px}
.flag.flag-km {background-position: -64px -224px}
.flag.flag-kn {background-position: -96px -224px}
.flag.flag-kp {background-position: -128px -224px}
.flag.flag-kr {background-position: -160px -224px}
.flag.flag-kw {background-position: -192px -224px}
.flag.flag-ky {background-position: -224px -224px}
.flag.flag-kz {background-position: -256px -224px}
.flag.flag-la {background-position: -288px -224px}
.flag.flag-lb {background-position: -320px -224px}
.flag.flag-lc {background-position: -352px -224px}
.flag.flag-li {background-position: -384px -224px}
.flag.flag-lk {background-position: -416px -224px}
.flag.flag-lr {background-position: -448px -224px}
.flag.flag-ls {background-position: 0 -256px}
.flag.flag-lt {background-position: -32px -256px}
.flag.flag-lu {background-position: -64px -256px}
.flag.flag-lv {background-position: -96px -256px}
.flag.flag-ly {background-position: -128px -256px}
.flag.flag-ma {background-position: -160px -256px}
.flag.flag-mc {background-position: -192px -256px}
.flag.flag-md {background-position: -224px -256px}
.flag.flag-me {background-position: -256px -256px}
.flag.flag-mg {background-position: -288px -256px}
.flag.flag-mh {background-position: -320px -256px}
.flag.flag-mk {background-position: -352px -256px}
.flag.flag-ml {background-position: -384px -256px}
.flag.flag-mm {background-position: -416px -256px}
.flag.flag-mn {background-position: -448px -256px}
.flag.flag-mo {background-position: 0 -288px}
.flag.flag-mq {background-position: -32px -288px}
.flag.flag-mr {background-position: -64px -288px}
.flag.flag-ms {background-position: -96px -288px}
.flag.flag-mt {background-position: -128px -288px}
.flag.flag-mu {background-position: -160px -288px}
.flag.flag-mv {background-position: -192px -288px}
.flag.flag-mw {background-position: -224px -288px}
.flag.flag-mx {background-position: -256px -288px}
.flag.flag-my {background-position: -288px -288px}
.flag.flag-mz {background-position: -320px -288px}
.flag.flag-na {background-position: -352px -288px}
.flag.flag-nc {background-position: -384px -288px}
.flag.flag-ne {background-position: -416px -288px}
.flag.flag-ng {background-position: -448px -288px}
.flag.flag-ni {background-position: 0 -320px}
.flag.flag-nl {background-position: -32px -320px}
.flag.flag-no {background-position: -64px -320px}
.flag.flag-np {background-position: -96px -320px}
.flag.flag-nr {background-position: -128px -320px}
.flag.flag-nz {background-position: -160px -320px}
.flag.flag-om {background-position: -192px -320px}
.flag.flag-pa {background-position: -224px -320px}
.flag.flag-pe {background-position: -256px -320px}
.flag.flag-pf {background-position: -288px -320px}
.flag.flag-pg {background-position: -320px -320px}
.flag.flag-ph {background-position: -352px -320px}
.flag.flag-pk {background-position: -384px -320px}
.flag.flag-pl {background-position: -416px -320px}
.flag.flag-pr {background-position: -448px -320px}
.flag.flag-ps {background-position: 0 -352px}
.flag.flag-pt {background-position: -32px -352px}
.flag.flag-pw {background-position: -64px -352px}
.flag.flag-py {background-position: -96px -352px}
.flag.flag-qa {background-position: -128px -352px}
.flag.flag-re {background-position: -160px -352px}
.flag.flag-ro {background-position: -192px -352px}
.flag.flag-rs {background-position: -224px -352px}
.flag.flag-ru {background-position: -256px -352px}
.flag.flag-rw {background-position: -288px -352px}
.flag.flag-sa {background-position: -320px -352px}
.flag.flag-sb {background-position: -352px -352px}
.flag.flag-sc {background-position: -384px -352px}
.flag.flag-sd {background-position: -416px -352px}
.flag.flag-se {background-position: -448px -352px}
.flag.flag-sg {background-position: 0 -384px}
.flag.flag-si {background-position: -32px -384px}
.flag.flag-sk {background-position: -64px -384px}
.flag.flag-sl {background-position: -96px -384px}
.flag.flag-sm {background-position: -128px -384px}
.flag.flag-sn {background-position: -160px -384px}
.flag.flag-so {background-position: -192px -384px}
.flag.flag-sr {background-position: -224px -384px}
.flag.flag-st {background-position: -256px -384px}
.flag.flag-sv {background-position: -288px -384px}
.flag.flag-sy {background-position: -320px -384px}
.flag.flag-sz {background-position: -352px -384px}
.flag.flag-tc {background-position: -384px -384px}
.flag.flag-td {background-position: -416px -384px}
.flag.flag-tg {background-position: -448px -384px}
.flag.flag-th {background-position: 0 -416px}
.flag.flag-tj {background-position: -32px -416px}
.flag.flag-tl {background-position: -64px -416px}
.flag.flag-tm {background-position: -96px -416px}
.flag.flag-tn {background-position: -128px -416px}
.flag.flag-to {background-position: -160px -416px}
.flag.flag-tr {background-position: -192px -416px}
.flag.flag-tt {background-position: -224px -416px}
.flag.flag-tv {background-position: -256px -416px}
.flag.flag-tw {background-position: -288px -416px}
.flag.flag-tz {background-position: -320px -416px}
.flag.flag-ua {background-position: -352px -416px}
.flag.flag-ug {background-position: -384px -416px}
.flag.flag-us {background-position: -416px -416px}
.flag.flag-uy {background-position: -448px -416px}
.flag.flag-uz {background-position: 0 -448px}
.flag.flag-va {background-position: -32px -448px}
.flag.flag-vc {background-position: -64px -448px}
.flag.flag-ve {background-position: -96px -448px}
.flag.flag-vg {background-position: -128px -448px}
.flag.flag-vi {background-position: -160px -448px}
.flag.flag-vn {background-position: -192px -448px}
.flag.flag-vu {background-position: -224px -448px}
.flag.flag-ws {background-position: -256px -448px}
.flag.flag-ye {background-position: -288px -448px}
.flag.flag-za {background-position: -320px -448px}
.flag.flag-zm {background-position: -352px -448px}
.flag.flag-zw {background-position: -384px -448px}




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
            <h1><font color="grey">Flat Studio Web</font></h1>        
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
            <h1><font color="grey">We are creative</font></h1>        
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
            <h1><font color="grey">We are smart</font></h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <a href="#contact"><button class="btn btn-primary btn-lg" role="button">See all contact</button></a>
      </div>
    </div>
  </div> 
</div>
		
		
		
		<!-- ==== GREYWRAP ==== -->
		<div id="greywrap">
			<div class="row">
				<div class="col-lg-4 callout">
					<span class="img-responsive"><img src="img/website.png"></span>
					<h2>Website Development</h2>
					<p>We are a trusted website developer by building systems and applications using framework and native by having their own CMS. </p>
				</div><!-- col-lg-4 -->
					
				<div class="col-lg-4 callout">
					<span class="img-responsive"><img src="img/android.png"></span>
					<h2>Mobile Application</h2>
					<p>The Mobile app that we create has always been the user's impression since it is user-friendly and UI / UX is tailored to the target usage.  </p>
				</div><!-- col-lg-4 -->	
				
				<div class="col-lg-4 callout">
					<span class="img-responsive"><img src="img/pensil.png"></span>
					<h2>UI/UX Design</h2>
					<p>We believe that good design invites trust and customer interest, for that we always combine good design with products.   </p>
				</div><!-- col-lg-4 -->	
			</div><!-- row -->
		</div><!-- greywrap -->
		


<!-- section -->
			<!-- ================ -->
			<div id="about" name="about">
			<section class="pv-30">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h2>What We <strong>Offer</strong></h2>
							<div class="separator-2"></div>
							<p>We give full service consult for customer about website and programming <b>24/7 Hours</b>. Our support is <strong>free</strong> just for customer in reqruitment below.</p>
								<i class="glyphicon glyphicon-saved"></i> Website Development</li><br>
								<i class="glyphicon glyphicon-saved"></i> Mobile Application</li><br>
								<i class="glyphicon glyphicon-saved"></i> Bug in your website</li><br><br><br>
							<p>Let's see about our story in video beside <strong>Flat Studio Profile</strong>, and download our application in your phone. Dont forget give me a rate in Playstore and AppStore. </p>
							<a href="page-about.html" class="btn btn-primary"><i class="icon-users"></i> Learn More</a>
						</div>
						<div class="col-md-6">
							<br>
							<div role="tabpanel">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs style-1" role="tablist">
									<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="icon-heart pr-10"></i> About Us</a></li>
									<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">We Love</a></li>
									<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Our Competition</a></li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="home">
										<div class="overlay-container overlay-visible">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/5Dm4xwAX0EQ" frameborder="0" allowfullscreen></iframe>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane fade" id="profile">
										<div class="embed-responsive embed-responsive-16by9">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/5Dm4xwAX0EQ" frameborder="0" allowfullscreen></iframe>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane fade" id="messages">
									    	<iframe width="560" height="315" src="https://www.youtube.com/embed/5ouAt5m6Xvk?list=PLujzg_yNM-WsxUmmUlyZb8SPs0MWA_hWG" frameborder="0" allowfullscreen></iframe>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
			</section>
			</div>
			<!-- section end -->

<!-- section start -->
			<!-- ================ -->
			<div id="services" name="services">
			<div id="greywrap">
			<div class="pv-40">
				<div class="container">
					<h2 class="text-center">Of Course We Also Provide</h2>
					<div class="separator"></div>
					<div class="row mt-20">
						<div class="col-md-6">
							<div class="feature-box-2 right">
								<div class="body">
								   <center><img class="img-responsive center" src="img/ssl.png" alt="center"></center>
									<h4 class="title">Responsive Design</h4>
									<p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices.</p>
									<div class="separator-3"></div>
								</div>
							</div>
							<div class="feature-box-2 right">
								<div class="body">
								    <center><img class="img-responsive center" src="img/easy.png" alt="center"></center>
									<h4 class="title">Easy to Use</h4>
									<p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices.</p>
									<div class="separator-3"></div>
								</div>
							</div>
							<div class="feature-box-2 right">
								<div class="body">
								    <center><img class="img-responsive center" src="img/web.png" alt="center"></center>
									<h4 class="title">Unlimited options and variations</h4>
									<p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices.</p>
									<div class="separator-3"></div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="feature-box-2">
								<div class="body">
									<center><img class="img-responsive center" src="img/ssl.png" alt="center"></center>
									<h4 class="title">Latest Technologies</h4>
									<p>Built with latest technologies like HTML5 and CSS3, with best practices and avoiding hacks and workarounds.</p>
									<div class="separator-2"></div>
								</div>
							</div>
							<div class="feature-box-2">
								<div class="body">
									<center><img class="img-responsive center" src="img/server.png" alt="center"></center>
									<h4 class="title">Deticated Support</h4>
									<p>Built with latest technologies like HTML5 and CSS3, with best practices and avoiding hacks and workarounds.</p>
									<div class="separator-2"></div>
								</div>
							</div>
							<div class="feature-box-2">
								<div class="body">
								    <center><img class="img-responsive center" src="img/ssl.png" alt="center"></center>
									<h4 class="title">Valid Code</h4>
									<p>Built with latest technologies like HTML5 and CSS3, with best practices and avoiding hacks and workarounds.</p>
									<div class="separator-2"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>
			<!-- section end -->


		
		<!-- ==== TEAM MEMBERS ==== -->
		<div class="container" id="team" name="team">
		<br>

			<div class="row white centered">
				<span  class="centered" class="img-responsive"><img src="img/xs.png" height="120px" width="120px" alt=""></span>
				<h1>OUR TEAM </h1>
				<hr>
				<br>
				<br>
<?
include"admin/koneksi.php";
$ambildata2=mysql_query("SELECT * FROM team ");
while($data2=mysql_fetch_array($ambildata2))
{
$keterangan=substr($data2[keterangan],0,150);
?>
				<div class="col-lg-3 centered">
					<img class="img img-circle" src="admin/images/<?echo"$data2[foto]";?>" height="120px" width="120px" alt="">
					<br>
					<h4><b><?echo"$data2[nama]";?> <br>(<?echo"$data2[jabatan]";?>)</b></h4>
					<a href="<?echo"$data2[tw]";?>" class="icon icon-twitter"></a>
					<a href="<?echo"$data2[fb]";?>" class="icon icon-facebook"></a>
					<a href="#" class="icon icon-flickr"></a>
					<p><?echo"$keterangan";?>..</p>
				</div><!-- col-lg-3 -->
<?}?>				

				
			</div><!-- row -->
		</div><!-- container -->

		<!-- ==== GREYWRAP ==== -->
		<div id="greywrap">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 centered">
						<img class="img-responsive" src="assets/img/macbook.png" align="">
					</div>
					<div class="col-lg-4">
						<h2>We Are Hiring!</h2>
						<p>Do you want to be one of use? Sure you want, because we are an awesome team!. Here we work hard every day to craft pixel perfect sites.</p>
						<p><a href="#contact" class="btn btn-primary" >Contact Us</a></p>
					</div>					
				</div><!-- row -->
			</div>
			<br>
			<br>
		</div><!-- greywrap -->
		

		<!-- ==== PORTFOLIO ==== -->
		<div class="container" id="portfolio" name="portfolio">
		<br>
			<div class="row">
				<br>
				<h1 class="centered"><span class="img-responsive"><img src="img/portofolio-baru.png"></span><br>PORTOFOLIO</h1>
				<hr>
				<br>
				<br>
			</div><!-- /row -->
			<div class="container">
			<div class="row">	
						

<?
include"admin/koneksi.php";
$ambildata=mysql_query("SELECT * FROM portofolio where tempat='atas' ");
while($data=mysql_fetch_array($ambildata))
{
?>
				<!-- PORTFOLIO IMAGE 1 -->
				<div class="col-md-4 ">
			    	<div class="grid mask">
						<figure>
							<img class="img-responsive" src="admin/images/<?echo"$data[gambar]";?>" alt="">
							<figcaption>
								<h5><?echo"$data[nama]";?> </h5>
								<a data-toggle="modal" href="#myModal<?echo"$data[kode]";?>" class="btn btn-primary btn-lg" target="_blank">Lihat</a>
							</figcaption><!-- /figcaption -->
						</figure><!-- /figure -->
			    	</div><!-- /grid-mask -->
				</div><!-- /col -->
				
				
						 <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
						      a modal for each of your projects. -->
						      
						  <div class="modal fade" id="myModal<?echo"$data[kode]";?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title"><?echo"$data[nama]";?></h4>
						        </div>
						        <div class="modal-body">
						          <p><img class="img-responsive" src="admin/images/<?echo"$data[gambar]";?>" alt=""></p>
						          <p><?echo"$data[keterangan]";?></p>
						          <p><b><a href="<?echo"$data[alamat]";?>" target="_blank">Visit Site</a></b></p>
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        </div>
						      </div><!-- /.modal-content -->
						    </div><!-- /.modal-dialog -->
						  </div><!-- /.modal -->
				
<?}?>		
<?
include"admin/koneksi.php";
$ambildata3=mysql_query("SELECT * FROM portofolio where tempat='bawah' ");
while($data3=mysql_fetch_array($ambildata3))
{
?>
				<!-- PORTFOLIO IMAGE 1 -->
				<div class="col-md-4 ">
			    	<div class="grid mask">
						<figure>
							<img class="img-responsive" src="admin/images/<?echo"$data3[gambar]";?>" alt="">
							<figcaption>
								<h5><?echo"$data3[nama]";?> </h5>
								<a data-toggle="modal" href="#myModal<?echo"$data3[kode]";?>" name="a" class="btn btn-primary btn-lg" target="_blank">Lihat</a>
							</figcaption><!-- /figcaption -->
						</figure><!-- /figure -->
			    	</div><!-- /grid-mask -->
				</div><!-- /col -->
				
										 <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
						      a modal for each of your projects. -->
						      
						  <div class="modal fade" id="myModal<?echo"$data3[kode]";?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title"><?echo"$data3[nama]";?></h4>
						        </div>
						        <div class="modal-body">
						          <p><img class="img-responsive" src="admin/images/<?echo"$data3[gambar]";?>" alt=""></p>
						          <p><?echo"$data3[keterangan]";?></p>
						          <p><b><a href="<?echo"$data3[alamat]";?>" target="_blank">Visit Site</a></b></p>
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        </div>
						      </div><!-- /.modal-content -->
						    </div><!-- /.modal-dialog -->
						  </div><!-- /.modal -->
				
<?}?>	
	

          </div>
          </div>
          </div>
          </ul>
          <!-- section -->
		<!-- ==== SECTION DIVIDER6 ==== -->
<div id="greywrap">
<div class="container" id="contact" name="contact">
 <div class="row">
	    <center><h1>Our Patners</h1><hr>
	<img src="img/portofolio-psda.png"  height="150" width="150">		
	<img src="img/portofolio-smea.png"  height="150" width="130">		
	<img src="img/portofolio-muswil.png"  height="150" width="120">		
	<img src="img/portofolio-agakarya.png"  height="150" width="450">		
	</center>
    <br>
  </div>
</div>
</div>

		<div class="container" id="contact" name="contact">
			<div class="row">
			<br>
				<h1 class="centered">THANKS FOR VISITING US</h1>
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
					<h3>Newsletter</h3>
					<p>Register to our newsletter and be updated with the latests information regarding our services, offers and much more.</p>
					<p>
						<form class="form-horizontal" role="form">
						  <div class="form-group">
						    <label for="inputEmail1" class="col-lg-4 control-label"></label>
						    <div class="col-lg-10">
						      <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="text1" class="col-lg-4 control-label"></label>
						    <div class="col-lg-10">
						      <input type="text" class="form-control" id="text1" placeholder="Your Name">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-lg-10">
						      <button type="submit" class="btn btn-primary">Sign in</button>
						    </div>
						  </div>
					   </form><!-- form -->
					</p>
				</div><!-- col -->
				
				<div class="col-lg-4">
					<h3>Support By</h3>
					<table>
					<tr>
					<td><img src="img/wid.png" height="100" width="100"></td>
					<td><img src="img/character.png" height="100" width="82"></td>
					<td><img src="img/wdw.png" height="100" width="100"></td>
					</tr>
					<tr>
					<td><img src="img/rpl.jpg" height="100" width="100"></td>
					<td><img src="img/smea.jpg" height="100" width="100"></td>
					</tr>
					</table>
					
				</div><!-- col -->

			</div><!-- row -->
	
		</div><!-- container -->

		<!--<div id="greywrap">-->
		    <!--<div id="footerwrap">-->
		<!--	<div class="container">-->
				<!--<h4> &copy Copyright <?$a=date("Y");echo"$a";?> <i class="icon icon-shield"><b> FlatStudioWeb</b></i></h4>-->
				
		<!--	</div>-->
		<!--</div>-->
				<!-- ==== SECTION DIVIDER1 -->
		<section class="section-divider divider2">
            <h1></h1>
				<p><br><br><br></p>
		</section><!-- section -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		

	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery-func.js"></script>
  </body>
</html>
