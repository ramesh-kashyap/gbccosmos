<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;
use App\Models\Income;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Log;
use Redirect;
use Hash;
use Helper;
class Invest extends Controller
{

  private $downline = "";

    public function index()
    {
        $user=Auth::user();
        $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();

        $this->data['last_package'] = ($invest_check)?$invest_check->amount:0;
        $this->data['page'] = 'user.invest.Deposit';
        return $this->dashboard_layout();
    }  
    
    public function deposit()
    {
        $user=Auth::user();
        $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();

        $this->data['last_package'] = ($invest_check)?$invest_check->amount:0;
        $this->data['page'] = 'user.invest.Deposit2';
        return $this->dashboard_layout();
    }



public function cancel_payment($id)

{
    
         Investment::where('orderId',$id)->update(['status' => 'Decline']);
     
        $notify[] = ['success','Deposit canceled successfully'];
        return redirect()->route('user.invest')->withNotify($notify);
    
}

//     public function confirmDeposit(Request $request)
//     {
//    try{
//      $validation =  Validator::make($request->all(), [
//         'Sum' => 'required|numeric|min:50',
//         'PSys' => 'required',
//      ]);


//     //  dd($request->all());
//     if($validation->fails()) {
//         Log::info($validation->getMessageBag()->first());

//         return redirect()->route('user.invest')->withErrors($validation->getMessageBag()->first())->withInput();
//     }




//     $user=Auth::user();
//     $invest_check=Investment::where('user_id',$user->id)->where('status','Pending')->first();

//     if ($invest_check) 
//     {
//       return redirect()->route('user.DepositHistory')->withErrors(array('your deposit already pending please cancel it if you dont want to pay this transaction'));
//     }
   

//     $min_amount = $request->minimum_deposit;
//     $max_amount = $request->maximum_deposit;
//     $plan = $request->Plan;
//     $paymentMode = $request->PSys;
//     $amount = $request->Sum;

   
       
//     if ($amount<$min_amount || $amount>$max_amount) 
//     {
//       return Redirect::back()->withErrors(array('minimum deposit is $ '.$min_amount.' and maximum is $ '.$max_amount));
//     }
    
    
//         $plan ='BEGINNER';
//       if ($amount>=50 && $amount<=200) 
//        {
//         $plan ='BEGINNER';
//        }
//        elseif($amount>=400 && $amount<=800)
//        {
//         $plan ='STANDARD';
//        }
//        elseif($amount>=1000 && $amount<=2000)
//        {
//         $plan ='EXCLUSIVE';
//        }
//        elseif($amount>=2500 && $amount<=5000)
//        {
//         $plan ='ULTIMATE';
//        }

//        elseif($amount>=5000 && $amount<=10000)
//        {
//         $plan ='PREMIUM';
//        }

//        elseif($amount>=5000)
//        {
//         $plan ='PREMIUM';
//        }
       
//     $invest_check=Investment::where('user_id',$user->id)->where('plan',$plan)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
    
//     if($invest_check)
//     {
//           return Redirect::back()->withErrors(array('you have already chosen this plan choose another plan'));
//     }
   
//     $amountTotal= $request->Sum;
  
  
//     if($paymentMode=="USDT.BEP20")
//     {
//        $paymentMode= "USDT_BSC"; 
//     }
//     else
//     {
//       $paymentMode= "USDT_TRX";    
//     }
    
//        $invoice = substr(str_shuffle("0123456789"), 0, 7);
//        $apiURL = 'https://plisio.net/api/v1/invoices/new';
//         $postInput = [
//         'source_currency' => 'USD',
//         'source_amount' => $amountTotal,
//         'order_number' => $invoice,
//         'currency' => $paymentMode,
//         'email' => $user->email,
//         'order_name' =>$user->username,
//         'callback_url' => 'https://etriton.co/dynamicupicallback?json=true',
//         'api_key' => '4iJxhwNsKCrdhtDn8Q9ctk_vdMvDs6JoXb7DeiRm95R45OeCUhFH8RcgRDOK-lIM',
//         ];
  
//         $headers = [
//             'Content-Type' => 'application/json'
//         ];
  
//         $response = Http::withHeaders($headers)->get($apiURL, $postInput);
  
//         $statusCode = $response->status();
//         $resultAarray = json_decode($response->getBody(), true);
        

//     if($resultAarray['status']=="success")
//     {

//        $data = [
//             'plan' => $plan,
//             'orderId' => $invoice,
//             'transaction_id' =>$resultAarray['data']['txn_id'],
//             'user_id' => $user->id,
//             'user_id_fk' => $user->username,
//             'amount' => $amountTotal,
//             'payment_mode' =>$paymentMode,
//             'status' => 'Pending',
//             'sdate' => Date("Y-m-d"),
//             'active_from' => $user->username,
//         ];
//         $payment =  Investment::insert($data);
                
            
    
//     $this->data['walletAddress'] =$resultAarray['data']['wallet_hash'];
//     $this->data['paymentMode'] =$paymentMode;
//     $this->data['transaction_id'] =$resultAarray['data']['txn_id'];
//     $this->data['qr_code'] =$resultAarray['data']['qr_code'];
//     $this->data['orderId'] =$invoice;
//     $this->data['amount'] =$amount;
//     $this->data['invoice_total_sum'] =$resultAarray['data']['invoice_total_sum'];
//     $this->data['page'] = 'user.invest.confirmDeposit';
//     return $this->dashboard_layout();

//   }
//   else
//   {
//     return Redirect::back()->withErrors(array('try again'));
//   }

//   }
//    catch(\Exception $e){
//     Log::info('error here');
//     Log::info($e->getMessage());
//     print_r($e->getMessage());
//     die("hi");
//     return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
//       }

//  }



//     public function confirmDeposit_new(Request $request)
//     {
//    try{
//      $validation =  Validator::make($request->all(), [
//         'Sum' => 'required|numeric|min:2',
//         'PSys' => 'required',
//      ]);


//     //  dd($request->all());
//     if($validation->fails()) {
//         Log::info($validation->getMessageBag()->first());

//         return redirect()->route('user.invest')->withErrors($validation->getMessageBag()->first())->withInput();
//     }




//     $user=Auth::user();
//     $invest_check=Investment::where('user_id',$user->id)->where('status','Pending')->first();

//     if ($invest_check) 
//     {
//       return Redirect::back()->withErrors(array('your deposit already pending'));
//     }
   

//     $min_amount = $request->minimum_deposit;
//     $max_amount = $request->maximum_deposit;
//     $plan = $request->Plan;
//     $paymentMode = $request->PSys;
//     $amount = $request->Sum;

   
       
//     if ($amount<$min_amount || $amount>$max_amount) 
//     {
//       return Redirect::back()->withErrors(array('minimum deposit is $ '.$min_amount.' and maximum is $ '.$max_amount));
//     }
    
    
//         $plan ='BEGINNER';
//       if ($amount>=50 && $amount<=200) 
//        {
//         $plan ='BEGINNER';
//        }
//        elseif($amount>=400 && $amount<=800)
//        {
//         $plan ='STANDARD';
//        }
//        elseif($amount>=1000 && $amount<=2000)
//        {
//         $plan ='EXCLUSIVE';
//        }
//        elseif($amount>=2500 && $amount<=5000)
//        {
//         $plan ='ULTIMATE';
//        }

//        elseif($amount>=5000 && $amount<=10000)
//        {
//         $plan ='PREMIUM';
//        }

//        elseif($amount>=5000)
//        {
//         $plan ='PREMIUM';
//        }
       
//     $invest_check=Investment::where('user_id',$user->id)->where('plan',$plan)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
    
//     if($invest_check)
//     {
//           return Redirect::back()->withErrors(array('you have already chosen this plan choose another plan'));
//     }
   
//     $amountTotal= $request->Sum;
  
  
//     if($paymentMode=="USDT.BEP20")
//     {
//        $paymentMode= "USDT_BSC"; 
//     }
//     else
//     {
//       $paymentMode= "USDT_TRX";    
//     }
    
//        $invoice = substr(str_shuffle("0123456789"), 0, 7);
//        $apiURL = 'https://plisio.net/api/v1/invoices/new';
//         $postInput = [
//         'source_currency' => 'USD',
//         'source_amount' => $amountTotal,
//         'order_number' => $invoice,
//         'currency' => $paymentMode,
//         'email' => $user->email,
//         'order_name' =>$user->username,
//         'callback_url' => 'https://etriton.co/dynamicupicallback?json=true',
//         'api_key' => '4iJxhwNsKCrdhtDn8Q9ctk_vdMvDs6JoXb7DeiRm95R45OeCUhFH8RcgRDOK-lIM',
//         ];
  
//         $headers = [
//             'Content-Type' => 'application/json'
//         ];
  
//         $response = Http::withHeaders($headers)->get($apiURL, $postInput);
  
//         $statusCode = $response->status();
//         $resultAarray = json_decode($response->getBody(), true);
        

//     if($resultAarray['status']=="success")
//     {

//        $data = [
//             'plan' => $plan,
//             'orderId' => $invoice,
//             'transaction_id' =>$resultAarray['data']['txn_id'],
//             'user_id' => $user->id,
//             'user_id_fk' => $user->username,
//             'amount' => $amountTotal,
//             'payment_mode' =>$paymentMode,
//             'status' => 'Pending',
//             'sdate' => Date("Y-m-d"),
//             'active_from' => $user->username,
//         ];
//         $payment =  Investment::insert($data);
                
            
    
//     $this->data['walletAddress'] =$resultAarray['data']['wallet_hash'];
//     $this->data['paymentMode'] =$paymentMode;
//     $this->data['transaction_id'] =$resultAarray['data']['txn_id'];
//     $this->data['qr_code'] =$resultAarray['data']['qr_code'];
//     $this->data['orderId'] =$invoice;
//     $this->data['amount'] =$amount;
//     $this->data['invoice_total_sum'] =$resultAarray['data']['invoice_total_sum'];
//     $this->data['page'] = 'user.invest.confirmDeposit';
//     return $this->dashboard_layout();

//   }
//   else
//   {
//     return Redirect::back()->withErrors(array('try again'));
//   }

//   }
//    catch(\Exception $e){
//     Log::info('error here');
//     Log::info($e->getMessage());
//     print_r($e->getMessage());
//     die("hi");
//     return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
//       }

//  }




 public function fundActivation(Request $request)
    {

try{
    $validation =  Validator::make($request->all(), [
        'amount' => 'required|numeric|min:5',
        'user_id' => 'required|exists:users,username',
        'transaction_password' => 'required',

    ]);


    if($validation->fails()) {
        Log::info($validation->getMessageBag()->first());

        return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
    }
       $user=Auth::user();

       $password= $request->transaction_password;

       if (Hash::check($password, $user->tpassword))
       {
      

      $user_detail=User::where('username',$request->user_id)->orderBy('id','desc')->limit(1)->first();

         date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
        $invest_check=Investment::where('user_id',$user_detail->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();


            $invoice = substr(str_shuffle("0123456789"), 0, 7);
            $last_package=($invest_check)?$invest_check->amount:0;

         $balance=0;
        
         if($last_package==0)
         {
             $package_be=20;      
         }
         elseif($last_package==20)
         {
              $package_be=50;            
         }
         elseif($last_package==50)
         {
              $package_be=100;            
         }
         elseif($last_package==100)
         {
              $package_be=200;            
         }
         elseif($last_package==200)
         {
              $package_be=400;            
         }
         elseif($last_package==400)
         {
              $package_be=800;            
         }
         elseif($last_package==800)
         {
              $package_be=1600;            
         }
         elseif($last_package==1600)
         {
              $package_be=3200;            
         }
         elseif($last_package==3200)
         {
              $package_be=6400;            
         }
         elseif($last_package==6400)
         {
              $package_be=12800;            
         }
         elseif($last_package==12800)
         {
              $package_be=51200;            
         }
         elseif($last_package==51200)
         {
              $package_be=102400;            
         }
         elseif($last_package==102400)
         {
              $package_be=202800;            
         }
         elseif($last_package==202800)
         {
              $package_be=405600;            
         }
         elseif($last_package==405600)
         {
              $package_be=811200;            
         }
         elseif($last_package==811200)
         {
              $package_be=1622400;            
         }
         elseif($last_package==1622400)
         {
              $package_be=3242800;            
         }
         else
         {
           $package_be=0;   
         }
         if ($package_be==0)
         {
           return Redirect::back()->withErrors(array('already activate user'));
         }

         if ($request->amount!=$package_be)
         { 
           return Redirect::back()->withErrors(array('Please choose package $ '.$package_be));
         }
         
      
          $balance=round(Auth::user()->FundBalance(),2);
       
          // if ($invest_check)
          // {
          //   return Redirect::back()->withErrors(array('User Id Already Activated'));
          // }


              // dd($balance); die;
            
              
            if ($balance>=$request->amount)
             {
             
              
           $data = [
                'orderId' => $invoice,
                // 'plan' => $request->plan,
                'transaction_id' =>md5(uniqid(rand(), true)),
                'user_id' => $user_detail->id,
                'user_id_fk' => $user_detail->username,
                'amount' => $request->amount,
                'payment_mode' => 'USDT',
                'status' => 'Active',
                'sdate' => Date("Y-m-d"),
                'active_from' => $user->username,
                'walletType' =>1,
                'created_at' =>Date('Y-m-d H:i:s'),

            ];
            $payment = Investment::insert($data);

            if ($user_detail->active_status=="Pending")
            {
             $user_update=array('active_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$request->amount);
              User::where('id',$user_detail->id)->update($user_update);
            }
            else
            {
              
              $user_update=array('active_status'=>'Active','package'=>$request->amount);
              User::where('id',$user_detail->id)->update($user_update);
            }
            
            add_level_income($user_detail->id,$request->amount);
            add_direct_income($user_detail->id,$request->amount);


            // // add pickup bonus
            //   sendEmail($user_detail->email, 'Invoice at '.siteName(), [
            //     'name' => $user_detail->name,
            //     'address' => $user_detail->address,
            //     'amount' =>$request->amount,
            //     'plan' =>$request->plan,
            //     'orderId' =>$invoice,
            //     'invoiceDate' =>Date('m/d/Y h:i:s a'),
            //     'viewpage' => 'invoice',
            // ]);
            // SendSMSActivation($user_detail->name,$user_detail->phone,$user_detail->username,$request->plan,$request->amount);
          


         


      $notify[] = ['success', $user_detail->username.' User Activation  Submited successfully'];
      return redirect()->back()->withNotify($notify);

      }
      else
      {
         return Redirect::back()->withErrors(array('Insufficient Balance in Wallet'));
      }

  
      

      
    }
    else
    {
      return Redirect::back()->withErrors(array('Invalid Transaction Password'));
    }


  }
   catch(\Exception $e){
    Log::info('error here');
    Log::info($e->getMessage());
    print_r($e->getMessage());
    die("hi");
    return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
      }



        }





        public function invest_list(Request $request){

      $user=Auth::user();
      $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Investment::where('user_id',$user->id);
      if($search <> null && $request->reset!="Reset"){
        $notes = $notes->where(function($q) use($search){
          $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
          ->orWhere('transaction_id', 'LIKE', '%' . $search . '%')
          ->orWhere('status', 'LIKE', '%' . $search . '%')
          ->orWhere('payment_mode', 'LIKE', '%' . $search . '%')
          ->orWhere('amount', 'LIKE', '%' . $search . '%');
        });

      }

        $notes = $notes->paginate($limit)->appends(['limit' => $limit ]);

      $this->data['search'] =$search;
      $this->data['deposit_list'] =$notes;
      $this->data['page'] = 'user.invest.DepositHistory';
      return $this->dashboard_layout();


        }

}
