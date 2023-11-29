@extends('dashblayout.dashlayout')

@section('body')



<div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="components-preview wide-md mx-auto">
                                <div class="nk-block-head nk-block-head-lg wide-sm">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-head-sub"><a class="back-to" href="javascript: history.go(-1)"><em class="icon ni ni-arrow-left"></em><span>(go back)</span></a></div>
                                        <h2 class="nk-block-title fw-normal">Account Security</h2>
                                        <div class="nk-block-des">
                                            <p class="lead">Control your account, change your password</p>
                                        </div>
                                     
                                    </div>
                                </div><!-- nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                                                        <div class="card card-bordered card-preview">
                                        <div class="card-inner">
                                            <div class="card-head">
                                                <h5 class="card-title">Password &amp; Settings</h5>
                                            </div>

                                            <form action="{{ route('changePassword') }}" method="post">

                                            @csrf                
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-5">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Old Password</label>
                                                            <span class="form-note">Provide the old password associated with this account.</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="password" class="form-control" placeholder="" name="current_password" required="" fdprocessedid="qhbloh">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-5">
                                                        <div class="form-group">
                                                            <label class="form-label">New Password</label>
                                                            <span class="form-note">Provide a new password for your account.</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="password" class="form-control" placeholder="" name="new_password" required="" fdprocessedid="7z37gt">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-5">
                                                        <div class="form-group">
                                                            <label class="form-label">Confirm Password</label>
                                                            <span class="form-note">Reconfirm the new password you have created.</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                               <input type="password" class="form-control" id="site-name" placeholder="" name="confirm_password" required="" fdprocessedid="pgoes">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                               
                                              
                                                <div class="row g-3">
                                                    <div class="col-lg-7 offset-lg-5">
                                                        <div class="form-group mt-2">
                                                            <button type="submit" class="btn btn-lg btn-success" fdprocessedid="eehkhh">Update Password</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>                                        </div>
                                    </div><!-- card -->
                                   
                                </div><!-- nk-block -->
                            </div>
                        </div>
                    </div>
                </div>

                
                @endsection