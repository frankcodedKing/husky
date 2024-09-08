@extends('dashblayout.dashlayout')

@section('body')






<div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="components-preview wide-md mx-auto">
                                <div class="nk-block-head nk-block-head-lg wide-sm">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-head-sub"><a class="back-to" href="javascript: history.go(-1)"><em class="icon ni ni-arrow-left"></em><span>(go back)</span></a></div>
                                        <h2 class="nk-block-title fw-normal"> Referrals</h2>
                                        <div class="nk-block-des">
                                            <p class="lead">Preview your referrals. View the complete list of people whom have signed up with your unique code.</p>
                                        </div>
                                    </div>
                                </div><!-- nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                    





                                     <div class="card card-bordered">
                                    <div class="nk-refwg">
                                        <div class="nk-refwg-invite card-inner">
                                            <div class="nk-refwg-head g-3">
                                                <div class="nk-refwg-title">
                                                    <h5 class="title">Refer Us &amp; Earn</h5>
                                                    <div class="title-sub">Use the below link to invite your friends.</div>
                                                </div>
                                               
                                                <div class="nk-refwg-action">
                                                    <a href="{{ route('register') }}?refid={{ Auth::user()->id }}" class="btn btn-success" target="_blank">Invite</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="nk-refwg-url">
                                                <div class="form-control-wrap">
                                                    <div class="form-clip clipboard-init" data-clipboard-target="#refUrl" data-success="Copied" data-text="Copy Link"><em class="clipboard-icon icon ni ni-copy"></em> <span class="clipboard-text">Copy Link</span></div>
                                                    <div class="form-icon">
                                                        <em class="icon ni ni-link-alt"></em>
                                                    </div>
                                                    <input type="text" class="form-control copy-text" id="refUrl" value="{{ route('register') }}?refid={{ Auth::user()->id }}" fdprocessedid="g0i94y">
                                                </div>
                                            </div>
                                        </div><!-- .nk-refwg-invite -->
                                        <div class="nk-refwg-stats card-inner bg-lighter">
                                            <div class="nk-refwg-group g-3">
                                                <div class="nk-refwg-name">
                                                    <h6 class="title">My Referrals <em class="icon ni ni-info" data-toggle="tooltip" data-placement="right" title="" data-original-title="Referral Informations"></em></h6>
                                                </div>
                                                <div class="nk-refwg-info g-3">
                                                    <div class="nk-refwg-sub">
                                                        <div class="title">
                                                        {{ $all_ref->count() }}                                                        </div>
                                                        <div class="sub-text">Total Referred</div>
                                                    </div>
                                                    <div class="nk-refwg-sub">
                                                        <div class="title">{{ $funds->bonus }}</div>
                                                        <div class="sub-text">Bonus Earned</div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="nk-refwg-ck">
                                                <canvas class="chart-refer-stats" id="refBarChart"></canvas>
                                            </div>
                                        </div><!-- .nk-refwg-stats -->
                                    </div><!-- .nk-refwg -->
                                </div><!-- .card -->
                                    
                                </div><!-- nk-block -->
                            </div>
                        </div>
                    </div>
                </div>












<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">Name</th>
                        <th class="border-0">Reg Date</th>
                        <th class="border-0">Email</th>
                       
                    </tr>
                </thead>
                
                <tbody>
                    @if ($all_ref->count()>0)
                    @foreach ($all_ref as $ref)
                    <tr style="color: black">
                        <td class="text-dark">
                         
                            {{$loop->index + 1}}
                         

                        </td>
                        
                        <td class="text-dark">{{$ref->newusername}}</td>
                        <td class="text-dark">{{Carbon\Carbon::parse($ref->created_at)->diffForHumans()}}</td>

                        <td class="text-dark">{{$ref->newuseremail}}</td>

                      </tr>
                    @endforeach
                @else

                <tr>
                    <td colspan="4">
                        <h5 class="text-yellow hover-warning"> You have no referral, please share yout referral link to family and friends to earn referral bonus</h5>
                    </td>
                </tr>

                @endif


                </tbody>





            </table>
        </div>
    </div>
</div>



@endsection
