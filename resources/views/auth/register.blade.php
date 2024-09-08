@extends('layouts.customlayout')

@section('body')
 
 <main id="main">

<!-- ======= About Section ======= -->
   <section id="about" class="about">
     <div class="container" data-aos="fade-up">

       <div class="row no-gutters">


         <!-- col1 -->

         
         <div class="col-xl-6 d-flex align-items-stretch" style="margin-top: 60px;">
           <div class="icon-boxes d-flex flex-column justify-content-center">
             <div class="row">
               <h4>Create an account
                 </h4>
                 <p>Provide essential details to get started with an Account! </p>
                 <form method="POST" action="{{ route('register') }}">
                   @csrf

                    <div class="form-group">
                     <!-- <label for="exampleInputEmail1">Username</label> -->
                     <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Enter Firstname">
                     
                   </div>
                   <br>

                   <div class="form-group">
                     <!-- <label for="exampleInputEmail1">Name</label> -->
                     <input id="name" class="form-control"  type="text"
                     class="form-control @error('name') is-invalid @enderror" name="name"
                     placeholder="Enter Lastname" value="{{ old('name') }}" required
                     autocomplete="name">
                 @error('name')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror

                     
                   </div>
                   <br>

                    <div class="form-group" style="margin-top: 5px;">
                     <!-- <label for="exampleInputEmail1">Email address</label> -->
                     <input id="email" type="email" 
                     class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email"
                     value="{{ old('email') }}" required autocomplete="email" id="email">

                 @error('email')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror                      
                   </div>
                   <br>
                    
                   <div class="form-group">
                     <!-- <label for="exampleInputEmail1">Phone</label> -->
                     <input id="phone" class="form-control" type="phone"
                     placeholder="Phone Number" class="form-control" name="phone" required
                     autocomplete="phone">
                   </div>
<br>
                   <div class="form-group">
                     <!-- <label for="exampleInputPassword1">Password</label> -->
                     <input id="password" type="password" placeholder="Password"
                     class="form-control @error('password') is-invalid @enderror"
                     name="password" required autocomplete="new-password">

                 @error('password')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror                    </div>
                   <br>
                  
                   <div class="form-group">
                     <!-- <label for="exampleInputPassword1">Confirm Password</label> -->
                     <input id="password-confirm" type="password" class="form-control"
                     placeholder="Confirm Password" name="password_confirmation" required
                     autocomplete="new-password">                    </div>
                   <br>
                
                <div class="form-group">
                     <!-- <label for="exampleInputEmail1">Refferal id</label> -->
                     <input type="text" class="form-control" name="refid" id="exampleInputEmail1" value="@php
                     if (isset($_GET['refid'])) {
                         echo $_GET['refid'];
                     }
                 @endphp"
                         placeholder="Referral ID (Optional)" />
                   </div>

                   <br>
                   
                   <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                   
<br><br>
                   <button type="submit" class="btn btn-success btn-lg" style="width: 50%; background-color: #024139;">
                    Sign up
                   </button>
                 </form>
             </div>
           </div><!-- End .content-->
         </div>


         <!-- col -->
         <div class="content col-xl-6 d-flex align-items-center">
           <div class="content" style="text-align: center;">
             <!-- <h3>Register an account with us today !</h3> -->
             <p>
               <!-- Create an account with us in five easy steps. -->
             </p>

             <div class="nk-feature-img">
             
               <img class="round" src="{{asset('assets/fronto/assets/img/IMG_0254.JPG')}}"  alt="" style="width: 100%;">
           </div>
           <br>

              <p>
              Or Already have an account 
             </p>
             <a href="login" class="about-btn text-dark"><span>Login</span> <i class="bx bx-chevron-right"></i></a>
             
           </div>
         </div>


       </div>

     </div>
   </section><!-- End About Section -->

 </main><!-- End #main -->






                                @endsection
