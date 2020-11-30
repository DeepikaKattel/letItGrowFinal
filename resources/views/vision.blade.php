@extends('common')
@section('content')
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
						<h1 class="hero-lead wow fadeInLeft" data-wow-duration="1.5s">Vision</h1>
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
					<li><a href="single.html">Vision</a></li>
				</ul>
			</div>
			<div id="about-us">
				<article class="post-entry single-post">
					<div class="wrap-post" >
						<div class="entry-header">
							<h1 class="entry-title">Our Vision</h1>
						</div>										
							
						<div class="entry-content">		
							<div class="circle"></div>					
							<div class="excerpt">
							<p>We believe, Technology is made by everybody for everybody. Today, Modern world offers technologies that are affordable to people from all backgrounds and we want to serve people with its benefits. Let IT grow is your solution to the technological advancement you and your business should be experiencing along with the advantage you deserve.<br>
							We offer our services for all kinds of business as well as individuals who want to make a difference on the work they do. Our IT services are sure to benefit people from all backgrounds that want to use IT to grow their business. On times, where time and tides wait for none, we aim to bridge the gap between fast changing technology and Nepali Society. With an extremely creative team, we constantly see ourselves generating and implementing revolutionary ideas that aim to benefit the society as well as the organization. <br>
							Our IT services are sure to benefit people from all backgrounds that want to use IT to grow their business. On times, where time and tides wait for none, we aim to bridge the gap between fast changing technology and Nepali Society. With an extremely creative team, we constantly see ourselves generating and implementing revolutionary ideas that aim to benefit the society as well as the organization.<br>We hope to be the ultimate gateway for connecting the Nepali society with the emerging technologies at reasonable and affordable prices.
							Let IT Grow is a team of enthusiastic young minds that want to make a difference by providing quality IT services to people all over Nepal regardless of where they come from.<br>You dictate, we Create.</p>
						</div>							
					</div>
				</article>
			</div>
		</div>
	</section>
@endsection


