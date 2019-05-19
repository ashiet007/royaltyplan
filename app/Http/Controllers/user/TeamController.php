<?php


namespace App\Http\Controllers\user;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function directTeam()
    {
        $username = Auth::User()->user_name;

        $team = User::with('userDetails')->where('sponsor_id',$username)->get();
        return view('user.team.directTeam', compact('team'));
    }

    public function totalTeam()
    {
        $username = Auth::User()->user_name;
        $totalTeam = getTotalTeam($username);
        $teamDetails = $totalTeam;
        $collection =  collect($teamDetails);
        $teamDetails = $collection->sortByDesc('created_at');
        return view('user.team.totalTeam',compact('teamDetails'));
    }
}