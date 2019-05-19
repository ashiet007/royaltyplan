<?php

namespace App\Http\Controllers;
use App\Bank;
use App\GiveHelp;
use App\Pin;
use App\State;
use App\District;
use App\User;
use App\UserDetail;
use App\UserHelpDetail;
use App\UserPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use JsValidator;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    protected $validationRules = [
        'sponsor_id' => 'required|exists:users,user_name',
        'sponsor_name' => 'required',
        'name' => ['required','string','min:3','max:21','regex:/(^[a-zA-Z\\s]*$)/u'],
        'user_name' => 'required|string|min:3|max:255|alpha_num|unique:users|regex:/^[a-zA-Z]{3}[A-Z0-9a-z]*$/',
        'email' => 'required|string|email|max:255|unique:users',
        'mob_no' => 'required|numeric|digits:10|unique:user_details',
        'alternate_mob_no' => 'numeric|digits:10|unique:user_details|nullable',
        'district_id' => 'required',
        'state_id' => 'required',
        'bank_id' => 'required',
        'account_no' => 'required|numeric|unique:user_details',
        'ifsc_code' => ['required','string','max:255','regex:/(^([A-Z|a-z]{4}[0][A-Z0-9a-z]{6}$))/u'],
        'branch' => 'required|string|max:255',
        'paytm_no' => 'numeric|digits:10|nullable',
        'gpay_no' => 'numeric|digits:10|nullable',
        'password' => 'required|string|min:6|confirmed',
    ];

    public function Index()
    {
        return view('home');
    }

    public function registrationForm(Request $request)
    {

        if($request->has('sponsor-id'))
        {
            $sponsorId = $request['sponsor-id'];
            $sponsorDetails = User::where('user_name',$sponsorId)->first()->toArray();
            $banks = Bank::all();
            $states = State::all();
            return view('registration.register', compact('banks','states','sponsorDetails'));
        }
        else
        {
            $sponsorDetails = array();
            $banks = Bank::all();
            $states = State::all();
            return view('registration.register', compact('banks','states','sponsorDetails'));
        }

    }

    public function getDistricts(Request $request)
    {
        $requestData = $request->all();
        if(!empty($requestData))
        {
            $stateId = $requestData['state_id'];
            $data = District::select('id','name')->where('state_id',$stateId)->get();
            $districts = array();
            foreach ($data as $value)
            {
                $key = $value->id;
                $name = $value->name;
                $districts[$key] = $name;
            }
            return response()->json(['success'=>'true','districts' => $districts]);
        }
        else
        {
            return response()->json(['success' =>'false']);
        }

    }
    public function verifyForm(Request $request)
    {
        $requestData =$request->all();
        if($request['currentIndex'] == 0)
        {
            Session::put(['pinDetails'=> '']);
            $pin = $requestData['pin'];
            if(!empty($pin))
            {
                $pinDetails = Pin::with('pinHelpAmount')
                    ->where('pin', $pin)
                    ->where('status','unused')
                    ->first();
                if($pinDetails)
                {
                    $pinDetails = $pinDetails->toArray();
                    Session::put(['pinDetails'=> $pinDetails]);
                    return response()->json(['success'=>'true','message' => 'Valid Pin']);
                }
                else
                {
                    return response()->json(['error' => 'Invalid Pin'], 401);
                }
            }
            else
            {
                return response()->json(['error' => 'Pin field can not be empty'], 401);
            }

        }
        elseif ($request['currentIndex'] == 1)
        {
            $validation = Validator::make($request->all(), $this->validationRules);
            if ($validation->fails()) {
                $errors = $validation->errors();
                Session::put(['errors' => $errors]);
                $request->flash();
                return response()->json(['error'=>'Form is not valid'],401);
            }
            else
            {
                $requestData = $request->all();
                $bankId = $request->bank_id;
                $bank = Bank::where('id',$bankId)->first();
                $requestData['bankName'] = $bank->name;
                $district = District::where('id',$request->district_id)->first();
                $requestData['districtName'] = $district->name;
                $state = State::where('id',$request->state_id)->first();
                $requestData['stateName'] = $state->name;

                Session::put(['formData' => $requestData]);
                return response()->json(['success'=>'true','message' => ' Form Validated Successfully']);
            }
        }
        elseif ($request['currentIndex'] == 2)
        {
            $otp = rand(100000,999999);
            $mobNo = $request->get('mob_no');
            $message = 'HELLO DEAR SIR/MADAM YOUR MOBILE CONFIRMATION CODE IS '.$otp.'.THANKS, WWW.COM.';
            sendMessage($mobNo, $message);
            session(['otp' => $otp]);
            return response()->json(['success'=>'true','message' => 'An OTP has been sent to your Mobile number']);
        }
        elseif ($request['currentIndex'] == 3)
        {
            if($request->sentOtp == $request->otp)
            {
                return response()->json(['success'=>'true','message' => 'Mobile Number Verified Successfully']);
            }
            else
            {
                return response()->json(['error'=>'OTP did not match'],401);
            }
        }
        else
        {
            return response()->json(['error'=>'Something went wrong'],401);
        }
    }

    public function getSponsorDetails(Request $request)
    {
        if($request->has('sponsorId'))
        {
            $requestData = $request->all();
            $sponsorId = $requestData['sponsorId'];
            $sponsor = User::select('name')->where('user_name',$sponsorId)->first();
            if(!empty($sponsor))
            {
                return response()->json(['success'=>'true','sponsorName' => $sponsor->name]);
            }
            else
            {
                return response()->json(['error' => 'Invalid Sponsor'], 401);
            }
        }
        else
        {
            return response()->json(['error' => 'Something went wrong!'], 401);
        }
    }

    public function createUser(Request $request)
    {
        $requestData = $request->all();
        $user = array();
        $userDetails = array();
        $user['sponsor_id'] = $requestData['sponsor_id'];
        $user['name'] = strtoupper($requestData['name']);
        $user['user_name'] = strtolower($requestData['user_name']);
        $user['email'] = strtolower($requestData['email']);
        $user['password'] = bcrypt($requestData['password']);
        $user['status'] = 'pending';
        $user = User::create($user);
        $user->assignRole('User');
        $userDetails['mob_no'] = $requestData['mob_no'];
        $userDetails['alternate_mob_no'] = $requestData['alternate_mob_no'];
        $userDetails['state_id'] = $requestData['state_id'];
        $userDetails['district_id'] = $requestData['district_id'];
        $userDetails['bank_id'] = $requestData['bank_id'];
        $userDetails['account_no'] = $requestData['account_no'];
        $userDetails['ifsc_code'] = strtoupper($requestData['ifsc_code']);
        $userDetails['branch'] = strtoupper($requestData['branch']);
        $userDetails['gpay_no'] = $requestData['gpay_no'];
        $userDetails['paytm_no'] = $requestData['paytm_no'];
        $userDetails = UserDetail::create($userDetails);
        $user->userDetails()->save($userDetails);
        UserPassword::create([
            'user_id' => $user->id,
            'password'=> $requestData['password']
        ]);
        UserHelpDetail::create([
           'user_id' => $user->id,
            'pin_amount' => $requestData['pin_amount'],
            'help_amount' => $requestData['give_help_amount']
        ]);
        $number = $requestData['mob_no'];
        $message = 'THANKS FOR REGISTRATION YOUR USER ID-'.$requestData['user_name'].' AND PASSWORD-'.$requestData['password'].',PLEASE GO TO WWW.COM FOR  LOGIN PAGE.';
        sendMessage($number, $message);
        $giveHelp = GiveHelp::create([
            'amount' => $requestData['give_help_amount'],
            'balance' => $requestData['give_help_amount'],
            'status' => 'pending',
            'completion_state' => 'none'
        ]);
        $user->giveHelps()->save($giveHelp);
        return redirect()->route('login')->with('flash_message','Username and Password has been sent to your mobile number.');

    }
}
