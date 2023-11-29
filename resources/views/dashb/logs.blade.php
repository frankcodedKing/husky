@extends('dashblayout.dashlayout')

@section('body')

 <!-- wrap @s -->
  <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="components-preview wide-md mx-auto">
                                <div class="nk-block-head nk-block-head-lg wide-sm">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-head-sub"><a class="back-to" href="javascript: history.go(-1)"><em class="icon ni ni-arrow-left"></em><span>(go back)</span></a></div>
                                        <h2 class="nk-block-title fw-normal">Account Log Activities</h2>
                                        <div class="nk-block-des">
                                            <p class="lead"><strong>CoinConcord</strong> understands the need for <strong>real security. Which is why we log every account activity to ensure safety at all times.</strong> Preview your login history below.</p>
                                        </div>
                                    </div>
                                </div><!-- nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Account Logs</h4>
                                            <p>The following contains the sign in history of Evelyn17chow@gmail.com</p>
                                        </div>
                                                          
                                                                            </div>
                                    <div class="card card-bordered card-preview">
                                        <table class="table table-tranx">
                                            <thead>
                                                <tr class="tb-tnx-head">
                                                    <th class="tb-tnx-id"><span class="">S/N</span></th>
                                                    <th class="tb-tnx-info">
                                                        <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                            <span>IP Address</span>
                                                        </span>
                                                        <span class="tb-tnx-date d-md-inline-block d-none">
                                                            <span class="d-md-none">Device</span>
                                                            <span class="d-none d-md-block">
                                                                <span>Device Used</span>
                                                                <span>Browser Used</span>
                                                            </span>
                                                        </span>
                                                    </th>
                                                    <th class="tb-tnx-amount is-alt">
                                                        <span class="tb-tnx-total">Location</span>
                                                        <span class="tb-tnx-status d-none d-md-inline-block">Log Status</span>
                                                    </th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                                                                    <tr class="tb-tnx-item">
                                                    <td class="tb-tnx-id">
                                                        <a href="#"><span>1</span></a>
                                                    </td>
                                                    <td class="tb-tnx-info">
                                                        <div class="tb-tnx-desc">
                                                            <span class="title">185.202.221.248</span>
                                                        </div>
                                                        <div class="tb-tnx-date">
                                                            <span class="date">Mac OS X</span>
                                                            <span class="date">Safari 605.1.15</span>
                                                        </div>
                                                    </td>
                                                    <td class="tb-tnx-amount is-alt">
                                                        <div class="tb-tnx-total">
                                                            <span class="amount">Los Angeles, United States</span>
                                                        </div>
                                                        <div class="tb-tnx-status">
                                                            <span class="badge badge-dot badge-success">SUCCESSFUL</span>                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                                                                                    <tr class="tb-tnx-item">
                                                    <td class="tb-tnx-id">
                                                        <a href="#"><span>3</span></a>
                                                    </td>
                                                    <td class="tb-tnx-info">
                                                        <div class="tb-tnx-desc">
                                                            <span class="title">185.202.221.247</span>
                                                        </div>
                                                        <div class="tb-tnx-date">
                                                            <span class="date">Mac OS X</span>
                                                            <span class="date">Safari 605.1.15</span>
                                                        </div>
                                                    </td>
                                                    <td class="tb-tnx-amount is-alt">
                                                        <div class="tb-tnx-total">
                                                            <span class="amount">Los Angeles, United States</span>
                                                        </div>
                                                        <div class="tb-tnx-status">
                                                            <span class="badge badge-dot badge-danger">FAILED</span>                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                                                                                    <tr class="tb-tnx-item">
                                                    <td class="tb-tnx-id">
                                                        <a href="#"><span>4</span></a>
                                                    </td>
                                                    <td class="tb-tnx-info">
                                                        <div class="tb-tnx-desc">
                                                            <span class="title">185.202.221.247</span>
                                                        </div>
                                                        <div class="tb-tnx-date">
                                                            <span class="date">Mac OS X</span>
                                                            <span class="date">Safari 605.1.15</span>
                                                        </div>
                                                    </td>
                                                    <td class="tb-tnx-amount is-alt">
                                                        <div class="tb-tnx-total">
                                                            <span class="amount">Los Angeles, United States</span>
                                                        </div>
                                                        <div class="tb-tnx-status">
                                                            <span class="badge badge-dot badge-danger">FAILED</span>                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                                                                                    <tr class="tb-tnx-item">
                                                    <td class="tb-tnx-id">
                                                        <a href="#"><span>5</span></a>
                                                    </td>
                                                    <td class="tb-tnx-info">
                                                        <div class="tb-tnx-desc">
                                                            <span class="title">185.202.221.247</span>
                                                        </div>
                                                        <div class="tb-tnx-date">
                                                            <span class="date">Mac OS X</span>
                                                            <span class="date">Safari 605.1.15</span>
                                                        </div>
                                                    </td>
                                                    <td class="tb-tnx-amount is-alt">
                                                        <div class="tb-tnx-total">
                                                            <span class="amount">Los Angeles, United States</span>
                                                        </div>
                                                        <div class="tb-tnx-status">
                                                            <span class="badge badge-dot badge-danger">FAILED</span>                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                                                  
                                                                                                   
                                                                                                    
                                               
                                               
                                            </tbody>
                                        </table>
                                    </div><!-- .card-preview -->
                                </div><!-- nk-block -->
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main header @e -->
                <!-- content @s -->
              
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->

            @endsection