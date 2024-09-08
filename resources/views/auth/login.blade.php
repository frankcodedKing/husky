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
                <h4 style="text-align: center;">Welcome !
                  </h4>
                  
                  <p>Provide your credentials to access your account.</p>
                  <form method="POST" action="{{ route('login') }}">
                    @csrf

                   

                     <div class="form-group" style="margin-top: 5px;">
                      <label for="exampleInputEmail1">Email address</label>
                      <input id="email" type="email" 
                      class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email"
                      value="{{ old('email') }}" required autocomplete="email" id="email">

                               
                    </div>
                    <br>
                  

                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input id="password" type="password" placeholder="Password"
                      class="form-control @error('password') is-invalid @enderror"
                      name="password" required autocomplete="new-password">

              <br>
              
             
              <p>Forgot your password?<strong><a href="/password/reset"> Reset Password </a></strong></p>


                   <div style="text-align: center;">
                   <button type="submit" class="btn btn-success btn-lg" style="width: 25%; justify-content: center; background-color: #024139;">
                     Login 
                    </button>
                   </div>

                    <br>
                    <p style="text-align: center;"><strong>-OR-</strong></p>
                    <!-- <br> -->
                    <p style="text-align: center;">Do not have an account? <strong><a href="/register">Sign up here</a></strong></p>

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
