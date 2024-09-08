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
                  <p>Provide your credentials to access your Aspen financial management account.</p>
                  
                   @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                   

                     <div class="form-group" style="margin-top: 5px;">
                      <label for="exampleInputEmail1">Email address</label>
                      <br>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    
              <br>
              
             
              <p>Remember your password?<strong><a href="/login"> Login Now </a></strong></p>


                   <div style="text-align: center;">
                   <button type="submit" class="btn btn-success btn-lg" style="width: 50%; justify-content: center; background-color: #024139;">
                     Reset Password 
                    </button>
                   </div>

                    <br>
                    <p style="text-align: center;"><strong>-OR-</strong></p>
                    <!-- <br> -->
                    <p style="text-align: center;">Do not have an account? <strong><a href="/joinus">Sign up here</a></strong></p>

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





