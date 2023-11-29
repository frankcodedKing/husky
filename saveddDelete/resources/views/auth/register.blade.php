@extends('layouts.customlayout')

@section('body')
    <div class="main-content">

        <!--header section start-->
        <section class="breadcrumb-section" style="background-image: url('assets/images/70.html')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- breadcrumb Section Start -->
                        <div class="breadcrumb-content">
                            <h5>Register</h5>
                        </div>
                        <!-- Breadcrumb section End -->
                    </div>
                </div>
            </div>
        </section>
        <!--Header section end-->

        <!--login section start-->
        <div class="login-section section-padding login-bg">
            <div class="container">

                <div class="login-admin login-admin1">
                    <div class="login-header text-center">
                        <h6>Register Form</h6>
                    </div>
                    <div class="login-form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="refid" id="refid" value="@php
                                    if (isset($_GET['refid'])) {
                                        echo $_GET['refid'];
                                    }
                                @endphp"
                                        placeholder="Reference ID" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="username" id="username" required
                                        placeholder="Enter your Username" />
                                </div>
                            </div>
                            <hr>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                placeholder="Enter Name" value="{{ old('name') }}" required
                                                autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                                <div class="col-md-6">
                                    <input id="email" type="email" 
                                                class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email"
                                                value="{{ old('email') }}" required autocomplete="email" id="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                                <div class="col-md-6">
                                    <input id="phone" class="form-control" type="phone"
                                    placeholder="Phone Number" class="form-control" name="phone" required
                                    autocomplete="phone">
                                </div>
                            </div>
                            <hr>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="Password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                                    placeholder="Confirm Password" name="password_confirmation" required
                                                    autocomplete="new-password">
                                </div>
                            </div>

                            <!--ID-->


                            <hr>
                            <br>


                            <div class="row">
                                <div class="col-md-6">
                                    <label for="idcard">Upload Any Valid Id</label>
                                    <input type="file" name="idcard" id="idcard" accept="" required />
                                </div>

                                <div class="col-md-6">

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="cols-sm-10">
                                    <div data-sitekey="6Lde--IbAAAAAFosLmTWjmlBTWkbbnD7oc_FOjDB" class="g-recaptcha"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input value="Register" type="submit">
                                </div>
                            </div>


                        </form>
                    </div>
                    <div class="text-center" style="text-transform: uppercase;">
                        <br><br>
                        <a href="{{ route('password.request') }}">Forgot Password</a> | <a href="{{route('login')}}">Login</a>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--login section end-->

    </div>

    <!-- Online Section End -->

    <div class="clearfix"></div>
















    {{-- <div class="container" style="margin-top: 23%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control" name="phone" required autocomplete="phone">
                            </div>
                        </div>

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

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}











                                @endsection
