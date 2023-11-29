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
                                                            <div class="form-label-group">
                                                                <label class="form-label">To avoid delays when verifying account, Please make sure to <span class="text-danger">*</span></label>
                                                                
                                                            </div>
                                                            <ul>
                                                                <li class="li" style="font-size: 15px;" >1. Chosen credential must not be expired</li>
                                                                <li class="li" style="font-size: 15px;">2. Document should be in good condition and visible</li>
                                                                <li class="li" style="font-size: 15px;">3. Make sure there is no light glare on the card</li>
                                                                </ul>
                                                            <div class="form-control-group">
                                                                
                                                        <input type="file" class="form-control form-control-lg" name="kyc_file" required> 
                                                        
                                                        </div>
                                                        </div>
                                                    </div><!-- .col -->

                                                    <div class="nk-kycfm-footer">
                                                
                                                
                                                <div class="nk-kycfm-action pt-2">
                                             <button type="submit" class="btn btn-lg btn-success" fdprocessedid="r6yfdi">Upload</button>                                                   
                                                </div>
                                            </div><!-- nk-kycfm-footer -->

                                                   

                                                
                                            </form>

                                           

                                            </div>
                                            
                                           

                                            
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