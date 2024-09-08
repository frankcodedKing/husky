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
                                        <h2 class="nk-block-title fw-normal">Begin your ID-Verification</h2>
                                        <div class="nk-block-des">
                                            <p>To comply with regulation each participant will have to go through indentity verification (KYC/AML) to prevent fraud causes. </p>
                                        </div>
                                    </div>
                                  
                                <div class="nk-block">
                             
                                            <div class="nk-kycfm-head">
                                                <div class="nk-kycfm-count">01</div>
                                                <div class="nk-kycfm-title">
                                                    <h5 class="title">KYC Document</h5>
                                                    <p class="sub-title">Your id required for identification</p>
                                                </div>
                                            </div><!-- nk-kycfm-head -->

                                            <form method="POST" action="{{route('uploadKyc')}}" enctype="multipart/form-data">
                                                @csrf

                                                <!-- .col -->
                                                <div class="col-md-8">
                                                        <div class="form-group">
                                                          
                                                            
                                                            <div class="form-control-group">
                                                       
                                                        </div>
                                                        </div>
                                                    </div><!-- .col -->

                                                    
                                                   

                                           
                                            
                                            <div class="nk-kycfm-content">
                                                <div class="nk-kycfm-note">
                                                    <em class="icon ni ni-info-fill" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right"></em>
                                                    <p>In order to complete, please upload any of the following personal document.</p>
                                                </div>
                                                <ul class="nk-kycfm-control-list g-3">
                                                    <li class="nk-kycfm-control-item">
                                                        <input class="nk-kycfm-control" type="radio" name="id-proof" id="passport" data-title="Passport" checked="" value="passport">
                                                        <label class="nk-kycfm-label" for="passport">
                                                            <span class="nk-kycfm-label-icon">
                                                                <span class="label-icon">
                                                                  
                                                                </span>
                                                            </span>
                                                            <span class="nk-kycfm-label-text">Passport</span>
                                                        </label>
                                                    </li><!-- .nk-kycfm-control-item -->
                                                    <li class="nk-kycfm-control-item">
                                                        <input class="nk-kycfm-control" type="radio" name="id-proof" id="national-id" data-title="National ID" value="nid">
                                                        <label class="nk-kycfm-label" for="national-id">
                                                            <span class="nk-kycfm-label-icon">
                                                                <span class="label-icon">
                                                          
                                                                </span>
                                                            </span>
                                                            <span class="nk-kycfm-label-text">National ID</span>
                                                        </label>
                                                    </li><!-- .nk-kycfm-control-item -->
                                                    <li class="nk-kycfm-control-item">
                                                        <input class="nk-kycfm-control" type="radio" name="id-proof" id="driver-licence" data-title="Driver's License" value="dl">
                                                        <label class="nk-kycfm-label" for="driver-licence">
                                                            <span class="nk-kycfm-label-icon">
                                                                <span class="label-icon">
                                                                  
                                                                </span>
                                                            </span>
                                                            <span class="nk-kycfm-label-text">Driving License</span>
                                                        </label>
                                                    </li><!-- .nk-kycfm-control-item -->
                                                </ul><!-- nk-kycfm-control-list -->
                                                <h6 class="title">To avoid delays when verifying account, Please make sure bellow:</h6>
                                                <ul class="list list-sm list-checked">
                                                    <li>Chosen credential must not be expired.</li>
                                                    <li>Document should be in good condition and clearly visible.</li>
                                                    <li>Make sure that there is no light glare on the card (flash).</li>
                                                </ul>
                                                <div class="nk-kycfm-upload">
                                                    <h6 class="title nk-kycfm-upload-title">Upload Front Side Here</h6>
                                                    <div class="row align-items-center">
                                                        <div class="col-sm-8">
                                                            <div class="dropzone" id="myAwesomeDropzone">
                                            <di3v class="fallback">
                                                 <input type="file" class="form-control form-control-lg" name="kyc_file" required>
                                        </di3v></div>
                                                        </div>
                                                        <div class="col-sm-4 d-none d-sm-block">
                                                            <div class="mx-md-4">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- nk-kycfm-upload -->
                                                <div class="nk-kycfm-upload">
                                                    <h6 class="title nk-kycfm-upload-title">Upload Back Side Here </h6>
                                                    <div class="row align-items-center">
                                                        <div class="col-sm-8">
                                                             <div class="dropzone" id="myAwesomeDropzone">
                                            <di3v class="fallback">
                                                 <input type="file" class="form-control form-control-lg" name="kyc_file" required>
                                        </di3v></div>
                                                        </div>
                                                        <div class="col-sm-4 d-none d-sm-block">
                                                            <div class="mx-md-4">
                                                               
                                                            </div>
                                                        </div>
                                                        
                                                        <br>
                                                         <hr>
                                                         

                                                    </div>
                                                </div><!-- nk-kycfm-upload -->
                                                
                                                <br>
                                                
                                                <button type="submit" class="btn btn-lg btn-success" fdprocessedid="r6yfdi">Upload</button>  


                                            </div>

                                          
                                            </div>
                                            
                                           
                                           
                                           

                                            
                                        </div><!-- nk-kycfm -->
                                    </div><!-- .card -->
                                                        
                                 
                                            </form>
                                            
                                            
                            
                           
                                            
                            
                            </div> 
                                
                               
                                            
                                            
                           </div><!-- nk-block -->
                    </div>
                </div>





                <!-- Break -->

                <!-- Break -->

                <!-- Break -->

                <!-- Break -->
@endsection