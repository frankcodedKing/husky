@extends('dashblayout.dashlayout')
<style>
    .figure23 {
        display: flex;

        position: relative;
    }

    .figure23 {
        width: 100%;
        margin-bottom: 20px;
    }

    .figure23 input {
        width: 100%;
        margin: 5px 0;
        padding: 5px;

    }

    .figure23 img {
        cursor: pointer;
        width: 100px;
    }

    figure {
        margin: 1px !important;
    }

    #fame {

        padding: 10px;
        margin: 10px;
        width: 100%;
        border-radius: 10px;
        border: 1px solid grey;
        text-align: center;
        cursor: pointer;
    }

    #fame:hover {
        background: lightgoldenrodyellow;
        border: 0.5px solid #14ae85;
        opacity: .7;
    }

    .input-sel {
        padding-left: 30px;
        margin: 10px 0;
    }

    .input-sel select {
        width: 30%;
        border: none;
        border-bottom: 1px solid grey;
        margin: 5px;
        padding: 10px;
        font-weight: 500;
        font-size: 20px;
        position: relative;
    }

    .btc-wid {
        display: none;
    }

    .btc {
        display: block;
    }

    .input-sel option {
        padding: 10px;
        font-weight: 500;
        font-size: 20px;
    }

    .btc-display2 {
        display: none;
    }
input{
    background: white;
    color: black!important;
}

    @media (max-width:768px) {
        .form-style {
            display: grid;
            grid-template-columns: 1fr;

        }
    }

    @media (max-width:480px) {


        .figure23 {
            display: flex;
            position: relative;
            flex-direction: column;
            text-align: center;
            padding: 0;
            width: 95%;
        }

        #fame {
            width: 100% !important;
            padding: 10px;
        }

        .card-body {
            margin-bottom: 90px !important;
        }

        .text-left {
            display: none !important;
            text-align: left !important;
        }
    }
</style>
@section('body')
    <div class="card-header text-center">
        <h4>Fill the form to make withdrawal</h4>
    </div>


    <form action="{{ route('userdashb_withdrawal_post') }}" method="post">

        @csrf

        <div class="card" style="width:80%;margin:auto;">
            <div class="card-body">

                <p class="card-text fw-extrabold text-left">Minimum Withdrawal : {{ $user_fund->withdrawal_minimum }}</p>
                <p class="card-text fw-extrabold  text-left">Maximum Withdrawal : {{ $user_fund->withdrawal_maximum }} </p>
                <div class="input-sel">
                    <img src="{{ asset('dashb/images/image2.svg') }}" alt="">
                    <select name="coininfo" id="">

                        <option value="USD">USD</option>
                    </select>
                </div>
                <figure class="figure23">
                    <div id="fame" class="fame1" title="withdraw with BTC">
                        <img src="{{ asset('dashb/images/s-btc.png') }}" alt="" id="1">

                    </div>
                    <div id="fame" class="fame2" title="withdraw with ETH">
                        <img src="{{ asset('dashb/images/s-eth.png') }}" alt="" id="1">

                    </div>
                    <div id="fame" class="fame3" title="withdraw with USDT">
                        <img src="{{ asset('dashb/images/s-usdt.png') }}" alt="" id="1">

                    </div>

                </figure>
                <div class="">

                    <div class="mb-4">
                        <input type="text" class="form-control" id="amount" value="" required name="amount"
                            placeholder="Enter Withdraw Amount" aria-describedby="amount" style="background: white;"><br>

                    </div>
                    <div class="mb-4">
                        <input type="text" value="BTC" class="form-control" id="mainval" name="method" readonly style="background: white;">
                        {{-- <select class="form-control" name="method" id="">
                            <option value="Btc">BITCOIN</option>
                            <option value="Eth">ETH</option>
                            <option value="USDT">USDT</option> --}}
                        <!--<option value="PAYPAL">PAYPAL</option>-->
                        <!--<option value="XRP">XRP</option>-->
                        {{-- </select> --}}
                    </div>


                    <input type="text" class="form-control" id="methodAccount" required value="" name="address"
                        placeholder="Enter Address" aria-describedby="amount" style="background: white;"><br>
                    <br>

                </div>

                <div class="mb-4 btc-display2">
                    <p style="color: black;">Address Type*</p>
                    <select name="ercaddresstype" id="address" style="padding:10px;cursor: pointer;">
                        <option value="">select </option>
                        <option value="legacy">ERC20</option>

                    </select>
                </div>

                <div class="nothingday"></div>
                {{-- <a href="#" class="btn btn-primary">Withdraw</a> --}}
                <button type="submit" class="btn btn-primary" style="width:30%;background: #14ae85; color:white; border-radius:10px; border:none;padding:10px;"> Withdraw </button>
            </div>
        </div>

    </form>
    <script>
        let fameOne = document.querySelector('.fame1')
        let fameTwo = document.querySelector('.fame2')
        let fameThree = document.querySelector('.fame3')
        let displayOne = document.querySelector('.btc')
        let mainVal = document.getElementById('mainval')
        let btcDisplay = document.querySelector('.btc-display2')

        fameOne.addEventListener('click', () => {
            console.log('this is the file ')
            mainVal.value = 'BTC'
            btcDisplay.style.display = 'none'
         
        })
        fameTwo.addEventListener('click', () => {
            mainVal.value = 'ETH'
            btcDisplay.style.display = 'none'
        })
        fameThree.addEventListener('click', () => {
            mainVal.value = 'USDT'
            btcDisplay.style.display = 'block'
        })
    </script>
@endsection
