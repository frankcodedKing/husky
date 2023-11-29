<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;




use Illuminate\Http\Request;
use App\Models\Fund;
use App\Models\Investment;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Mail\Adminmail;
use Illuminate\Support\Facades\Mail;




use Illuminate\Support\Facades\DB;


class addprofit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:profit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'adds due profit to due users investments';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
         
        //check point inhibitors in Tcells
        //no two cansers are the same
        //exercise kills cancer cells

$allinv = Investment::where('investmentStatus', 0)->get();

if ($allinv->count() > 0 ) {
    # code...
    $i =0;
foreach ($allinv as $key => $value) {
    $i++;
    # code...
    $user_running_investment = Investment::where('userid', $value->userid)->where('investmentStatus', 0)->get();
        $current_profit = [];
        
        if ($user_running_investment->count() > 0) {
            foreach ($user_running_investment as $inv) {
                # code...
                $mature_date = $inv->investmentmaturitydate;
                $mature_date  = Carbon::parse($mature_date);
              
                $today = Carbon::now();
                $days_profit = $inv->stage;
               
                $days_profit_array = json_decode($days_profit, true);
                if (count($days_profit_array) >0) {
                    # code...
                    foreach ($days_profit_array as $key => $day_profit) {
                        # code...
                        $dday = Carbon::parse($day_profit);
                   
                        $today = Carbon::now();
                        if ($today->greaterThan($dday)) {
                            # code...
                            $inv->gotteninvestmentprofit = $inv->gotteninvestmentprofit  + $inv->investmentprofit;
                            if (gettype($days_profit_array)=="object")
                            {
                                unset($days_profit_array->$key);
                                
                            }
                            else{
                                unset($days_profit_array[$key]);
                            }
                            $days_string = json_encode($days_profit_array);
                            $inv->stage = $days_string;
                            $inv->save();
                            $user_fundss = Fund::where('userid', $value->userid)->first();
                            $user_fundss->currentprofit = $user_fundss->currentprofit + $inv->investmentprofit;
                            $user_fundss->save();
                            echo "INVESTMENT STAGE Updated and funds profit update";
                        }
                        $investgottenprofit =  $inv->gotteninvestmentprofit;
                    }
                } else {
                    # code...
                    echo "no array converted to use and add profit";
                    return;
                }              
                
                if ($today->greaterThan($mature_date)) {
                    # code...
                    $user_funds = Fund::where('userid', $value->userid)->first();
                    $user_funds->balance = $user_funds->balance +  $inv->investmentamount + $investgottenprofit;
                    $user_funds->totalprofit = $user_funds->totalprofit + $investgottenprofit;
                    
                    $user_funds->currentinvestment = $user_funds->currentinvestment - $inv->investmentamount;
                    $user_funds->currentprofit = $user_funds->currentprofit - $investgottenprofit;

                    if ($user_funds->save()) {
                        # code...
                        $user_investment = Investment::where('id', $inv->id)->first();
                        $user_investment->investmentStatus = 1;
                        $user_investment->save();

                    } else {
                        # code...
                        $domain = request()->getHost();
                        $email = "info@nanocodes.com.ng";
                        $mail = "please there is an error in $domain investment calculation";
                        $mailtitle = "website error in $domain";
                        $emaildata = ['data' => $email, 'email_body' => $mail, 'email_header' => $mailtitle];

                        Mail::to($email)->send(new Adminmail($emaildata));
                    }
                } else {
                    # code...
                    echo "no date passed to add $i";
                    
                }

                array_push($current_profit, $inv->gotteninvestmentprofit);
            }
           
        } else {
            echo "no running investment";
            return;
        }
        $totalcurrentprofit = array_sum($current_profit);
        $user_fundsum = Fund::where('userid', $value->userid)->first();
        $user_fundsum->totalbalance = $user_fundsum->balance + $user_fundsum->currentinvestment;
        $user_fundsum->totalprofit = $totalcurrentprofit;
        $user_fundsum->save();
        echo "profit updated";


}
    }
else {
    # code...
    echo "no investment found";
return ;
}




    }
}
