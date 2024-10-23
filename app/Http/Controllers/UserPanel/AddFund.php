<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BuyFund;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Hexters\CoinPayment\CoinPayment;
use App\Models\CoinpaymentTransaction;
use Log;
use Redirect;
class AddFund extends Controller
{

public function index(Request $request)
{

$user=Auth::user();
$this->data['page'] = 'user.fund.addFund';
return $this->dashboard_layout();

}
public function confirmFund(Request $request)
{
$user=Auth::user();
$paymentMode = $request->payment_type;
$amount = $request->amount;
if ($paymentMode=="USDT.TRC20") 
{
  $walletAdress = generalDetail()->usdtTrc20;
}
else
{
    $walletAdress = generalDetail()->usdtBep20;   
}


$this->data['paymentMode'] = $paymentMode;
$this->data['amount'] = $amount;
$this->data['walletAdress'] = $walletAdress;
$this->data['page'] = 'user.fund.confirmFund';
return $this->dashboard_layout();

}


public function fundHistory(Request $request)
{

   
    $user=Auth::user();
    $limit = $request->limit ? $request->limit : paginationLimit();
    $status = $request->status ? $request->status : null;
    $search = $request->search ? $request->search : null;
    $notes = BuyFund::where('user_id',$user->id);
    if($search <> null && $request->reset!="Reset"){
    $notes = $notes->where(function($q) use($search){
        $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
        ->orWhere('txn_no', 'LIKE', '%' . $search . '%')
        ->orWhere('status', 'LIKE', '%' . $search . '%')
        ->orWhere('type', 'LIKE', '%' . $search . '%')
        ->orWhere('amount', 'LIKE', '%' . $search . '%');
    });

    }

    $notes = $notes->paginate($limit)
        ->appends([
            'limit' => $limit
        ]);

    $this->data['search'] =$search;
    $this->data['level_income'] =$notes;
    $this->data['page'] = 'user.fund.fundHistory';
    return $this->dashboard_layout();

}



public function SubmitBuyFund(Request $request)
{

  try{
        $validation =  Validator::make($request->all(), [
            'amount' => 'required',
            'txHash' => 'required|unique:investments,transaction_id',
        ]);

        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());

            return redirect()->route('user.AddFund')->withErrors($validation->getMessageBag()->first())->withInput();
        }
        $user=Auth::user();

               $data = [
                    'txn_no' =>$request->txHash,
                    'user_id' => $user->id, 
                    'user_id_fk' => $user->username,
                    'token' => $request->amount,
                    'amount' => $request->amount*generalDetail()->tokenPrice,
                    'status'=>'Approved', 
                    'type' =>'GBC',
                    'bdate' => Date("Y-m-d"),
                ];
                // dd($data);
               $payment =  BuyFund::create($data);

            return true;
      }
       catch(\Exception $e){
        Log::info('error here');
        Log::info($e->getMessage());
        print_r($e->getMessage());
        die("hi");
        return  redirect()->route('user.AddFund')->withErrors('error', $e->getMessage())->withInput();
    }

}

public function saveDocument($document)
{
    $documentName = time() . '_' . $document->getClientOriginalName();
    $document->move(('/uploads/documents'), $documentName);
    return $documentName;
}

}
