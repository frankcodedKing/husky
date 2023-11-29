@extends('dashblayout.dashlayout')

@section('body')
    <div class="container">


    <div class="row">

    <div class="col-md-6 mx-auto"  style="margin-top: 100px;">

    
    <div class="header mt-30">
                    <h5 class="title">Deposit funds to account</h5>

                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="">


            <!-- Form -->


            <form action="{{ route('dashb_depositsubmit') }}" method="POST">
                @csrf

                <div class="inputfile">
                    <label class="my-1 me-2" for="">Amount To deposit</label>
                    <input type="number" class="form-control" style="color: black" id="amount" value="" required
                        name="amount" placeholder="Amount" aria-describedby="amount"><br>
                </div>
              

                <div class="mb-4">
                    <label class="form-label">Select Crypto To Deposit In:</label>
                        <!-- <input type="text" value="BTC" class="form-control" id="mainval" name="method" readonly style="background: white;"> -->
                        <select class="form-control" name="method" id="">
                            <option value="btc_address">BITCOIN</option>
                            <option value="eth">ETH</option>
                            <option value="usdt">USDT(erc20)</option> 
                      </select> 
                    </div>

                <button type="submit"
                    style="width:30%;background: green; color:white; border-radius:10px; border:none;padding:10px;">Next</button>


            </form>


            
         
    </div>

    </div>
    </div>

</div>
@endsection