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
						<h4 class="h-alt hero-subheading wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">Work With Us</h4>
						<h1 class="hero-lead wow fadeInLeft" data-wow-duration="1.5s">Career</h1>
					  </div>
					</div>
				</div>
			</div>
			<!---Top Menu--->
			@include('partials.header')
		</div>
	</header>

	<!--////////////////////////////////////Container-->
	<section id="page-content">
		<div class="wrap-container zerogrid">
			<div class="crumbs">
				<ul>
					<li><a href="{{url('/')}}">Home</a></li>
					<li><a href="{{route('career.index')}}">Career</a></li>
				</ul>
			</div>
			<div id="contact-area">
				<div class="contact-main_wrapper">
					<div class="row">
						<div class="sm-2-5 ">
							<div class="wrap-col">
								<div class="wow fadeInLeft" data-wow-delay=".1s" data-wow-duration="1s">
									<h5>Department:</h5><p>Marketing</p>
									<h5>Designation:</h5><p>Junior Salesman</p>
									<h5>Job Description:</h5>
									<p>Should be able to manage business efficiently.</p>
									<h5>Number of Vacancies</h5>
									<p>5</p>
								</div>
							</div>
						</div>
						<div class="sm-2-5 offset-sm-1-5">
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
                                        <form action="{{route('career.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <label>
                                                <input type="text" name="name" id="name" required="true" placeholder="Name"/>
                                            </label>
                                            <label>
                                                <input type="email" name="email" required="true" placeholder="Email"/>
                                            </label>
                                             <label>
                                                <input type="text" name="address" required="true" placeholder="Address"/>
                                            </label>
                                            <label>
                                                <input type="text" name="phoneNumber" required="true" placeholder="Phone Number"/>
                                            </label>

                                             <label>Upload CV:</label>
                                             <input type="file" name="cv" id="cv" required="true">

                                             <label>
                                             <button class="button button-skin">Submit</button>
                                            </label>
                                        </form>
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


