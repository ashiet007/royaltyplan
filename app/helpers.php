<?php
use App\User;
use App\State;
use App\UserPin;
use App\GiveHelp;
use App\GetHelp;
use App\DailyRoiPercent;
use App\UserHelpDetail;
use App\UserRoi;
use App\WorkingRoi;
use App\RoiCredit;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Carbon\Carbon;

function sendMessage($number, $message)
{
    $client = new GuzzleHttp\Client();
    $res = $client->request('GET', 'http://mysmsshop.in/http-api.php?username=richmaker&password=Auto786&senderid=AUTOGR&route=1&number='.$number.'&message='.$message);
    $res->getStatusCode();
    // "200"

    $res->getBody();
    // {"type":"User"...'
}

function generatePin()
{
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $pin = substr(str_shuffle($permitted_chars),0,16);
    $result = checkUniquePin($pin);
    if($result)
    {
        generatePin();
    }
    else
    {
        return $pin;
    }
}

function checkUniquePin($pin)
{
    $result = UserPin::where('pin',$pin)->exists();
    return $result;
}

function helpMatching()
{
    $giveHelp = GiveHelp::with('user.userDetails')
        ->where('status','=','pending')
        ->where(function ($query) {
            $query->where('completion_state', 'partially-assigned')
                ->orWhere('completion_state', 'none');
        })
        ->orderBY('match_order_date','ASC')
        ->first();
    $getHelp = GetHelp::with('user.userDetails')
        ->where('status','pending')
        ->where(function ($query) {
            $query->where('completion_state', 'partially-assigned')
                ->orWhere('completion_state', 'none');
        })
        ->orderBy('match_order_date','pending')
        ->first();
    if(!is_null($giveHelp) && !is_null($getHelp))
    {

        do
        {
            $giveHelpBalance = 0;
            $getHelpBalance = 0;
            if($giveHelp->balance == $getHelp->balance)
            {
                $amount = $giveHelp->balance;
                $giveHelp->getHelps()->attach($getHelp->id,['assigned_amount' => $giveHelp->balance, 'status' => 'pending']);
                $giveHelp->update([
                    'balance' => $giveHelpBalance,
                    'completion_state' => 'assigned',
                ]);
                $getHelp->update([
                    'balance' => $getHelpBalance,
                    'completion_state' => 'assigned',

                ]);
                $senderNumber = $giveHelp->user->userDetails->mob_no;
                $receiverNumber = $getHelp->user->userDetails->mob_no;
                $senderMessage = 'DEAR WWW.AUTOGAINER.COM PARTNER USERNAME-'.$giveHelp->user->user_name.' ,YOU HAVE GOT A LINK FOR PROVIDE HELP AMT-'.$amount.',PLEASE CONTACT-'.$receiverNumber.','.$getHelp->user->name.'.THANKS.';
                $receiverMessage = 'DEAR WWW.AUTOGAINER.COM PARTNER USERNAME-'.$getHelp->user->user_name.' ,YOU HAVE GOT A LINK FOR RECEIVE HELP AMT-'.$amount.',PLEASE CONTACT-'.$senderNumber.','.$giveHelp->user->name.'.THANKS.';
                sendMessage($senderNumber, $senderMessage);
                sendMessage($receiverNumber, $receiverMessage);
            }
            elseif($giveHelp->balance > $getHelp->balance)
            {
                $amount = $getHelp->balance;
                $giveHelpBalance = $giveHelp->balance - $getHelp->balance;
                $giveHelp->getHelps()->attach($getHelp->id,['assigned_amount' => $getHelp->balance, 'status' => 'pending']);
                $giveHelp->update([
                    'balance' => $giveHelpBalance,
                    'completion_state' => 'partially-assigned',

                ]);
                $getHelp->update([
                    'balance' => $getHelpBalance,
                    'completion_state' => 'assigned',
                ]);
                $senderNumber = $giveHelp->user->userDetails->mob_no;
                $receiverNumber = $getHelp->user->userDetails->mob_no;
                $senderMessage = 'DEAR WWW.AUTOGAINER.COM PARTNER USERNAME-'.$giveHelp->user->user_name.' ,YOU HAVE GOT A LINK FOR PROVIDE HELP AMT-'.$amount.',PLEASE CONTACT-'.$receiverNumber.','.$getHelp->user->name.'.THANKS.';
                $receiverMessage = 'DEAR WWW.AUTOGAINER.COM PARTNER USERNAME-'.$getHelp->user->user_name.' ,YOU HAVE GOT A LINK FOR RECEIVE HELP AMT-'.$amount.',PLEASE CONTACT-'.$senderNumber.','.$getHelp->user->name.'.THANKS.';
                sendMessage($senderNumber, $senderMessage);
                sendMessage($receiverNumber, $receiverMessage);
            }
            else
            {
                $amount = $giveHelp->balance;
                $getHelpBalance = $getHelp->balance - $giveHelp->balance;
                $giveHelp->getHelps()->attach($getHelp->id,['assigned_amount' => $giveHelp->balance, 'status' => 'pending']);
                $giveHelp->update([
                    'balance' => $giveHelpBalance,
                    'completion_state' => 'assigned',

                ]);
                $getHelp->update([
                    'balance' => $getHelpBalance,
                    'completion_state' => 'partially-assigned',
                ]);
                $senderNumber = $giveHelp->user->userDetails->mob_no;
                $receiverNumber = $getHelp->user->userDetails->mob_no;
                $senderMessage = 'DEAR WWW.AUTOGAINER.COM PARTNER USERNAME-'.$giveHelp->user->user_name.' ,YOU HAVE GOT A LINK FOR PROVIDE HELP AMT-'.$amount.',PLEASE CONTACT-'.$receiverNumber.','.$getHelp->user->name.'.THANKS.';
                $receiverMessage = 'DEAR WWW.AUTOGAINER.COM PARTNER USERNAME-'.$getHelp->user->user_name.' ,YOU HAVE GOT A LINK FOR RECEIVE HELP AMT-'.$amount.',PLEASE CONTACT-'.$senderNumber.','.$giveHelp->user->name.'.THANKS.';
                sendMessage($senderNumber, $senderMessage);
                sendMessage($receiverNumber, $receiverMessage);
            }
            $giveHelp = GiveHelp::with('user.userDetails')
                ->where('status','=','pending')
                ->where(function ($query) {
                    $query->where('completion_state', 'partially-assigned')
                        ->orWhere('completion_state', 'none');
                })
                ->orderBY('match_order_date','ASC')
                ->first();
            $getHelp = GetHelp::with('user.userDetails')
                ->where('status','pending')
                ->where(function ($query) {
                    $query->where('completion_state', 'partially-assigned')
                        ->orWhere('completion_state', 'none');
                })
                ->orderBy('match_order_date','pending')
                ->first();
        }
        while(!is_null($giveHelp) && !is_null($getHelp));
    }

}

function dailyRoi()
{
    $users = User::get();
    foreach ($users as $user)
    {
        $userStatus = $user->status;
        if($userStatus == 'active')
        {
            $id = $user->id;
            $giveHelp = GiveHelp::where('user_id',$id)
                ->orderBy('id','DESC')
                ->first();
            if(!is_null($giveHelp) && $giveHelp->status == 'accepted')
            {
                $userDailyRoi = UserRoi::where('id',$id)->orderBy('id','DESC')->first();
                if($userDailyRoi)
                {
                    $initialRoiAmount =  $userDailyRoi->roi;
                    $dateTime = $userDailyRoi->roi_updated_datetime;
                }
                else
                {
                    $dateTime = $user->activation_timestamp;
                    $initialRoiAmount = 0;
                }
                $userHelpDetails = UserHelpDetail::with('user')
                    ->where('user_id',$id)
                    ->orderBy('id','DESC')
                    ->first();
                if(!is_null($userHelpDetails))
                {
                    $dailyRoiPercents = DailyRoiPercent::orderBy('no_of_active_ids','DESC')->get();
                    $pinAmount = $userHelpDetails->pin_amount;
                    $giveHelpAmount = $userHelpDetails->help_amount;
                    $principalAmount = $pinAmount + $giveHelpAmount;
                    $maxAmount = 2 * $principalAmount;
                    $username = $userHelpDetails->user->user_name;
                    $activeIds = getTotalDirectActiveTeam($username);
                    foreach($dailyRoiPercents as $dailyRoiPercent)
                    {
                        if($activeIds >= $dailyRoiPercent->no_of_active_ids)
                        {
                            if($maxAmount != $initialRoiAmount)
                            {
                                $data = getDateTime($dateTime);
                                if($data['days'] >= 1)
                                {
                                    $roiPercent = $dailyRoiPercent->percent;
                                    $roiAmount = $initialRoiAmount + $principalAmount * $roiPercent;
                                    $currentDateTime = new Carbon('Asia/Kolkata');
                                    if($initialRoiAmount == 0)
                                    {
                                        UserRoi::create([
                                            'roi' => $roiAmount,
                                            'roi_updated_datetime' => $currentDateTime->format('Y-m-d H:i:s')
                                        ]);
                                    }
                                    else
                                    {
                                        $userDailyRoi->update([
                                            'roi' => $roiAmount,
                                            'roi_updated_datetime' => $currentDateTime->format('Y-m-d H:i:s')
                                        ]);
                                    }
                                    break;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

function workingRoi()
{
    $users = User::get();
    foreach($users as $user)
    {
        $username = $user->user_name;
        $totalTeam = getTotalTeam($username);
        $collection =  collect($totalTeam);
        $totalTeam = $collection->sortBy('id');
        foreach ($totalTeam as $member)
        {
            $status = $member->status;
            if($status == 'active')
            {
                $giveHelp = $member->giveHelps()->orderBy('id','DESC')->where('status','accepted')->first();
                if($giveHelp)
                {
                    $activationData = $member->activation_timestamp;
                    $activationDuration = getDateTime($activationData);
                    if($activationDuration['days'] <= 10)
                    {
                        $userRoi = $user->userRoi()->orderBy('id','DESC')->first();
                        $giverUserId = $member->id;
                        $userRoiId = $userRoi->id;
                        $roiCredit = RoiCredit::where('giver_user_id',$giverUserId)
                            ->where('user_roi_id',$userRoiId)
                            ->get();
                        $count= count($roiCredit);
                        if($activationDuration['days'] > $count)
                        {
                            $workingRoi = WorkingRoi::get();
                            foreach ($workingRoi as $item)
                            {
                                if($item->level == $member->level)
                                {
                                    $helpDetails = $member->userHelpDetail()->orderBy('id','DESC')->first();
                                    if($helpDetails)
                                    {
                                        $pinAmount = $helpDetails->pin_amount;
                                        $helpAmount = $helpDetails->help_amount;
                                        $principalAmount = $pinAmount + $helpAmount;
                                        $workingIncome = $principalAmount*$item->roi;
                                        if($userRoi)
                                        {
                                            $currentDateTime = new Carbon('Asia/Kolkata');
                                            $totalWorkingIncome = $userRoi->working_roi + $workingIncome;
                                            $userRoi->update([
                                                'working_roi' => $totalWorkingIncome,
                                            ]);
                                            RoiCredit::create([
                                                'giver_user_id' => $giverUserId,
                                                'user_roi_id' => $userRoiId,
                                                'credited_amount' => $workingIncome,
                                                'credited_timestamp' => $currentDateTime->format('Y-m-d H:i:s')
                                            ]);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

function getDateTime($dateTime)
{
   $seconds = time() - strtotime($dateTime);
    $days = floor($seconds / 86400);
    $seconds %= 86400;

    $hours = floor($seconds / 3600);
    $seconds %= 3600;

    $minutes = floor($seconds / 60);
    $seconds %= 60;
    $data = ['days' => $days, 'hours' => $hours, 'minutes' => $minutes, 'seconds' => $seconds];
   return $data;
}

function totalTeam($totalTeam,$members, $level)
{
    if(!$members->isEmpty())
    {
        foreach ($members as $member)
        {
            $member->level = $level ;
        }
        foreach ($members as $member)
        {
            $username = $member->username;
            $totalTeam->push($member);
            $newmembers = User::with('userDetails')
                ->where('sponsor_id', '=', $username)
                ->orderBy('created_at','DESC')
                ->get();
            $level = $member->level;
            $level = $level + 1;
            $totalTeam = totalTeam($totalTeam, $newmembers, $level);
        }
    }
    return $totalTeam;
}

function getTotalTeam($username)
{
    $teamDetails = User::with('userDetails')
        ->where('sponsor_id', '=', $username)
        ->orderBy('created_at','DESC')
        ->get();
    $totalTeam = $teamDetails;
    if(!$teamDetails->isEmpty())
    {
        $level = 1;
        foreach ($teamDetails as $teamDetail)
        {
            $teamDetail->level = $level ;
        }
        foreach ($teamDetails as $teamDetail)
        {
            $username = $teamDetail->user_name;
            $members = User::with('userDetails')
                ->where('sponsor_id', '=', $username)
                ->orderBy('created_at','DESC')
                ->get();
            if(!$members->isEmpty())
            {
                $level = $teamDetail->level;
                $level = $level + 1;
                foreach ($members as $member)
                {
                    $member->level = $level ;
                }
                foreach ($members as $member)
                {
                    $username = $member->user_name;
                    $totalTeam->push($member);
                    $newmembers = User::with('userDetails')
                        ->where('sponsor_id', '=', $username)
                        ->orderBy('created_at','DESC')
                        ->get();
                    $level = $member->level;
                    $level = $level + 1;
                    $totalTeam = totalTeam($totalTeam,$newmembers, $level);
                }
            }

        }
    }
    return $totalTeam;
}

function getTotalDirectActiveTeam($username)
{
    $count = User::with('userDetails')
        ->where('sponsor_id', '=', $username)
        ->where('status','=','active')
        ->orderBy('created_at','DESC')
        ->count();
    return $count;
}

function getTotalDirectTeam($username)
{
    $count = User::with('userDetails')
        ->where('sponsor_id', '=', $username)
        ->orderBy('created_at','DESC')
        ->count();
    return $count;
}