@extends('admin.master')
@section('content')
<div class="wrapper">
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Candidates</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Candidates</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Candidates</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>S.N.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Phone Number</th>
                      <th>CV</th>
                      <th>Application ID</th>                      
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($candidates as $c)
                       <tr>
                           <td>{{$loop->iteration}}</td>
                           <td>{{$c->name}}</td>
                           <td>{{$c->email}}</td>
                           <td>{{$c->address}}</td>
                           <td>{{$c->phoneNumber}}</td>
                           <td>{{$c->cv}}</td> 
                           <td>{{$c->designation_id}}</td>                         
                       </tr>
                   @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>S.N.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Phone Number</th>
                      <th>CV</th>
                      <th>Application ID</th>      
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
 @endsection


