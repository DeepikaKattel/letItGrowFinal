@extends('admin.master')
@section('content')
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Career Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Creer Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Categories</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('adminCareer.update',$career->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
              <div class="card-body">
                  <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" class="form-control" id="department" name="department" placeholder="Enter Department" value="{{old('department', $career->department)}}">
                  </div>
                  <div class="form-group">
                    <label for="designation">Designastion</label>
                    <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter Designation" value="{{old('designation', $career->designation)}}">
                  </div>
                  <div class="form-group">
                    <label for="department">Job Description</label>
                    <textarea  class="form-control" id="job_description" name="job_description" placeholder="Enter Job Description">{{old('job_description', $career->job_description)}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="vacancyNumber">Vacancy Number</label>
                    <input type="number" class="form-control" id="vacancyNumber" name="vacancyNumber" placeholder="Enter Vacancy Number" value="{{old('vacancyNumber', $career->vacancyNumber)}}">
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->       </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
    tinymce.init({
        selector:'textarea.form-control',
        width: 440,
        height: 300
    });
</script>
 @endsection

