@extends('dashblayout.dashlayout')

@section('body')
    <div class="container">


    <div class="row">

    <div class="col-md-6 mx-auto"  style="margin-top: 100px;">


                    <div class="codetext">
                        <p style="font-color: red; font-weight: 700;">Upload proof of Payment</p>
                         <form method="POST" action="{{route('uploadKyc')}}" enctype="multipart/form-data">
                              @csrf
                            <!--<label for="file">Choose a file:</label>-->
                            <input type="file" name="kyc_file" id="file" required>
                            <button type="submit"
                    style="width:30%;background: #024139; color:white; border-radius:10px; border:none;padding:10px;">Upload</button>


                        </form>
                        
                        <br><br><br>
                        <br><br><br>
                    </div>
                    
                 

                </div>
        
              
            <!-- IF HERER -->
            
            <br>
    </div>
    </div>

</div>
@endsection