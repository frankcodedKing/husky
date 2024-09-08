@extends('layouts.customlayout')
@section('body')
  <main id="main">

 <!-- ======= About Section ======= -->
 <section id="about" class="about" style="background-image: url('https://images.unsplash.com/photo-1482053450283-3e0b78b09a70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80'); background-size: cover; background-repeat: no-repeat;">

      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">


          <!-- col1 -->

          
          <div class="col-xl-6 mx-auto" style="margin-top: 105px; background-color: white; padding: 15px; border-radius: 10px;">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <h4 style="text-align: center;">Reset Password
                  </h4>
                 <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<br>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <br>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn" style="background-color: #024139; color: white;">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                  
              </div>
            </div><!-- End .content-->
          </div>

          


          <!-- col -->
       


        </div>

      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->


                               @endsection





