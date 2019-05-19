<?php


namespace App\Http\Controllers\user;


use App\GiveHelp;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IncomeController extends Controller
{
    public function helpingIncome()
    {
        $id = Auth::User()->id;
        $giveHelps = GiveHelp::with('getHelps.users.userDetails')
            ->where('user_id', $id)
            ->where(function ($query) {
                $query->where('completion_state', 'partially-assigned')
                    ->orWhere('completion_state', 'assigned');
            })
            ->orderBy('created_at','DESC')
            ->get();
        $income = 0;
        if(!$giveHelps->isEmpty())
        {
            foreach ($giveHelps as $giveHelp)
            {
                foreach ($giveHelp->getHelps as $getHelp)
                {
                    if($getHelp->pivot->status == 'accepted')
                    {
                        $income = $income + $getHelp->pivot->assigned_amount;
                    }
                }
            }
        }
        return view('user.income.helping',compact('giveHelps','income'));
    }

}