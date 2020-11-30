@extends('layouts.layout')
@section('content')
<div class="form">
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Log In</a></li>
        <li class="tab"><a href="#signup">Register</a></li>
      </ul>

      <div class="tab-content">
        <div id="login">
          <h1>Welcome Back!</h1>

          <form method="POST" action="{{ route('login') }}">
          @csrf

           <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
           </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <p class="forgot"><a href="{{ route('password.request') }}">Forgot Password?</a></p>

          <button class="btn button button-block"/>Log In</button>

          </form>

        </div>
        <div id="signup">
          <h1>Register</h1>
          <form method="POST" action="{{ route('register') }}">
          @csrf
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Name<span class="req">*</span>
              </label>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="field-wrap">
              <label>
                Company Name<span class="req">*</span>
              </label>
              <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" required autocomplete="company_name" autofocus>
              @error('company_name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Designation<span class="req">*</span>
              </label>
              <input id="designation" type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{ old('designation') }}" required autocomplete="designation" autofocus>
              @error('designation')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="field-wrap">
              <label>
                Company Type<span class="req">*</span>
              </label>
              <input id="company_type" type="text" class="form-control @error('company_type') is-invalid @enderror" name="company_type" value="{{ old('company_type') }}" required autocomplete="company_type" autofocus>
              @error('company_type')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

            <div class="field-wrap">
              <label>
                Email<span class="req">*</span>
              </label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

          <div class="top-row">
              <div class="field-wrap">
                <label>
                  Password<span class="req">*</span>
                </label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="field-wrap">
                <label>
                  Confirm Password<span class="req">*</span>
                </label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
          </div>

          <button type="submit" class="btn button button-block"/>Register</button>

          </form>


        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
@endsection
