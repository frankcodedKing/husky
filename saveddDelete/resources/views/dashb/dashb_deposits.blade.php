@extends('dashblayout.dashlayout')
<style>
    form {
        width: 90% !important;
        margin: auto;
    }
    .figure23 {
        display: flex;
        position: relative;
    }
    .figure23 {
        width: 100%;
        padding-left: 35px;
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
        width: 20%;
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
    .display1 input {
        border: none;
        border-bottom: 1px solid grey;
    }
    .display3 input {
        padding: 10px;
        margin: 10px;
    }
    .display2 input {
        padding: 10px;
        margin: 10px;
    }
    .display2,
    .display3 {
        display: none;
    }
    .display1 P,
    .display2 P,
    .display3 P {
        color: black !important;
    }
    .method1,
    .method2,
    .method3 {
        display: none;
    }
    .method1 {
        display: block;
        color: black !important;
    }
    .method1 p,
    .method2 p,
    .method3 p {
        color: black !important;
    }
    .Qr-code {
        display: flex;
        justify-content: space-around;
                      
        
        padding: 30px;
        position: absolute;
        flex-wrap: wrap;
        height: 100%;
        width: 80%;
        background: white;
        
        top: 7%;  
        overflow: hidden;
    }
    .Qr-code p {
        color: black;
    }
    .Qr-code h3 {
        color: black;
        font-size: 16px;
        border-bottom: 1px solid;
    }
    .Qr-code img {
        width: 170px;
        height: 170px;
    }
    .coin {
        border: none;
        font-size: 20px;
        width: 74px;
        border-bottom: none !important;
        font-weight: 300;
    }
    .display1 {
        margin-top: 10px;
    }
    .form-style {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    .method {
        padding-left: 30px;
        margin: 10px;
    }
    #address {
        width: 30%;
        border: none;
        border-bottom: 1px solid grey;
    }
    .inputfile {
        position: absolute;
        top: 0;
        opacity: 0;
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
    .btc-display2 {
        display: none;
    }
    .input-sel option {
        padding: 10px;
        font-weight: 500;
        font-size: 20px;
    }
    #goingback {
        position: absolute;
        top: 1%;
        left: 1%;
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
        .display1 input {
            width: 90%;
            padding: 20px;
            border-radius: 10px;
          
        }
        .Qr-code img {
            width: 140px;
            height: 140px;
        }
        .Qr-code {
            display: block;
            margin: 0;
          
            padding-top: 40px;
            left: 0;
            width: 100%;
        }
        .Qr-code ul {
            padding: 10px;
            width: 80%;
        }
        .Qr-code h3 {
            font-size: 3vw;
        }
        #fame{
            width: 100%!important;
            padding: 10px;
        }
    }
</style>

@section('body')
    <div class="container">

        <div class="row card">


            <div class="card-header text-center">
                <h4>Deposit</h4>
            </div>
            <div class="input-sel">
                <img src="{{ asset('dashb/images/image2.svg') }}" alt="">
                <select name="coininfo" id="">

                    <option value="USD">USD</option>
                </select>
            </div>
            <figure class="figure23">
                <div id="fame" class="fame1" title="Deposit with BTC">
                    <img src="{{ asset('dashb/images/s-btc.png') }}" alt="" id="1">

                </div>
                <div id="fame" class="fame2" title="Deposit with ETH">
                    <img src="{{ asset('dashb/images/s-eth.png') }}" alt="" id="1">

                </div>
                <div id="fame" class="fame3" title="Deposit with USDT">
                    <img src="{{ asset('dashb/images/s-usdt.png') }}" alt="" id="1">

                </div>

            </figure>
            <figure class="24">
                <form class="display1">
                    <h6 style="color: black;">Indicative amount</h6>
                    <figure class="form-style">
                        <div><label for=""style="color:#14ae85;">Deposit Amount</label> <br>
                            <input type="TEXT" required value="BTC" class="coin" id="coinid" placeholder="Coin" readonly>
                            <input type="number"  required value="" id="coininput" placeholder="Coin Amount"
                                oninput="getpriceofcoin()">
                        </div>
                        <div><label for="amount to pay" style="color:#14ae85;"> Amount To Pay</label> <br>
                            <input type="TEXT" value="USD" class="coin" readonly>
                            <input type="number" placeholder="USD value" value="" oninput="updatcoins()"
                                id="amountinput">
                        </div>
                    </figure>
                    <p id="coinrate">Rate </p>

                </form>

            </figure>
            <div class="mb-4 method">
                <div class="method1">
                    <p><strong style="color:#14ae85;">Info:</strong>Description</p>
                    <P> <strong style="color:#14ae85;">Method:</strong> Deposit With BTC</P>
                </div>
                <div class="method2">
                    <p><strong style="color:#14ae85;">Info:</strong>Description</p>
                    <P> <strong style="color:#14ae85;">Method:</strong> Deposit With ETH</P>
                </div>
                <div class="method3">
                    <p><strong style="color:#14ae85;">Info:</strong>Description</p>
                    <P> <strong style="color:#14ae85;">Method:</strong> Deposit With USDT</P>
                </div>
                {{-- <div class="mb-4 btc-display">
                    <p style="color: black;">Address Type*</p>
                    <select name="address" id="address" style="padding:10px;cursor: pointer;">
                        <option value="">select type</option>
                        <option value="legacy">Legacy</option>
                        <option value="p2sh-segwit">p2sh-segwit(default)</option>
                    </select>
                </div> --}}
                <div class="mb-4 btc-display2">
                    <p style="color: black;">Address Type*</p>
                    <select name="address" id="address" style="padding:10px;cursor: pointer;">
                        <option value="">select </option>
                        <option value="legacy">ERC20</option>

                    </select>
                </div>
            </div>

            <!-- Form -->
            <form action="{{ route('dashb_depositsubmit') }}" method="POST">
                @csrf

                <div class="mb-4 inputfile">
                    <label class="my-1 me-2" for="">Amount To deposit</label>
                    <input type="number" class="form-control" style="color: black" id="amount" value="" required
                        name="amount" readonly placeholder="Amount" aria-describedby="amount"><br>
                </div>
                <div class="mb-4 inputfile">
                    <label class="my-1 me-2" for="">Payment Method</label>
                    <input style="color: black" required type="text" class="form-control" id="methodAccount" value="btc_address"
                        readonly name="method">
                    <br>
                </div>



                <button type="submit"
                    style="width:30%;background: #14ae85; color:white; border-radius:10px; border:none;padding:10px;">Deposit</button>


            </form>

        </div>

            @if (Session::has('address'))
                <div class="Qr-code">
                    <button class="btn btn-primary" id="goingback"> back</button>
                    <div class="code">
                        <p>please scan this QR code:</p>
                        <div id="qrcode"></div>
            {{-- <img src="{{ asset('assets/images/qr.jpg') }}" alt=""> --}}
            </div>
                    <div class="codetext">
                        <p>or send funds to the address provided {{ Session::get('type') }} address below</p>
                        <h3>
                            <h4 id="add">{{ Session::get('address') }}</h4>
                        </h3>
                        <ul>
                            <small>important</small>
                            <li>send only the required amount to this address</li>
                            <li>sending any other currency to this address may result to loss of funds </li>
                        </ul>
                    </div>
                </div>
                <script type="text/javascript">
                    new QRCode(document.getElementById("qrcode"), document.getElementById('add').innerHTML);
                </script>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode-2"), {
                        text: "https://webisora.com",
                        width: 128,
                        height: 128,
                        colorDark: "#5868bf",
                        colorLight: "#ffffff",
                        correctLevel: QRCode.CorrectLevel.H
                    });
                </script>
            @endif



        </div>

    <script>
        const fameOne = document.querySelector('.fame1')
        const fameTwo = document.querySelector('.fame2')
        const fameThree = document.querySelector('.fame3')
        const displayOne = document.querySelector('.display1')
        const coininput = document.getElementById('coininput')
        const amountinput = document.getElementById('amountinput')
        const coinrate = document.getElementById('coinrate')
        const method1 = document.querySelector('.method1')
        const method2 = document.querySelector('.method2')
        const method3 = document.querySelector('.method3')
        var coin = document.getElementById("coinid")
        const backWard = document.getElementById('goingback')
        const Q = document.querySelector('.Qr-code')
        displayOne.style.display = 'block'
        fameOne.addEventListener('click', showUp)
        fameTwo.addEventListener('click', showUp1)
        fameThree.addEventListener('click', showUp2)
        const btcD = document.querySelector('.btc-display2')
        backWard.addEventListener('click', ()=>{
            Q.style.display = 'none'
        })
        function showUp() {
            coin.value = "BTC"
            getpriceofcoin()
            fameOne.style.border = '1px solid green'
            fameTwo.style.border = '1px solid grey'
            fameThree.style.border = '1px solid grey'
            method1.style.display = 'block'
            method2.style.display = 'none'
            method3.style.display = 'none'
            btcD.style.display = 'none'
        }
        function showUp1() {
            coin.value = "ETH"
            getpriceofcoin()
            fameOne.style.border = '1px solid grey'
            fameTwo.style.border = '1px solid green'
            fameThree.style.border = '1px solid grey'
            method1.style.display = 'none'
            method2.style.display = 'block'
            method3.style.display = 'none'
            btcD.style.display = 'none'
        }
        function showUp2() {
            coin.value = "USDT"
            getpriceofcoin()
            displayOne.style.display = 'block'
            fameOne.style.border = '1px solid grey'
            fameTwo.style.border = '1px solid grey'
            fameThree.style.border = '1px solid green'
            console.log('mine')
            method1.style.display = 'none'
            method2.style.display = 'none'
            method3.style.display = 'block'
            btcD.style.display = 'block'
        }
        function getpriceofcoin() {
            if (coin.value == "USDT") {
                document.getElementById('amount').value = coininput.value
                coinrate.innerHTML = "Rate:1" + coin.value + ": " + "1 USD"
                amountinput.value = coininput.value
                document.getElementById('methodAccount').value = coin.value
            } else {
                var Url = "https://api.binance.com/api/v3/ticker/price?symbol=" + coin.value + "USDT"
                // optional parameters
                const othePram = {
                    headers: {
                        "content-type": "application/json;charset=UTF-8",
                        "Cache-Control": null,
                        "X-Requested-With": null
                    },
                    method: "GET"
                }
                fetch(Url)
                    .then(data => {
                        return data.json()
                    })
                    .then(res => {
                        coinrate.innerHTML = "Rate:1" + coin.value + ": " + res.price + "USD"
                        var amountinusd = coininput.value * res.price
                        amountinput.value = amountinusd
                        document.getElementById('methodAccount').value = coin.value
                        if (coin.value == "BTC") {
                            document.getElementById('methodAccount').value = 'btc_address'
                        }
                        document.getElementById('amount').value = amountinusd
                    })
                    .catch(error => console.log(error))
            }
        }
        function updatcoins() {
            if (coin.value == "USDT") {
                document.getElementById('amount').value = coininput.value
                coinrate.innerHTML = "Rate:1" + coin.value + ": " + "1 USD"
                coininput.value = amountinput.value
                document.getElementById('methodAccount').value = coin.value
            } else {
                var Url = "https://api.binance.com/api/v3/ticker/price?symbol=" + coin.value + "USDT"
                // optional parameters
                const othePram = {
                    headers: {
                        "content-type": "application/json;charset=UTF-8",
                        "Cache-Control": null,
                        "X-Requested-With": null
                    },
                    method: "GET"
                }
                fetch(Url)
                    .then(data => {
                        return data.json()
                    })
                    .then(res => {
                        coinrate.innerHTML = "Rate:1" + coin.value + ": " + res.price + "USD"
                        var amountinusd = coininput.value * res.price
                        coininput.value = amountinput.value / res.price
                        document.getElementById('methodAccount').value = coin.value
                        if (coin.value == "BTC") {
                            document.getElementById('methodAccount').value = 'btc_address'
                        }
                        document.getElementById('amount').value = amountinusd
                    })
                    .catch(error => console.log(error))
            }
        }
    </script>
@endsection