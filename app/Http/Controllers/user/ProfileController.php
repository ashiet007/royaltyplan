<?php


namespace App\Http\Controllers\user;

use App\User;
use App\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function viewProfile()
    {
        $id = Auth::User()->id;
        $user = User::with('userDetails.userState','userDetails.userDistrict','userDetails.userBank')->where('id',$id)->firstOrFail();
        return view('user.viewProfile', compact('user'));
    }

    public function viewSponsor()
    {
        $sponsorId = Auth::User()->sponsor_id;
        $sponsorDetails = User::with('userDetails')->where('user_name',$sponsorId)->firstOrFail();
        return view('user.sponsor', compact('sponsorDetails'));
    }

    public function viewSecurity()
    {
        return view('user.security');
    }

    public function changeSecurity(Request $request)
    {
        $this->validate($request,[
            'type' => 'required',
            'current_password' => 'required',
            'password' => 'required|string|min:6|confirmed'
        ]);
        $id = Auth::User()->id;
        $requestData = $request->all();
        $type = $requestData['type'];
        $user = User::where('id',$id)->first();
        if($type == 'login')
        {
            $oldPassword = $user->password;
            $currentPassword = $requestData['current_password'];
            if(Hash::check($currentPassword, $oldPassword))
            {
                $newPassword = Hash::make($requestData['password']);
                try
                {
                    $user->update([
                        'password' => $newPassword
                    ]);
                    return redirect()->back()->with('flash_message','Password updated successfully');
                }
                catch (\Illuminate\Database\QueryException $e)
                {
                    return redirect()->back()->withErrors($e->getMessage())->withInput();
                }
            }
            else
            {
                return redirect()->back()->withErrors('Current Password is Incorrect')->withInput();
            }
        }
        else
        {
            $oldPassword = $user->transaction_password;
            $currentPassword = $requestData['current_password'];
            if(Hash::check($currentPassword, $oldPassword))
            {
                $newPassword = Hash::make($requestData['password']);
                try
                {
                    $user->update([
                        'transaction_password' => $newPassword
                    ]);
                    return redirect()->back()->with('flash_message','Password updated successfully');
                }
                catch (\Illuminate\Database\QueryException $e)
                {
                    return redirect()->back()->withErrors($e->getMessage())->withInput();
                }
            }
            else
            {
                return redirect()->back()->withErrors('Current Password is Incorrect')->withInput();
            }

        }
    }
}