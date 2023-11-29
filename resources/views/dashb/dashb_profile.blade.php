@extends('dashblayout.dashlayout')
<style>
    .flex{
        display: flex;
        justify-content: space-between;
        padding: 10px;
    }
    .flex input,.wid input{
        flex-basis: 60%;
        background: transparent!important;
        border: none!important;
        outline: none!important;
        color: black!important;
        font-weight: bold!important;
        display: block;
        font-size: 20px;
        
    }
.wid input{
    display: inline;
    padding: 10px;
    width: 50%;
   
}
    .flex input:focus{
        border: none;
        background: none;
    }
   .flex label{
    display: block;
   }

   .upload {
    position: absolute;
    font-size: 30px;
    bottom: 20;
    right: 17%;
    cursor: pointer;
}
.updatef{
    display: flex;
}
@media (max-width:480px){
    .updatef{
        display: block;
    }
    .upload {
    position: absolute;
    font-size: 30px;
    bottom: 20;
    right: 45%;
    cursor: pointer;
}
}
   /* .image-file{
    position: absolute;
    color: red!important;
    width: 10px;
    border-radius: 50%;
    color: red;
    background: red!important;

   } */
   
</style>
@section('body')

<div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                       <div class="kyc-app wide-sm m-auto">

                       <div class="nk-block-head-content text-center">
                                        <h2 class="nk-block-title fw-normal">Profile Settings</h2>
                                        <div class="nk-block-des">
                                            <!-- <p>To comply with regulation each participant will have to go through indentity verification (KYC/AML) to prevent fraud causes. </p> -->
                                        </div>
                                    </div>
                                  
                                <div class="nk-block">
                                <!-- <form action="https://coinconcord.com/Main/updateKYC" enctype="multipart/form-data" method="post" accept-charset="utf-8"> -->
                                    <div class="card card-bordered">
                                        <div class="nk-kycfm">
                                            <div class="nk-kycfm-head">
                                                <div class="nk-kycfm-count">01</div>
                                                <div class="nk-kycfm-title">
                                                    <h5 class="title">Personal Details</h5>
                                                    <p class="sub-title">Your simple personal information required for identification</p>
                                                </div>
                                            </div><!-- nk-kycfm-head -->
                                            <div class="nk-kycfm-content">
                                                

                                                                                
                                <form method="POST" action="{{route('dashb_profile_save')}}" enctype="multipart/form-data">
                                    @csrf
                                                <div class="row g-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">First Name <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" class="form-control form-control-lg" readonly=""  name="name" value="{{Auth::user()->name}}" fdprocessedid="5ma2v">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" class="form-control form-control-lg" value="doe" readonly="" fdprocessedid="3z3uuk">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Email Address <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" class="form-control form-control-lg" name="email" type="email" value="{{Auth::user()->email}}" readonly="" fdprocessedid="v3kinr">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" class="form-control form-control-lg" name="phone" value="{{Auth::user()->phone}}" readonly="" fdprocessedid="7g39mg">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Date of Birth <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                        <input type="text" class="form-control form-control-lg date-picker-alt" name="birthday" value="{{Auth::user()->birthday}}" required="" fdprocessedid="m4gq28">                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">SSN (optional)<span class="text-danger"></span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                
                                                <input type="text" class="form-control form-control-lg" name="userSSN" fdprocessedid="yrtpyc">                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                </div><!-- .row -->
                                            </div><!-- nk-kycfm-content -->
                                            <div class="nk-kycfm-head">
                                                <div class="nk-kycfm-count">02</div>
                                                <div class="nk-kycfm-title">
                                                    <h5 class="title">Your Address</h5>
                                                    <p class="sub-title">Your simple personal information required for identification</p>
                                                </div>
                                            </div><!-- nk-kycfm-head -->
                                            <div class="nk-kycfm-content">
                                                <div class="nk-kycfm-note">
                                                    <em class="icon ni ni-info-fill" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right"></em>
                                                    <!-- <p>These details cannot be edited once KYC has been approved, enter data carefully.</p> -->
                                                </div>
                                                <div class="row g-4">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Home Address<span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                
                                                <input type="text" class="form-control form-control-lg" name="homeAddress" required="" fdprocessedid="f983ln">                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Zip Code <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                
                                            <input type="text" class="form-control form-control-lg" name="userZip" required="" fdprocessedid="ka7ri6">                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">City <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                               
                                                 <input type="text" class="form-control form-control-lg" name="userCity" required="" fdprocessedid="yamqnm">                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">State <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                
                                             <input type="text" class="form-control form-control-lg" name="userState" required="" fdprocessedid="3zpp1">                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Nationality <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                
                                             <input type="text" class="form-control form-control-lg" name="userNationality" required="" fdprocessedid="v4ho7">                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    
                                                </div><!-- .row -->
                                            </div><!-- nk-kycfm-content -->



                                          
                                            <div class="nk-kycfm-footer">
                                                
                                                
                                                <div class="nk-kycfm-action pt-2">
                                             <button type="submit" class="btn btn-lg btn-success" fdprocessedid="r6yfdi">Submit</button>                                                   
                                                </div>
                                            </div><!-- nk-kycfm-footer -->
                                            </form>
                                            
                                           
                                            
                                           

                                            
                                        </div><!-- nk-kycfm -->
                                    </div><!-- .card -->
                                                        
                            
                            
                           
                                            
                            
                            </div> 
                                
                               
                                            
                                            
                           </div><!-- nk-block -->
                    </div>
                </div>





                <!-- Break -->

                <!-- Break -->

                <!-- Break -->

                <!-- Break -->
@endsection