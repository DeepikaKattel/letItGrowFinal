@extends('common')
@section('content')
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
img {
    transform-origin: top right;
    transition: transform 300ms cubic-bezier(0.39, 0.575, 0.565, 1);
    transition-delay: 100ms;
    transform: translateX(21%) rotateZ(0deg) skewX(0deg);
    pointer-events: none;
}
</style>
	<!--////////////////////////////////////Header-->
	<header>
		<div class="wrap-header" >
			<!---Main Header--->
			<div class="main-header">
				<div class="bg-overlay">
					<!---Hero Content--->
					<div class="hero-content-wrapper">
					  <div class="hero-content">
						<h4 class="h-alt hero-subheading wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">Something About Us</h4>
						<h1 class="hero-lead wow fadeInLeft" data-wow-duration="1.5s">Our Team</h1>
					  </div>
					</div>
				</div>
			</div>
			@include('partials.header')
		</div>
	</header>

	<!--////////////////////////////////////Container-->
	<section id="page-content">
		<div class="wrap-container zerogrid">
			<div class="crumbs">
				<ul>
					<li><a href="{{url('/')}}">Home</a></li>
					<li><a href="#">Our team</a></li>
				</ul>
			</div>
			<div id="about-us">
				<article class="post-entry single-post">
					<div class="wrap-post" >
						<div class="entry-header">
							<h1 class="entry-title">Our Team</h1>
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
												<li><a href="#" class="fa fa-google-plus"></a></li> -->
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
												<li><a href="#" class="fa fa-google-plus"></a></li> -->
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
												<li><a href="#" class="fa fa-google-plus"></a></li> -->
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
												<li><a href="#" class="fa fa-google-plus"></a></li> -->
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
												<li><a href="#" class="fa fa-google-plus"></a></li> -->
												<li><a href="#" class="fa fa-linkedin"></a></li>
											</ul>
											</div>
										</div>
									</div>		
								
										
									<div class="col-md-4 col-sm-6">
										<div class="our-team">
											<div class="pic wow slideInRight">
												<h3 class="title">Deepika Kattel</h3>
												<span class="post">Web Application Developer</span>												
												<img src="{{asset('images/deepika.jpg')}}">
											
											
											<ul class="social">
												<!-- <li><a href="#" class="fa fa-facebook"></a></li>
												<li><a href="#" class="fa fa-twitter"></a></li>
												<li><a href="#" class="fa fa-google-plus"></a></li> -->
												<li><a href="https://www.linkedin.com/in/deepika-kattel-3236011b0/" class="fa fa-linkedin"></a></li>
											</ul>
											</div>
										</div>
									</div>	
									
									<div class="col-md-4 col-sm-6">
										<div class="our-team">
											<div class="pic wow slideInRight">
												<h3 class="title">Sandeep Bajracharya</h3>
												<span class="post">React JS Developer</span>												
												<img src="{{asset('images/sandeep.jpg')}}">											
											
											<ul class="social">
												<!-- <li><a href="#" class="fa fa-facebook"></a></li>
												<li><a href="#" class="fa fa-twitter"></a></li>
												<li><a href="#" class="fa fa-google-plus"></a></li> -->
												<li><a href="https://www.linkedin.com/in/sandeep-bajracharya-242352194/" class="fa fa-linkedin"></a></li>
											</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="our-team">
											<div class="pic wow slideInRight">
												<h3 class="title">Bivisha Karki</h3>
												<span class="post">Mobile Application Developer</span>												
												<img src="{{asset('images/bivisha.jpg')}}">
											
											
											<ul class="social">
												<!-- <li><a href="#" class="fa fa-facebook"></a></li>
												<li><a href="#" class="fa fa-twitter"></a></li>
												<li><a href="#" class="fa fa-google-plus"></a></li> -->
												<li><a href="https://www.linkedin.com/in/bivisha-karki-9a31ab175" class="fa fa-linkedin"></a></li>
											</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="our-team">
											<div class="pic wow slideInRight">
												<h3 class="title">Nitesh Manandhar</h3>
												<span class="post">Node JS Developer</span>												
												<img src="{{asset('images/nitesh.jpg')}}">
											
											
											<ul class="social">
												<!-- <li><a href="#" class="fa fa-facebook"></a></li>
												<li><a href="#" class="fa fa-twitter"></a></li>
												<li><a href="#" class="fa fa-google-plus"></a></li> -->
												<li><a href="https://www.linkedin.com/in/nitesh-manandhar-895947178/" class="fa fa-linkedin"></a></li>
											</ul>
											</div>
										</div>
									</div>					
									
													
								</div>
							</div>
						</div>						
					</div>
				</article>
			</div>
		</div>
	</section>
@endsection


