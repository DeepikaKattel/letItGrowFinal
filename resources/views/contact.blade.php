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
						<h4 class="h-alt hero-subheading wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">Leave us a message</h4>
						<h1 class="hero-lead wow fadeInLeft" data-wow-duration="1.5s">Contact us</h1>
					  </div>
					</div>
				</div>
			</div>
			<!---Top Menu--->
			@include('partials.header')
		</div>
	</header>

	<!--////////////////////////////////////Container-->
	<section>
		<div class="wrap-container zerogrid">
			<div class="crumbs">
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div id="contact-area"  style="overflow-x:hidden">
				<h1 class="">Contact Us</h1>
				<div class="contact-map_wrapper wow fadeIn" data-wow-delay=".1s" data-wow-duration="1.5s">
					<!-- Map -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.096909160508!2d85.31605341458263!3d27.683399533151924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19f1a12ed15f%3A0xd2addf7cee6a8e0b!2sLet%20IT%20Grow!5e0!3m2!1sen!2snp!4v1605081029408!5m2!1sen!2snp" width="1170" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

					<!-- Show Info Button -->
					<div class="show-info-link">
					  <a href="#" class="show-info"><i class="fa fa-info"></i>Show info</a>
					</div>
					<div class="zerogrid">
						<!-- Address Info -->
						<div class="xs-5-6 offset-md-1-6 md-1-2 contact-info-wrapper">
							<address>
								<div class="row">
								  <!-- Phone -->
								  <div class="sm-1-2 address-group">
									<span>Phone</span>
									<a href="#">+ 01-5901614</a>
								  </div>
								  <!-- Address -->
								  <div class="sm-1-2 address-group">
									<span>Address</span>
									<p>Pulchowk, Lalitpur</p>
								  </div>
								</div>
								<div class="row">
								  <!-- Email -->
								  <div class="sm-1-2 address-group">
									<span>Email</span>
									<a href="mailto:sayhello@email.com">info@letitgrownepal.com </a>
								  </div>
								  <!-- Hours -->
								  <div class="sm-1-2 address-group">
									<span>Open Hours</span>
									<p>Sun-Fri: 10am-5pm</p>
								  </div>
								</div>
								<!-- Show Map Button -->
								<div class="row show-map-link">
								  <a href="#" class="show-map"><i class="fa fa-map-o"></i> Show on map</a>
								</div>
							</address>
						</div>
					</div>
				</div>
				<div class="contact-main_wrapper">
					<div>
						<div class="col-lg-4">
							<div class="wrap-col">
								<div class="wow fadeInLeft" data-wow-delay=".1s" data-wow-duration="1s">
									<h3>Have any questions? Let's get in touch!</h3>
									<p>Contact us if your are interested.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="wrap-col">
								<div id="contact_form" class="wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">
                                    @if (\Illuminate\Support\Facades\Session::has('error'))
                                        <div class="alert alert-danger" style="background-color:red;color:white">
                                            {!! session('error') !!}
                                        </div>
                                    @endif
                                    @if (\Illuminate\Support\Facades\Session::has('success'))
                                        <div class="alert alert-success" style="background-color:green;color:white">
                                            {!! session('success') !!}
                                        </div>
                                    @endif
									<div id="contact_results"></div>
									<div id="contact_body">
                                        <form action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <label>
                                                <input type="text" name="name" id="name" required="true" placeholder="Your Name"/>
                                            </label>
                                            <label>
                                                <input type="email" name="email" required="true" placeholder="Your Email"/>
                                            </label>

                                            <label>
                                                <textarea name="message" id="message" class="textarea-field" required="true" placeholder="Message" cols="50"></textarea>
                                            </label>
                                             
										</form>
										<button class="button button-skin">Submit</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection


