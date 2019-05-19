<?php


namespace App\Http\Controllers\user;

use App\UserPin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class PinController extends Controller
{
    public function unusedPin()
    {
        $id = Auth::User()->id;
        $userUnusedPins = UserPin::with('PinHelpAmount')->where('user_id',$id)
            ->where('status','unused')
            ->get();
        return view('user.pin.unused',compact('userUnusedPins'));
    }

    public function getPinDetails(Request $request)
    {
        $requestData = $request->all();
        $pin = $requestData['pin'];
        $pinDetails = UserPin::with('user')->where('pin',$pin)
            ->where('creation_detail','created')
            ->first();
        if($pinDetails)
        {
            $creatorName = $pinDetails->user->name;
            $creatorUsername = $pinDetails->user->user_name;
            $createdDate = $pinDetails->created_at->format('d, M y h:i:s A');
            return response()->json(['success'=>'true','creatorName' => $creatorName,'creatorUsername' => $creatorUsername, 'createdDate' => $createdDate]);
        }
        else
        {
            return response()->json(['error' => 'Something went wrong'], 401);
        }
    }

}