@extends('layouts.customlayout')

@section('body')
    
<div class="container" style="margin-top: 5%">
    <h3>Email Verification</h3>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"  style="background-color: #008864; padding: 10px;">
                <div class="card-header">{{ __('Please Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email, Please check your spam folder or ') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline" style="color: #fff;">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

