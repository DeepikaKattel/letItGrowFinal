<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Let IT Grow | It Services</title>
	<meta name="description" content="Let IT Grow">
	<meta name="author" content="https://www.letitgrownepal.com">

    <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=0.4">

    <!-- CSS
  ================================================== -->
	<!-- Definity CSS -->
	<link rel="stylesheet" href="{{asset('css/pageLoader.css')}}">
  	<link href="{{asset('css/zerogrid.css')}}" rel="stylesheet" media="all" type="text/css">
	<link href="{{asset('css/style.css')}}" rel="stylesheet" media="all" type="text/css">
	<link href="{{asset('css/menu.css')}}" rel="stylesheet" media="all" type="text/css">
	<!-- Lightbox -->
	<link href="{{asset('css/lightbox.css')}}" rel="stylesheet" media="all" type="text/css">
	<!-- Video Background -->
	<link href="{{asset('css/jquery.mb.ytplayer.min.css')}}" rel="stylesheet" media="all" type="text/css">
	<!-- Animate.css -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" media="all" type="text/css">
    <link href="{{asset('css/robot.css')}}" rel="stylesheet" media="all" type="text/css">
	<link href="{{asset('css/networkAnimate.css')}}" rel="stylesheet" media="all" type="text/css">
	<link href="{{asset('css/wave.css')}}" rel="stylesheet" media="all" type="text/css">
	


	<!-- Custom Fonts -->
	<link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Owl Carousel Assets -->
    <link href="{{asset('owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('owl-carousel/owl.theme.css')}}" rel="stylesheet"> -->
    <link href="{{asset('css/quoteCarousel.css')}}" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://md-aqil.github.io/images/swiper.min.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    


	<!-- JS -->

	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg')}}" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="{{asset('js/html5.js')}}"></script>
		<script src="{{asset('js/css3-mediaqueries.js')}}"></script>
	<![endif]-->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"> </script> 
    <link rel="stylesheet" type="text/css"  href="/css/result-light.css"> 
    
    <script type="text/javascript" src= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    <link rel="stylesheet"type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> 
    <link rel="stylesheet"type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
    <!-- JavaScript for adding slider for multiple images shown at once-->  
 
    
    <script type="text/javascript"> 
        $(window).load(function() { 
            $(".carousel .item").each(function() { 
                var i = $(this).next(); 
                i.length || (i = $(this).siblings(":first")), 
                  i.children(":first-child").clone().appendTo($(this)); 
                
                for (var n = 0; n < 1; n++)(i = i.next()).length || 
                  (i = $(this).siblings(":first")), 
                  i.children(":first-child").clone().appendTo($(this)) 
            }) 
        }); 
    </script> 


<style>
.app {
  display: table;
  margin: 0 auto;
}

.app .row {
    margin-bottom: 20px;
    display:flex; /* added */
    justify-content:center; /* added */
}

.node {
    display: inline-block;
    text-align: center;   
    
}

.our-team{
    padding-bottom: 20px;
	width:100%;
    text-align: center;
	display:inline-block;
	font-family:Tahoma, Geneva, sans-serif;
	/* background:rgb(17, 100, 102, 0.6); */
    /* filter: grayscale(0%);	  */
}

.our-team:hover{
    padding-bottom: 20px;
    text-align: center;
	display:inline-block;	
    /* filter: grayscale(100%); */
    
	
}
.our-team .pic{
    display: inline-block;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background: rgb(17, 100, 102, 0.4);
    padding: 70px 20px 30px;
    margin-bottom: 20px;
    position: relative;
}
.our-team .description{
    font-size: 14px;
    color: white;
}
.our-team .pic img{
    width: 101%;
    height: 101%;
    border-radius: 50%;
    position: absolute;
    top: -1px;
    left: -40px;
    transition: all 0.6s ease 0s;
}
.our-team:hover .pic img{
    /* transform: rotate(-360deg); */
    transform-origin: 105% 100% 0;
	transform: rotateY(100deg);		
}
.our-team .title{
    display: block;
	font-size:15px;	
    font-weight: 800;
    color: white;
    letter-spacing: 0.5px;
    margin-bottom: 5px;
}
.our-team .post{
    display: block;
    font-size: 13px;
    color: white;
    text-transform: capitalize;
    margin-bottom: 10px;
	margin-right:5px;
    position: relative;
}
.our-team .post:after{
    content: "";
    width: 30px;
    height: 3px;
    background: #eee;
    margin: 0 auto;
    position: absolute;
    bottom: -10px;
    left: 0;
    right: 0;
}
.our-team .social{
    padding: 0;
    margin: 25px 0 0 0;
    list-style: none;
}
.our-team .social li{
    display: inline-block;
    margin-right: 5px;
}
.our-team .social li a{
    display: block;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    line-height:25px;
    background: #0e76a8;
    font-size: 14px;
    color: #fff;
}
.our-team .social li a:hover{
    background: black;
}
@media only screen and (max-width: 990px){
    .our-team{ margin-bottom: 30px; }
}
@media only screen and (max-width: 767px){
    .our-team{ overflow: hidden; }
}
	

/* testimonial */
  
  /*:root {
      --dark-green: #9cc675;
--dark-yellow: #e89a3d;
--extra-light-brown:#fdf0d7;
--light-brown: #ecd5ab;
--dark-brown:#915b40;
--light-yellow:#f8e3a8;
--light-red:#f3ac99;
--light-teal:#a6c8cc;
--light-gray:#ddd5d6;
      --theme-color2: #4c6792;
  }


.site-logo {
width: 218.33px !important;
margin-right: 50px;
}
.btn {
border-radius: 5px;
font-weight: normal;
font-size: 15px;
letter-spacing: 0.02em;
line-height: 12px;
text-align: center;
font-weight: 600;
font-size: 14px;
padding: 14px 30px;
cursor: pointer;
}
.btn-theme {
background: var(--theme-color1);
color: #212121;
}

.c-container {
margin: auto;
width: 93%;
position: relative;
z-index: 1;
}

.btn-outline-white {
color: #fff;
background-color: rgba(255, 255, 255, 0.1);
background-image: none;
border-width: 2px;
border-color: #fff;
font-weight: 500;
-webkit-transition: all .2s;
transition: all .2s;
}
.btn {
border-radius: 5px;
font-weight: normal;
font-size: 15px;
letter-spacing: 0.02em;
line-height: 12px;
text-align: center;
font-weight: 600;
font-size: 14px;
padding: 14px 30px;
cursor: pointer;
}
.btn-outline-white:hover {
background-color: #fff;
color: var(--text-dark);
}
/* common css up */
/*
.testimonial p {
font-size: 28px;
letter-spacing: 0.02em;
line-height: 35px;
color:white;
}
.testimonial .name {
font-weight: bold;
font-size: 18px;
letter-spacing: 0.04em;
line-height: 35px;
text-align: left;
}
.testimonial .designation {
font-size: 14px;
letter-spacing: 0.04em;
text-align: left;
color: #fff;
opacity: 0.65;
}
.unt {
margin-bottom: 20px;
margin-top: 60px;
}
.hero-text {
font-size: 30px;
letter-spacing: 0.02em;
color: #fff;
}
.gallery-thumbs {
height: 100%;
}
.gallery-thumbs .swiper-wrapper {
align-items: center;
}
.gallery-thumbs .swiper-slide {
background-position: center;
background-size: cover;
width: 250px !important;
height: 330px;
position: relative;
}
.gallery-thumbs .swiper-slide img {
filter: contrast(0.5) blur(1px);
width: 100%;
height: 100%;
object-fit: cover;
border-radius: 10px;
}
.gallery-thumbs .swiper-slide-active img {
filter: contrast(1) blur(0px) !important;
}
.flex-row {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-ms-flex-wrap: wrap;
flex-wrap: wrap;
margin-right: -15px;
margin-left: -15px;
}
.flex-row .flex-col {
-ms-flex-preferred-size: 0;
flex-basis: 0;
-webkit-box-flex: 1;
-ms-flex-positive: 1;
flex-grow: 1;
max-width: 100%;
position: relative;
width: 100%;
min-height: 1px;
padding-right: 15px;
padding-left: 15px;
}

.gallery-thumbs .swiper-wrapper {
-webkit-box-align: center;
-ms-flex-align: center;
align-items: center;
}


.testimonial-section .quote {
width: 75%;
height: 100%;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
-ms-flex-direction: column;
flex-direction: column;
-webkit-box-pack: center;
-ms-flex-pack: center;
justify-content: center;
padding-left: 100px;
padding-right: 100px;
}
.swiper-container.testimonial {
height: 100vh;
}
.testimonial-section .user-saying {
background: var(--theme-color2);
width: 60%;
color: #fff;
height: 100%;
}
.testi-user-img {
width: 40%;
}
@media only screen and (max-width: 1100px) {
    .spacer .testimonial-section .user-saying {
        font-size: 22px;
    }
}
@media only screen and (max-width: 960px) {
    .spacer .testimonial-section .user-saying {
        padding: 30px 40px;
		font-size: 22px;		
    }
    .spacer .testimonial-section .user-saying:before,
    .spacer .testimonial-section .user-saying:after {
        width: 25px;
        height: 25px;
        font-size: 47px;
    }
}
@media only screen and (max-width: 690px) {
    .spacer .testimonial-section .user-saying {
        padding: 10px 20px;
		font-size: 20px;
		max-width: 400px;
		height:400px;
    }
    .spacer .testimonial-section .user-saying:before,
    .spacer .testimonial-section .user-saying:after {
        font-size: 19px;
    }
}
.testimonial-section {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-pack: justify;
-ms-flex-pack: justify;
justify-content: space-between;
width: 100%;
height: 100%;
}
.testimonial-section .quote p {
font-size: 20px;
font-weight: 300;
line-height: 1.8;
font-style: italic;
margin: 0;
}
.quote-icon {
width: 38px;
display: block;
margin-bottom: 30px;
}
.carousel-control{
	opacity:0;	
}
.carousel-control i{
	color:white;	
}

.img-responsive:hover{
	transform: scaleX(-1);
}
*/
h2{
	font-weight:800;
	position:relative;	
	font-size:50px;	
	
}

h2:before{
	content:attr(REFL-TEXT);	
	position:absolute;
	bottom:10%;	
	transform: rotateX(180);
	line-height:5px;	
	transform-origin:bottom;
	background:linear-gradient(to top, #fff, transparent);	
	-webkit-background-clip:text;
	font-size:50px;
	color:rgb(17, 100, 102, 0.6);
	opacity:0.1;
	z-index:1;
	margin-bottom:10px;
}


@media only screen and (max-width: 767px){
    .our-team{ overflow: hidden; padding-right:20px; }
	#about h2:before{
		left:100px;	
	}
	#services h2:before{
		left:90px;
	}
	#team h2:before{
		left:100px;
	}
}
@media only screen and (max-width: 400px){
    .our-team{ overflow: hidden; padding-right:20px;}
	#about h2:before{
		left:50px;	
	}
	#services h2:before{
		left:50px;
	}
	#team h2:before{
		left:70px;
	}
}

#about h2:before{
	right:36%;	
}
#services h2:before{
	right:37%;
}
#team h2:before{
	right:35%;
} 
p{
	font-family:system-ui;
	line-height:30px;
	font-family:system-ui;
	line-height:30px;
	font-size:20px;
	text-align:justify;
}


</style>
</head>
@include('pageLoader')
<div id="menu">
	<nav class="navbar navbar-fixed-top">
		@include('partials.header')
	</nav>
</div>
<body id="page-top" style="color:grey">
    <div class="wrap-body">
        <!--////////////////////////////////////Header-->
        <header>
                <!---Main Header--->
                <div class="main-header">
                    <div class="bg-overlay">
                        <!---Hero Content--->
                        <div class="hero-content-wrapper">
                        <div class="hero-content">
                            <!-- <h4 class="h-alt hero-subheading wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s" >We build designs from your imagination</h4> -->                            
                            <!-- <img src="{{asset('images/logo.png')}}"class="wow fadeIn"style="height:200px;width:500px;box-shadow:2px 2px 2px 2px"/> -->
							<div class="img-wrapper" style="margin-top:250px;margin-right:300px;">
								<h1 class="hero-lead wow slideInLeft" data-wow-duration="1.5s" style="text-shadow:4px 5px 5px #dae2e3;color:#116466;"> <canvas id="myCanvas" style="margin-top:0px"></canvas>Let <span style="color:white">IT</span>Grow</h1>
								
								<!-- <img src="{{asset('images/logo.png')}}" alt='' style="margin-bottom:600px;margin-left:500px;"> -->
							</div>   
                            
                            <!-- <a href="{{asset('about')}}" class="button button-skin wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">Read More</a> -->
                        </div>
                    </div>
                        <!-- <canvas id="c"></canvas> -->
                        <!-- <div class="containerRobot">
							<div class="robot">
								<div class="head">
								<div class="eyes">
									<div class="left-eye"></div>
									<div class="right-eye"></div>
								</div>
								</div>
								<div class="body">
								<div class="left-arm"></div>
								<div class="torso"></div>
								<div class="right-arm"></div>
								</div>
								<div class="legs">
								<div class="left-leg"></div>
								<div class="right-leg"></div>
								</div>
							</div>
                        </div>    -->      
                        
					</div>
					
                    <!-- <div class="wave"> 					                       
                    </div> -->
                    <!---Scroller--->                    
                    <div id="scroll-page-content">
                        <a href="#menu" class="scroller">
                            <span class="scroller-text">scroll down</span>
                            <div class="scroller-button">
                                <i class="fa fa-angle-double-down"></i>
                            </div>
                        </a>
                    </div>
               
            </div>            
        </header>
       
		
    


	<!--////////////////////////////////////Container-->
	<section id="page-content" class="index-page">
		<div class="wrap-container">
			<!-----------------content-box-4-------------------->
			<section class="content-box box-3 box-style-1" id="about">				
				<div class="zerogrid">
					<div class="wrap-box"><!--Start Box-->
						<div class="header wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">
							<h2 REFL-TEXT="About US">About US</h2>						
						</div>
						<div class="row content " data-wow-delay=".1s" data-wow-duration="1s" style="margin-bottom:40px;justify-content:center">					
							<div class="col-4 wow slideInLeft" style="left:0%;">
								<img src="{{asset('images/about.jpg')}}" style="width:100%;height:355px;">
							</div>
							<div class="col-8 wow slideInRight" style="padding-left:100px">		
								<div class="entry-content">									
									<div class="excerpt">
									<p>Let IT grow Pvt. Ltd. is a company growing in the field of information technology. The organization is a team of driven young and experienced minds that are passionate to provide utmost customer satisfaction in terms of product and service delivery.
										<br>The company mostly undertakes project-based business and primarily focuses on providing software-based services to its customers. However, it serves clients with system related services as well as other related needs. Apart from serving for commercial needs, Let IT grow also provides professional training to freshers/individuals and prepare them for the outer world exposure on the related field.
									As the name suggests, we aim to maximize the market potential in IT by providing excellent products and services in the related field along with generating skillful manpower.</p>
								</div>
							</div>						
								
						</div>
					</div>
				</div>
			</section>
			<section class="content-box box-4" id="services">			
				<div class="zerogrid-fluid">
					<div class="wrap-box">									
						<div class="header wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">
							<h2 REFL-TEXT="Services" style="margin-bottom:40px;">Services</h2>
							<span class="intro">We help your business to step up a notch by making it tech-friendly</span>
						</div>
							<div class="content" data-wow-delay=".1s" data-wow-duration="1s">
								<div class="row" style="justify-content:center">								
									<div class="wrapper wow slideInLeft">
										<div class="card" style="background: url('/images/webDevelopment.jpg') 320px 450px;">
											<div class="front">
												<!-- <h1 style="color:white">Web<br> Development<br></h1>											 -->
											</div>
											<div class="right" style="background: url('/images/webDevelopment.jpg') 320px 450px;">
												<h1 style="color:white;margin:20px;font-size:28px;font-weight:bolder"><a href="#about" style="text-decoration:none;cursor:pointer;color:white">Web Development</a></h1>										

											</div>
										</div>										
									</div>
									<div class="wrapper wow slideInTop">
										<div class="card" style="background: url('/images/webDesign.jpg') 320px 450px;">
											<div class="front">
												<!-- <h1 style="color:white">Web<br> Development<br></h1>											 -->
											</div>
											<div class="right" style="background: url('/images/webDesign.jpg') 320px 450px;">
												<h1 style="color:white;margin:20px;font-size:28px;font-weight:bolder"><a href="#about" style="text-decoration:none;cursor:pointer;color:white">Web Design</a></h1>											
												<!-- <button><a href="#about" style="text-decoration:none;cursor:pointer;color:black">Read More</></button> -->
											</div>
										</div>
										<!-- <div class="img-wrapper">
											<!-- <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/577128/deck.png' alt=''>     -->
											<!-- <img src="{{asset('images/logo.png')}}" alt=''>    
										</div> -->
									</div>
									<div class="wrapper wow slideInRight">
										<div class="card" style="background: url('/images/mobileApplication.jpg') 320px 450px;">
											<div class="front">
												<!-- <h1 style="color:white">Web<br> Development<br></h1>											 -->
											</div>
											<div class="right" style="background: url('/images/mobileApplication.jpg') 320px 450px;">
												<h1 style="color:white;margin:20px;font-size:28px;font-weight:bolder"><a href="#about" style="text-decoration:none;cursor:pointer;color:white">Mobile Application</a></h1>											
												<!-- <button><a href="#about" style="text-decoration:none;cursor:pointer;color:black">Read More</a></button> -->
											</div>
										</div>
										<!-- <div class="img-wrapper">
											<!-- <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/577128/deck.png' alt=''>     -->
											<!-- <img src="{{asset('images/logo.png')}}" alt=''>    
										</div> -->
									</div>
									
								</div>							
						
							</div> 
						</div> 						
					</div>	
			</section>	
								
				
			
			<!-- <section class="content-box box-3 box-style-1 spacer" id="team">
			 <div class="skew-c"></div> 
				<div class="zerogrid-fluid">
					<div class="wrap-box">
						<div class="header wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">
							<h2 REFL-TEXT="Our Team" style="margin-bottom:40px;">Our Team</h2>
							<span class="intro">We help your business to step up a notch by making it tech-friendly</span>
						</div>									
						<div class="testimonial-section">
							<div class="testi-user-img">
								<div class="swiper-container gallery-thumbs">
									<div class="swiper-wrapper">
											<div class="swiper-slide">
													<img class="u3" src="https://md-aqil.github.io/images/2091127763_1_1_1.jpg" alt="">
												</div>
									<div class="swiper-slide">
										<img class="u1" src="https://md-aqil.github.io/images/beautiful-beauty-face-2657838.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img class="u2" src="https://md-aqil.github.io/images/attractive-beautiful-beauty-1986684.jpg" alt="">
										</div>
							
									<div class="swiper-slide">
										<img class="u4" src="https://md-aqil.github.io/images/beautiful-beauty-face-2657838.jpg" alt="">
									</div>					
								
								</div>
							</div>
						</div>
						<div class="user-saying">
							<div class="swiper-container testimonial">
									 Additional required wrapper 
								<div class="swiper-wrapper ">
									 Slides 
									<div class="swiper-slide">
										<div class="quote">
												<img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="">
											<p>
													“This is best and biggest unified platform
											for instant online admission. We can easily
											take admission for any course in any institute..“
											</p>
											<div class="name">-Ramkishor Verma-</div>
											<div class="designation">University Student</div>
											
										</div>
									</div>
									<div class="swiper-slide">
										<div class="quote">
											<img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="">
										
											<p>
													“This is best and biggest unified platform
											for instant online admission. We can easily
											take admission for any course in any institute..“
											</p>
											<div class="name">-Ramkishor Verma-</div>
											<div class="designation">University Student</div>
											
										</div>
									</div>
									<div class="swiper-slide">
										<div class="quote">
											<img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="">
												
											<p>
													“This is best and biggest unified platform
											for instant online admission. We can easily
											take admission for any course in any institute..“
											</p>
											<div class="name">-Ramkishor Verma-</div>
											<div class="designation">University Student</div>
											
										</div>
									</div>
									<div class="swiper-slide">
										<div class="quote">
											<img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="">
											
											<p>
													“This is best and biggest unified platform
											for instant online admission. We can easily
											take admission for any course in any institute..“
											</p>
											<div class="name">-Ramkishor Verma-</div>
											<div class="designation">University Student</div>
											
										</div>
									</div>   
								</div>
								 If we need pagination
								<div class="swiper-pagination swiper-pagination-white"></div>
							</div>
						</div>													
					</div>
				</div>
			</section> -->
			<!-- <section class="content-box box-3 box-style-1" id="team">	
				<div class="zerogrid">
					<div class="wrap-box">Start Box
						<div class="header wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">
							<h2 REFL-TEXT="Our Team">Our Team</h2>						
						</div>
						<div class="content" data-wow-delay=".1s" data-wow-duration="1s">					
							<div class="container app">
								<div class="row">
									<div class="col-md-4 col-sm-6">
										<div class="our-team node">
											<div class="pic wow slideInRight">
												<h3 class="title" >Tribhuwan Kushwaha</h3>
												<span class="post">Software Consultant</span>												
												<img src="{{asset('images/tribhuwan.jpg')}}">
											
											
											<ul class="social">
												<!-- <li><a href="#" class="fa fa-facebook"></a></li>
												<li><a href="#" class="fa fa-twitter"></a></li>
												<li><a href="#" class="fa fa-google-plus"></a></li> 
												<li><a href="#" class="fa fa-linkedin"></a></li>
											</ul>
											</div>
										</div>
									</div>
									
								
									<div class="col-md-4 col-sm-6">
										<div class="our-team node">
											<div class="pic wow slideInRight">
												<h3 class="title">Salabh Adhikari</h3>
												<span class="post">Full Stack Developer</span>												
												<img src="{{asset('images/shalabh.jpg')}}">
											
											
											<ul class="social">
												<!-- <li><a href="#" class="fa fa-facebook"></a></li>
												<li><a href="#" class="fa fa-twitter"></a></li>
												<li><a href="#" class="fa fa-google-plus"></a></li> 
												<li><a href="https://np.linkedin.com/in/shalabh-adhikari" class="fa fa-linkedin"></a></li>
											</ul>
											</div>
										</div>
									</div>	
								
									<div class="col-md-4 col-sm-6">
										<div class="our-team node">
											<div class="pic wow slideInRight">
												<h3 class="title">Bharat Phuyal</h3>
												<span class="post">Administrative Executive</span>												
												<img src="{{asset('images/bharat.jpg')}}">
											
											
											<ul class="social">
												<!-- <li><a href="#" class="fa fa-facebook"></a></li>
												<li><a href="#" class="fa fa-twitter"></a></li>
												<li><a href="#" class="fa fa-google-plus"></a></li> 
												<li><a href="#" class="fa fa-linkedin"></a></li>
											</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="our-team node">
											<div class="pic wow slideInRight">
												<h3 class="title">Sujit Maharjaan</h3>
												<span class="post">Full Stack Developer</span>												
												<img src="{{asset('images/sujit.jpg')}}">
											
											
											<ul class="social">
												<!-- <li><a href="#" class="fa fa-facebook"></a></li>
												<li><a href="#" class="fa fa-twitter"></a></li>
												<li><a href="#" class="fa fa-google-plus"></a></li>
												<li><a href="#" class="fa fa-linkedin"></a></li>
											</ul>
											</div>
										</div>
									</div>	
								
									<div class="col-md-4 col-sm-6">
										<div class="our-team node">
											<div class="pic wow slideInRight">
												<h3 class="title">Nikita Niraula</h3>
												<span class="post">Graphics Designer</span>												
												<img src="{{asset('images/nikita.jpg')}}">
											
											
											<ul class="social">
												<!-- <li><a href="#" class="fa fa-facebook"></a></li>
												<li><a href="#" class="fa fa-twitter"></a></li>
												<li><a href="#" class="fa fa-google-plus"></a></li> 												<li><a href="#" class="fa fa-linkedin"></a></li>
											</ul>
											</div>
										</div>
									</div>		
								
										
									<div class="col-md-4 col-sm-6">
										<div class="our-team">
											<div class="pic wow slideInRight">
												<h3 class="title">Deepika Kattel</h3>
												<span class="post">Software Developer</span>												
												<img src="{{asset('images/deepika.jpg')}}">
											
											
											<ul class="social">
												<!-- <li><a href="#" class="fa fa-facebook"></a></li>
												<li><a href="#" class="fa fa-twitter"></a></li>
												<li><a href="#" class="fa fa-google-plus"></a></li>
												<li><a href="https://www.linkedin.com/in/deepika-kattel-3236011b0/" class="fa fa-linkedin"></a></li>
											</ul>
											</div>
										</div>
									</div>	
									
									<div class="col-md-4 col-sm-6">
										<div class="our-team">
											<div class="pic wow slideInRight">
												<h3 class="title">Sandeep Bajracharya</h3>
												<span class="post">Software Developer</span>												
												<img src="{{asset('images/sandeep.jpg')}}">
											
											
											<ul class="social">
												<!-- <li><a href="#" class="fa fa-facebook"></a></li>
												<li><a href="#" class="fa fa-twitter"></a></li>
												<li><a href="#" class="fa fa-google-plus"></a></li> 
												<li><a href="https://www.linkedin.com/in/sandeep-bajracharya-242352194/" class="fa fa-linkedin"></a></li>
											</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="our-team">
											<div class="pic wow slideInRight">
												<h3 class="title">Bivisha Karki</h3>
												<span class="post">Software Developer</span>												
												<img src="{{asset('images/bivisha.jpg')}}">
											
											
											<ul class="social">
												<!-- <li><a href="#" class="fa fa-facebook"></a></li>
												<li><a href="#" class="fa fa-twitter"></a></li>
												<li><a href="#" class="fa fa-google-plus"></a></li>
												<li><a href="https://www.linkedin.com/in/bivisha-karki-9a31ab175" class="fa fa-linkedin"></a></li>
											</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="our-team">
											<div class="pic wow slideInRight">
												<h3 class="title">Nitesh Manandhar</h3>
												<span class="post">Software Developer</span>												
												<img src="{{asset('images/nitesh.jpg')}}">
											
											
											<ul class="social">
												<!-- <li><a href="#" class="fa fa-facebook"></a></li>
												<li><a href="#" class="fa fa-twitter"></a></li>
												<li><a href="#" class="fa fa-google-plus"></a></li> 
												<li><a href="https://www.linkedin.com/in/nitesh-manandhar-895947178/" class="fa fa-linkedin"></a></li>
											</ul>
											</div>
										</div>
									</div>					
									
													
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
					-->

			<!-----------------content-box-7-------------------->
			<section class="content-box box-7">				
				<div class="zerogrid-fluid">
					<div class="wrap-box"><!--Start Box-->
						<div class="content wow fadeInLeft" data-wow-delay=".1s" data-wow-duration="1s">
							
							<div class="md-1-3">
								<div class="wrap-col">
									<div class="row">
										<div class="sm-1-3">
											<i class="fa fa-map-marker"></i>
										</div>
										<div class="sm-2-3 t-left-sm">
											<h3>Address</h3>
											<p>Pulchowk, Lalitpur</p>
										</div>
									</div>
								</div>
							</div>
							<div class="md-1-3">
								<div class="wrap-col">
									<div class="row">
										<div class="sm-1-3">
											<i class="fa fa-phone"></i>
										</div>
										<div class="sm-2-3 t-left-sm">
											<h3>Phone</h3>
											<p>01-5901614</p>
										</div>
									</div>
								</div>
							</div>
							<div class="md-1-3">
								<div class="wrap-col">
									<div class="row">
										<div class="sm-1-3">
											<i class="fa fa-envelope"></i>
										</div>
										<div class="sm-2-3 t-left-sm">
											<h3>Email</h3>
											<p><span>Email One :</span> info@letitgrownepal.com </p>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
		</div>
	</section>
		


    @include('partials.footer')
	<div id="page-top"><a href="#page-top" class="button button-toTop f-right"><i class="fa fa-angle-double-up"></i></a></div>

	<!-- ========== Scripts ========== -->
	<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
	<script src="{{asset('js/menu.js')}}"></script>
	<script src="{{asset('js/jquery.localScroll.min.js')}}"></script>
	<script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
	<script src="{{asset('js/SmoothScroll.js')}}"></script>
	<script src="{{asset('js/wow.min.js')}}"></script>

	<!-- Owl Carousel JS -->
	<script src="{{asset('owl-carousel/owl.carousel.js')}}"></script>

	<!-- Google Map -->
	<script src="{{asset('js/google-map.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>


	<!-- Definity JS -->
	<script src="{{asset('js/main.js')}}"></script>
    <script src="https://md-aqil.github.io/images/swiper.min.js"></script>
  <script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
	effect: 'coverflow',
	grabCursor: true,
	centeredSlides: true,
	slidesPerView: '2',
	// coverflowEffect: {
	//   rotate: 50,
	//   stretch: 0,
	//   depth: 100,
	//   modifier: 1,
	//   slideShadows : true,
	// },
	
	coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 50,
        modifier: 6,
        slideShadows : false,
	  },
	  
  });
  
  
var galleryTop = new Swiper('.swiper-container.testimonial', {
	speed: 400,
	spaceBetween: 50,
	autoplay: {
	  delay: 3000,
	  disableOnInteraction: false,
	},
	direction: 'vertical',
	pagination: {
	  clickable: true,
	  el: '.swiper-pagination',
	  type: 'bullets',
	},
	thumbs: {
		swiper: galleryThumbs
	  }
  });
  
  </script>  
<script>
	$(document).ready(function(){
		$(window).scroll(function(){
			var scroll = $(window).scrollTop();
			if (scroll > 300) {
				$(".navbar").css("background" , "rgb(17, 100, 102, 0.6)");
			}

			else if(scroll < 300){
				$(".navbar").css("background" , "transparent");  	
			}
		})
	})
</script>
</div>
</body>
</html>
