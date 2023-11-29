@extends('dashblayout.dashlayout')
@section('body')
    <style>
        .anchor {
            display: flex;
            justify-content: center;

            position: fixed;
            top: 7%;
            z-index: 10000;

            -webkit-animation: slide-in-fwd-tr 0.4s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
            animation: slide-in-fwd-tr 0.4s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
            visibility: hidden;
        }

        @-webkit-keyframes slide-in-fwd-tr {
            0% {
                -webkit-transform: translateZ(-1400px) translateY(-800px) translateX(1000px);
                transform: translateZ(-1400px) translateY(-800px) translateX(1000px);
                opacity: 0;
            }

            100% {
                -webkit-transform: translateZ(0) translateY(0) translateX(0);
                transform: translateZ(0) translateY(0) translateX(0);
                opacity: 1;
            }
        }

        @keyframes slide-in-fwd-tr {
            0% {
                -webkit-transform: translateZ(-1400px) translateY(-800px) translateX(1000px);
                transform: translateZ(-1400px) translateY(-800px) translateX(1000px);
                opacity: 0;
            }

            100% {
                -webkit-transform: translateZ(0) translateY(0) translateX(0);
                transform: translateZ(0) translateY(0) translateX(0);
                opacity: 1;
            }
        }

        .annie {

            visibility: visible;
        }

        .invest__pop-up {
            width: 100%;
            border: 1px solid #19d895;
            padding: 15px;
            text-transform: capitalize;
            background: white;
        }

        .investment__amount {
            border: 1px solid grey;
        }

        .investment__review {
            border: 1px solid #19d895;
            background-color: #19d895;
        }

        .invest__amount {
            display: flex;
            justify-content: space-around;
            align-items: center;
            border: 1px solid #19d895;
        }

        .invest__form-section {
            border: 1px solid rgb(243, 237, 237);
            margin: 2px;
        }

        .invest__input {
            display: flex;
            gap: 2%;
            justify-content: space-between;
            margin: 10px 0;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid rgb(243, 237, 237);
        }

        .invest__input figcaption:last-child {
            flex-basis: 70%;
        }

        .invest__input figcaption:last-child span input {
            width: 90%;
            height: 39px;
            padding: 3px;
            background: rgb(243, 237, 237);
            border: 2px solid rgb(243, 237, 237);
        }

        .invest__input figcaption:last-child span input:focus {
            background: rgb(243, 237, 237) !important;
            border: 1px solid rgb(243, 237, 237) !important;
        }

        .invest__input figcaption:last-child span:after {
            content: "USD";
            border-bottom-right-radius: 10px;
            border-top-right-radius: 10px;
            background: lightgray;
            padding: 10px 5px;
        }

        .invest__flex {
            display: flex;
            justify-content: space-between;
        }

        .invest__flex span {
            flex-basis: 50%;
            display: block;
        }

        .invest__flex input {
            width: 80% !important;
        }

        .p_section {
            display: flex;
            justify-content: space-around;
        }

        .investment__review-form {
            background-color: white;
        }

        .investment__review h2 {
            padding: 10px;
            margin: 0;
            color: white;
        }

        .invest__pop-up .closed {
            width: 100%;
            border: none;
            margin-top: 20px;
            background: #19d895;
            padding: 10px;
            cursor: pointer;
        }

        .new__invest {
            display: flex;
            justify-content: space-between;
        }

        @media (max-width:768px) {

            .invest__input {
                display: block;
            }

            .invest__input figcaption:last-child span input {
                width: 88%;
                height: 39px;
                padding: 3px;
                background: rgb(243, 237, 237);
                border: 2px solid rgb(243, 237, 237);
            }
        }

        .invest__flex input {
            width: 75% !important;
        }

        .row {
            /* display: -webkit-box; */
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            width: 90%;
            flex-wrap: wrap;
            margin: 0 !important;
        }
    </style>




    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Investment Plans
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Investment Packages</a></li>
            <li class="breadcrumb-item active">Plans</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="margin-top:5%">
        <!-- START Card With Image -->
        <div class="row">
            @if (isset($plans) && $plans->count() > 0)
                @foreach ($plans as $plan)
                    <div class="col-md-4">
                        <div class="card " style="padding:0px!important;box-shadow: 0 2px 28px rgb(0 0 0 / 10%);">
                            <!--<img class="card-img-top" src="{{ asset('images/plans/plan' . ($loop->index + 1) . '.png') }}" alt="Card image" style="height:250px;">-->
                            <div class="card-body" style="padding:0;">
                                <h2 class="card-title text-center">{{ $plan->name }}</h2>
                                <div
                                    style="background-image: linear-gradient(to right bottom, #19d895, #008864)!important;border-radius:7px;">
                                    <br>
                                    <h3 class="card-title text-center">{{ $plan->name }}</h3>
                                    <h3 class="mb-3 text-center" style="color:white;padding-top: 20px;">
                                        @if ($plan->percentage == 0.42)
                                            11% - 15% ROI
                                        @elseif ($plan->percentage == 0.64)
                                            16%-20% ROI
                                        @else
                                            21%-25% ROI
                                        @endif
                                    </h3>
                                    <div class="row" style="color:white;">
                                        <div class="col-6">
                                            <h6 class="text-center">${{ $plan->minimum }}</h6>
                                            <h6 class="text-center">Minimum</h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-center">${{ $plan->maximum }}</h6>
                                            <h6 class="text-center">Maximum</h6>
                                        </div>
                                    </div>
                                    <form>
                                        @csrf

                                        <input type="text" hidden name="plan" value="{{ $plan->name }}"
                                            id="">
                                        <div class="row">
                                            <div class="col-10 offset-md-1">
                                                <div class="form-group no-mb">
                                                    <!--<label class="text-center" style="color:white;font-weight:700;display:block;">Select Duration</label>-->
                                                    <!--<span class="desc"></span>-->

                                                    <!--<select class="form-control mb-4" aria-label="Duration" name="duration" placeholder="Select Duration">-->
                                                    <!--    <option value="30">{{ $plan->noofrepeat }} days</option>-->
                                                    <!--</select>-->

                                                    <span class="desc"></span>

                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Amount</span>
                                                        </div>
                                                        <input type="number" class="form-control" value=""
                                                            placeholder="Enter Amount" aria-label="Amount"
                                                            aria-describedby="basic-addon1">

                                                    </div>

                                                    <button type="button" class="btn btn-dark mt-20 dev2"
                                                        id='e{{ $loop->index + 1 }}' style="width:100%"> Proceed With
                                                        Investment </button>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <section class="anchor" id="e{{ $loop->index + 1 }}">
                        <input type="hidden" class="hidden{{ $loop->index + 1 }}" name=""
                            value="{{ $plan->percentage }}">
                        <form action="{{ route('dashb_plans') }}" method="POST">
                            @csrf
                            <input type="hidden" hidden name="plan" value="{{ $plan->name }}"
                                            id="">
                            <section class="invest__pop-up">
                                <div class="new__invest">
                                    <h3>New Investment</h3>
                                    <i class="fa fa-times close" aria-hidden="true"
                                        style="display: block; cursor: pointer;"></i>
                                </div>

                                <div class="investment__review">
                                    <h2>
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <span>Investment Review</span>
                                    </h2>
                                    <div class="investment__review-form">
                                        <main class="p_section">
                                            <p>current balance 1000 - USD</p>
                                            <p>Remaining balance 1000 - USD</p>
                                        </main>
                                        <figure class="invest__form-section">
                                            <div class="invest__input">
                                                <figcaption>invest amount</figcaption>
                                                <figcaption>
                                                    <span><input type="text"
                                                        name="amount"    class="investamount{{ $loop->index + 1 }}" /></span>
                                                </figcaption>
                                            </div>
                                            <div class="invest__input">
                                                <figcaption>Estimated Return per Month</figcaption>
                                                <figcaption class="invest__flex">
                                                    {{-- <input type="hidden" name="" class="hidden" value="{{$plan->percentage}}"> --}}
                                                    <span><input type="text" class="monthly" /></span>
                                                    <span><input type="text" class="monthly" /></span>
                                                </figcaption>
                                            </div>
                                            <div class="invest__input">
                                                <figcaption>Estimated Total Return</figcaption>
                                                <figcaption class="invest__flex">
                                                    <span><input type="text" class="yearly" /></span>
                                                    <span><input type="text" class="yearly" /></span>
                                                </figcaption>
                                            </div>
                                            <div class="invest__input">
                                                <figcaption>Estimated Total Interest</figcaption>
                                                <figcaption class="invest__flex">
                                                    <span><input type="text" class="total" /></span>
                                                    <span><input type="text" class="total" /></span>
                                                </figcaption>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <button class="closed" type="submit" style="text-align: center">proceed</button>
                            </section>
                        </form>
                    </section>
                @endforeach
            @else
                <div class="col-md-12 col-lg-12">
                    <div class="box box-default pull-up" style="text-align: center">
                        <h4>
                            No investment plan set by admin
                        </h4>
                    </div>
                </div>
            @endif






        </div>
        <!-- /.row -->
        <!-- END Card with image -->

        <br><br>
    </section>
    <br>

    <script>
        const devTo = document.querySelectorAll('.dev2')
        const anchor = document.querySelectorAll('.anchor')
        const close = document.querySelectorAll('.close')
        devTo.forEach(element => {
            element.addEventListener('click', (e) => {
                anchor.forEach(info => {
                    if (e.target.id == info.id) {
                        info.classList.toggle('annie')
                    } else {
                        info.classList.remove('annie')
                    }
                })
            })
        });

        close.forEach(closed => {
            closed.addEventListener('click', () => {
                anchor.forEach(info => {

                    info.classList.remove('annie')

                })
            })
        })



        let monthly = document.querySelectorAll('.monthly')
        let yearly = document.querySelectorAll('.yearly')
        let total = document.querySelectorAll('.total')
        let invested = document.querySelector('.investamount1')
        let hidden = document.querySelector('.hidden1')
        let invested2 = document.querySelector('.investamount2')
        let hidden2 = document.querySelector('.hidden2')
        let invested3 = document.querySelector('.investamount3')
        let hidden3 = document.querySelector('.hidden3')
        let invested4 = document.querySelector('.investamount4')
        let hidden4 = document.querySelector('.hidden4')
        let invested5 = document.querySelector('.investamount4')
        let hidden5 = document.querySelector('.hidden4')
        let invested6 = document.querySelector('.investamount4')
        let hidden6 = document.querySelector('.hidden4')

        invested.addEventListener('keyup', () => {
            let profit = hidden.value / 100;
            console.log(profit)
            let investval = invested.value * 30 * profit
            monthly.forEach((month) => {
                // investval = monthly.value
                month.value = investval
            })
            yearly.forEach((year) => {
                year.value = investval * 12;
                total.forEach((sum) => {
                    sum.value = year.value - invested.value
                })
            })
        })

        invested2.addEventListener('keyup', () => {
            let profit = hidden2.value / 100;
            console.log(profit)
            let investval = invested2.value * 30 * profit
            monthly.forEach((month) => {
                // investval = monthly.value
                month.value = investval
            })
            yearly.forEach((year) => {
                year.value = investval * 12;
                total.forEach((sum) => {
                    sum.value = year.value - invested2.value
                })
            })
        })

        invested3.addEventListener('keyup', () => {
            let profit = hidden3.value / 100;
            console.log(profit)
            let investval = invested3.value * 30 * profit
            monthly.forEach((month) => {
                // investval = monthly.value
                month.value = investval
            })
            yearly.forEach((year) => {
                year.value = investval * 12;
                total.forEach((sum) => {
                    sum.value = year.value - invested3.value
                })
            })
        })

        invested4.addEventListener('keyup', () => {
            let profit = hidden4.value / 100;
            console.log(profit)
            let investval = invested4.value * 30 * profit
            monthly.forEach((month) => {
                // investval = monthly.value
                month.value = investval
            })
            yearly.forEach((year) => {
                year.value = investval * 12;
                total.forEach((sum) => {
                    sum.value = year.value - invested4.value
                })
            })
        })
        
        invested5.addEventListener('keyup', () => {
            let profit = hidden5.value / 100;
            console.log(profit)
            let investval = invested5.value * 30 * profit
            monthly.forEach((month) => {
                // investval = monthly.value
                month.value = investval
            })
            yearly.forEach((year) => {
                year.value = investval * 12;
                total.forEach((sum) => {
                    sum.value = year.value - invested5.value
                })
            })
        })
        
        invested6.addEventListener('keyup', () => {
            let profit = hidden6.value / 100;
            console.log(profit)
            let investval = invested6.value * 30 * profit
            monthly.forEach((month) => {
              
                month.value = investval
            })
            yearly.forEach((year) => {
                year.value = investval * 12;
                total.forEach((sum) => {
                    sum.value = year.value - invested6.value
                })
            })
        })
    </script>


@endsection()
