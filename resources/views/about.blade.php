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
						<h1 class="hero-lead wow fadeInLeft" data-wow-duration="1.5s">About Us</h1>
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
					<li><a href="single.html">About</a></li>
				</ul>
			</div>
			<div id="about-us">
				<article class="post-entry single-post">
					<div class="wrap-post">
						<div class="entry-header">
							<h1 class="entry-title">About The Company</h1>
						</div>

						<div class="entry-content">
							<div class="excerpt">
							<p>Let IT grow Pvt. Ltd. is a company growing in the field of information technology. The organization is a team of driven young and experienced minds that are passionate to provide utmost customer satisfaction in terms of product and service delivery.
                             The company mostly undertakes project-based business and primarily focuses on providing software-based services to its customers. However, it serves clients with system related services as well as other related needs. Apart from serving for commercial needs, Let IT grow also provides professional training to freshers/individuals and prepare them for the outer world exposure on the related field.
                            As the name suggests, we aim to maximize the market potential in IT by providing excellent products and services in the related field along with generating skillful manpower.</p>

					    </div>
				</article>
			</div>
		</div>
	</section>
@endsection


