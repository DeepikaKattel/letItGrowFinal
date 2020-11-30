@extends('common')
@section('content')
	<!--////////////////////////////////////Header-->
	<style>
	    table td{
	        padding:20px;
	    }

	</style>
	<header>
		<div class="wrap-header" >
			<!---Main Header--->
			<div class="main-header">
				<div class="bg-overlay">
					<!---Hero Content--->
					<div class="hero-content-wrapper">
					  <div class="hero-content">
						<h4 class="h-alt hero-subheading wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">Work With Us</h4>
						<h1 class="hero-lead wow fadeInLeft" data-wow-duration="1.5s">Careers</h1>
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
					<li><a href="{{route('career')}}">Careers</a></li>
				</ul>
			</div>
			<div>
				<article class="post-entry single-post">
					<div class="wrap-post">
						<div class="entry-header">
							<h1 class="entry-title">Careers</h1>
						</div>
				    </div>
				</article>

                <!-- Main content -->
                  <section class="content">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Available Vacancies</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" style="margin-bottom:50px">
                                @if (session('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('message') }}
                                    </div>
                                @endif
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Post</th>
                                        <th>Designation</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      @foreach($career as $c)
                                        <td></td>
                                        <td>{{$c->department}}</td>
                                        <td>{{$c->designation}}</td>
                                        <td>{{$c->job_description}}</td>
                                        <td>{{$c->vacancyNumber}}</td>
                                        <td id="none">
                                          <a href="{{route('careers.create')}}"><i class="fa fa-lg fa-book"></i></a>
                                        </td>
                                      @endforeach
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SN</th>
                                        <th>Post</th>
                                        <th>Designation</th>
                                        <th>View</th>
                                    </tr>
                                </tfoot>
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                  </section>
                  <!-- /.content -->
            </div>
		</div>
	</section>
@endsection


