<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Income;
use App\Models\Reward;
use App\Models\Boost_direct;
use App\Models\User_trade;
use Illuminate\Support\Facades\DB;
use Auth;
use Log;
use Redirect;
use Hash;
use Validator;

class Bonus extends Controller
{
    public function index(Request $request)
    {
       $user=Auth::user();

          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Level Bonus')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['level_income'] =$notes;
        $this->data['search'] =$search;
        $this->data['page'] = 'user.bonus.level-income';
        return $this->dashboard_layout();


    }


    public function direct_income(Request $request)
    {
       $user=Auth::user();

          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Direct Income')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['Direct_income'] =$notes;
        $this->data['search'] =$search;
        $this->data['page'] = 'user.bonus.direct-bonus';
        return $this->dashboard_layout();


    }
    public function cashback_income(Request $request)
    {
       $user=Auth::user();

          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Sponsorship Bonus')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['level_income'] =$notes;
        $this->data['search'] =$search;
        $this->data['page'] = 'user.bonus.cashback-income';
        return $this->dashboard_layout();


    }

    public function activitiesBonus(Request $request)
    {
       $user=Auth::user();

          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Activities Bonus')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['level_income'] =$notes;
        $this->data['search'] =$search;
        $this->data['page'] = 'user.bonus.activitiesBonus';
        return $this->dashboard_layout();


    }


    public function gap_margin_bonus(Request $request)
    {
       $user=Auth::user();

          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Gap Margin Bonus')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['level_income'] =$notes;
        $this->data['search'] =$search;
        $this->data['page'] = 'user.bonus.gap-margin-bonus';
        return $this->dashboard_layout();


    }



    public function dailyIncentive(Request $request)
    {
       $user=Auth::user();

          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks',' Bonus')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['level_income'] =$notes;
        $this->data['search'] =$search;
        $this->data['page'] = 'user.bonus.daily-incentive';
        return $this->dashboard_layout();


    }


    public function pool_income(Request $request)
    {
           $user=Auth::user();


          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Pool Bonus')->orderBy('id', 'DESC');

           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
              
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

    $this->data['level_income'] =$notes;
    $this->data['search'] =$search;
    $this->data['page'] = 'user.bonus.pool-income';
    return $this->dashboard_layout();

    }

    public function package_auto_income(Request $request)
    {
           $user=Auth::user();


          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Package Auto Upgrade Bonus')->orderBy('id', 'DESC');

           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')

              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

    $this->data['level_income'] =$notes;
    $this->data['search'] =$search;
    $this->data['page'] = 'user.bonus.package-auto-upgrade-income';
    return $this->dashboard_layout();

    }

    public function reward_income(Request $request)
    {
           $user=Auth::user();


          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Reward Bonus')->orderBy('id', 'DESC');

           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')

              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

    $this->data['level_income'] =$notes;
    $this->data['search'] =$search;
    $this->data['page'] = 'user.bonus.reward-bonus';
    return $this->dashboard_layout();

    }
    
 
    public function leadership_income(Request $request)
    {
           $user=Auth::user();


          $limit = $request->limit ? $request->limit :  paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Leadership Income')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')

              ->orWhere('comm', 'LIKE', '%' . $search . '%');

            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

    $this->data['level_income'] =$notes;
    $this->data['search'] =$search;
    $this->data['page'] = 'user.bonus.leadership-income';
    return $this->dashboard_layout();

    }


    public function royalty_income(Request $request)
    {
           $user=Auth::user();


          $limit = $request->limit ? $request->limit :  paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Royalty Income')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')

              ->orWhere('comm', 'LIKE', '%' . $search . '%');

            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

    $this->data['level_income'] =$notes;
    $this->data['search'] =$search;
    $this->data['page'] = 'user.bonus.royalty-bonus';
    return $this->dashboard_layout();

    }


    public function re_birth_bonus(Request $request)
    {
           $user=Auth::user();


          $limit = $request->limit ? $request->limit :  paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Re Birth Income')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')

              ->orWhere('comm', 'LIKE', '%' . $search . '%');

            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

    $this->data['level_income'] =$notes;
    $this->data['search'] =$search;
    $this->data['page'] = 'user.bonus.re-birth-bonus';
    return $this->dashboard_layout();

    }
    public function auto_upgrade_bonus(Request $request)
    {
           $user=Auth::user();


          $limit = $request->limit ? $request->limit :  paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Auto Upgrade Income')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')

              ->orWhere('comm', 'LIKE', '%' . $search . '%');

            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

    $this->data['level_income'] =$notes;
    $this->data['search'] =$search;
    $this->data['page'] = 'user.bonus.auto-upgrade-income';
    return $this->dashboard_layout();

    }


}
